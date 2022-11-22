<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditProfileMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.profile', [
            'title' => 'Profile Mahasiswa'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedata = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|',
            'nim' => 'required|integer',
            'jurusan' => 'required|string',
            'angkatan' => 'required|integer|digits:4',
            'alamat' => 'required|string',
            'nomortlp' => 'required|digits_between:8,12:'
        ]);
        //('angkatan', $id)->get();
        $validatedata['id'] = auth()->user()->id;
        User::where('id', auth()->user()->id)->update($validatedata);

        return redirect('/dashboardmahasiswa/profile/edit')->with('success', 'Data berhasil di Perbarui');
    }
}
