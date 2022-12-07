<?php

namespace App\Http\Controllers;

use App\Models\Cartorder;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //








    public function neworder(Request $request){


        $request->validate([
            'address'=>['required'],
            'city_id'=>['required'],
            'qun'=>['required'],
            'product_id'=>['required']
        ]);

        $order=new Order();
        $order->address=$request['address'];
        $order->city_id=$request['city_id'];
        $order->user_id=$request->user()->id;
        $order->qun=$request['qun'];
        $order->product_id=$request['product_id'];
        $order->note=$request->has('note')? $request['note']:' ';

        $order->save();

        return  back(302)->with('stat','ok')->with('message','تم ارسال الطلب بنجاح')->with('title','تمت العملية بنجاح');
    }



    public function orders(){


        $orders=Order::where("stat","=",false)->with("product")->get();

        $cartorders=Cartorder::with('products')->get();

        return view("admin.orders.show",["orders"=>$orders]);

    }

    public function acceptorder(Request $request,$id)
    {
        $order=Order::find($id);
        if($order!=null)
        {
         //   $order->stat=true;
            $order->save();

            session()->flash('stat', 'ok');
            session()->flash('message', 'تم الحفظ بنجاح ');
            return back();
       }
       else
       return back();
        # code...
    }


    public function denyorder(Request $request,$id)
    {
        $order=Order::find($id);
        if($order!=null)
        {
            $order->delete();

            session()->flash('statt', 'ok');
            session()->flash('message', 'تم الحفظ بنجاح ');
            return back();
       }
       else
       return back();
        # code...
    }
}
