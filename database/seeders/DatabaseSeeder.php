<?php

namespace Database\Seeders;


use App\Models\Cartorder;
use App\Models\Cartordernormal;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'custmor']);

        $admin=User::create([
            'name'=>'Admin',
            'email'=>'admin@me.com',
            'phone'=>'775212843',
            'password'=>Hash::make('admin775212843')
        ]);
        $admin->assignRole('admin');
        $admin->save();

         \App\Models\User::factory(10)->create();
         \App\Models\Department::factory(10)->create();
         \App\Models\Product::factory(200)->create();
         \App\Models\City::factory(10)->create();
        \App\Models\Order::factory(100)->create();
        \App\Models\Cartorder::factory(40)->create();
        \App\Models\NormalOrder::factory(80)->create();
        \App\Models\Cartordernormal::factory(50)->create();
        \App\Models\Reat::factory(300)->create();






        foreach (User::all() as $user){
            $user->assignRole('custmor');
            $user->save();
        }

        $admin=User::create([
            'name'=>'Admin',
            'email'=>'admin@me.com',
            'phone'=>'775212843',
            'password'=>Hash::make('admin775212843')
        ]);
        $admin->assignRole('admin');
        $admin->save();


        $cartorders=CartOrder::all();

        foreach ($cartorders as $cart){

            $col=collect(Product::inRandomOrder()->pluck('id')->take(4))->
            map(function ($pro){
                return ['product_id'=>$pro,'qun'=>rand(1,4)];
            });
            $cart->products()->sync($col);
            $cart->save();
        }


        $cartorders=Cartordernormal::all();

        foreach ($cartorders as $cart){

            $col=collect(Product::inRandomOrder()->pluck('id')->take(4))->
            map(function ($pro){
                return ['product_id'=>$pro,'qun'=>rand(1,4)];
            });
            $cart->products()->sync($col);
            $cart->save();
        }




    }
}
