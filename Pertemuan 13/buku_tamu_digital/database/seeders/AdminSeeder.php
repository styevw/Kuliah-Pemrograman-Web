<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
       

        User::create([
            'name' => 'Stev',
            'email' => 'stev@resto.com',
            'password' => Hash::make('stev123'), 
        ]);

        User::create([
            'name' => 'Mila',
            'email' => 'mila@resto.com',
            'password' => Hash::make('mila123'), 
        ]);

        User::create([
            'name' => 'Cici',
            'email' => 'cici@resto.com',
            'password' => Hash::make('cici123'), 
        ]);
    }
}