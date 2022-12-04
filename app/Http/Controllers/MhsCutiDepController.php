<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportMahasiswaCuti;

class MhsCutiDepController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $datacuti = DB::table('users')
                ->where('status', '=', 'Cuti', 'and')
                ->where('level', '=', 'user')
                ->where('name', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $datacuti = DB::table('users')
                ->where('status', '=', 'Cuti', 'and')
                ->where('level', '=', 'user')
                ->paginate(10);
        }
        return view('department.mahasiswacuti', compact('datacuti'));
    }
    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }
    public function export()
    {
        return Excel::download(new ExportMahasiswaCuti, 'mahasiswa-cuti.xlsx');
    }
}
