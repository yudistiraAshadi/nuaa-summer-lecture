<?php

use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $totalNumberOfColleges = 13;
        
        for ( $i = 1; $i <= $totalNumberOfColleges; $i++ ) {
            DB::table('colleges')->insert([
                'number' => $i,
                'name' => $faker->unique()->company,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        };
    }
}
