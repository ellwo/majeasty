<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=['name','note','img'];


    public function products(){

        return $this->hasMany(Product::class);
    }
    public function parts()
    {
        return $this->hasMany(Part::class);
        //$thi;
        # code...
    }
}
