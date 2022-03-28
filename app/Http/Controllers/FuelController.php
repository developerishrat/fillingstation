<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;

class FuelController extends Controller
{
    //

    function index(){
        return view ('backend.fuel.index');
    }
    function insert(Request$request)

    {
        Fuel::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
        ]);
        return back()->with('success','Successfully Added');
    }
    function list(){
        $fuels = Fuel::orderBy('id','desc')->simplepaginate(4);

        return view ('backend.fuel.view',compact('fuels'));
    }

}
