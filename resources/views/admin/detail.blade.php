<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Informasi Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .data {
            background-color: #ffffff;
            width: 60%;
            text-align: center;
            margin: 0 auto;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            width: 100%;
            margin-bottom: 20px;
        }

        .name {
            color: #4caf50;
        }

        .TitleCard {
            background-color: #4caf50;
            color: white;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 100px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Informasi Peserta Didik Baru</h1>
        <h3>Tahun Ajaran 2023/2024</h3>
    </div>
    <div class="data">
        <div class="card">
            <h1 class="name">#{{ $IP->id }}-{{ $IP->nama }}</h1>
            <div class="InformasiPribadi">
                <h3 class="TitleCard">Informasi Pribadi</h3><br>
                <label for="TTL">Tempat/Tanggal Lahir :
                    <span>{{ $IP->tempat_lahir }}/{{ $IP->tanggal_lahir }}</span></label><br>
                <label for="Alamat">Alamat : <span>{{ $IP->alamat }}</span></label><br>
                <label for="Agama">Agama : <span>{{ $IP->agama }}</span></label><br>
                <label for="Jenis Kelamin">Jenis Kelamin : <span>{{ $IP->jenis_kelamin }}</span></label><br>
                <label for="Kelurahan">Kelurahan : <span>{{ $IP->kelurahan }}</span></label><br>
                <label for="Kecamatan">Kecamatan : <span>{{ $IP->kecamatan }}</span></label><br>
                <label for="Kota / Kabupaten">Kota / Kabupaten : <span>{{ $IP->kota }}</span></label><br>
                <label for="Provinsi">Provinsi : <span>{{ $IP->provinsi }}</span></label><br>
                <label for="No. Telp">No. Telp : <span>{{ $IP->no_telepon }}</span></label><br>
            </div>
        </div>

        <div class="card">
            <div class="InformasiSekolah">
                <h3 class="TitleCard">Informasi Sekolah</h3><br>
                <label for="Nama Sekolah">Nama Sekolah :
                    <span>{{ $IP->InformasiSekolah->nama_sekolah }}</span></label><br>
                <label for="Alamat Sekolah">Alamat Sekolah :
                    <span>{{ $IP->InformasiSekolah->alamat_sekolah }}</span></label><br>
                <label for="No. Telp. Sekolah">No. Telp. Sekolah :
                    <span>{{ $IP->InformasiSekolah->nomor_telp_sekolah }}</span></label><br>
            </div>

            <div class="PilihanJurusan">
                <h3 class="TitleCard">Pilihan Jurusan</h3><br>
                <label for="Jurusan 1">Jurusan 1 : <span>{{ $IP->PilihanJurusan->jurusan1 }}</span></label><br>
                <label for="Jurusan 2">Jurusan 2 : <span>{{ $IP->PilihanJurusan->jurusan2 }}</span></label><br>
            </div>
        </div>
    </div>
</body>

</html>
