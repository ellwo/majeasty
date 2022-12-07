<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Nagy\LaravelRating\Traits\Rate\CanRate;
use Spatie\Permission\Traits\HasRoles;
use Nagy\LaravelRating\Traits\Like\CanLike;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , CanRate,HasRoles,CanLike;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function orders(){

        return $this->hasMany(Order::class);
    }

    public function cartorders(){
        return $this->hasMany(CartOrder::class);
    }
}
