<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bp2b extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp2b', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spd_id') -> unsigned() -> default(0);
            $table->foreign('spd_id')
                    ->references('id')->on('spdcenter')
                    ->onDelete('cascade');
            $table->string('perjalanana_dinas')->nullable();
            $table->string('angkutan_pegawai')->nullable();
            $table->string('angkutan_keluarga')->nullable();
            $table->string('angkutan_prt')->nullable();
            $table->string('pengepakan')->nullable();
            $table->string('angkutan_barang')->nullable();
            $table->string('uang_harian_tiba')->nullable();
            $table->string('uang_harian_bertolak')->nullable();
            $table->string('uang_harian_pembantu')->nullable();
            $table->string('total2');
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
        Schema::drop('bp2b');
    }
}
