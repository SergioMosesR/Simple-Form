<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiSekolah extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_sekolah',
        'alamat_sekolah',
        'nomor_telp_sekolah',
    ];

    public function informasiPribadi()
    {
        return $this->belongsTo(InformasiPribadi::class, 'IPID');
    }
}
