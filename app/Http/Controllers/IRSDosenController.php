<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use Illuminate\Http\Request;

class IRSDosenController extends Controller
{
    public function index()
    {
        $datairs = IRS::all();
        return view('dosen.irsdosen', compact('datairs'));
    }
}
