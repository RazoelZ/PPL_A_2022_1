<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.register', [
            'title' => 'Daftar User Baru'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'nim' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required',
            'level' => 'required',
            'status' => 'required',
            'dosenwali' => 'max:255',
            'password' => 'required|min:5|max:255'
        ]);
        //cara keduia
        $validatedata['password'] = bcrypt($validatedata['password']);
        //$validatedata['password'] = Hash::make($validatedata['password']);
        User::create($validatedata);

        //alert pertama
        //$request->session()->flash('success', 'Registrasi Berhasil, Silahkan login');


        return redirect('/dashboardadmin/register')->with('success', 'Registrasi Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
