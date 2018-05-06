<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use \App\Model\Admin\videos;
use \App\Model\Admin\Subvideos;
use Session;
class SubvideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subvideos = DB::table('subvideos')
        ->join('videos', 'subvideos.videos_id', '=', 'videos.id')
        ->select('subvideos.*', 'videos.name')
        ->get();

        return view('admin.subvideos.listSubVideos')->with('subvideos', $subvideos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $videos = videos::orderBy('id', 'DESC')->get();

     return view('admin.subvideos.addSubVideos')->with('videos', $videos);
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $this->validate($request, [
        'name' => 'required|unique:users|max:255',

        'url' => 'required',


    ]);
     $file = $request->file('file');
     $fileName = "";
     if (!empty($file)) {
        $fileName = $file->getClientOriginalName();
        $file->move('uploads', $fileName);
    }

    $Subvideos = new Subvideos();
    $Subvideos->subname=$request->name;
    $Subvideos->picture = $fileName;
    $Subvideos->url=$request->url; 
    $Subvideos->videos_id=$request->mainvideos;
    $Subvideos->status=$request->Status;

     if($Subvideos->save()){

            Session::flash('success', 'Subvideos Insert Sucessfully');

        }else{

            Session::flash('danger', 'Subvideos Insert Not Sucessfully');

        }

    return redirect()->route('listsubvideos');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $videos = videos::all();
      $Subvideos  = Subvideos::find($id);
      return view('admin.subvideos.UpdateSubVideos')->with('Subvideos', $Subvideos)->with('videos', $videos);
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Subvideos =Subvideos::find($id);
        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads', $fileName);
        }

        $Subvideos->subname=$request->name; 
        if($fileName!=""){
          $Subvideos->picture=$fileName;
      }
      $Subvideos->url=$request->url; 
      $Subvideos->videos_id=$request->main;

      if($Subvideos->save()){

            Session::flash('success', 'Subvideos Update Sucessfully');

        }else{

            Session::flash('danger', 'Subvideos Update Not Sucessfully');

        }

      return redirect()->route('listsubvideos');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Subvideos = Subvideos::find($id);
             if($Subvideos->delete()){

            Session::flash('success', 'Subvideos Delected Sucessfully');

        }else{

            Session::flash('danger', 'Subvideos Delect Not Sucessfully');
    }
     return redirect()->route('listsubvideos');
}
    public function updateStatus(Request $res)
    {

        $subvideoss = Subvideos::find($res->id);
        $subvideoss->status = $res->status;
       

        if($Subvideos->save()){

            Session::flash('success', 'Status Update Sucessfully');

        }else{

            Session::flash('danger', 'Status Update Not Sucessfully');

        }
        return redirect()->route('listsubvideos');

    }
}
