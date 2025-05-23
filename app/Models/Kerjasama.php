<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kerjasama extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mitra',
        'jenis_kerjasama',
        'tanggal_mulai',
        'tanggal_selesai',
        'keterangan',
    ];

    public function penelitians()
    {
        return $this->hasMany(Penelitian::class);
    }

    public function pengabdians()
    {
        return $this->hasMany(Pengabdian::class);
    }
}
