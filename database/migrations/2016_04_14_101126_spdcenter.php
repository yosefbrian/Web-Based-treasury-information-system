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
        Schema::create('profil', function(Blueprint $table)
        {
            $table->increments('id');
            $table -> integer('checklist')
            $table->string('no_pd');
            $table->string('no_st');     

$table -> integer('user_nip') -> unsigned() -> default(0);
            $table->foreign('user_nip')
                    ->references('nip')->on('profil')
                    ->onDelete('cascade');

            $table->string('nama_lengkap');
             $table->string('berangkat');
              $table->string('tujuan');
               $table->string('tanggal');
                $table->string('kegiatan');
                $table->string('keterangan');
                $table->string('namappk');



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
