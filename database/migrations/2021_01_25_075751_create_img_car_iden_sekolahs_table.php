<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgCarIdenSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_car_iden_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_showing')->nullable();
            $table->string('imgIden');
            $table->string('keterangan');
            $table->enum('kategori',['pkl','identitas','header']);
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
        Schema::dropIfExists('img_car_iden_sekolahs');
    }
}
