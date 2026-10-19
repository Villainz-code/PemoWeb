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
    <div class="wadahflexa">
        <img src="{{ asset('kuliah.png') }}" alt="" class="fotoa">
        <p class="p1a"> Kuliah</p>
    </div>
</div>
<div class="floating-box">
    <div class="wadahflexa">
        <p class="p1a">Mengerjakan Projek</p>
        <img src="{{ asset('tugas.png') }}" alt="" class="fotoa">
    </div>
</div>
<div class="floating-box">
    <div class="wadahflexa">
        <img src="{{ asset('hobby.png') }}" alt="" class="fotoa">
        <p class="p1a"> Hobby</p>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
