<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #333;
        }

        .data {
            margin: 0 auto;
            width: 80%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Informasi Peserta Didik Baru</h1>
        <h3>Tahun Ajaran 2023/2024</h3>
    </div>
    <div class="data">
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Details</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td><a href="{{ route('Detail', ['id' => $item->id]) }}">Lihat Detail</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
