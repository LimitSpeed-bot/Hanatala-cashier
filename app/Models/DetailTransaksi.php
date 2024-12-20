<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $fillable = ['transaksi_id', 'barang_id', 'qty', 'harga'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id','id');
    }
}
