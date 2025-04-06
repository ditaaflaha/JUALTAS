<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "Nobita";
        $pekerjaan = "student";
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
