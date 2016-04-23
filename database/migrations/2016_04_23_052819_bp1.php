<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bp1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_pp')->nullable();
             $table->string('no_pd')->unique();
            // $table->foreign('no_pd')->nullable()
            //         ->references('no_pd')->on('spdcenter')
            //         ->onDelete('cascade');
            
            $table->string('nama')->nullable();
            // $table->foreign('nama')
            //         ->references('nama')->on('spdcenter')
            //         ->onDelete('cascade');        
            $table->string('nip')->nullable();
            $table->foreign('nip')
                    ->references('nip')->on('spdcenter')
                    ->onDelete('cascade');
            $table->integer('pencairan')->nullable();
            $table->string('nama_ppk')->nullable();
             // $table->foreign('nama_ppk')
             //        ->references('nama_ppk')->on('spdcenter')
             //        ->onDelete('cascade');
            $table->string('keterangan')->nullable();
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
        Schema::drop('bp1');
    }
}
