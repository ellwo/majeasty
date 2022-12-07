<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lociton extends Model
{
    use HasFactory;
    public $fillable=[
        'name',
        'address',
        'phones',
        'city_id'
    ];
    public $casts=[
        'phones'=>'array'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
        # code...
    }
}
