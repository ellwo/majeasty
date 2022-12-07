<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lociton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShowHomeController extends Controller
{
    //

    public function index(Request  $request)
    {



        $depts=Cache::remember('depts',60*60*24,function (){
           return Department::inRandomOrder()->get();
        });
        $locs=Lociton::with('city')->get()->groupBy('city.name');

        return view('newindex',['depts'=>$depts,'locs'=>$locs]);
    }
}
