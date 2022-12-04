<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa =  DB::table('users')->where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('level', 'LIKE', '%' . $request->search . '%')
                ->paginate(10);
        } else {
            $mahasiswa =  DB::table('users')->paginate(10);
        }
        return view('admin.datamahasiswalengkap', compact('mahasiswa'));
    }

    public function showuser(Request $request)
    {
        if ($request->has('search')) {
            $datauser =  DB::table('users')->orderBy('level', 'asc')->where('name', 'LIKE', '%' . $request->search . '%')
                ->paginate(10);
        } else {
            $datauser =  DB::table('users')->orderBy('level', 'asc')->paginate(10);
        }
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
        return redirect('/dashboardadmin/viewuser')->with('success', 'Hapus data IRS mahasiswa berhasil!');
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
        return redirect('/dashboardadmin/viewuser')->with('success', 'Hapus data Skripsi mahasiswa berhasil!');
    }


    public function destroy($id)
    {
        $res = User::find($id)->delete();
        return redirect('/dashboardadmin/lihatuser')->with('success', 'Hapus data mahasiswa berhasil!');
    }
}
