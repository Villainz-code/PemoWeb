<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kontak extends Controller
{
    public function index()
    {
        return view('Kontak');
    }
    public function hubungi()
    {
        return view('hubungi');
    }
}

