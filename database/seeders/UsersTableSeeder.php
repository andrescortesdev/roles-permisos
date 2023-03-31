<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
         $aprendiz = User::create([
            'name' => 'Aprendiz',
            'email' => 'aprendiz@gmail.com',
            'password' => Hash::make('password')
         ]);       
         $aprendiz->assignRole('aprendiz');

        $instructor = User::create([
            'name' => 'Instructor',
            'email' => 'instructor@gmail.com',
            'password' => Hash::make('password')
        ]);  
        $instructor->assignRole('instructor');
    }
}
