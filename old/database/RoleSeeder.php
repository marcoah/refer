<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //definir los roles para cada usuario en funcion a los requisitos del sistema
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleCliente = Role::create(['name' => 'Cliente']);
        $roleSuper = Role::create(['name' => 'super-admin']); // gets all permissions via Gate::before rule; see AuthServiceProvider

        //definir las acciones en funcion a los requisitos del sistema

        $permission2 = Permission::create(['name' => 'ver-reportes']);
        $permission3 = Permission::create(['name' => 'ver-maestros']);
        $permission4 = Permission::create(['name' => 'ver-mensajeria']);
        $permission5 = Permission::create(['name' => 'ver-configuracion']);
        $permission6 = Permission::create(['name' => 'ver-resumen']);
        $permission7 = Permission::create(['name' => 'ver-usuarios']);
        $permission8 = Permission::create(['name' => 'ver-roles']);

        $permission1a = Permission::create(['name' => 'pieza-ver']);
        $permission1b = Permission::create(['name' => 'pieza-create']);
        $permission1c = Permission::create(['name' => 'pieza-index']);
        $permission1d = Permission::create(['name' => 'pieza-editar']);
        $permission1e = Permission::create(['name' => 'pieza-eliminar']);


        $roleAdmin->givePermissionTo(
            $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8,
            $permission1a, $permission1b, $permission1c, $permission1d, $permission1e,
        );
        $roleCliente->givePermissionTo(
            $permission4, $permission5, $permission6
        );
    }
}
