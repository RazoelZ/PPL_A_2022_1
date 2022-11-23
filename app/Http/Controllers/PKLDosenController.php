<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;

class PKLDosenController extends Controller
{
    public function index()
    {
        $datapkl = PKL::all();
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
