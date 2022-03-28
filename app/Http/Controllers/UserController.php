<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function list(){
        $users = User::orderBy('id','desc')->simplepaginate(4);
        return view('backend.user.view',compact('users'));
    }
    function add(){
        return view ('backend.user.index');
    }
    function insert(Request $request)
        {

    	 User::create([
            'name'=>$request->name,
            'email'=>$request->email,
         	'password'=>$request->password,
         	'contact'=>$request->contact,
         	'address'=>$request->address,
        	'role'=>$request->role,
            'status'=>$request->status,

    	]);

        return back()->with('success',' Added successfully');
    }

}
