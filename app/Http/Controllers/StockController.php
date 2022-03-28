<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;
use App\Models\Sale;

class StockController extends Controller
{
    //
    function list(){
        $fuels=Fuel::all();
        return view('backend.stock.view',compact('fuels'));
    }
}
