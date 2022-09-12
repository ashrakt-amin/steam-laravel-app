<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_course', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('course_id');
            $table->primary(['language_id','course_id']);
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_course');
    }
};
