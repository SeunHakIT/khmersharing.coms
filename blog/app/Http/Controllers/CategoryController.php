<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Model\Admin\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::orderBy('id', 'DESC')->get();
        return view('admin.category.listCategory')->with('categorys', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $Category = new Category();
        $Category->cat_name = $req->category;


        if( $Category->save()){

            Session::flash('success', 'Category Insert Sucessfully');

        }else{

            Session::flash('danger', 'Category Delect Not Sucessfully');
        }
        return redirect()->route('listcategory');

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
     $categorys = category::find($id);

     return view('admin.Category.updateCategory',compact('categorys'));

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

        $categorys = category::find($id);

        $categorys->cat_name = $request->category;
        if(   $categorys->save()){

            Session::flash('success', 'Category Updated Sucessfully');

        }else{

            Session::flash('danger', 'Category Updated Not Sucessfully');
        }


        return redirect()->route('listcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Category::find($id);

        if(  $Category->delete()){

            Session::flash('success', 'Category Delected Sucessfully');

        }else{

            Session::flash('danger', 'Category Delected Not Sucessfully');
        }
      
        return redirect()->route('listcategory');
    }
}
