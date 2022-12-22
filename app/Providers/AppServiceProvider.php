<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\City;
use App\Models\Department;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {




    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        if (env('APP_ENV') == 'production')
        \URL::forceScheme('https');


//        Cache::flush();

       // $depts=Cache::remember('depts',60*60,function (){
         // return
           //Department::orderBy("created_at","desc")->get();
        //});
       // $cities= City::all();
         //   view()->share('depts',$depts);
         // view()->share('city',$cities);


          //$settings=Cache::remember("settings",360*60,function(){
            //  return  SiteSetting::all();
         // });

          //$brands=Brand::all();
          //view()->share('brands',$brands);

         //foreach($settings as $setting){

                       // config("mysetting.".$setting['key'])->set($setting["value"]);
           // Config::set("mysetting.".$setting["key"],$setting["value"]);

         //    config("mysetting.".$setting['key'])->set($setting["value"]);
          //}



    }
}
