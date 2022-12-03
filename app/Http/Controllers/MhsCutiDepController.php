<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MhsCutiDepController extends Controller
{
    public function index()
    {
        $datacuti = DB::table('users')
            ->where('status', '=', 'Cuti', 'and')
            ->where('level', '=', 'user')
            ->paginate(10);
        return view('department.mahasiswacuti', compact('datacuti'));
    }
    function detail($id)
    {
        $datacuti = User::find($id);
        return view('department.MahasiswaDetail', compact('datacuti'));
    }
}
