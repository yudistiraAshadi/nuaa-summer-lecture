<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Applicant\ApplicationForm::class, function (Faker $faker) {
    $randomNumber = rand(0, 1);
    $courseTwoName = NULL;
    $courseTwoDescription = NULL;

    if ( $randomNumber == 1 ) {
        $courseTwoName = $faker->name;
        $courseTwoDescription = $faker->text;
    }

    return [
        'personal_picture' => $faker->imageUrl($width = 140, $height = 140),
        'personal_information' => $faker->text,
        'course_one_name' => $faker->name,
        'course_one_description' => $faker->text,
        'course_two_name' => $courseTwoName,
        'course_two_description' => $courseTwoDescription,
        'cv_file' => $faker->imageUrl($width = 140, $height = 140),
        'passport_photo' => $faker->imageUrl($width = 140, $height = 140)
    ];
});
