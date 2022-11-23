<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MhsAktifDepController extends Controller
{
    public function index()
    {
        $dataaktif = User::query()
            ->where('status', '=', 'aktif', 'and')
            ->where('level', '=', 'user')
            ->get();
        return view('department.MahasiswaAktif', compact('dataaktif'));
    }

    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }
}
