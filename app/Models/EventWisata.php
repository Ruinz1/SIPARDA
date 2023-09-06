<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventWisata extends Model
{
    protected $table = 'event_wisata';
    
    
    protected $fillable = [
        'nama_event',
        'lokasi_event',
        'tanggal_event',
        'deskripsi',
        'informasi',
        'image'
    ];
}
