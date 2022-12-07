<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function myorders(Request $request){


        $user=$request->user();


        $orders=$user->orders()->with('city:id,name','product:id,name,price,Mimg')->paginate(5);


        return view('',['orders'=>$orders]);

    }



}
