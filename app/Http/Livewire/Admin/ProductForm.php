<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    public $showmodel=0;
    public $imgurl="";
    public $name="";
    public $imgs=[];
    public $department_id=1;
    public $price=0;
    public $note="";
    public $editproid;
    use WithFileUploads;
    public function mount($showmodel=0,$editproid="no")
    {


        $this->showmodel=$showmodel;

        if(isset($_GET["editproid"]))
        $this->editproid=$_GET["editproid"];
        else
        $this->editproid=$editproid;
    }

    public function render()
    {

        if($this->editproid=="no")
        return view('livewire.admin.product-form')->layout('layouts.admin-layout');
        else{

            $pro=Product::find($this->editproid);

            if($pro!=null){
            $this->name=$pro->name;
            $this->department_id=$pro->department_id;
            $this->price=$pro->price;
            $this->imgurl=$pro->Mimg;
            $this->imgs=$pro->imgs;


            return view('livewire.admin.product-form',['product'=>$pro])->layout('layouts.admin-layout');
    }
    else
    {
        $this->editproid="no";
        return view('livewire.admin.product-form')->layout('layouts.admin-layout');

    }
}
}

    public  function  submit(){

        dd($this->imgurl);

    }
    public function cancelEdit(){
        $this->editproid="no";
        $this->showmodel=0;
    }
}
