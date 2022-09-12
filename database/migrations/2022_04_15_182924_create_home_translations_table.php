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
        Schema::create('home_translations', function (Blueprint $table) {
            $table->id();
            $table->text('wayOfLearning');
            $table->text('whoWeAre');
            $table->text('accomplishments');
            $table->text('vision');
            $table->text('mission');
            $table->string('locale')->index();
            $table->unique(['home_id','locale']);
            $table->foreignid('home_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('home_translations');
    }
};
