<?php

namespace App\Http\Controllers;

use App\Models\NormalOrder;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Validator;

class NormalOrderController extends Controller
{
    //

    public function newOrder(Request  $request){

        $request->validate([
            'name' => ['required'],
            'address'=>['required'],
            'city_id'=>['required'],
            'qun'=>['required']
        ]);


        $valiemail=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',

        ]);
        $vailphone=Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required',
        ]);

        if($vailphone->fails() && $valiemail->fails()) {
            return
                $request->validate([
                    'name' => ['required'],
                    'email' => ['required'],
                    'phone' => ['required'],
                ]);
        }
        else
        {

            $no=new NormalOrder();
            if($request->has('phone'))
                $no->phone=$request['phone'];

            if($request->has('email'))
                $no->email=$request['email'];

            $no->product_id=$request['product_id'];

            $no->name=$request['name'];
            if($request->has('note'))
            $no->note=$request['note'];
            $no->qun=$request['qun'];
            $no->city_id=$request['city_id'];
            $no->address=$request['address'];

            $no->save();

            $ca=Cart::instance('shopcart')->content()->where('id',$request['product_id']);

            foreach ($ca as $c){
                Cart::remove($c->rowId);
            }


            return  back(302)->with('stat','ok')->with('message','تم ارسال الطلب بنجاح')->with('title','تمت العملية بنجاح');

        }




    }
}
