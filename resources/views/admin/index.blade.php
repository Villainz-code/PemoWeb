<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body class="body">
    <div class="floating-box form-container">
        <a class="form-title" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
        <div class="nav">
            <ul class="navUl">
                <li>
                    <a class="nava" href="#" role="button">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <a class="nava" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <h1>Selamat datang di Dashboard Admin</h1>
        <p>Ini adalah halaman utama untuk admin</p>
    </div>
</body>
</html>
