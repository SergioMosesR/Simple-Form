<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->text('IPID');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('nomor_telp_sekolah');
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
        Schema::dropIfExists('informasi_sekolahs');
    }
}
