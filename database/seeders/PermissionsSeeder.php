<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $permissionsList = [

            'users show',
            'users create',
            'users edit',
            'users delete',

            'roles show',
            'roles create',
            'roles edit',
            'roles delete',

            'services categories show',
            'services categories create',
            'services categories edit',
            'services categories delete',

            'services show',
            'services create',
            'services edit',
            'services delete',

            'products show',
            'products create',
            'products edit',
            'products delete',

            'ads show',
            'ads create',
            'ads edit',
            'ads delete',

            'countries show',
            'countries create',
            'countries edit',
            'countries delete',

            'cities show',
            'cities create',
            'cities edit',
            'cities delete',

            'reservations show',
            'reservations create',
            'reservations edit',
            'reservations delete',

            'contacts show',
            'contacts delete',

            'settings show',


        ];
        $roles = [
            'Admin' => $permissionsList,
            'Tenant' => [],
            'Rented' => [],
            'Supervisor' => [],

        ];

        foreach ($roles as $role => $permissions) {
            $Role = Role::findOrCreate($role);
            foreach ($permissions as $permission) {
                Permission::findOrCreate($permission);
                $Role->syncPermissions(Permission::whereIn('name', $permissions)->get());
            }
        }
    }
}
