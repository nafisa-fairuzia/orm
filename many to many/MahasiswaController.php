<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('seminar')->get();
                return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }
}
