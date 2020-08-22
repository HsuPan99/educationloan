<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_detail', function (Blueprint $table) {
            $table->id();
            $table->string('rollno');
            $table->text('university');
            $table->text('year');
            $table->text('semester');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();
            $table->foreign('student_id')
                ->references('id')
                ->on('student_info')
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
        Schema::dropIfExists('education_detail');
    }
}
