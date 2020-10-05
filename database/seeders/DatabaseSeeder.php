<?php

namespace Database\Seeders;

use App\Models\Edition;
use App\Models\EditionRoster;
use App\Models\EditionRosterMember;
use App\Models\EditionRosterMemberRole;
use App\Models\EditionType;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        echo 'User';
        EditionType::factory(10)->create();
        echo 'Type';
        EditionRosterMemberRole::factory(10)->create();
        echo 'Role';
        EditionRoster::factory(10)->create();
        echo 'Roster';
        Team::factory(10)->create();
        echo 'Team';
        Edition::factory(10)->create();
        echo 'Edition';
        EditionRosterMember::factory(150)->create();
        echo 'Membership';
    }
}
