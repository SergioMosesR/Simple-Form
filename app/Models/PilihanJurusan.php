<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanJurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jurusan1',
        'jurusan2',
    ];

    public function informasiPribadi()
    {
        return $this->belongsTo(InformasiPribadi::class, 'IPID');
    }
}
