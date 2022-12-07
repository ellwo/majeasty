<?php

namespace App\Http\Livewire\Admin;

use App\Models\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartTable extends Component
{
    use WithPagination;

    public $search='';
    public $deleted_ad='no';
    public function render()
    {


        $parts=Part::where('name','LIKE','%'.$this->search.'%')->orderBy('updated_at','desc')->paginate(5);


        return view('admin.parts.index',['parts'=>$parts])->layout('layouts.admin-layout');
    }
   public function delete_ad($id){

  $p=  Part::find($id);
  if($p!=null)
  $p->delete();

   }
}
