<?php

namespace App\Models;

use App\Models\Ekraf;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorySubEkraf extends Model
{
    use HasFactory;
    protected $table = 'category_sub_ekraf';
    protected $guarded = ['id'];

    public function Ekraf()
    {
        return $this->hasMany(Ekraf::class);
    }


}
