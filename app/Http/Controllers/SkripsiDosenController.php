<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkripsiDosenController extends Controller
{
    public function index()
    {
        $dataskripsi = DB::table('skripsis')
            ->join('users', 'skripsis.userid', '=', 'users.id')
            ->select('users.name', 'skripsis.id', 'skripsis.semester', 'skripsis.tglsidang', 'skripsis.dosenpembimbing', 'skripsis.scansidang', 'skripsis.isverified')
            ->paginate(10);
        return view('dosen.skripsidosen', compact('dataskripsi'));
    }
    public function changestatus(Request $request)
    {
        $dataskripsi = Skripsi::find($request->id);

        $dataskripsi->isverified = $request->isverified;
        // dd($request);
        $dataskripsi->update(['isverified' => 1]);
        return redirect('/dashboarddosen/skripsi');
    }

    public function unchangestatus(Request $request)
    {
        $dataskripsi = Skripsi::find($request->id);

        $dataskripsi->isverified = $request->isverified;
        $dataskripsi->update(['isverified' => 0]);
        return redirect('/dashboarddosen/skripsi');
    }
}
