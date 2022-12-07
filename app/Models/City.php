<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $fillable=[
        'name'
    ];

    public function locitons()
    {
        return $this->hasMany(Lociton::class);
        # code...
    }


}
