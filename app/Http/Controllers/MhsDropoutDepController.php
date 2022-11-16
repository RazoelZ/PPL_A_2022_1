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
            ->get();
        return view('department.mahasiswado', compact('dataDO'));
    }
}
