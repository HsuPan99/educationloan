<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_info', function (Blueprint $table) {
            $table->id();
            $table->integer('educationexp');
            $table->integer('accomodationexp');
            $table->integer('utilityexp');
            $table->integer('monthlyincome');
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
        Schema::dropIfExists('financial_info');
    }
}
