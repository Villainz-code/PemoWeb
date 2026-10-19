
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<nav class="nav">
    <ul class="navUl">
        <li class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
            <a class="nava"href="{{ route('beranda') }}">Beranda</a>
        </li>
        <li class="{{ request()->routeIs('datadiri') ? 'active' : '' }}">
            <a class="nava" href="{{ route('datadiri') }}">Data Diri</a>
        </li>
        <li class="{{ request()->routeIs('aktivitas') ? 'active' : '' }}">
            <a class="nava" href="{{ route('aktivitas') }}">Aktivitas</a>
        </li>
        <li class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
            <a class="nava" href="{{ route('kontak') }}">Kontak</a>
        </li>
    </ul>
</nav>
