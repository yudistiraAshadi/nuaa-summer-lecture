<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('college_id')->unsigned()->nullable();
            $table->foreign('college_id')->references('number')->on('colleges');
            $table->integer('teaching_slot_id')->unsigned()->nullable();
            $table->foreign('teaching_slot_id')->references('id')->on('teaching_slots');

            $table->string('course_name');
            $table->text('course_description');

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
        Schema::drop('teachers');
    }
}
