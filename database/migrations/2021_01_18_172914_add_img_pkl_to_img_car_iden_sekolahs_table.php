<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgPklToImgCarIdenSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('img_car_iden_sekolahs', function (Blueprint $table) {
            $table->enum('kategori', ['pkl', 'identitas'])->after('keterangan');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('img_car_iden_sekolahs', function (Blueprint $table) {
            
        });
    }
}
