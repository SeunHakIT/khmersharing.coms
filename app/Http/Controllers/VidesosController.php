<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use \App\Model\Admin\Category;
use \App\Model\Admin\videos;
use \App\Model\Admin\Subvideos;
use \App\Model\Admin\Users;
use App\Http\Controllers\Controller;
use Session;
use Excel;
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

        $Videoss = new videos();
        $Videoss->name = $request->name;
        $Videoss->picture = $fileName;
        $Videoss->url = $request->url;
        $Videoss->category_id = $request->category;
        $Videoss->status = $request->status;

        if($Videoss->save()){

         Session::flash('success', 'Insert Sucessfully');

     }else{

        Session::flash('danger', 'Insert not Sucessfully');

    }

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
        // $videos = videos::find($id);

        // return view('admin.videos.updateVideos', compact('videos'));
     $categories = Category::all();
     $videos = $videos = videos::find($id);
     return view('admin.videos.updateVideos')->with('videos', $videos)->with('category', $categories);
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

        $Videoss =videos::find($id);
        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads', $fileName);
        }

        $Videoss->name=$request->name;
        if($fileName!=""){
          $Videoss->picture=$fileName;
      }

      $Videoss->url=$request->url;
      $Videoss->category_id=$request->category;
      $Videoss->status=$request->status;


      if($Videoss->save()){

         Session::flash('success', 'Update Data Sucessfully');

     }else{

        Session::flash('danger', 'Update Data Not Sucessfully');

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


        if( $videos->delete()){

            Session::flash('success', 'Delected Data Sucessfully');

        }else{

            Session::flash('danger', 'Delect Data Not Sucessfully');

        }
        return redirect()->route('listvideos');


    }

    public function updateStatus(Request $res)
    {
        $videos = videos::find($res->id);

        $videos->status = $res->status;

        if($videos->save()){

         Session::flash('success', 'Update Data Sucessfully');

     }else{

        Session::flash('danger', 'Update Data Not Sucessfully');

    }
    

    return redirect()->route('listvideos');

}
public function countvideos(){
   $count = videos::count();
   $sub = Subvideos::count();
   $Users = Users::count();
   return view('admin.index')->with('count', $count)->with('sub',$sub)->with('Users',$Users);
}



// public function importExport()
// {
//     return view('admin.importExport.importExport');
// }
// 
// 
// 
// 

//importdata

public function importExport_uploadvideos(Request $request)
{

   Excel::load($request->file('users'),function($reader){
    $reader->each(function($sheet){

        $data=$sheet->toArray();

        $user=new videos();
        $user->name=$data['name'];
        $user->picture=$data['picture'];
        $user->url=$data['url'];
        $user->category_id=$data['category_id'];  
        $user->save();

    });
       return redirect()->route('listvideos');
});
}



//export data
public function exportVideosData($type)
{
    $data = videos::get()->toArray();
    return Excel::create('user', function($excel) use ($data) {
        $excel->sheet('mySheet', function($sheet) use ($data)
        {
            $sheet->cell('A1', function($cell) {$cell->setValue('name');   });
            $sheet->cell('B1', function($cell) {$cell->setValue('picture');   });
            $sheet->cell('C1', function($cell) {$cell->setValue('url');   }); $sheet->cell('D1', function($cell) {$cell->setValue('category_id');   });
            if (!empty($data)) {
                foreach ($data as $key => $value) {
                    $i= $key+2;
                    $sheet->cell('A'.$i, $value['name']); 
                    $sheet->cell('B'.$i, $value['picture']); 
                    $sheet->cell('C'.$i, $value['url']);
                    $sheet->cell('D'.$i, $value['category_id']); 
                }
            }
        });
    })->download($type);
}


}
