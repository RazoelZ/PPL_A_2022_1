<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    public function index()
    {
        // $getmhsid = user::query()
        //     ->where('level', '=', 'user')
        //     ->get('id');
        // $irscount = IRS::query()
        //     ->where('userid', '=', $getmhsid)
        //     ->count();
        // $khscount = KHS::query()
        //     ->where('dosenwali', '=', auth()->user()->dosenwali)
        //     ->count();
        // $pklcount = PKL::query()
        //     ->where('dosenwali', '=', auth()->user()->dosenwali)
        //     ->count();
        // $skripsicount = Skripsi::query()
        //     ->where('dosenwali', '=', auth()->user()->dosenwali)
        //     ->count();
        // $totalmhswali = User::query()
        //     ->where('dosenwali', '=', auth()->user()->dosenwali)
        //     ->where('level', '=', 'user')
        //     ->count();

        return view('dosen.homedosen');
    }
}
