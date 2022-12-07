<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartordernormal extends Model
{
    use HasFactory;
    protected $fillable=[
       'name','phone','email' ,'address','note','state','city_id','totalprice'
    ];

    public function products(){

        return $this->belongsToMany(Product::class)->withPivot('qun');
    }
}
