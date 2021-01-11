<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJmlhPsrtDidiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jmlh_psrt_didiks', function (Blueprint $table) {
            $table->id();
            $table->string('jmlhSis');
            $table->string('guru');
            $table->string('kelas');
            $table->string('jurusan');
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
        Schema::dropIfExists('jmlh_psrt_didiks');
    }
}
