<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;
use App\Models\Sale;

class SaleController extends Controller
{
    //
    function index(){
        $fuels=Fuel::all();
        return view('backend.sale.index',compact('fuels'));
    }
    function insert(Request $request){
        Sale::Create([
            'fuel_id' =>$request->fuel_id,
            'fuel_quantity' =>$request->quantity,
            'price' =>$request->price,
            'customer_name' =>$request->customer_name,
            'vehical_type' =>$request->vehical_name,
            'vehical_nameplate_no' =>$request->vehical_nameplate_no,


        ]);
        return back()->with('success',' Added successfully');
    }

    function list(){
        $sales=Sale::all();
        $fuels=Fuel::all();
        return view('backend.sale.view',compact('sales','fuels'));
    }
    function viewdetails($id){
        $sales=Sale::find($id);
        $fuels=Fuel::find($id);
        return view('backend.sale.veiwdetails',compact('sales','fuels'));
    }

}
