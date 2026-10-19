<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body class="body">
 @include('layouts.header')
  <div class="floating-box">
   <h1 class="welc">Wellcome To </h1>
   <h1 class="welc2">My Porto Website</h1>
   <p class="p1b">
    Perkenalkan nama saya Ahmad Nur Rafi'u seorang mahasiswa Teknik Informatika dari Universitas Sains Al-Qur'an. Saat ini saya sedang mendalami sebagai web developer dan UI/UX.
    </p>
    <h3 class="h3b">WEB Developer & UI/UX Enthusiast</h3>
  </div>
 @include('layouts.footer')
</body>
</html>
