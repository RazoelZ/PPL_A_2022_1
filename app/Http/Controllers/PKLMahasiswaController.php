<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    { {
            $validatedata = $request->validate([
                'semester' => 'required',
                'instansi' => 'required|string',
                'dosenpengampu' => 'required|string',
                'scanpkl' => 'required'
            ]);

            $validatedata['userid'] = auth()->user()->id;
            PKL::create($validatedata);

            return redirect('/dashboardmahasiswa/IsiPKLMahasiswa')->with('success', 'Data berhasil di masukkan');

            // return $request;
        }
    }
}
