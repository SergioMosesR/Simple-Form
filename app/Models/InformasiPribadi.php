<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPribadi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tampat_lahir',
        'tanggal_lahir',
        'alamat',
        'agama',
        'jenis_kelamin',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'no_telepon',
    ];

    public function informasiSekolah()
    {
        return $this->hasOne(InformasiSekolah::class, 'IPID');
    }

    public function pilihanJurusan()
    {
        return $this->hasOne(PilihanJurusan::class, 'IPID');
    }
}
