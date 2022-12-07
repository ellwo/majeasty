<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormalOrder extends Model
{
    use HasFactory;

    protected $fillable=['name','phone','email','product_id','qun','city_id','address','note','stat'];


    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,"normalorder_product")->withPivot("qun")->withTimestamps();
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
