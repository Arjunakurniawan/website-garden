<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routes extends Controller
{
    public function index() {
        return view('index');
    }

    public function tanaman() {
        return view('tanaman');
    }

    public function Tentangkami() {
        return view('tentangkami');
    }
    public function contact() {
        return view('contact');
    }
}

