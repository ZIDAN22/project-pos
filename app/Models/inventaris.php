<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class inventaris extends Model
{
    protected $fillable = [
        'kode_asset',
        'nama_barang',
        'tipe_barang',
        'merk',
        'model',
        'serial_number',
        'spesifikasi',
        'lokasi_id',
        'user_id',
        'status',
        'tanggal_perolehan',
    ];

    protected $casts = [
        'tanggal_perolehan' => 'date',
    ];

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    
    public function mutasiAssets(): HasMany
    {
        return $this->hasMany(mutasi_asset::class, 'inventaris_id');
    }

    public function disposalAssets(): HasMany
    {
        return $this->hasMany(disposal_asset::class, 'inventaris_id');
    }
}
