<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_table', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('student_name',60);
            $table->string('student_class',50);
            $table->string('student_email',50);
            $table->integer('student_rollno')->length(20)->unsigned();
            $table->integer('student_age')->length(10)->unsigned();
            $table->enum('student_gender',['Male','Female','Others']);
            $table->string('student_password');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('student');
    }
}
