<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body class="body">
<div class="floating-box">
    <div class="pesan">
        <div>
            <input class="kolom1" type="text" placeholder="Nama">
        </div>
        <div>
            <input class="kolom1" type="text" placeholder="Isi pesan">
        </div>
        <div>
            <input class="kolom2" type="button"  value="Kirim">
            <a href="{{ route('kontak') }}"><input class="kolom2" type="button"  value="Batal"></a>
        </div>
    </div>
</div>
</body>
</html>
