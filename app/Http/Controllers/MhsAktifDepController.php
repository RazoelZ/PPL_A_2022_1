<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportMahasiswa;

class MhsAktifDepController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dataaktif = DB::table('users')
                ->where('status', '=', 'aktif', 'and')
                ->where('level', '=', 'user')
                ->where('name', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $dataaktif = DB::table('users')
                ->where('status', '=', 'aktif', 'and')
                ->where('level', '=', 'user')
                ->paginate(10);
        }
        return view('department.MahasiswaAktif', compact('dataaktif'));
    }


    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }

    public function export()
    {
        return Excel::download(new ExportMahasiswa, 'mahasiswa-aktif.xlsx');
    }
}
