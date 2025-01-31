<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Penulis, Buku};

class PenulisController extends Controller
{
    public function index() 
    {
        $penulis = Penulis ::all();

        return view('penulis',['penulis' => $penulis]);
    }
}
