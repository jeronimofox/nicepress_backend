<?php

namespace Database\Factories;

use App\Models\Edition;
use App\Models\EditionRoster;
use App\Models\EditionRosterMember;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionRosterMemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EditionRosterMember::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'edition_id' => Edition::all()->random()->id,
            'roster_id' => EditionRoster::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'role' => $this->faker->randomElement(['editor', 'designer', 'freelancer', 'writer', 'manager'])
        ];
    }
}
