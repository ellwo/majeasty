<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('brands');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        ['name'=>'unique:brands,name|string|required',
        'img'=>'required|string'
    ]);

    $brn=Brand::create([
        'name'=>$request['name'],
        'img'=>$request['img']
    ]);

    return redirect()->route('brands')->with('status','تم الاضافة بنجاح');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
        return view('admin.brands.edite',['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {

        if($brand->name!=$request['name'])
        $this->validate($request,
        ['name'=>'unique:brands,name|string|required',
        'img'=>'required|string'
    ]);
    else
     $this->validate($request,
    ['name'=>'string|required',
    'img'=>'required|string'
]);

    $brand->update([
        'name'=>$request['name'],
        'img'=>$request['img']
    ]);

    return redirect()->route('brands')->with('status','تم التعديل بنجاح');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
