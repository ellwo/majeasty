<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartordernormalFactory extends Factory
{
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
            'email'=>$this->faker->email,
            'city_id'=>City::inRandomOrder()->pluck('id')->first(),
            'note'=>$this->faker->text(50),
            'address'=>$this->faker->address

        ];
    }
}
