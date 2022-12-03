<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardDepartmentController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardMhsController;
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

// Route::get('/', function () {
//     return view('login.login');
// });

//Credentials
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//Mahasiswa
Route::get('/dashboardmahasiswa', [DashboardMhsController::class, 'index'])->middleware('mhs');
//ISI IRS
Route::post('/dashboardmahasiswa/IsiIRSMahasiswa', [IRSMahasiswaController::class, 'store'])->middleware('mhs');
Route::get('/dashboardmahasiswa/IsiIRSMahasiswa', [IRSMahasiswaController::class, 'index'])->middleware('mhs');
Route::get('/dashboardmahasiswa/IsiIRSMahasiswa', [IRSMahasiswaController::class, 'show'])->middleware('mhs');
//ISI KHS
Route::get('/dashboardmahasiswa/IsiKHSMahasiswa', [KHSMahasiswaController::class, 'index'])->middleware('mhs');
Route::post('/dashboardmahasiswa/IsiKHSMahasiswa', [KHSMahasiswaController::class, 'store'])->middleware('mhs');
Route::get('/dashboardmahasiswa/IsiKHSMahasiswa', [KHSMahasiswaController::class, 'show'])->middleware('mhs');
//ISI PKL
Route::post('/dashboardmahasiswa/IsiPKLMahasiswa', [PKLMahasiswaController::class, 'store'])->middleware('mhs');
Route::get('/dashboardmahasiswa/IsiPKLMahasiswa', [PKLMahasiswaController::class, 'index'])->middleware('mhs');
Route::get('/dashboardmahasiswa/IsiPKLMahasiswa', [PKLMahasiswaController::class, 'show'])->middleware('mhs');

//ISI SKRIPSI
Route::get('/dashboardmahasiswa/IsiSkripsiMahasiswa', [SkripsiMahasiswaController::class, 'index'])->middleware('mhs');
Route::post('/dashboardmahasiswa/IsiSkripsiMahasiswa', [SkripsiMahasiswaController::class, 'store'])->middleware('mhs');
Route::get('/dashboardmahasiswa/IsiSkripsiMahasiswa', [SkripsiMahasiswaController::class, 'show'])->middleware('mhs');
//edit
Route::get('/dashboardmahasiswa/profile/edit', [EditProfileMahasiswaController::class, 'index'])->middleware('mhs');
Route::put('/dashboardmahasiswa/profile/edit', [EditProfileMahasiswaController::class, 'update'])->middleware('mhs');

//Dosen
Route::get('/dashboarddosen', [DashboardDosenController::class, 'index'])->middleware('dosen');

Route::get('/dashboarddosen/irs', [IRSDosenController::class, 'index'])->middleware('dosen');
Route::get('/dashboarddosen/irs/verify/{id}', [IRSDosenController::class, 'changestatus'])->middleware('dosen');
Route::get('/dashboarddosen/irs/unverify/{id}', [IRSDosenController::class, 'unchangestatus'])->middleware('dosen');
//KHS
Route::get('/dashboarddosen/khs', [KHSDosenController::class, 'index'])->middleware('dosen');
Route::get('/dashboarddosen/khs/verify/{id}', [KHSDosenController::class, 'changestatus'])->middleware('dosen');
Route::get('/dashboarddosen/khs/unverify/{id}', [KHSDosenController::class, 'unchangestatus'])->middleware('dosen');
//PKL
Route::get('/dashboarddosen/pkl', [PKLDosenController::class, 'index'])->middleware('dosen');
Route::get('/dashboarddosen/pkl/verify/{id}', [PKLDosenController::class, 'changestatus'])->middleware('dosen');
Route::get('/dashboarddosen/pkl/unverify/{id}', [PKLDosenController::class, 'unchangestatus'])->middleware('dosen');

//SKRIPSI
Route::get('/dashboarddosen/skripsi', [SkripsiDosenController::class, 'index'])->middleware('dosen');
Route::get('/dashboarddosen/skripsi/verify/{id}', [SkripsiDosenController::class, 'changestatus'])->middleware('dosen');
Route::get('/dashboarddosen/skripsi/unverify/{id}', [SkripsiDosenController::class, 'unchangestatus'])->middleware('dosen');

//Admin
Route::get('/dashboardadmin', [DashboardAdminController::class, 'index'])->middleware('admin');

//viewuser
Route::get('/dashboardadmin/viewuser', [UserAdminController::class, 'index'])->middleware('admin');
Route::get('/dashboardadmin/viewuser/{id}', [UserAdminController::class, 'editberkas'])->middleware('admin');
Route::get('/dashboardadmin/viewuser/delete/irs/{id}', [UserAdminController::class, 'hapusirs'])->middleware('admin');
Route::get('/dashboardadmin/viewuser/delete/khs/{id}', [UserAdminController::class, 'hapuskhs'])->middleware('admin');
Route::get('/dashboardadmin/viewuser/delete/pkl/{id}', [UserAdminController::class, 'hapuspkl'])->middleware('admin');
Route::get('/dashboardadmin/viewuser/delete/skripsi/{id}', [UserAdminController::class, 'hapusskripsi'])->middleware('admin');

//register user
Route::get('/dashboardadmin/register', [RegisterController::class, 'index'])->middleware('admin');
Route::post('/dashboardadmin/register', [RegisterController::class, 'store'])->middleware('admin');
//edituser
Route::get('/dashboardadmin/edituser', [EditMhsAdminController::class, 'index'])->middleware('admin');
Route::put('/dashboardadmin/edituser', [EditMhsAdminController::class, 'update'])->middleware('admin');
//lihatuser
Route::get('/dashboardadmin/lihatuser', [UserAdminController::class, 'showuser'])->middleware('admin');
Route::get('/dashboardadmin/lihatuser/delete/{id}', [UserAdminController::class, 'destroy'])->middleware('admin');
//departemen

Route::get('/dashboarddepartment', [DashboardDepartmentController::class, 'index'])->middleware('department');
//Mahasiswa Aktif
Route::get('/dashboarddepartment/mhsaktif', [MhsAktifDepController::class, 'index'])->middleware('department');
Route::get('/dashboarddepartment/mhsaktif/detail/{id}', [MhsAktifDepController::class, 'detail'])->middleware('department');
//Mahasiswa DropOut
Route::get('/dashboarddepartment/mhsdo', [MhsDropoutDepController::class, 'index'])->middleware('department');
Route::get('/dashboarddepartment/mhsdo/detail/{id}', [MhsDropoutDepController::class, 'detail'])->middleware('department');
//Mahasiswa Mangkir
Route::get('/dashboarddepartment/mhsmangkir', [MhsMangkirDepController::class, 'index'])->middleware('department');
Route::get('/dashboarddepartment/mhsmangkir/detail/{id}', [MhsMangkirDepController::class, 'detail'])->middleware('department');
//Mahasiswa Cuti
Route::get('/dashboarddepartment/mhscuti', [MhsCutiDepController::class, 'index'])->middleware('department');
Route::get('/dashboarddepartment/mhscuti/detail/{id}', [MhsCutiDepController::class, 'detail'])->middleware('department');
