<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    public $fillable=[
        'name','img','department_id'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class);
        # code...
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
        # code...
    }
}
