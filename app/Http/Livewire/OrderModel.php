<?php

namespace App\Http\Livewire;

use App\Models\NormalOrder;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class OrderModel extends Component
{



    public $name="";
    public $phone="";
    public $email="";
    public $note="";
    public $address;
    public $city_id=1;
    public  $open=0;
    public $proid;
    public $qun=1;

    protected $roles=[
        'address'=>'required'
    ];
    public function mount($proid,$open=false){
        $this->proid=$proid;
        $this->open=$open;

    }
    public function render()
    {
        return view('livewire.order-model');
    }

    public function addorder(){

        if(auth()->user()!=null){
            $this->validate([
                'address'=>['required'],
                'name'=>['required|string|alpha'],
                'city_id'=>['required'],
                'qun'=>['required'],
                'proid'=>['required']
            ],[
                'address.required'=>'يجب ادخال العنوان'
            ]);

            $order=new Order();
            $order->address=$this->address;
            $order->city_id=$this->city_id;
            $order->user_id=auth()->user()->id;

            $order->qun=$this->qun;

            $order->note=$this->note!=""? $this->note:' ';
            $order->save();
            $order->products()->attach($this->proid,["qun"=>$this->qun]);
            $order->save();

        }

        else{




            $this->validate([
                'name' => ['required'],
                'address'=>['required'],
                'city_id'=>['required'],
                'phone'=>['required','min:9'],
                'qun'=>['required']

            ],[
                'address.required'=>'يجب ادخال العنوان'
            ]);



            $no=new NormalOrder();
            if($this->phone!="")
                $no->phone=$this->phone;

            if($this->email)
                $no->email=$this->email;


            // $no->product_id=$this->proid;

            $no->name=$this->name;
            if($this->note!="")
                $no->note=$this->note;
            $no->qun=$this->qun;
            $no->city_id=$this->city_id;
            $no->address=$this->address;
            $no->save();
            $no->products()->attach($this->proid,["qun"=>$this->qun]);
            $no->save();

        }









        session()->flash('stat','ok');
        session()->flash('message','تم ارسال الطلب بنجاح');


        $cart=Cart::instance('shopcart')->content();

        $c= $cart->where('id',$this->proid)->take(1);
        $key=0;
        foreach ($c as $ke)
        {
            $key=$ke->rowId;
        }

        if($key!=0)
        Cart::instance('shopcart')->remove($key);



      //  $this->emit('addneworder');
        $this->open=0;


    }

    public function plus()
    {
        $this->qun++;
        # code...
    }
    public function muns()
    {
        if($this->qun>1)
        $this->qun--;
        # code...
    }

   public function closemodal()
   {
       $this->open=0;
       //$this->emit('resetorderproid');
       //$this->emit('addnewcomment');

   }
}
