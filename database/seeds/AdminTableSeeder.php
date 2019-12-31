<?php
use Illuminate\Database\Seeder;
use App\Role;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = Role::where ('role_name', 'admin')->first();
        $role_manager  = Role::where('role_name', 'manager')->first();

        $admin_role = new Admin();
        $admin_role->username = 'Aldana';
        $admin_role->email = 'admin@aldana.com';
        $admin_role->password = bcrypt('secret');
        $admin_role->save();
        $admin_role->roles()->attach($role_manager);

        $manager_role = new Admin();
        $manager_role->username = 'Alfred Kakuli';
        $manager_role->email = 'alfredkakuli@gmail.com';
        $manager_role->password = bcrypt('secret');
        $manager_role->save();
        $manager_role->roles()->attach($role_admin);
    }
}
