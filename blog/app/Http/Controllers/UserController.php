<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Model\Admin\Users;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::orderBy('id', 'DESC')->get();

        return view('admin.user.listuser')->with('user', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.addUser');
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
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'Confirm' => 'required|same:password',
        ]);
        $file = $request->file('file');
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads/users', $fileName);
        }
        $user = new Users();


        $user->role=$request->role;
        $user->picture = $fileName;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->pasword);
        
        if($user->save()){

            Session::flash('success', 'User Insert Sucessfully');

        }else{

            Session::flash('danger', 'User Insert Not Sucessfully');

        }
        return redirect()->route('listuser');

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
        $user = Users::find($id);

        return view('admin.user.upadateUser',compact('user'));



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

        $user = Users::find($id);

        $file = $request->file('file');
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move('uploads/users', $fileName);
        }

        $user->name=$request->name;
        if($fileName!=""){
            $user->picture=$fileName;
        }
        

        $user->email=$request->email;
        $user->password = hash::make($request->pasword);
        $user->role=$request->role;

        if( $user->save()){

            Session::flash('success', 'User Update Sucessfully');

        }else{

            Session::flash('danger', 'User Insert Not Sucessfully');

        }
       
        return redirect()->route('listuser');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);
       
          if( $user->delete()){

            Session::flash('success', 'User Update Sucessfully');

        }else{

            Session::flash('danger', 'User Insert Not Sucessfully');

        }
        return redirect()->route('listuser');

    }
}
