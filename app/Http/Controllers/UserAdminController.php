<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = User::where('level', '=', 'user')->get();
        return view('admin.datamahasiswalengkap', compact('mahasiswa'));
    }

    public function showuser()
    {
        $datauser = User::query()
            ->orderBy('level', 'asc')
            ->get();
        return view('admin.lihatuseradmin', compact('datauser'));
    }

    public function editberkas()
    {
        return view('admin.editberkas');
    }

    public function destroy($id)
    {
        $res = User::find($id)->delete();
        return redirect('/dashboardadmin/viewuser')->with('success', 'Hapus data mahasiswa berhasil!');
    }
}
