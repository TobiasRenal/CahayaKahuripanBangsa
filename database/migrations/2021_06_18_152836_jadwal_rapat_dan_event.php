<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalRapatDanEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_rapat_event', function (Blueprint $table) {
            $table->id('id_jadwal')->autoIncrement();
            $table->integer('role_id')->nullable();
            $table->foreign('role_id')->references('role_id')->on('role_pengurus');
            $table->String('nama_jadwal');
            $table->String('tempat');
            $table->date('tanggal_jadwal');
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
