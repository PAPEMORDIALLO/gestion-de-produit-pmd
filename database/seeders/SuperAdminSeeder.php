<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Creating Admin User
        $admin = User::create([
            'name' => 'Pape Mor Diallo',
            'email' => 'diallo@gmail.com',
            'password' => Hash::make('passer')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $user = User::create([
            'name' => 'Youssouph Niang',
            'email' => 'youssouph@gmail.com',
            'password' => Hash::make('passer')
        ]);
        $user->assignRole('User');
    }
}
