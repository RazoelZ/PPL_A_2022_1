<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
            'scankhs' => 'required|image'
        ]);

        $validatedata['userid'] = auth()->user()->id;
        $request->file('scankhs')->store('post-scankhs');
        KHS::create($validatedata);

        if (DB::table('K_H_S')->where('userid',  auth()->user()->id)->count() > 1) {
            return redirect('/dashboardmahasiswa/IsiKHSMahasiswa')->with('gagal', 'Anda Sudah memasukan data KHS');
        } else {
            return redirect('/dashboardmahasiswa/IsiKHSMahasiswa')->with('success', 'Data berhasil di masukkan');
            // return $request;
        }
    }
    public function show()
    {
        $data = KHS::query()
            ->where('userid', '=', auth()->user()->id)
            ->get();
        return view('mahasiswa.isikhs', compact('data'));
    }
}
