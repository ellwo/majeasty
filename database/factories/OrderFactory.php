<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::inRandomOrder()->pluck('id')->first(),
            'product_id'=>Product::inRandomOrder()->pluck('id')->first(),
            'city_id'=>City::inRandomOrder()->pluck('id')->first(),
            'note'=>$this->faker->text,
            'qun'=>rand(1,4),
            'address'=>$this->faker->address,


        ];
    }
}
