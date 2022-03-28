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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id('ID');
            // $table->increments('STUDENT #', 2200000);
            $table->integer('STUDENT_NUMBER');
            $table->text('NAME');
            $table->text('COLLEGE');
            $table->text('PROGRAM');
            $table->text('COARSE_CODE');
            $table->text('COARSE_NAME');
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
        Schema::dropIfExists('applicants');
    }
};
