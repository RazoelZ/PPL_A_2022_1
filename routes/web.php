<?php

use App\Http\Controllers\EditProfileMahasiswaController;
use App\Http\Controllers\IRSDosenController;
use App\Http\Controllers\IRSMahasiswaController;
use App\Http\Controllers\KHSDosenController;
use App\Http\Controllers\KHSMahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MhsAktifDepController;
use App\Http\Controllers\MhsCutiDepController;
use App\Http\Controllers\MhsDropoutDepController;
use App\Http\Controllers\MhsMangkirDepController;
use App\Http\Controllers\PKLDosenController;
use App\Http\Controllers\PKLMahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SkripsiDosenController;
use App\Http\Controllers\SkripsiMahasiswaController;
use App\Http\Controllers\EditMhsAdminController;
use App\Http\Controllers\UserAdminController;
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

//ISI IRS
Route::post('/dashboardmahasiswa/IsiIRSMahasiswa', [IRSMahasiswaController::class, 'store']);
Route::get('/dashboardmahasiswa/IsiIRSMahasiswa', [IRSMahasiswaController::class, 'index']);

//ISI KHS
Route::get('/dashboardmahasiswa/IsiKHSMahasiswa', [KHSMahasiswaController::class, 'index']);
Route::post('/dashboardmahasiswa/IsiKHSMahasiswa', [KHSMahasiswaController::class, 'store']);

//ISI PKL
Route::get('/dashboardmahasiswa/IsiPKLMahasiswa', [PKLMahasiswaController::class, 'index']);
Route::post('/dashboardmahasiswa/IsiPKLMahasiswa', [PKLMahasiswaController::class, 'store']);

//ISI SKRIPSI
Route::get('/dashboardmahasiswa/IsiSkripsiMahasiswa', [SkripsiMahasiswaController::class, 'index']);
Route::post('/dashboardmahasiswa/IsiSkripsiMahasiswa', [SkripsiMahasiswaController::class, 'store']);

//edit
Route::get('/dashboardmahasiswa/profile/edit', [EditProfileMahasiswaController::class, 'index']);
Route::put('/dashboardmahasiswa/profile/edit', [EditProfileMahasiswaController::class, 'update']);

//Dosen
Route::get('/dashboarddosen', function () {
    return view('dosen.homedosen');
});
//IRS
Route::get('/dashboarddosen/irs', [IRSDosenController::class, 'index']);
Route::get('/dashboarddosen/irs/verify/{id}', [IRSDosenController::class, 'changestatus']);
Route::get('/dashboarddosen/irs/unverify/{id}', [IRSDosenController::class, 'unchangestatus']);
//KHS
Route::get('/dashboarddosen/khs', [KHSDosenController::class, 'index']);
Route::get('/dashboarddosen/khs/verify/{id}', [KHSDosenController::class, 'changestatus']);
Route::get('/dashboarddosen/khs/unverify/{id}', [KHSDosenController::class, 'unchangestatus']);
//PKL
Route::get('/dashboarddosen/pkl', [PKLDosenController::class, 'index']);
Route::get('/dashboarddosen/pkl/verify/{id}', [PKLDosenController::class, 'changestatus']);
Route::get('/dashboarddosen/pkl/unverify/{id}', [PKLDosenController::class, 'unchangestatus']);

//SKRIPSI
Route::get('/dashboarddosen/skripsi', [SkripsiDosenController::class, 'index']);
Route::get('/dashboarddosen/skripsi/verify/{id}', [SkripsiDosenController::class, 'changestatus']);
Route::get('/dashboarddosen/skripsi/unverify/{id}', [SkripsiDosenController::class, 'unchangestatus']);

//Admin

Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin');
});
// Route::get('/dashboardadmin/register', function () {
//     return view('admin.register');
// });
Route::get('/dashboardadmin/viewuser', [UserAdminController::class, 'index']);

Route::get('/dashboardadmin/edituser', [EditMhsAdminController::class, 'index']);
Route::put('/dashboardadmin/edituser', [EditMhsAdminController::class, 'update']);

Route::get('/dashboardadmin/lihatuser', function () {
    return view('admin.lihatuseradmin');
});
//departemen

Route::get('/dashboarddepartment', function () {
    return view('department.homedepartement');
});

Route::get('/dashboarddepartment/mhsaktif', [MhsAktifDepController::class, 'index']);
Route::get('/dashboarddepartment/mhsaktif/detail/{id}', [MhsAktifDepController::class, 'detail']);

Route::get('/dashboarddepartment/mhsdo', [MhsDropoutDepController::class, 'index']);
Route::get('/dashboarddepartment/mhsdo/detail/{id}', [MhsDropoutDepController::class, 'detail']);


Route::get('/dashboarddepartment/mhsmangkir', [MhsMangkirDepController::class, 'index']);
Route::get('/dashboarddepartment/mhsmangkir/detail/{id}', [MhsMangkirDepController::class, 'detail']);


Route::get('/dashboarddepartment/mhscuti', [MhsCutiDepController::class, 'index']);
Route::get('/dashboarddepartment/mhscuti/detail/{id}', [MhsCutiDepController::class, 'detail']);
