<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function store(Request $request)
    {
        $city=City::create([
            'name'=>$request['name']
        ]);

        return $data=['status'=>true];
        # code...
    }

    public function update(Request $request)
    {
        $city=City::find($request['id']);
        $city->update([
            'name'=>$request['name']
        ]);
        $city->save();

        session()->flash('status','تم التعديل بنجاح');
        session()->flash('stats','تم التعديل بنجاح');


        return $data=['status'=>true];

    }
}
