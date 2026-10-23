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
        <h2 class="form-title">Edit Aktivitas</h2>
        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="nama_aktivitas">Nama Aktivitas</label>
            <input type="text" class="form-control" name="nama_aktivitas" id="nama_aktivitas" value="{{ $aktivitas->nama_aktivitas }}" required>
        </div>
        <div>
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $aktivitas->deskripsi }}</textarea>
        </div>
        <div>
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $aktivitas->tanggal->format('Y-m-d') }}" required>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="checkbox" id="status" name="status" value="1" {{ $aktivitas->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Selesai</label>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="{{ route('aktivitas') }}" class="btn-cancel">Cancel</a>
        </div>
        </form>

    </div>

@include('layouts.footer')
</body>
</html>
