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
        Schema::create('course_content_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->unique(['course_content_id','locale']);
            $table->text('content');
            $table->foreignid('course_content_id')->constrained('course_contents')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('course_content_translations');
    }
};
