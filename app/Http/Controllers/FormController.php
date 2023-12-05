<?php

namespace App\Http\Controllers;

use App\Models\InformasiPribadi;
use App\Models\InformasiSekolah;
use App\Models\PilihanJurusan;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function View()
    {
        return view('form');
    }

    public function FormStore(Request $request)
    {
        $IP = new InformasiPribadi;
        $IP->nama = $request->nama;
        $IP->tempat_lahir = $request->tempat_lahir;
        $IP->tanggal_lahir = $request->tanggal_lahir;
        $IP->alamat = $request->alamat;
        $IP->agama = $request->agama;
        $IP->jenis_kelamin = $request->jenis_kelamin;
        $IP->kelurahan = $request->kelurahan;
        $IP->kecamatan = $request->kecamatan;
        $IP->kota = $request->kota;
        $IP->provinsi = $request->provinsi;
        $IP->no_telepon = $request->no_telepon;
        $IP->save();

        $IS = new InformasiSekolah;
        $IS->IPID = $IP->id;
        $IS->nama_sekolah = $request->nama_sekolah;
        $IS->alamat_sekolah = $request->alamat_sekolah;
        $IS->nomor_telp_sekolah = $request->nomor_telp_sekolah;
        $IS->save();

        $PJ = new PilihanJurusan;
        $PJ->IPID = $IP->id;
        $PJ->jurusan1 = $request->jurusan1;
        $PJ->jurusan2 = $request->jurusan2;
        $PJ->save();
        return back();
    }
    
}
