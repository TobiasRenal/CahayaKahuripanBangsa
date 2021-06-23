<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->id('id_asset')->autoIncrement();
            $table->integer('role_id')->nullable();
            $table->foreign('role_id')->references('role_id')->on('role_pengurus');
            $table->String('nama_asset');
            $table->date('tanggal_perolehan');
            $table->bigInteger('nilai_perolehan');
            $table->String('asal_asset');
            $table->String('keterangan');
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
        //
    }
}
