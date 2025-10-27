<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengadaan extends Model
{
    protected $table = 'pengadaans';

    protected $fillable = [
        'nama_barang',
        'jumlah',
        'harga_satuan',
        'vendor',
        'invoice',
        'tanggal_pengadaan',
    ];

    protected $casts = [
        'tanggal_pengadaan' => 'date',
        'harga_satuan' => 'decimal:2',
        'jumlah' => 'integer',
    ];
}
