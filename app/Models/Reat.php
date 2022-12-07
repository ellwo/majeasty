<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reat extends Model
{
    use HasFactory;

    protected $fillable=['value','comment','user_id','product_id'];



    public function user(){
        return $this->belongsTo(User::class);
    }







}
