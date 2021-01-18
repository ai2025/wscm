<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgOrderToImgCarIdenSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('img_car_iden_sekolahs', function (Blueprint $table) {
            $table->integer('sequence')->nullable()->after('id');
            $table->boolean('is_showing')->nullable()->after('sequence');
            // $table->enum('imgOrder', ['0', '1', '2', '3'])->nullable()->after('id');
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
            //
        });
    }
}
