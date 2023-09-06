<?php

namespace App\Models;

use App\Models\CategorySubEkraf;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekraf extends Model
{
    protected $table = 'ekonomi_kreatif';

    protected $fillable = [
        'nama',
        'no_whatsapp',
        'email',
        'jenis_kelamin',
        'nama_usaha',
        'alamat',
        'lokasi_usaha',
        'jenis_usaha',
        'tahun_berdiri',
        'jumlah_karyawan',
        'modal',
        'omset',
        'marketplace',
        'website',
        'permasalahan',
        'image',
        'id_category_sub_ekraf',
        'status'
    ];

    public function CategorySubEkraf()
    {
        return $this->belongsTo(CategorySubEkraf::class, 'id_category_sub_ekraf', 'id');
    }
}
