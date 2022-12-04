<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditMhsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = User::query()
            ->where('id', $id)->get();
        return view('admin.editmahasiswaadmin', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedata = $request->validate([
            'name' => 'required|max:255',
            'email' => 'email:dns',
            'nim' => 'integer',
            'jurusan' => 'required|string',
            'angkatan' => 'required|integer',
            'status' => 'required',
            'level' => 'required'
        ]);
        //('angkatan', $id)->get();

        User::where('id', $id)->update($validatedata);
        return redirect('/dashboardadmin/viewuser')->with('success', 'Data berhasil di Perbarui');
        // return dd($validatedata);
    }
}
