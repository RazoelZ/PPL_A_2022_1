<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PKLMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.isiPKL');
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
            'instansi' => 'required|string',
            'dosenpengampu' => 'required|string',
            'scanpkl' => 'required'
        ]);

        $validatedata['userid'] = auth()->user()->id;
        $request->file('scanpkl')->store('post-scanpkl');
        if (DB::table('p_k_l_s')->where('userid',  auth()->user()->id)->count() >= 1) {
            return redirect('/dashboardmahasiswa/IsiPKLMahasiswa')->with('gagal', 'Anda Sudah memasukan data PKL');
        } else {
            PKL::create($validatedata);
            return redirect('/dashboardmahasiswa/IsiPKLMahasiswa')->with('success', 'Data berhasil di masukkan');
        }
    }

    public function show()
    {
        $data = PKL::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();
        return view('mahasiswa.isipkl', compact('data'));
    }
}
