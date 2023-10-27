<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User; // Asegúrate de importar el modelo User correctamente

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $docente = Role::create(['name' => 'docente']);
        $alumno = Role::create(['name' => 'alumno']);
        
        $user = User::find(1); // Corrección: Usa el modelo User del espacio de nombres correcto
        $user->assignRole($docente); // Corrección: Usar el objeto de rol, no el nombre.
        
        // Crear y asignar permisos
        Permission::create(['name' => 'profile.destroy'])->assignRole($docente);
        Permission::create(['name' => 'profile.edit'])->assignRole($docente);
        Permission::create(['name' => 'profile.update'])->assignRole($docente);

    }
}



