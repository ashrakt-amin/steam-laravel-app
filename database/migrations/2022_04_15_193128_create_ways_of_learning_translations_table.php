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
        Schema::create('ways_of_learning_translations', function (Blueprint $table) {
            $table->id();
            $table->String('way');
            $table->string('locale')->index();
            $table->unique(['ways_of_learning_id','locale']);
            $table->foreignid('ways_of_learning_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ways_of_learning_translations');
    }
};
