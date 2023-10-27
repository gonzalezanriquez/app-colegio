<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User; // Asegúrate de importar el modelo User correctamente

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        // Role::create(['name' => 'docente']);
        // Role::create(['name' => 'administrador']);

        // Crear usuario personalizado y asignarle el rol de docente
        // $user = User::create([
        //     'name' => 'Admin',
        //     'email' => 'gonzalezanriquez@gmail.com',
        //     'password' => bcrypt('7589Lean'), // Cambia 'password' por la contraseña real
        // ]);

        // $user->assignRole('docente');

        $user = User::find(2);

        // Asignar el rol de administrador
        $user->assignRole('administrador');

    }
}



