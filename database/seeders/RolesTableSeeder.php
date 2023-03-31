<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'instructor'],
            ['name' => 'aprendiz'],
        ];

        foreach($roles as $role){
            Role::create([
                'name' => $role['name'],
                'guard_name' => 'web'
            ]);
        }
    }
}
