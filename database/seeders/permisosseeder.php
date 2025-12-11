<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class permisosseeder extends Seeder
{
    public function run(): void
    {
        $permisos = [
            'ver_usuarios',
            'ver_roles',
            'ver_permisos',
            'crear_usuario',
            'crear_role',
            'crear_permiso',
            'editar_usuario',
            'editar_role',
            'editar_permiso',
            'eliminar_usuario',
            'eliminar_role',
            'eliminar_permiso',
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}