<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $mahasiswa = User::where('level', '=', 'user')->get();
        return view('admin.datamahasiswalengkap', compact('mahasiswa'));
    }

    public function create() {

    }

    public function post(Request $request) {
        
    }

    public function edit() {
    }

    public function update(Request $request) {

    }

    public function destroy(Request $request) {

    }
}