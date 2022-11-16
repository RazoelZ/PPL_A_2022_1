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
        dd($request);
        $datairs->isverified = $request->isverified;
        $datairs->update(['isverified', 1]);
        return redirect()->route('dosen.irsdosen');
    }
}
