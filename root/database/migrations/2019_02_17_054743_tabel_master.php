<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pendidikan',function(Blueprint $table){
            $table->increments('id');
            $table->string('tingkat');
        });
        Schema::create('m_pekerjaan',function(Blueprint $table){
            $table->increments('id');
            $table->string('pekerjaan');
        });
        Schema::create('m_agama',function(Blueprint $table){
            $table->increments('id');
            $table->string('agama');
        });
        Schema::create('m_cacat',function(Blueprint $table){
            $table->increments('id');
            $table->string('cacat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists([
            'm_pendidikan','m_pekerjaan','m_agama','m_cacat'
        ]);
    }
}
