<?php

namespace App\Http\Controllers;

use App\Models\Lociton;
use Illuminate\Http\Request;

class LocitonController extends Controller
{
    //

    public function index(Request $request){
    }


    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name'=>'required',
        //     'city_id'=>'required',
        //     'address'=>'required',

        // ]);


        $loc=Lociton::create([
            'name'=>$request['name'],
            'address'=>$request['address'],
            'phones'=>$request['phones'],
            'city_id'=>$request['city_id'],

        ]);

        session()->flash('status','تمت الاضافة بنجاح');
        session()->flash('stats','تمت الاضافة بنجاح');

        return $data=['status'=>true];

        return back()->with('status','تم الاضافة بنجاح');

        # code...
    }

    public function update(Request $request)
    {
        $loc=Lociton::find($request['id']);
        if($loc!=null){
            $loc->update([
                'name'=>$request['name'],
                'address'=>$request['address'],
                'phones'=>$request['phones'],
                'city_id'=>$request['city_id'],

            ]);
            $loc->save();

            session()->flash('status','تمت الاضافة بنجاح');
            session()->flash('stats','تمت الاضافة بنجاح');
            return $data=['status'=>true];
        }
        else{
            return $data=['status'=>false];
        }
        # code...
    }





}
