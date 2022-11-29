<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    public function index()
    {
        $irscount = IRS::count();
        $khscount = KHS::count();
        $pklcount = PKL::count();
        $skripsicount = Skripsi::count();

        return view('dosen.homedosen', compact('irscount', 'khscount', 'pklcount', 'skripsicount'));
    }
}
