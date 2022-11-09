<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use Illuminate\Http\Request;

class KHSDosenController extends Controller
{
    public function index()
    {
        $datakhs = KHS::all();
        return view('dosen.khsdosen', compact('datakhs'));
    }
}
