<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notaspd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaspd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota_id') -> unsigned() -> default(0);
            $table->foreign('nota_id')
                    ->references('id')->on('spdcenter')
                    ->onDelete('cascade');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('filename');
            $table->string('tanggal_pengiriman');
            $table->string('no_st');
            $table->string('no_resi');

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
        Schema::drop('notaspd');
    }
}
