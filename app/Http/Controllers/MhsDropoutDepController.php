<?php

namespace App\Http\Controllers;

use App\Exports\ExportMahasiswaDO;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MhsDropoutDepController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dataDO = DB::table('users')
                ->where('status', '=', 'Dropout', 'and')
                ->where('level', '=', 'user')
                ->where('name', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $dataDO = DB::table('users')
                ->where('status', '=', 'Dropout', 'and')
                ->where('level', '=', 'user')
                ->paginate(10);
        }
        return view('department.mahasiswado', compact('dataDO'));
    }
    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }

    public function export()
    {
        return Excel::download(new ExportMahasiswaDO, 'mahasiswa-do.xlsx');
    }
}
