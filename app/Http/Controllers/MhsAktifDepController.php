<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MhsAktifDepController extends Controller
{
    public function index()
    {
        $dataaktif = DB::table('users')
            ->where('status', '=', 'aktif', 'and')
            ->where('level', '=', 'user')
            ->paginate(10);
        return view('department.MahasiswaAktif', compact('dataaktif'));
    }

    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }
}
