<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDocs;
use App\Models\Role;
use App\Models\Shift;


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
        // User::factory(100)->create();
       // UserDocs::factory(10)->create();
       Shift::factory(10)->create();

    }

    function roleData() : void {
        $roles = [  
            ['role' => 'Admin', 'public' => false],
            ['role' => 'Employee','public' => true],
            ['role' => 'Applicant','public' => true],
        ];
 
          collect($roles)->each(function ($role) { Role::create($role); });
        
    }

     function createAdmin() : void {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '123213213',
            'address' => 'asdasdsa',
            'email'=> 'admin@gmail.com',
            'email_verified_at' => now(),
            'role_id'=> 1,
            'active'=> 1,
            'password'=>  Hash::make('admin123')
        ]);
    }

    function createDummy() : void {
        User::create([
            'first_name' => 'Test',
            'last_name' => 'Test',
            'phone' => '123213213',
            'address' => 'asdasdsa',
            'email'=> 'test@gmail.com',
            'email_verified_at' => now(),
            'role_id'=> 3,
            'active'=> 1,
            'password'=>  Hash::make('test123'),
            'application_number' => 'ap-'.random_int(000000,999999)
        ]);
    }

    
}
