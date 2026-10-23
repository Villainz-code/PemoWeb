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
        <h2 class="form-title">Tambah Aktivitas</h2>

        <form action="{{ route('aktivitas.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="nama_aktivitas" class="form-label">Nama Aktivitas</label>
                <input type="text" class="form-control" name="nama_aktivitas" id="nama_aktivitas" placeholder="Masukkan nama aktivitas" value="{{ old('nama_aktivitas') }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan deskripsi aktivitas" required>{{ old('deskripsi') }}</textarea>
            </div>

            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label">Status</label>
                <div class="form-check">
                    <input type="checkbox" name="status" id="status" value="1" {{ old('status') ? 'checked' : '' }}>
                    <label for="status" class="form-check-label">Selesai</label>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-submit">Tambah</button>
                <a href="{{ route('aktivitas') }}" class="btn-cancel">Batal</a>
            </div>
        </form>
    </div>

@include('layouts.footer')
</body>
</html>
