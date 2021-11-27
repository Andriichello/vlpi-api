<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoiceColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice_column', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('choice_id')->unique();
            $table->unsignedBigInteger('column_id');
            $table->unsignedTinyInteger('order')->nullable();
            $table->timestamps();

            $table->foreign('choice_id')
                ->references('id')
                ->on('choices');

            $table->foreign('column_id')
                ->references('id')
                ->on('exercise_columns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choice_column');
    }
}
