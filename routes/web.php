<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.login');
});

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboardadmin/register', [RegisterController::class, 'index']);
Route::post('/dashboardadmin/register', [RegisterController::class, 'store']);



//Mahasiswa
Route::get('/dashboardmahasiswa', function () {
    return view('mahasiswa.home');
});
Route::get('/dashboardmahasiswa/IsiIRSMahasiswa', function () {
    return view('mahasiswa.isiirs');
});
Route::get('/dashboardmahasiswa/IsiKHSMahasiswa', function () {
    return view('mahasiswa.isikhs');
});
Route::get('/dashboardmahasiswa/IsiPKLMahasiswa', function () {
    return view('mahasiswa.isipkl');
});
Route::get('/dashboardmahasiswa/IsiSkripsiMahasiswa', function () {
    return view('mahasiswa.isiskripsi');
});

//Dosen
Route::get('/dashboarddosen', function () {
    return view('dosen.homedosen');
});
Route::get('/dashboarddosen/irs', function () {
    return view('dosen.irsdosen');
});
Route::get('/dashboarddosen/khs', function () {
    return view('dosen.khsdosen');
});
Route::get('/dashboarddosen/pkl', function () {
    return view('dosen.pkldosen');
});
Route::get('/dashboarddosen/skripsi', function () {
    return view('dosen.skripsidosen');
});

//Admin

Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin');
});
// Route::get('/dashboardadmin/register', function () {
//     return view('admin.register');
// });
Route::get('/dashboardadmin/edituser', function () {
    return view('admin.datairslengkap');
});
Route::get('/dashboardadmin/lihatuser', function () {
    return view('welcome');
});
//departemen

Route::get('/dashboarddepartment', function () {
    return view('department.homedepartement');
});
Route::get('/dashboarddepartment/mhsaktif', function () {
    return view('department.mahasiswaaktif');
});
Route::get('/dashboarddepartment/mhsdo', function () {
    return view('department.mahasiswado');
});
Route::get('/dashboarddepartment/mhsmangkir', function () {
    return view('department.mahasiswamangkir');
});
