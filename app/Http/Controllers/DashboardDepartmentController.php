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

        $dataAktif2022 = User::query()
            ->where('status', '=', 'Aktif')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2022')
            ->count();

        $dataAktif2021 = User::query()
            ->where('status', '=', 'Aktif')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2021')
            ->count();
        $dataAktif2020 = User::query()
            ->where('status', '=', 'Aktif')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2020')
            ->count();
        $dataAktif2019 = User::query()
            ->where('status', '=', 'Aktif')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2019')
            ->count();

        $dataMangkir2022 = User::query()
            ->where('status', '=', 'Mangkir')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2022')
            ->count();
        $dataMangkir2021 = User::query()
            ->where('status', '=', 'Mangkir')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2021')
            ->count();
        $dataMangkir2020 = User::query()
            ->where('status', '=', 'Mangkir')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2020')
            ->count();
        $dataMangkir2019 = User::query()
            ->where('status', '=', 'Mangkir')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2019')
            ->count();

        $dataCuti2022 = User::query()
            ->where('status', '=', 'Cuti')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2022')
            ->count();
        $dataCuti2021 = User::query()
            ->where('status', '=', 'Cuti')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2021')
            ->count();
        $dataCuti2020 = User::query()
            ->where('status', '=', 'Cuti')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2020')
            ->count();
        $dataCuti2019 = User::query()
            ->where('status', '=', 'Cuti')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2019')
            ->count();

        $dataDropout2022 = User::query()
            ->where('status', '=', 'Dropout')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2022')
            ->count();
        $dataDropout2021 = User::query()
            ->where('status', '=', 'Dropout')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2021')
            ->count();
        $dataDropout2020 = User::query()
            ->where('status', '=', 'Dropout')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2020')
            ->count();
        $dataDropout2019 = User::query()
            ->where('status', '=', 'Dropout')
            ->where('level', '=', 'user')
            ->where('angkatan', '=', '2019')
            ->count();

        return view('department.homedepartement', compact(
            'dataAktif',
            'dataMangkir',
            'dataDO',
            'dataCuti',
            'dataAktif2022',
            'dataAktif2021',
            'dataAktif2020',
            'dataAktif2019',
            'dataMangkir2022',
            'dataMangkir2021',
            'dataMangkir2020',
            'dataMangkir2019',
            'dataCuti2022',
            'dataCuti2021',
            'dataCuti2020',
            'dataCuti2019',
            'dataDropout2022',
            'dataDropout2021',
            'dataDropout2020',
            'dataDropout2019',
        ));
    }
}
