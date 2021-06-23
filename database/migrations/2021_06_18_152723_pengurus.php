<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id('id_pengurus')->autoIncrement();
            $table->integer('role_id');
            $table->foreign('role_id')->references('role_id')->on('role_pengurus');
            $table->String('nama_pengurus',255);
            $table->String('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->String('alamat',255);
            $table->String('no_telepon');
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
