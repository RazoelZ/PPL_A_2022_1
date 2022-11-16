<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MhsAktifDepController extends Controller
{
    public function index()
    {
        $dataaktif = User::query()
            ->where('status', '=', 'aktif')
            ->get();
        return view('department.MahasiswaAktif', compact('dataaktif'));
    }
}
