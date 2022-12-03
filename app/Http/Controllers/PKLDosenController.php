<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PKLDosenController extends Controller
{
    public function index()
    {
        $datapkl = DB::table('p_k_l_s')
            ->join('users', 'p_k_l_s.userid', '=', 'users.id')
            ->select('users.name', 'p_k_l_s.id', 'p_k_l_s.semester', 'p_k_l_s.instansi', 'p_k_l_s.dosenpengampu', 'p_k_l_s.scanpkl', 'p_k_l_s.isverified')
            ->paginate(10);
        return view('dosen.pkldosen', compact('datapkl'));
    }
    public function changestatus(Request $request)
    {
        $datapkl = PKL::find($request->id);

        $datapkl->isverified = $request->isverified;
        // dd($request);
        $datapkl->update(['isverified' => 1]);
        return redirect('/dashboarddosen/pkl');
    }

    public function unchangestatus(Request $request)
    {
        $datapkl = PKL::find($request->id);

        $datapkl->isverified = $request->isverified;
        // dd($request);
        $datapkl->update(['isverified' => 0]);
        return redirect('/dashboarddosen/pkl');
    }
}
