<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Model\Admin\Users;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $res){
     
    $this->validate($res,[
  
    'email' => 'required|email',
    'password' => 'required',
 
]);

dd($res->id);
 if (Auth::attempt(['email' => $res->email, 'password' => $res->password])) {
            // Authentication passed...
            return redirect()->intended('/dashboard');

    }

}

}
