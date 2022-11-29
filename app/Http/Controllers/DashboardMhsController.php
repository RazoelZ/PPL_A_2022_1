<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Http\Request;

class DashboardMhsController extends Controller
{
    public function index()
    {
        $irs = IRS::all();
        $khs = KHS::all();
        $pkl = PKL::all();
        $skripsi = Skripsi::all();

        return view('mahasiswa.home', compact('irs', 'khs', 'pkl', 'skripsi'));
    }
}
