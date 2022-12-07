<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function index(Request $request)
    {
        # code...

        if(auth()->user->hasRole('admin')){
            return redirect()->route("admin.home");
        }
        else
        return view("dashboard");


    }
}
