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
    <div>
    <h2>Daftar Aktivitas</h2>
    <a href="{{ route('aktivitas.create') }}" class="btn-primary"> + Tambah Aktivitas</a>
        <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama_aktivitas }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{  $item->tanggal->format('d m Y') }}</td>
                    <td>{{ $item->status ? 'Selesai' : 'Belum Selesai'}}</td>
                    <td>
                        <a href="{{ route('aktivitas.show', $item->id) }}" class="btn-primary">View</a>
                        <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn-primary">Edit</a>
                        <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@include('layouts.footer')
</body>
</html>
