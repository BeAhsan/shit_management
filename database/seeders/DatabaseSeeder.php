<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        // $this->roleData();
        // $this->createAdmin();
        // $this->createDummy();
        User::factory(100)->withPersonalTeam()->create();
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

     function createAdmin() : void {
        User::create([
            'name' => 'Admin',
            'email'=> 'admin@gmail.com',
            'email_verified_at' => now(),
            'role_id'=> 1,
            'active'=> 1,
            'password'=>  Hash::make('admin123')
        ]);
    }

    function createDummy() : void {
        User::create([
            'name' => 'Test',
            'email'=> 'test@gmail.com',
            'email_verified_at' => now(),
            'role_id'=> w,
            'active'=> 1,
            'password'=>  Hash::make('test123')
        ]);
    }

    
}
