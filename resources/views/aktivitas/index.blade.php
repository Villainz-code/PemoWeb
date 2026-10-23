<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body class="body">
@include('layouts.header')
    <div class="floating-box">
        <div class="table-header-bar">
            <h2 class="table-title">Daftar Aktivitas</h2>
            <a href="{{ route('aktivitas.create') }}" class="btn-add">
                <span>+</span> Tambah Aktivitas
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th style="width: 25%;">Nama Aktivitas</th>
                        <th style="width: 30%;">Deskripsi</th>
                        <th style="width: 15%;">Tanggal</th>
                        <th style="width: 15%; text-align: center;">Status</th>
                        <th style="width: 15%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr>
                        <td class="font-semibold">{{ $item->nama_aktivitas }}</td>
                        <td class="text-muted">{{ $item->deskripsi }}</td>
                        <td>{{ $item->tanggal->format('d M Y') }}</td>
                        <td style="text-align: center;">
                            @if ($item->status)
                                <span class="badge badge-success">Selesai</span>
                            @else
                                <span class="badge badge-pending">Belum Selesai</span>
                            @endif
                        </td>
                        <td style="text-align: center;">
                            <div class="action-buttons">
                                <a href="{{ route('aktivitas.show', $item->id) }}" class="btn-action btn-view">View</a>
                                <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn-action btn-edit">Edit</a>
                                <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus aktivitas ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action btn-delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="table-empty">
                            Belum ada aktivitas. Silakan klik tombol <strong>+ Tambah Aktivitas</strong> untuk menambahkan data baru.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@include('layouts.footer')
</body>
</html>
