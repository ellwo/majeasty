<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DepartmentController extends Controller
{
    //





    public function store(Request $request){

        if($request->isMethod('POST')){


            if($request['name']==null ||  $request['note']==null || $request['imgurl']==null){

                return $data = ['statt' => 'error', 'message' => 'Some Data are missed'];
            }

            else{

                $dept=Department::create([
                   'name'=>$request['name'],
                    'note'=>$request['note'],
                    'img'=>$request['imgurl']

                ]);

                Cache::flush();

                session()->flash('statt', 'ok');
                session()->flash('message', 'تم الحفظ بنجاح ');
                return $data = ['statt' => 'ok'];
            }

        }





    }

    public function update(Request $request){

        if($request->isMethod('POST')){


            if($request['name']==null || $request['imgurl']==null || $request['note']==null || $request['dept_id']==null){
                return $data = ['statt' => 'error', 'name'=>$request["name"],'img'=>$request["imgurl"],'message' => 'Some Data are missed'];

            }

            else{

                $dept=Department::find($request['dept_id']);


                if($dept!=null) {
                    $dept->update([
                        'name' => $request['name'],
                        'note' => $request['note'],
                        'img' => $request['imgurl']
                    ]);
                    Cache::flush();
                    session()->flash('statt', 'ok');
                    session()->flash('message', 'تم الحفظ بنجاح ');
                    return $data = ['statt' => 'ok'];
                }
                else{
                    return $data = ['statt' => 'error', 'message' => 'Some Data are missed'];

                }
            }

        }





    }
}
