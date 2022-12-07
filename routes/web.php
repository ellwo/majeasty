<?php

use App\Http\Controllers\Admin\HomeCotroller;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/index','newindex');
Route::get('/', [\App\Http\Controllers\ShowHomeController::class,'index']);

Route::get('wishlist',\App\Http\Livewire\CartTable::class)->name('wishlist');



Route::middleware('auth')->group(function (){

    Route::get('myprofile',function (){
        return view('profile.profile');
    })->name('myprofile');

    Route::get('/cartorders',function (){

        return dd(auth()->user()->cartorders()->with('products')->get());
    });

    Route::post('updateNameEmail',[\App\Http\Controllers\ProfileController::class,'updateNameEmail'])->name('updateNameEmail');

    Route::post('/profile.updatepassword',[\App\Http\Controllers\ProfileController::class,'update'])->name('profile.updatepassword');
    Route::get('/myorders',\App\Http\Livewire\CartTable::class)->name('myorders');

    Route::post('/neworder',[\App\Http\Controllers\OrderController::class,'neworder'])->name('neworder');

});

Route::view('/contact','contact');
Route::post('/contact.form',[\App\Http\Controllers\ContactController::class,'sendmeassge'])->name('contact.form');

Route::get('/Home',[\App\Http\Controllers\ShowHomeController::class,'index'])->name('Home');


Route::post('/newNoorder',[\App\Http\Controllers\NormalOrderController::class,'newOrder'])->name('newNoorder');
Route::get('/product/{deptid?}/{proid?}',\App\Http\Livewire\ProductLiveware::class)->name('product');

Route::get('/dashboard', [HomeCotroller::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');

// useless routes
// Just to demo sidebar dropdown links active states.




require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';


