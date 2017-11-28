<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeachingSlotSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PermissionAndRoleSeeder::class);
    }
}
