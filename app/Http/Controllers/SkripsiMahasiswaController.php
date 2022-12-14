<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
            'scansidang' => 'required|image'
        ]);
        $validatedata['userid'] = auth()->user()->id;
        $validatedata['scansidang'] = $nameimg = $request->file('scansidang')->getClientOriginalName();
        if (DB::table('Skripsis')->where('userid',  auth()->user()->id)->count() >= 1) {
            return redirect('/dashboardmahasiswa/IsiSkripsiMahasiswa')->with('gagal', 'Anda Sudah memasukan data Skripsi');
        } else {
            $request->file('scansidang')->storeAs('post-scansidang', $nameimg);
            Skripsi::create($validatedata);
            return redirect('/dashboardmahasiswa/IsiSkripsiMahasiswa')->with('success', 'Data berhasil di masukkan');
            // return $request;
        }
    }
    public function show()
    {
        $data = Skripsi::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();
        return view('mahasiswa.isiskripsi', compact('data'));
    }
}
