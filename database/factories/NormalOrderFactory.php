<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\NormalOrder;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class NormalOrderFactory extends Factory
{

    protected $model=NormalOrder::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name,
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'qun'=>rand(1,4),
            'product_id'=>Product::inRandomOrder()->pluck('id')->first(),
            'note'=>$this->faker->text(50),
            'city_id'=>City::inRandomOrder()->pluck('id')->first(),
            'address'=>$this->faker->address
        ];
    }
}
