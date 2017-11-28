<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('personal_picture');
            $table->text('personal_information');
            $table->string('course_one_name');
            $table->text('course_one_description');
            $table->string('course_two_name')->nullable();
            $table->text('course_two_description')->nullable();
            $table->string('cv_file');
            $table->string('passport_photo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('application_forms');
    }
}
