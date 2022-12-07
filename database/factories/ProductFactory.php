<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->colorName,
            'price'=>rand(200,987),
            'Mimg'=>$this->faker->imageUrl,
            'note'=>$this->faker->paragraph,
            'imgs'=>$this->imgs(),
            'department_id'=>Department::inRandomOrder()->pluck('id')->first()
        ];
    }

    function imgs(){

        $imgs=[];
        for( $i=0; $i<rand(2,4); $i++){
            $imgs[]=$this->faker->imageUrl;
        }

        return $imgs;

    }
}
