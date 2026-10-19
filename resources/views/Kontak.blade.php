<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body class="body">
@include('layouts.header')
<div class="floating-box">
    <h3>Anda bisa menghubungi saya di:</h3>
    <p class="p1">Instagram : <a href="https://www.instagram.com/ahmdnrrfii/">@ahmdnrrfii</a></p>
    <p class="p1">Email : <a href="">ahmadnurrafiu@gmail.com</a></p>
    <p class="p1">Whatsapp : 08123456789</p>
    <a href="{{ route('hubungi') }}" class="link-hubungi">Hubungi Saya</a>
</div>

@include('layouts.footer')
</body>
</html>
