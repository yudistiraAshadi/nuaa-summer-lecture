<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Teacher\TeachingSlot::class, function (Faker $faker) {
    return [
        'starting_from' => $faker
            ->dateTimeBetween($startDate = '+3 months', $endDate = '+4 months')
            ->format('Y-m-d'),
        'ending_at' => $faker
            ->dateTimeBetween($startDate = '+5 months', $endDate = '+6 months')
            ->format('Y-m-d')
    ];
});
