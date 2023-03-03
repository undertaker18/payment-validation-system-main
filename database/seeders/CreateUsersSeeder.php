<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
               'name'=>'registrar',
               'email'=>'registrar@laverdad.edu.ph',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@laverdad.edu.ph',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Accounting',
               'email'=>'accounting@laverdad.edu.ph',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}