<?php

use Illuminate\Database\Seeder;
use App\Level;
use App\Staff;
class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $level_admin = Level::where ('level_name', 'admin')->first();
        $level_manager  = Level::where('level_name', 'manager')->first();

        $admin_level = new Staff();
        $admin_level->staff_name = 'Alfred Kakuli';
        $admin_level->staff_email = 'admin@ayonets.com';
        $admin_level->staff_number = 'AYO-3256';
        $admin_level->staff_position = 'adminstrator';
        $admin_level->staff_phone = '0719457207';
        $admin_level->save();
        $admin_level->levels()->attach($level_manager);

        $manager_level = new Staff();
        $manager_level->staff_name = 'Josephine Mbuli';
        $manager_level->staff_email = 'manager@ayonets.com';
        $manager_level->staff_number = 'AYO-5658';
        $manager_level->staff_position = 'manager';
        $manager_level->staff_phone = '0702358634';
        $manager_level->save();
        $manager_level->levels()->attach($level_admin);
    }
}
