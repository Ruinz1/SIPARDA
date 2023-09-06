<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event');
            $table->string('lokasi_event');
            $table->date('tanggal_event');
            $table->string('deskripsi');
            $table->string('informasi');
            $table->string('image');
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
        Schema::dropIfExists('event_wisata');
    }
}
