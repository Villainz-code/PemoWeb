<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body class="body">
@include('layouts.header')
<div class="floating-box">
    <div class="wadahflex">
        <img src="{{ asset('foto.png') }}" alt="" class="foto">
        <table class="tdiri">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Ahmad Nur Rafi'u</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>2024150013</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>Teknik Informatika</td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>:</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Universitas</td>
            <td>:</td>
            <td>Sains Al-Qur'an</td>
        </tr>
        </table>
    </div>
</div>
 @include('layouts.footer')
</body>
</html>
