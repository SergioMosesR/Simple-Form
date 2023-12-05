<?php

namespace App\Http\Controllers;

use App\Models\InformasiPribadi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Data()
    {
        $data = InformasiPribadi::get();
        return view('admin.data', compact('data'));
    }

    public function Detail($id)
    {
        $IP = InformasiPribadi::with('informasiSekolah', 'pilihanJurusan')->find($id);

        return view('admin.detail', compact('IP'));
    }
}
