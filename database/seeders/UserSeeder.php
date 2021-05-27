<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Henry Rodriguez',
            'username'=> 'hrodriguez',
            'email'=> 'hen_rodriguez1@yahoo.com',
            'password'=> bcrypt('123456789')
        ])->assignRole('admin');


        User::create([
            'name'=> 'administrador',
            'username'=> 'admin',
            'email'=> 'admin@yahoo.com',
            'password'=> bcrypt('123456789')
        ])->assignRole('admin');
        User::create([
            'name'=> 'Hector  Meza',
            'username' => 'hmeza',
            'email'=> 'hector@yahoo.com',
            'password'=> bcrypt('123456789')
        ])->assignRole('admin');
        User::factory(3)->create();
    }
}
