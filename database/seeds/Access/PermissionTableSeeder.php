<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PermissionTableSeeder.
 */
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::table(config('access.permissions_table'))->truncate();
            DB::table(config('access.permission_role_table'))->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM '.config('access.permissions_table'));
            DB::statement('DELETE FROM '.config('access.permission_role_table'));
        } else {
            //For PostgreSQL or anything else
            DB::statement('TRUNCATE TABLE '.config('access.permissions_table').' CASCADE');
            DB::statement('TRUNCATE TABLE '.config('access.permission_role_table').' CASCADE');
        }

        /**
         * Don't need to assign any permissions to administrator because the all flag is set to true
         * in RoleTableSeeder.php.
         */

        /**
         * Misc Access Permissions.
         */
        $permission_model = config('access.permission');
        $viewBackend = new $permission_model();
        $viewBackend->name = 'view-backend';
        $viewBackend->display_name = 'View Backend';
        $viewBackend->sort = 1;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->save();

        /**
         * General Permissions.
         */
        $permission_model = config('access.permission');
        $manageSliders = new $permission_model();
        $manageSliders->name = 'manage-general';
        $manageSliders->display_name = 'Gerenciar Sliders';
        $manageSliders->sort = 6;
        $manageSliders->created_at = Carbon::now();
        $manageSliders->updated_at = Carbon::now();
        $manageSliders->save();

        /**
         * Access Permissions.
         */
        $permission_model = config('access.permission');
        $manageUsers = new $permission_model();
        $manageUsers->name = 'manage-users';
        $manageUsers->display_name = 'Gerenciar Usuários';
        $manageUsers->sort = 2;
        $manageUsers->created_at = Carbon::now();
        $manageUsers->updated_at = Carbon::now();
        $manageUsers->save();

        $permission_model = config('access.permission');
        $manageRoles = new $permission_model();
        $manageRoles->name = 'manage-roles';
        $manageRoles->display_name = 'Gerenciar Funções';
        $manageRoles->sort = 3;
        $manageRoles->created_at = Carbon::now();
        $manageRoles->updated_at = Carbon::now();
        $manageRoles->save();

        /**
         * Catalog Permissions.
         */
        $permission_model = config('access.permission');
        $manageCategories = new $permission_model();
        $manageCategories->name = 'manage-categories';
        $manageCategories->display_name = 'Gerenciar Categorias';
        $manageCategories->sort = 4;
        $manageCategories->created_at = Carbon::now();
        $manageCategories->updated_at = Carbon::now();
        $manageCategories->save();

        $permission_model = config('access.permission');
        $manageProducts = new $permission_model();
        $manageProducts->name = 'manage-products';
        $manageProducts->display_name = 'Gerenciar Produtos';
        $manageProducts->sort = 5;
        $manageProducts->created_at = Carbon::now();
        $manageProducts->updated_at = Carbon::now();
        $manageProducts->save();

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
