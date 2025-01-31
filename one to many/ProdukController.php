<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $kategori = Kategori::with('produk')->get();
        return view('produk', compact('kategori'));
    }
}
