<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class CitiesTable extends Component
{
    use WithPagination;
    public $delcityid='no';
    public $editproid='no';
    protected $listeners=['add_new'=>'addnew'];

    public function render()
    {



        $cities=City::orderBy("updated_at","desc")->paginate(5);

        return view('admin.cities.index',compact('cities'))->layout('layouts.admin-layout');
    }

    public function addnew()
    {
        $this->resetPage('page');
        # code...
    }



    public function deletePro($id){
        $product=City::find($id);

        // if($product->countoforders()>0)
        // {

        //     $product->orders()->delete();
        //     $product->normalorders()->delete();
        //     $product->cartorders()->delete();
        //     $product->cartordernromals()->delete();

        // }

        $product->delete();
        session()->flash('statt','ok');
        session()->flash('message','تم الحذف');

        session()->flash('status','تم الحذف بنجاح');
        session()->flash('message','تم الحذف');

        $this->delcityid="no";


    }

    public function editpro($id){

        $this->editproid=$id;

        //redirect()->route("admin.productsaddnew",["editproid"=>$id]);

        //$this->emit("");
      //  $this->render();

    }
    public function cancelEdit(){
        $this->editproid="no";

}
}
