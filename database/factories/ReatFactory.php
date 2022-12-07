<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Reat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Reat::class;
    public function definition()
    {
        return [
            //
            'user_id'=>User::inRandomOrder()->pluck('id')->first(),
            'comment'=>$this->faker->paragraph(1),
            'product_id'=>Product::inRandomOrder()->pluck('id')->first(),
            'value'=>rand(1,5)
        ];
    }
}
