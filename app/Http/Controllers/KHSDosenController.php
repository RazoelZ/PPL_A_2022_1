<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use Illuminate\Http\Request;

class KHSDosenController extends Controller
{
    public function index()
    {
        $datakhs = KHS::all();
        return view('dosen.khsdosen', compact('datakhs'));
    }

    public function changestatus(Request $request)
    {
        $datakhs = KHS::find($request->id);

        $datakhs->isverified = $request->isverified;
        // dd($request);
        $datakhs->update(['isverified' => 1]);
        return redirect('/dashboarddosen/khs');
    }

    public function unchangestatus(Request $request)
    {
        $datakhs = KHS::find($request->id);

        $datakhs->isverified = $request->isverified;
        // dd($request);
        $datakhs->update(['isverified' => 0]);
        return redirect('/dashboarddosen/khs');
    }
}
