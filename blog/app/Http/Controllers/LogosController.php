<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Model\Admin\logos;
use Session;
class LogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = logos::orderBy('id', 'DESC')->get();

        return view('admin.logos.listLogos')->with('logos', $logo);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logos.addLogos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logos=new logos();
        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads/logos', $fileName);
        }

        $logos->logos_name=$request->logos_name;
        $logos->icon = $fileName;
        if($logos->save()){

            Session::flash('success', 'Logos Insert Sucessfully');

        }else{

            Session::flash('danger', 'Logos Insert Not Sucessfully');

        }

        return redirect()->route('listlogos');
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
        $logos = logos::find($id);

        return view('admin.logos.updatelgos',compact('logos'));
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
        $logos = logos::find($id);

        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads/logos', $fileName);
        }

        $logos->logos_name=$request->name;
        if($fileName!=""){
            $logos->icon=$fileName;
        }

        if( $logos->save()){

            Session::flash('success', 'Logos Update Sucessfully');

        }else{

            Session::flash('danger', 'Logos Update Not Sucessfully');

        }

        return redirect()->route('listlogos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logos = logos::find($id);
        if($logos->delete()){

            Session::flash('success', 'Logos Delected Sucessfully');

        }else{

            Session::flash('danger', 'Logos Delect Not Sucessfully');
        }
        return redirect()->route('listlogos');
    }
}
