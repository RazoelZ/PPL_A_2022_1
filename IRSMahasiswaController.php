<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IRSMahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.isiirs', [
            'title' => 'Isi IRS Mahasiswa'
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'semester' => 'required',
            'jmlsks' => 'required|lte:25',
            'scansks' => 'required'
        ]);

        $validatedata['userid'] = auth()->user()->id;
        Irs::create($validatedata);
        return redirect('/dashboardmahasiswa/IsiIRSMahasiswa')->with('success', 'Data berhasil di masukkan');
    }
}
