<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
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

    public function editberkas($id)
    {
        $datairs = IRS::query()
            ->where('userid', '=', $id)
            ->get();
        $datakhs = KHS::query()
            ->where('userid', '=', $id)
            ->get();
        $datapkl = PKL::query()
            ->where('userid', '=', $id)
            ->get();
        $dataskripsi = Skripsi::query()
            ->where('userid', '=', $id)
            ->get();
        return view('admin.editberkas', compact('datairs', 'datakhs', 'datapkl', 'dataskripsi'));
    }

    public function hapusirs($id)
    {
        $res = IRS::find($id)->delete();
        return redirect('/dashboardadmin/viewuser/{$id}')->with('success', 'Hapus data IRS mahasiswa berhasil!');
    }
    public function hapuskhs($id)
    {
        $res = KHS::find($id)->delete();
        return redirect('/dashboardadmin/viewuser')->with('success', 'Hapus data KHS mahasiswa berhasil!');
    }
    public function hapuspkl($id)
    {
        $res = PKL::find($id)->delete();
        return redirect('/dashboardadmin/viewuser')->with('success', 'Hapus data PKL mahasiswa berhasil!');
    }
    public function hapusskripsi($id)
    {
        $res = Skripsi::find($id)->delete();
        return redirect('/dashboardadmin/viewuser/{id}')->with('success', 'Hapus data Skripsi mahasiswa berhasil!');
    }


    public function destroy($id)
    {
        $res = User::find($id)->delete();
        return redirect('/dashboardadmin/lihatuser')->with('success', 'Hapus data mahasiswa berhasil!');
    }
}
