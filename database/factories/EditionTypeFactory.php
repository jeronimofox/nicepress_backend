<?php

namespace Database\Factories;

use App\Models\EditionType;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EditionType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Magazine', 'Newspaper'])
        ];
    }
}
