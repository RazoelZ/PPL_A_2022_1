<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use Illuminate\Http\Request;

class KHSMahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.isikhs', [
            'title' => 'Isi KHS Mahasiswa'
        ]);
    }
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'semester' => 'required',
            'skssemester' => 'required',
            'skskumulatif' => 'required',
            'ipsemester' => 'required',
            'ipkumulatif' => 'required',
            'scankhs' => 'required'
        ]);

        $validatedata['userid'] = auth()->user()->id;
        KHS::create($validatedata);

        return redirect('/dashboardmahasiswa/IsiKHSMahasiswa')->with('success', 'Data berhasil di masukkan');
        // return $request;
    }
}
