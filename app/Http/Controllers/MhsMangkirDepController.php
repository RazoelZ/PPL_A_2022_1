<?php

namespace App\Http\Controllers;

use App\Exports\ExportMahasiswaMangkir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MhsMangkirDepController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $datamangkir = DB::table('users')
                ->where('status', '=', 'Mangkir', 'and')
                ->where('level', '=', 'user')
                ->where('name', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $datamangkir = DB::table('users')
                ->where('status', '=', 'Mangkir', 'and')
                ->where('level', '=', 'user')
                ->paginate(10);
        }
        return view('department.mahasiswamangkir', compact('datamangkir'));
    }
    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }
    public function export()
    {
        return Excel::download(new ExportMahasiswaMangkir, 'mahasiswa-mangkir.xlsx');
    }
}
