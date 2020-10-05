<?php

namespace Database\Factories;

use App\Models\EditionRosterMemberRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionRosterMemberRoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EditionRosterMemberRole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['editor', 'designer', 'freelancer', 'writer', 'manager'])
        ];
    }
}
