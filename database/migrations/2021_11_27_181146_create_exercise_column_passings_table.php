<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseColumnPassingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_column_passings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('choice_id');
            $table->unsignedBigInteger('column_id');
            $table->unsignedBigInteger('passing_id');
            $table->unsignedSmallInteger('order');
            $table->timestamps();

            $table->foreign('choice_id')
                ->references('id')
                ->on('choices')
                ->onDelete('cascade');

            $table->foreign('column_id')
                ->references('id')
                ->on('exercise_columns')
                ->onDelete('cascade');

            $table->foreign('passing_id')
                ->references('id')
                ->on('exercise_passings')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_column_passings');
    }
}
