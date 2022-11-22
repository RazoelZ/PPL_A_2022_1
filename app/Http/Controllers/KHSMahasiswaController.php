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
            'skssemester' => 'required|integer|lte:25',
            'skskumulatif' => 'required|integer|lte:150',
            'ipsemester' => 'required|regex:/^\d+(\.\d{1,2})?$/|lte:4',
            'ipkumulatif' => 'required|regex:/^\d+(\.\d{1,2})?$/|lte:4',
            'scankhs' => 'required'
        ]);

        $validatedata['userid'] = auth()->user()->id;
        KHS::create($validatedata);

        return redirect('/dashboardmahasiswa/IsiKHSMahasiswa')->with('success', 'Data berhasil di masukkan');
        // return $request;
    }
}
