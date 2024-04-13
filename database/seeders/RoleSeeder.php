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
        $permission1 = Permission::create(['name' => 'ver-administracion']);
        $permission2 = Permission::create(['name' => 'ver-reportes']);
        $permission3 = Permission::create(['name' => 'ver-maestros']);
        $permission4 = Permission::create(['name' => 'ver-mensajeria']);
        $permission5 = Permission::create(['name' => 'ver-configuracion']);
        $permission6 = Permission::create(['name' => 'ver-resumen']);
        $permission7 = Permission::create(['name' => 'ver-usuarios']);
        $permission8 = Permission::create(['name' => 'ver-roles']);

        $permission1C = Permission::create(['name' => 'crear-cliente']);
        $permission1R = Permission::create(['name' => 'ver-cliente']);
        $permission1U = Permission::create(['name' => 'editar-cliente']);
        $permission1D = Permission::create(['name' => 'eliminar-cliente']);

        $permission2C = Permission::create(['name' => 'crear-proveedor']);
        $permission2R = Permission::create(['name' => 'ver-proveedor']);
        $permission2U = Permission::create(['name' => 'editar-proveedor']);
        $permission2D = Permission::create(['name' => 'eliminar-proveedor']);

        $permission3C = Permission::create(['name' => 'crear-productos']);
        $permission3R = Permission::create(['name' => 'ver-productos']);
        $permission3U = Permission::create(['name' => 'editar-productos']);
        $permission3D = Permission::create(['name' => 'eliminar-productos']);

        $roleAdmin->givePermissionTo(
            $permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8,
            $permission1C, $permission1R, $permission1U, $permission1D,
            $permission2C, $permission2R, $permission2U, $permission2D,
            $permission3C, $permission3R, $permission3U, $permission3D,
        );
        $roleCliente->givePermissionTo(
            $permission4, $permission5, $permission6
        );
    }
}
