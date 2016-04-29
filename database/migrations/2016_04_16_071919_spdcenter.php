<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spdcenter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('spdcenter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengiriman')->nullable();
            $table->string('no_pd')->nullable();
            $table->string('no_st')->nullable();
            $table->string('nip')->nullable();
            $table->foreign('nip')
                    ->references('nip')->on('profil')
                    ->onDelete('cascade');
            $table->string('nama')->nullable();
            $table->string('berangkat')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('nama_ppk')->nullable();
            $table->string('tanggal_pengiriman')->nullable();
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
        Schema::drop('spdcenter');
    }
}
