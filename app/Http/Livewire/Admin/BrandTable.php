<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class BrandTable extends Component
{    use WithPagination;

    public $search='';
    public $deleted_ad='no';
    public function render()
    {


        $brands=Brand::where('name','LIKE','%'.$this->search.'%')->orderBy('updated_at','desc')->paginate(5);


        return view('admin.brands.index',['brands'=>$brands])->layout('layouts.admin-layout');
    }
   public function delete_ad($id){

  $p=  Brand::find($id);
  if($p!=null)
  $p->delete();

   }
}
