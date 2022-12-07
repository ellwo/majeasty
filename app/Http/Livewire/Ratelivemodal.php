<?php

namespace App\Http\Livewire;

use App\Models\Reat;
use Livewire\Component;


class Ratelivemodal extends Component
{


    public $rating;
    public $comment;
    public $currentId;
    public $product_id;
    public $hideForm;


    public function mount(){
        if(auth()->user()){
            $rating = Reat::where('user_id', auth()->user()->id)->where('product_id', $this->product_id)->first();
            if (!empty($rating)) {
                $this->rating  = $rating->rating;
                $this->comment = $rating->comment;
                $this->currentId = $rating->id;
                $this->hideForm=true;
                session('message','You have already rated');
            }
            else
            $this->hideForm=false;
        }
        else
            $this->hideForm=true;
        return view('livewire.ratelivemodal');

    }
    public function render()

    {
        return view('livewire.ratelivemodal');
    }


    public function ratepro(){


        $rating = Reat::where('user_id', auth()->user()->id)->where('product_id', $this->product_id)->first();
        $this->validate([
            'rating' => ['required', 'in:1,2,3,4,5'],
            'comment' => 'required',
        ]);

            $rating = new Reat();
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $this->product_id;
            $rating->value = $this->rating;
            $rating->comment = $this->comment;
           // $rating->status = 1;
                $rating->save();

            $this->hideForm = true;
            $this->emit('addnewcomment');
        session()->flash('message', 'Success!');

    }




}
/*
 *
 * <?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rating;

class ProductRatings extends Component
{

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
        'comment' => 'required',

    ];

    public function render()
    {
        $comments = Rating::where('product_id', $this->product->id)->where('status', 1)->with('user')->get();
        return view('livewire.product-ratings', compact('comments'));
    }

    public function mount()
    {
        if(auth()->user()){
            $rating = Rating::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->first();
            if (!empty($rating)) {
                $this->rating  = $rating->rating;
                $this->comment = $rating->comment;
                $this->currentId = $rating->id;
            }
        }
        return view('livewire.product-ratings');
    }

    public function delete($id)
    {
        $rating = Rating::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
            $this->comment = '';
        }
    }

    public function rate()
    {
        $rating = Rating::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->first();
        $this->validate();
        if (!empty($rating)) {
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $this->product->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->status = 1;
            try {
                $rating->update();
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('message', 'Success!');
        } else {
            $rating = new Rating;
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $this->product->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->status = 1;
            try {
                $rating->save();
            } catch (\Throwable $th) {
                throw $th;
            }
            $this->hideForm = true;
        }
    }
}*/
