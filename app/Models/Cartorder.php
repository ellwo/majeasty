<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartorder extends Model
{
    use HasFactory;
    protected $fillable=[
        'address','user_id','note','state','city_id','totalprice'
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
    public function products(){

        return $this->belongsToMany(Product::class)->withPivot('qun');
    }


}
