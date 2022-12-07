<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class CartTable extends Component
{

    protected $listeners=['addneworder'=>'render',
        'resetorderproid'=>'resetopid'];
    //public $cart;
   // public $wishlist;
    public array $qun=[];
    public $orderproid=-1;

    public function resetopid(){
        $this->orderproid=-1;
    }

    public function mount(){
        $cart=Cart::instance('shopcart')->content();
        $wishlist=Cart::instance('wishlist')->content();
        foreach ($cart as $c){
            $this->qun[$c->id]=$c->qty;
        }
    }

    use WithPagination;

    public function render()
    {
        $cart=Cart::instance('shopcart')->content();
        $wishlist=Cart::instance('wishlist')->content();


        if(auth()->user()!=null){

                $cartorder=auth()->user()->orders()->with('products')->paginate(5);

            return view('livewire.cart-table',['cart'=>$cart,'wishlist'=>$wishlist
            ,'cartorders'=>$cartorder]);

        }

        return view('livewire.cart-table',['cart'=>$cart,'wishlist'=>$wishlist])->layout('layouts.base-layout');
    }


    public function dislike($rowId){


        Cart::instance('wishlist')->remove($rowId);

    }

    public function  plusqun($id){

        $this->qun[$id]++;
      //  $c= $this->cart->where('id',$id);
    //    $c->update($this->qun[$id]);

        $cart=Cart::instance('shopcart')->content();

        $c= $cart->where('id',$id)->take(1);
        $key=0;
        foreach ($c as $ke)
        {
            $key=$ke->rowId;
        }

        Cart::instance('shopcart')->update($key,$this->qun[$id]);
    }
    public function  munsqun($id){

        if($this->qun[$id]>1)
            $this->qun[$id]--;


        $cart=Cart::instance('shopcart')->content();

        $c= $cart->where('id',$id)->take(1);
        $key=0;
        foreach ($c as $ke)
        {
            $key=$ke->rowId;
        }

        if($key!=0)
        Cart::instance('shopcart')->update($key,$this->qun[$id]);



    }

    public function delprocart($rowId){
        if($rowId!=0)
        Cart::instance('shopcart')->remove($rowId);

    }


   public function destroy(){
       Cart::instance('shopcart')->destroy();
   }


   public  function setorderproid($id){
        $this->orderproid=$id;

   }


}
