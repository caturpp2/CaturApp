<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // create roles
        // get roles
        // $roles = ['superadmin','admin','user'];

        // create user
        // for ($i=0; $i < count($roles) ; $i++) { 
        //     # code...
        //     User::create([
        //         'name' => 'catur'.$i,
        //         'email' => 'catur'.$i.'@gmail.com',
        //         'password' => Hash::make('123123'),
        //         'role' => $roles[$i],
        //     ]);
        // }

        User::create([
            'name' => 'catur',
            'email' => 'catur@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 'superadmin',
        ]);

        User::create([
            'name' => 'anggardi pramusita',
            'email' => 'anggar@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 'adminamin',
        ]);

    }
}
