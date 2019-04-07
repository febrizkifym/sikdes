<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_penduduk',function(Blueprint $table){
            $table->increments('id');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('nama');
            $table->tinyInteger('jk'); //1 = laki-laki , 2 = perempuan
            $table->tinyInteger('status'); //1 = kawin , 2 = belum kawin
            $table->tinyInteger('warganegara'); //1 = wni , 2 = wna , 3 = dwi
            $table->tinyInteger('kedudukan'); //1 = kk , 2 = istri , 3 = ak , 4 = dll
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->date('tgl_lahir');
            $table->boolean('butahuruf');
            $table->unsignedTinyInteger('id_agama')->index();
            $table->unsignedTinyInteger('id_pend')->index();
            $table->unsignedTinyInteger('id_pekerjaan')->index();
            $table->unsignedTinyInteger('id_cacat')->index();
        });
        Schema::create('t_mutasi',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('id_penduduk')->index();
            $table->tinyInteger('status'); //1 = datang , 2 = pergi , 3 = meninggal
            $table->text('keterangan');
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
        Schema::dropIfExist([
            't_penduduk','t_mutasi'
        ]);
    }
}
