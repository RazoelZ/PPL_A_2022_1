<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $useractivecount = User::query()
            ->where('status', '=', 'Aktif')
            ->count();
        $mahasiswa = User::query()
            ->where('level', '=', 'user')
            ->count();
        $dosen = User::query()
            ->where('level', '=', 'dosen')
            ->count();
        $department = User::query()
            ->where('level', '=', 'department')
            ->count();
        $admin = User::query()
            ->where('level', '=', 'admin')
            ->count();

        return view('admin.dashboardadmin', compact('useractivecount', 'mahasiswa', 'dosen', 'department', 'admin'));
    }
}
