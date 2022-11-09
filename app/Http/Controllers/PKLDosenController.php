<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;

class PKLDosenController extends Controller
{
    public function index()
    {
        $datapkl = PKL::all();
        return view('dosen.pkldosen', compact('datapkl'));
    }
}
