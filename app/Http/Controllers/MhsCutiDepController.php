<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MhsCutiDepController extends Controller
{
    public function index()
    {
        $datacuti = User::query()
            ->where('status', '=', 'Cuti')
            ->where('level', '=', 'user')
            ->get();
        return view('department.mahasiswacuti', compact('datacuti'));
    }
    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }
}
