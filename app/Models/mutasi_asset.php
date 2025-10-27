<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mutasi_asset extends Model
{
    protected $table = 'mutasi_assets';

    protected $fillable = [
        'inventaris_id',
        'lokasi_asal',
        'lokasi_tujuan',
        'user_id',
        'tanggal_mutasi',
        'keterangan',
    ];

    protected $casts = [
        'tanggal_mutasi' => 'date',
    ];

    public function inventaris(): BelongsTo
    {
        return $this->belongsTo(inventaris::class, 'inventaris_id');
    }

    public function lokasiAsal(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_asal');
    }

    public function lokasiTujuan(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_tujuan');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
