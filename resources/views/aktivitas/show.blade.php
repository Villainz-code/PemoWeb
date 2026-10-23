<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Aktivitas</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body class="body">
@include('layouts.header')
    <div>
        <div>
            <h5>{{ $aktivitas->nama_aktivitas }}</h5>
            <p><strong>Deskripsi</strong> {{ $aktivitas->deskripsi }}</p>
            <p><strong>Tanggal</strong> {{ $aktivitas->tanggal->format('d m Y') }}</p>
            <p><strong>Status</strong> {{ $aktivitas->status ? 'Selesai' : 'Belum Selesai' }}</p>
        </div>
    </div>
@include('layouts.footer')
</body>
</html>
