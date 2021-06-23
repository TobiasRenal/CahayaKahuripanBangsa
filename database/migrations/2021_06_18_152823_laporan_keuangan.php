<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaporanKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_keuangan', function (Blueprint $table) {
            $table->id('id_keuangan')->autoIncrement();
            $table->integer('role_id')->nullable();
            $table->foreign('role_id')->references('role_id')->on('role_pengurus');
            $table->String('nama_Keuangan');
            $table->date('tanggal_laporan_keuangan');
            $table->bigInteger('jumlah');
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
