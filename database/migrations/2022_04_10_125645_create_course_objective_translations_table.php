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
        Schema::create('course_objective_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->unique(['course_objective_id','locale']);
            $table->text('objective');
            $table->foreignid('course_objective_id')->constrained('course_objectives')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('course_objective_translations');
    }
};
