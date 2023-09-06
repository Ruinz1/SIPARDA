<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
   protected $table = 'paket_wisata';

    protected $fillable = [
        'nama_paket_wisata',
        'lokasi_tempat_wisata',
        'nama_tempat_wisata',
        'deskripsi_singkat',
        'informasi',
        'image',
        'embed_gmaps',
        'tour'
    ];
}
