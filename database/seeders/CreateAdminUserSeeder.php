<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;




class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //Admin Seeder
        $user = User::create([
            'name' => 'Administrador', 
            'email' => 'admi@gmail.com',
            'password' => bcrypt('password')
            ])->assignRole('SuperAdmin');

            $user = User::create([
                'name' => 'Usuario', 
                'email' => 'usu@gmail.com',
                'password' => bcrypt('password')
            ])->assignRole('Alumno');




       
    }
}