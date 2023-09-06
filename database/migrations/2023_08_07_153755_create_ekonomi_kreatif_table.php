<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkonomiKreatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekonomi_kreatif', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('no_whatsapp');
            $table->string('jenis_kelamin');
            $table->string('nama_usaha');
            $table->string('alamat');
            $table->string('lokasi_usaha');
            $table->string('jenis_usaha');
            $table->date('tahun_berdiri');
            $table->integer('jumlah_karyawan');
            $table->integer('modal');
            $table->integer('omset');
            $table->integer('catatan_keuangan');
            $table->string('marketplace');
            $table->string('website');
            $table->string('permasalahan');
            $table->string('image');
            $table->foreignId('id_category_sub_ekraf');
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
        Schema::dropIfExists('ekonomi_kreatif');
    }
}
