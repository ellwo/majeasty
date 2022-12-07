<?php

namespace App\Http\Livewire;

use App\Models\Cartorder;
use App\Models\Cartordernormal;
use App\Models\NormalOrder;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Validator;
class CheckoutForm extends Component
{

    public $name="";
    public $phone="";
    public $email="";
    public $note="";
    public $address="";
    public $city_id=1;
    //public $
    public function render()
    {

        if(auth()->user()!=null){
        //    $cartorder=auth()->user()->cartorders()->with('products')->get();

    //        return view('livewire.checkout-form',
      //          ['cart'=>Cart::instance('shopcart')->content()
  //              ,'cartorders'=>$cartorder

//                ]);

        }

        return view('livewire.checkout-form',['cart'=>Cart::instance('shopcart')->content()]);
    }



    public function checkout(){




        if(auth()->user()!=null){


            $this->validate([
                "address"=>"required",
                "city_id"=>"required"
            ]);




            $order=new Order();

            $carts=Cart::instance('shopcart')->content();
            $cartorder=new Cartorder();
            $cartorder->address=$this->address;
            $order->address=$this->address;

            $cartorder->user_id=auth()->user()->id;
            $order->user_id=auth()->user()->id;

            $cartorder->city_id=$this->city_id;
            $order->city_id=$this->city_id;

            if($this->note!="")
              {
                $cartorder->note=$this->note;
                $order->note=$this->note;

              }
              $cartorder->totalprice=Cart::instance('shopcart')->totalFloat();
              $order->qun=Cart::instance('shopcart')->totalFloat();

              $cartorder->save();

              $order->save();

            $col=collect($carts)->map(function ($c){

                return ['product_id'=>$c->id,'qun'=>$c->qty];
            });
            $cartorder->products()->sync($col);
            request()->session()->for

            return $this->redirect('wishlist');
            $order->products()->sync($col);

            Cart::instance('shopcart')->destroy();
            session()->flash("stat","ok");

            session()->flash('message','تم طلبك بنجاح ');


        }
        else{
 $this->validate([
                'name' => ['required'],
                'address'=>['required'],
                'city_id'=>['required'],
     'phone'=>['required','min:9']

            ]);

                $carts=Cart::instance('shopcart')->content();
            $cartorder=new Cartordernormal();
            $normalorder=new NormalOrder();

            $cartorder->address=$this->address;
            $cartorder->city_id=$this->city_id;

            $normalorder->address=$this->address;
            $normalorder->city_id=$this->city_id;


            if($this->note!="")
                {
                    $cartorder->note=$this->note;
                    $normalorder->note=$this->note;

                }
                $cartorder->name=$this->name;
                $cartorder->email=$this->email;
                $cartorder->phone=$this->phone;

                $normalorder->name=$this->name;
                $normalorder->email=$this->email;
                $normalorder->phone=$this->phone;


            $cartorder->totalprice=Cart::instance('shopcart')->totalFloat();
            $cartorder->save();
            $normalorder->save();

            $col=collect($carts)->map(function ($c){

                return ['product_id'=>$c->id,'qun'=>$c->qty];
            });

            $cartorder->products()->sync($col);
            $normalorder->products()->sync($col);


            Cart::instance('shopcart')->destroy();
            session()->flash("stat","ok");
            session()->flash('message','تم طلبك بنجاح ');

            $this->emit('addneworder');

        }


    }



}
