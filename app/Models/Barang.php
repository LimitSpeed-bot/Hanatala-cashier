<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $fillable = ['nama_barang', 'kategori_id', 'harga', 'stok', 'diskon'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

  
}
