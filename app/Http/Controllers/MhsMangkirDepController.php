<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MhsMangkirDepController extends Controller
{
    public function index()
    {
        $datamangkir = User::query()
            ->where('status', '=', 'Mangkir')
            ->get();
        return view('department.mahasiswamangkir', compact('datamangkir'));
    }
}
