<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;

class FrontendController extends Controller
{
    //
    function main(){
        $fuels= FUel::all();
        return view('frontend.index',compact('fuels'));
    }
    function veiwdetails($id){

        $fuels= FUel::find($id);
        return view('frontend.fuel_details',compact('fuels'));
    }
    function shop(){
        $fuels= FUel::all();
        return view('frontend.shop',compact('fuels'));
    }
    function checkout(){
        return view('frontend.checkout');
    }
}
