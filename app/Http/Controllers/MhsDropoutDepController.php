<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MhsDropoutDepController extends Controller
{
    public function index()
    {
        $dataDO = User::query()
            ->where('status', '=', 'Dropout')
            ->where('level', '=', 'user')
            ->get();
        return view('department.mahasiswado', compact('dataDO'));
    }
    function detail($id)
    {
        $dataaktif = User::find($id);
        return view('department.MahasiswaDetail', compact('dataaktif'));
    }
}
