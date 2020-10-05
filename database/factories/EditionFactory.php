<?php

namespace Database\Factories;

use App\Models\Edition;
use App\Models\EditionType;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Edition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id' => User::all()->random()->id,
            'type_id' => EditionType::all()->random()->id,
            'team_id' => Team::all()->random()->id,
            'name' => $this->faker->name,
            'about' => $this->faker->realText(),
        ];
    }
}
