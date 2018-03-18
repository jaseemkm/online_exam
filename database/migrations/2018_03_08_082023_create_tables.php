<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qstnid');
            $table->string('answers');
            $table->string('correct_answer');
        });   


        Schema::create('instruction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('instruction');
         });

        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qstnid');
            $table->string('question');
            $table->string('type');
        }); 

        Schema::create('score', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->string('total_qn');
            $table->string('score');
        });  

        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roll_no');
            $table->string('student_name');
        });

        Schema::create('type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });                 


     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
