<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'admin',
            'role'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('12345'),
            'mobile'=>'01706690057',
            'address'=> 'address',
            'gender'=> 'gender',
            'date_of_birth'=> 'date_of_birth',
            'designation'=> 'designation',
          
        ]);
    }
}
