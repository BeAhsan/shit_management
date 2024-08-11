<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        $this->roleData();

        // User::factory()->withPersonalTeam()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    function roleData() : void {
        $roles = [  
            ['role' => 'Admin', 'public' => false],
        ['role' => 'Employee','public' => true]
    ];
 
          collect($roles)->each(function ($role) { Role::create($role); });
        
    }
}
