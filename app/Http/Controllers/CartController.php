<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman keranjang belanja
        return view('cart');
    }
}
