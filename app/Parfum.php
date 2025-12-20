<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parfum extends Model
{
    protected $table = 'parfums';
    protected $fillable = [
        'namaParfum', 'merek', 'jenisAroma', 'volume_ml', 'harga', 'stok', 'deskripsi', 'gambar'
    ];
}
