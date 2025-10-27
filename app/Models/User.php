<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'department',
        'role',
        'phone',
        'password',
    ];

    /* ==================================================
     | ✅ RELASI KE TABEL INVENTARIS (Asset yang dipegang)
     | 1 User bisa memiliki banyak barang inventaris
     ===================================================*/
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class, 'user_id');
    }


    /* ==================================================
     | ✅ RELASI KE MUTASI ASSET
     | User sebagai pelaku mutasi (pemindah barang)
     ===================================================*/
    public function mutasiAsset()
    {
        return $this->hasMany(mutasi_asset::class, 'user_id');
    }

    /* ==================================================
     | ✅ Relasi User dengan Disposal (penghapusan asset)
     | Opsional: Jika user yang melakukan penghapusan disimpan
     ===================================================*/
    public function disposalAsset()
    {
        return $this->hasMany(disposal_asset::class, 'user_id');
    }

    /* ==================================================
     | ✅ Cek Role User (untuk akses admin atau IT Support)
     ===================================================*/
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isITSupport()
    {
        return $this->role === 'it_support';
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
