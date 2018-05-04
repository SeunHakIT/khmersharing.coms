<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use \App\Model\Admin\Category;
use \App\Model\Admin\videos;
use App\Http\Controllers\Controller;

class VidesosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Videoss = DB::table('videos')
        ->join('categorys', 'videos.category_id', '=', 'categorys.id')
        ->select('videos.*', 'categorys.cat_name')
        ->get();
        return view('admin.videos.listVideos')->with('videos', $Videoss);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //using join table vidoes and category
        $category = category::orderBy('id', 'DESC')->get();
        return view('admin.videos.addVideos')->with('categorys', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads', $fileName);
        }
        $Videoss = new videos();
        $Videoss->name = $request->name;
        $Videoss->picture = $fileName;
        $Videoss->url = $request->url;
        $Videoss->category_id = $request->category;
        $Videoss->status = $request->status;
        $Videoss->save();
        return redirect()->route('listvideos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = videos::find($id);

        return view('admin.videos.updateVideos', compact('videos'));

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
        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads', $fileName);
        }
        $videos = videos::find($id);

        if($videos){
            $Videoss->name = $request->name;
            $Videoss->picture = $fileName;
            $Videoss->url = $request->url;
            $Videoss->category_id = $request->category;
            $Videoss->status = $request->status;
            $Videoss->save();
        }

        return redirect()->route('listvideos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = videos::find($id);
        $videos->delete();
        return redirect()->route('listvideos');

    }

    public function updateStatus(Request $res)
    {
        $videos = videos::find($res->id);

        $videos->status = $res->status;
        $videos->save();

        return redirect()->route('listvideos');

    }

    // public function category(){
    //      $categoryss = category::orderBy('id', 'DESC')->get();
    //     // return view('admin.videos.listVideos')->with('categorys', $category);
    //      return view('admin.videos.updateVideos', compact('categoryss'));
    // }
public function category()
{
    $categories = Category::all();
$articles = Article::all();
return view('admin.videos.listvideos', compact('articles', 'categories'));

}
}
