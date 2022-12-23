<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocitonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Livewire\Admin\BrandTable;
use App\Http\Livewire\Admin\CitiesTable;
use App\Http\Livewire\Admin\LocionsTable;
use App\Http\Livewire\Admin\PartTable;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->middleware(['role:admin','auth'])->group(function () {


    Route::get('loc',App\Http\Livewire\Admin\LocationsController::class);
    Route::post('locs.store',[LocitonController::class,'store'])->name('locs.store');
    Route::post('locs.update',[LocitonController::class,'update'])->name('locs.update');
    Route::get('/',[\App\Http\Controllers\Admin\HomeCotroller::class,'index'])->name("admin.home");



    Route::get('cities.index',CitiesTable::class)->name('cities.index');

    Route::post('cities.store',[CityController::class,'store'])->name('cities.store');
    Route::post('cities.update',[CityController::class,'update'])->name('cities.update');

    Route::get('/parts',PartTable::class)->name('parts');
    Route::resource('/part',PartController::class)->name('index','part');
    Route::get('/brands',BrandTable::class)->name('brands');
    Route::resource('/brand',BrandController::class)->name('index','brand');

    Route::get('/contact',[ContactController::class,'index'])->name('admin.contacts');
    Route::get('/contact/{contact}',[ContactController::class,'replay'])->name('admin.contacts.replay');
    Route::post('/contact.update/{contact}',[ContactController::class,'update'])->name('admin.contacts.update');



    Route::get("/sitesetting",[SiteSettingController::class,'index'])->name("sitesetting");
    Route::post("/sitesetting",[SiteSettingController::class,'store'])->name("sitesetting.post");


    Route::get('/admin.products',\App\Http\Livewire\Admin\ProductTable::class)->name('admin.products');

    Route::get('/admin.productsaddnew',\App\Http\Livewire\Admin\ProductForm::class)->name('admin.productsaddnew');
    Route::post('/uploade',[\App\Http\Controllers\Admin\UploadeController::class,'store'])->name('uploade');

    Route::post('/newproduct',[\App\Http\Controllers\ProductController::class,'store'])->name('newproduct');
    Route::post('/updateproduct',[\App\Http\Controllers\ProductController::class,'update'])->name('updateproduct');
    Route::get('/product.deleteimg',[\App\Http\Controllers\ProductController::class,'deleteimg'])->name('product.deleteimg');

    Route::resource('/products',ProductController::class)->name('index','products');




    Route::get('/departments.show',\App\Http\Livewire\Admin\DepartmentTable::class)->name('departments.show');
   Route::post('/departments.store',[\App\Http\Controllers\DepartmentController::class,'store'])->name('departments.store');
    Route::post('/departments.update',[\App\Http\Controllers\DepartmentController::class,'update'])->name('departments.update');

    Route::resource('/depts', App\Http\Controllers\DepartmentController::class)->name('index','depts');
    Route::get("/orders",[App\Http\Controllers\OrderController::class,"orders"])->name("admin.orders");

    Route::get("/acceptorders{id}",[App\Http\Controllers\OrderController::class,"acceptorder"])->name("admin.orders.accept");

    Route::get("/denyorders{id}",[App\Http\Controllers\OrderController::class,"denyorder"])->name("admin.orders.deny");



});


