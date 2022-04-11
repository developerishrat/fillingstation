<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Fuel;
use App\Models\Order_fuel_details;
use App\Models\Order_billing_details;
use App\Models\Stock;
use App\Models\Cupon;
use App\Mail\Sendinvoice;
use Auth;
use Carbon\Carbon;
use PDF;
use Mail;


class CartController extends Controller
{
    //
    function addtocart(Request $request){

        if(Cookie::get('generated_cart_id')){
            $random_generated_id = Cookie::get('generated_cart_id');
        }
        else{
            $random_generated_id = rand(1000,20000).time();
            Cookie::queue('generated_cart_id', $random_generated_id, 500);

        }
        if(Cart::where('generated_cart_id', $random_generated_id)->where('fuel_id',$request->fuel_id)->increment('quantity',$request->quantity)){

        }
        else{
            Cart::insert([
                'generated_cart_id'=>$random_generated_id,
                'fuel_id'=>$request->fuel_id,
                'quantity'=>$request->quantity,
                'created_at'=>Carbon::now(),

            ]);
        }
        return back();

    }

    function delete($cart_id){
        Cart::find($cart_id)->delete();
        return back();
    }
    function cart($cupon_name =''){
        if($cupon_name==''){
            $discount=0;
        }
        else{
            if(Cupon::where('cupon_name',$cupon_name)->exists()){
                if(Carbon::now()->format('Y-m-d') > Cupon::where('cupon_name',$cupon_name)->first()->cupon_validity){
                    return back()->with('cupon_expired','Cupon Expired!');

                }
                else{
                    $discount=Cupon::where('cupon_name',$cupon_name)->first()->cupon_discount;
                }
            }
            else{
                return back()->with('cupon_invalid','Invalid Cupon!');
            }
        }
        $cart_fuel=Cart::where('generated_cart_id',Cookie::get('generated_cart_id'))->get();
        return view('frontend.cart',compact('cart_fuel','discount','cupon_name'));
    }




    function cartupdate(Request $request){

        foreach($request->quantity as $cart_id=>$quantity){
            Cart::find($cart_id)->update([
                'quantity'=>$quantity,
            ]);
        }
        return back();
    }

    function order(Request $request){
        if($request->payment_method==1||$request->payment_method==2){
            $order_id=Order::insertGetId([
                'user_id'=>Auth::id(),
                'total'=>session('total_from_cart'),
                'discount'=>session('discount_from_cart'),
                'sub_total'=>session('total_from_cart')-session('discount_from_cart'),
                'payment_method'=>$request->payment_method,

                'created_at'=>Carbon::now(),
            ]);

            Order_billing_details::insert([
                'order_id'=>$order_id,

                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,

                'address'=>$request->address,

                'notes'=>$request->notes,
                'created_at'=>Carbon::now(),
            ]);
            $cart_fuel=Cart::where('generated_cart_id',Cookie::get('generated_cart_id'))->get();

            foreach($cart_fuel as $cart_item){
                $name =Fuel::find($cart_item->fuel_id)->name;
                $price =Fuel::find($cart_item->fuel_id)->price;

                Order_fuel_details::insert([
                    'order_id'=>$order_id,
                    'name'=>$name,
                    'price'=>$price,
                    'quantity'=>$cart_item->quantity,
                    'created_at'=>Carbon::now(),
                ]);
            }
            if($request->payment_method==1){
                Cart::where('generated_cart_id',Cookie::get('generated_cart_id'))->delete();

            }else{
                Cart::where('generated_cart_id',Cookie::get('generated_cart_id'))->delete();
                return redirect('/online/payment');
            }
            return redirect('/cart')->with('order','Your Order Has been Placed successfully!');

        }
        else{
            return back()->with('payment','Please Select Payment Method');

        }

    }
    //Order Work
    function vieworder(){

        $order_by_user=Order::where('user_id',Auth::id())->get();

        return view('backend.order.vieworder',compact('order_by_user'));
    }

    function viewadminorder(){
        $orders=Order::orderBy('id','desc')->simplepaginate(4);
        return view('backend.order.viewadmin',compact('orders'));
    }


    function detailsview($id){

        //$order_billing_detail=Order_billing_details::find($id);
        //$order_fuel_detail=Order_fuel_details::find($id);
        $orders= Order::find($id);
        return view('backend.order.viewdetails',compact('orders'));

    }
    public function statusupdate(Request $request,$id){

        Order::where('id',$id)->update([

        'status'=>$request->status,
        ]);
        // dd($request->all());
        if($request->status=='Confirmed'){

            //step 1 get order details of the following order
        $items=Order_fuel_details::where('order_id',$id)->get();


        }

        //return back()->with('message',' Updated Successfully');
        return redirect('/viewadminorder')->with('message','Updated Successfully!');

    }
    //pdf
    function invoice($id){
        $orders=Order::find($id);
        $pdf = PDF::loadView('backend.pdf.invoice',compact('orders'));
        return $pdf->download('invoice.pdf');

    }
    //Mail
    function invoicesendmail($id){
        $ishrat=Order::where('id',$id)->get();
        Mail::to(Auth::user()->email)->send(new Sendinvoice($ishrat));
    }

    //Delete
    function deleteorder($id){

        Order::find($id)->delete();
            return back()->with('deleteorder','Deleted Successfully!');


    }

}
