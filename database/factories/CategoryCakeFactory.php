<?php

namespace Database\Factories;

use App\Models\CategoryCake;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryCakeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryCake::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_name' => $this->faker->name,
            'category_des' => $this->faker->text,
            'category_image' => $this->fake->image
        ];
    }
}
