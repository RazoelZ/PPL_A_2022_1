<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;

class SkripsiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.ISISKRIPSI');
    }

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'semester' => 'required',
            'tglsidang' => 'required|date',
            'dosenpembimbing' => 'required|string',
            'scansidang' => 'required'
        ]);
        $validatedata['userid'] = auth()->user()->id;
        Skripsi::create($validatedata);

        return redirect('/dashboardmahasiswa/IsiPKLMahasiswa')->with('success', 'Data berhasil di masukkan');
        // return $request;
    }
}
