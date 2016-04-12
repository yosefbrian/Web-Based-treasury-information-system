<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profil extends Migration
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
            $table -> integer('profil_id') -> unsigned() -> default(0);
            $table->foreign('profil_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->string('nama');
            $table->string('nip')->unique();
            $table->string('jabatan');
            $table->string('npwp');
            $table->string('jenis_kelamin');
            $table->string('nm_status_pegawai');
            $table->string('pangkat');
            $table->string('jenis_jabatan');
            $table->string('unit_organisasi');
            $table->string('jabatan_grade');
            $table->string('nama_bank');
            $table->string('no_rekening');
            $table->string('nama_rekening');
            $table->string('filename');
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
        Schema::drop('profil');
    }
}
