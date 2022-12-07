<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class OrderLivewire extends Component
{

    protected $listeners=['addneworder'=>'render'];

    use WithPagination;
    public function render()
    {
        $user=request()->user();
        $orders= $user->orders()->with('city:id,name','product:id,name,price,Mimg')->paginate(5);


        return view('livewire.order-livewire',['orders'=>$orders]);
    }
}
