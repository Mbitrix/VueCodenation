<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->nullable();
            $table->string('student');
            $table->integer('marks')->nullable();
            $table->integer('out_of')->nullable();
            $table->string('grade')->nullable();
            $table->date('date_taken')->nullable();
            $table->date('date_completed')->nullable();
            $table->string('markedby')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
