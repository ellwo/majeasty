<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartorderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::inRandomOrder()->pluck('id')->first(),
            'city_id'=>City::inRandomOrder()->pluck('id')->first(),
            'address'=>$this->faker->address,
            'note'=>$this->faker->text(60),




        ];
    }
}
