<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MhsCutiDepController extends Controller
{
    public function index()
    {
        $datacuti = User::query()
            ->where('status', '=', 'Cuti')
            ->get();
        return view('department.mahasiswacuti', compact('datacuti'));
    }
}
