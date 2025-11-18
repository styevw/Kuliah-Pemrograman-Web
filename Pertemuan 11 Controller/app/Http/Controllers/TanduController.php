<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanduController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function produk()
    {
        return view('produk');
    }

    public function kontak()
    {
        return view('kontak');
    }
}