<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
           [    
            'firstName'=> 'Admin',
            'lastName' => 'Panel',
            'email' => 'admin@gmail.com',
            'password'=> '0000',
            'mobile'=> '01846416000',
            'role'=> 1,
            ],
           
             [    
            'firstName'=> 'Author',
            'lastName' => 'Panel',
            'email' => 'author@gmail.com',
            'password'=> '1111',
            'mobile'=> '0166744160',
            'role'=> 2,
            ],
            [    
            'firstName'=> 'Md Siyam',
            'lastName' => 'Hossain',
            'email' => 'siyam@gmail.com',
            'password'=> '2222',
            'mobile'=> '019146362241',
            'role'=> 2,
            ],
            [    
            'firstName'=> 'Faria',
            'lastName' => 'Ahmed',
            'email' => 'kairasana8@gmail.com',
            'password'=> '0101',
            'mobile'=> '01629004612',
            'role'=> 2,
            ],


        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}