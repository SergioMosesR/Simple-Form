<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form || Pendaftaran</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #c0c0c0;
        margin: 20px;
    }

    .header {
        text-align: center;
    }

    form {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card1,
    .card2,
    .card3 {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        width: calc(30% - 20px);
        box-sizing: border-box;
    }

    .title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input,
    textarea,
    select {
        width: calc(100% - 16px);
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    select {
        margin-top: 5px;
    }

    .pernyataan {
        font-size: 16px;
        margin-top: 20px;
        text-align: center;
        color: red;
        font-style: italic;
    }

    .button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
        width: auto
    }

    /* Responsive styling for smaller screens */
    @media (max-width: 768px) {

        .card1,
        .card2,
        .card3 {
            width: 100%;
        }
    }
</style>

<body>
    <div class="header">
        <h1>PENDAFTARAN PESERTA DIDIK BARU</h1>
        <h3>Tahun Ajaran 2022/2023</h3>
    </div>

    <form action="{{ route('FormStore') }}" method="post">
        @csrf
        @method('post')
        <div class="card1">
            <div class="title">INFORMASI PRIBADI</div>
            <label for="nama_lengkap">Nama : <input type="text" placeholder="Nama Lengkap"
                    name="nama"></label><br>
            <label for="tempat_tanggal_lahir">Tempat / Tanggal Lahir : <input type="text" placeholder="Tempat Lahir"
                    name="tempat_lahir">
                / <input type="date" name="tanggal_lahir"></label><br>
            <label for="alamat">Alamat :
                <textarea name="alamat" cols="50" rows="4"></textarea>
            </label><br>
            <label for="agama">Agama :
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </label><br>
            <label for="jenis_kelamin">Jenis Kelamin :
                <select name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </label><br>
            <label for="kelurahan">Kelurahan: <input type="text" placeholder="Kelurahan"
                    name="kelurahan"></label><br>
            <label for="kecamatan">Kecamatan: <input type="text" placeholder="Kecamatan"
                    name="kecamatan"></label><br>
            <label for="kota">Kota / Kabupaten: <input type="text" placeholder="Kota / Kabupaten"
                    name="kota"></label><br>
            <label for="provinsi">Provinsi :
                <select name="provinsi">
                    <?php
                    $provinsiOptions = ['Aceh', 'Bali', 'Bangka Belitung', 'Banten', 'Bengkulu', 'Gorontalo', 'DKI Jakarta', 'Jambi', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Timur', 'Kalimantan Utara', 'Kepulauan Riau', 'Lampung', 'Maluku', 'Maluku Utara', 'Nanggroe Aceh Darussalam', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Papua', 'Papua Barat', 'Papua Barat Daya', 'Papua Pegunungan', 'Papua Selatan', 'Riau', 'Sulawesi Barat', 'Sulawesi Selatan', 'Sulawesi Tengah', 'Sulawesi Tenggara', 'Sulawesi Utara', 'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara', 'Yogyakarta'];
                    
                    sort($provinsiOptions);
                    
                    foreach ($provinsiOptions as $provinsi) {
                        echo "<option value=\"$provinsi\">$provinsi</option>";
                    }
                    ?>
                </select>
            </label><br>
            <label for="no_telp">No. Telepon : <input type="text" placeholder="No. Telepon"
                    name="no_telepon"></label><br>
        </div>

        <div class="card2">
            <div class="title">INFORMASI ASAL SEKOLAH</div>
            <label for="nama_sekolah">Nama Sekolah : <input type="text" placeholder="Nama Sekolah"
                    name="nama_sekolah"></label><br>
            <label for="alamat_sekolah">Alamat Sekolah : <input type="text" placeholder="Alamat Sekolah"
                    name="alamat_sekolah"></label><br>
            <label for="nomor_telp_sekolah">No. Telp. Sekolah : <input type="text" placeholder="No. Telp. Sekolah"
                    name="nomor_telp_sekolah"></label><br>
        </div>

        <div class="card3">
            <div class="title">PILIHAN JURUSAN</div>
            <label for="jurusan1">Jurusan 1 :
                <select name="jurusan1">
                    <option value="TP (Teknik Pengelasan)">TP (Teknik Pengelasan)</option>
                    <option value="Kuliner">Kuliner</option>
                    <option value="DKV (Desain Komunikasi Visual)">DKV (Desain Komunikasi Visual)</option>
                    <option value="RPL (Rekayasa Perangkat Lunak)">RPL (Rekayasa Perangkat Lunak)</option>
                    <option value="TKP (Teknik Perumahan dan Kontruksi)">TKP (Teknik Perumahan dan Kontruksi)</option>
                </select>
            </label><br>
            <label for="jurusan2">Jurusan 2 :
                <select name="jurusan2">
                    <option value="TP (Teknik Pengelasan)">TP (Teknik Pengelasan)</option>
                    <option value="Kuliner">Kuliner</option>
                    <option value="DKV (Desain Komunikasi Visual)">DKV (Desain Komunikasi Visual)</option>
                    <option value="RPL (Rekayasa Perangkat Lunak)">RPL (Rekayasa Perangkat Lunak)</option>
                    <option value="TKP (Teknik Perumahan dan Kontruksi)">TKP (Teknik Perumahan dan Kontruksi)</option>
                </select>
            </label>
        </div>

        <div class="pernyataan">Saya menyatakan bahwa data yang saya isikan diatas sudah benar</div>

        <input type="submit" value="Daftar" class="button">
    </form>
</body>

</html>
