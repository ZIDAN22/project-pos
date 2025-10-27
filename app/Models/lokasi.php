<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lokasi extends Model
{
    /**
     * Explicit table name to match the migrations.
     *
     * @var string
     */
    protected $table = 'lokasis';

    protected $fillable = [
        'nama_lokasi',
        'deskripsi',
    ];

    public function inventaris(): HasMany
    {
        return $this->hasMany(inventaris::class, 'lokasi_id');
    }

    public function mutasiAssetsAsal(): HasMany
    {
        return $this->hasMany(mutasi_asset::class, 'lokasi_asal');
    }

    public function mutasiAssetsTujuan(): HasMany
    {
        return $this->hasMany(mutasi_asset::class, 'lokasi_tujuan');
    }
}
