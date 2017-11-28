<?php

use Illuminate\Database\Seeder;

class TeachingSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Teacher\TeachingSlot::class, 2)->create(); 
    }
}
