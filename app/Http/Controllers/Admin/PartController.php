<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admin\PartTable;
use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('parts');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.parts.create');
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
        $this->validate($request,[
            'name'=>'required',
            'department_id'=>'required|exists:departments,id'
        ]);

        $part=Part::create($request->only('name','department_id'));


        return redirect()->route('parts')->with('status','تم الاضافة بنجاح');
        return dd($part);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {

        return view('admin.parts.edit',['part'=>$part]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        //

        if($request['name']!==$part->name)
        $this->validate($request,[
            'name'=>'required|alpha|unique:parts,name',
            'department_id'=>'required|exists:departments,id'
        ]);
        else
        $this->validate($request,[
            'name'=>'alpha|unique:parts,name',
            'department_id'=>'required|exists:departments,id'
        ]);

        $part->update($request->only('name','department_id'));

        return redirect()->route('parts')->with('status','تم حفظ التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        //
    }
}
