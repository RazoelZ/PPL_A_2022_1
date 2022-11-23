<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use Illuminate\Http\Request;

class IRSDosenController extends Controller
{
    public function index()
    {
        $datairs = IRS::all();
        return view('dosen.irsdosen', compact('datairs'));
    }

    public function changestatus(Request $request)
    {
        $datairs = IRS::find($request->id);

        $datairs->isverified = $request->isverified;
        // dd($request);
        $datairs->update(['isverified' => 1]);
        return redirect('/dashboarddosen/irs');
    }

    public function unchangestatus(Request $request)
    {
        $datairs = IRS::find($request->id);

        $datairs->isverified = $request->isverified;
        // dd($request);
        $datairs->update(['isverified' => 0]);
        return redirect('/dashboarddosen/irs');
    }
}
