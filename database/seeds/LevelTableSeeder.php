<?php

use Illuminate\Database\Seeder;
use App\Level;
class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level_admin = new Level();
        $level_admin->level_name = 'admin';
        $level_admin->level_description = ' Senior Adminstration ';
        $level_admin->save();

        $level_manager = new Level();
        $level_manager->level_name = 'manager';
        $level_manager->level_description = 'Senior manager User';
        $level_manager->save();
    }
}
