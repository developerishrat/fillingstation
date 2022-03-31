<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;
use Carbon\Carbon;
use Image;

class FuelController extends Controller
{
    //

    function index(){
        return view ('backend.fuel.index');
    }
    function insert(Request$request)
     {


        $fuel_id= Fuel::insertGetId([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'fuel_photo'=>$request->fuel_photo,
            'created_at'=>Carbon::now(),
        ]);


        $new_fuel_image=$request->fuel_photo;
        $extension=$new_fuel_image->getClientOriginalExtension();
        $new_fuel_name= $fuel_id.'.'.$extension;
        Image::make($new_fuel_image)->save(base_path('public/uploads/fuel/'.$new_fuel_name));
        Fuel::find($fuel_id)->update([
            'fuel_photo'=>$new_fuel_name,

        ]);
        return back()->with('success','Successfully Added');
    }
    function list(){
        $fuels = Fuel::orderBy('id','desc')->simplepaginate(4);

        return view ('backend.fuel.view',compact('fuels'));
    }
    function delete($delete_fuel_id){
       // echo $delete_fuel_id;
       Fuel::find($delete_fuel_id)->delete();
        return back();
    }
    function edit($edit_fuel_id){
        $fuels= Fuel::find($edit_fuel_id);
        return view('backend.fuel.edit',compact('fuels'));

    }
    function update(Request $request){
       // print_r($request->all());
       Fuel::find($request->fuel_id)->update([
           'name'=>$request->name,
           'quantity'=>$request->quantity,
           'price'=>$request->price,

       ]);
       return back()->with('update','Fuel Update Successfully');
    }

}
