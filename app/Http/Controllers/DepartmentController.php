<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DepartmentController extends Controller
{
    //


    public function index(Request $request)
    {
        return view('admin.department.show');
        # code...
    }


    public function create()
    {
        return view('admin.department.create');
        # code...
    }

    public function store(Request $request){

        if($request->isMethod('POST')){


            $this->validate($request,[
                'name'=>'required',
                'imgurl'=>'required'
            ]);

                $dept=Department::create([
                   'name'=>$request['name'],
                    'note'=>$request['note'],
                    'img'=>$request['imgurl']

                ]);

                Cache::flush();

                session()->flash('statt', 'ok');
                session()->flash('message', 'تم الحفظ بنجاح ');
               return redirect()->route('depts')->with('statt','ok');
                return $data = ['statt' => 'ok'];
            }





    }

    public function edit(Department $dept)
    {
        return view('admin.department.edit',['dept'=>$dept]);
        # code...
    }

    public function update(Request $request,Department $dept){


            $this->validate($request,[
                'name'=>'required',
                'imgurl'=>'required'
            ]);
                    $dept->update([
                        'name' => $request['name'],
                        'note' => $request['note'],
                        'img' => $request['imgurl']
                    ]);
                    Cache::flush();
                    session()->flash('statt', 'ok');
                    session()->flash('message', 'تم التعديل بنجاح ');
                    return redirect()->route('depts');

            }







}
