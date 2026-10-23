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
    <div class="floating-box form-container">
        <h2 class="form-title">Detail Aktivitas</h2>
        <div>
            <h3 style="margin-top: 0; color: blueviolet;">{{ $aktivitas->nama_aktivitas }}</h3>
            <p><strong>Deskripsi:</strong> {{ $aktivitas->deskripsi }}</p>
            <p><strong>Tanggal:</strong> {{ $aktivitas->tanggal->format('d M Y') }}</p>
            <p><strong>Status:</strong>
                @if($aktivitas->status)
                    <span class="badge badge-success">Selesai</span>
                @else
                    <span class="badge badge-pending">Belum Selesai</span>
                @endif
            </p>
        </div>
        <div style="margin-top: 24px;">
            <a href="{{ route('aktivitas') }}" class="btn-cancel">Kembali</a>
        </div>
    </div>
@include('layouts.footer')
</body>
</html>
