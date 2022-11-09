<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;

class SkripsiDosenController extends Controller
{
    public function index()
    {
        $dataskripsi = Skripsi::all();
        return view('dosen.skripsidosen', compact('dataskripsi'));
    }
}
