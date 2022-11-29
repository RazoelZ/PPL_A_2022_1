<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardDepartmentController extends Controller
{
    public function index()
    {
        $dataAktif = User::query()
            ->where('status', '=', 'Aktif')
            ->where('level', '=', 'user')
            ->count();

        $dataMangkir = User::query()
            ->where('status', '=', 'Mangkir')
            ->where('level', '=', 'user')
            ->count();

        $dataDO = User::query()
            ->where('status', '=', 'Dropout')
            ->where('level', '=', 'user')
            ->count();

        $dataCuti = User::query()
            ->where('status', '=', 'Cuti')
            ->where('level', '=', 'user')
            ->count();

        return view('department.homedepartement', compact('dataAktif', 'dataMangkir', 'dataDO', 'dataCuti'));
    }
}
