<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * test relations
     *
     * @return void
     */
    public function testGetEdition()
    {
        do{
        $user = User::all()->random();
        dump($user->rosters);
        }while(count($user->rosters) > 0);
        $this->assertIsArray($user->rosters);
    }
}
