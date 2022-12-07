<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['user_id,city_id,qun,address,note,product_id'];




    public function user(){

        return $this->belongsTo(User::class);
    }


    public function city(){

        return $this->belongsTo(City::class);
    }

    public  function product(){

        return $this->belongsTo(Product::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,"order_product")->withPivot("qun")->withTimestamps();
        # code...
    }

    public function summ()
    {


        $sum=0.0;
        foreach($this->products as $pro){
           //echo $pro->price;
             $sum=$sum+ ($pro->price * $pro->pivot->qun);
        }
        return $sum;

        # code...
    }




}
