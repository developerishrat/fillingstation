<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupon;
use Carbon\Carbon;

class CuponController extends Controller
{
    //
    function cupon(){
        $cupons=Cupon::all();
        return view('backend.cupon.index',compact('cupons'));
    }
    function insert(Request $request){
        Cupon::insert($request->except('_token')+[
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('cupon','Cupon Added');
    }
}
