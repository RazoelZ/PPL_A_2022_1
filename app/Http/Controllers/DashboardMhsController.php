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
        $irs = IRS::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();
        $khs = KHS::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();
        $pkl = PKL::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();
        $skripsi = Skripsi::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();;

        return view('mahasiswa.home', compact('irs', 'khs', 'pkl', 'skripsi'));
    }
}
