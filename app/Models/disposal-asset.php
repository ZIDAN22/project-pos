<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class disposal_asset extends Model
{
    protected $table = 'disposal-assets';

    protected $fillable = [
        'inventaris_id',
        'tanggal_disposal',
        'alasan',
        'keterangan',
        'nilai_disposal',
    ];

    protected $casts = [
        'tanggal_disposal' => 'date',
        'nilai_disposal' => 'decimal:2',
    ];

    public function inventaris(): BelongsTo
    {
        return $this->belongsTo(inventaris::class, 'inventaris_id');
    }
}
