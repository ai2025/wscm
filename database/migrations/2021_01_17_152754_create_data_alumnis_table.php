<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('namaAlumni');
            $table->string('nisAlumni');
            $table->string('tmptLahir');
            $table->date('tglLahir');
            $table->string('telpAlumni');
            $table->string('emailAlumni');
            $table->string('gender');
            $table->string('jurusanAlumni');
            $table->string('thnLulus');
            $table->string('pkl');
            $table->string('pengalamanKrj');
            $table->string('statusPkrjaan');
            $table->string('tmptKerKul');
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
        Schema::dropIfExists('data_alumnis');
    }
}
