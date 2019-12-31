<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->role_name = 'admin';
        $role_admin->role_description = ' Senior Adminstrator ';
        $role_admin->save();

        $role_manager = new Role();
        $role_manager->role_name = 'human resource';
        $role_manager->role_description = 'Senior manager User';
        $role_manager->save();


        $role_manager = new Role();
        $role_manager->role_name = 'supervisor';
        $role_manager->role_description = 'General Supervisor User';
        $role_manager->save();

    }
}


    
       