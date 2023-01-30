<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\PenangananController;

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
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('welcome');
});

// leaderboard
Route::get('/you-cant-see-me', [BoardController::class, 'unique'])->name('unique')->middleware('guest');

Auth::routes();
// Input More Info
Route::post('/siswa/store', [StudentController::class, 'store'])->name('siswa');

// Siswa
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/identitas-siswa', [StudentController::class, 'show']);
    Route::put('/identitas-siswa/{id}', [StudentController::class, 'edit']);
    Route::get('/histori-skor', [StudentController::class, 'history']);
    Route::get('/pesan', [StudentController::class, 'pesan']);
    // Route::get('/tata-tertib', [StudentController::class, 'history']);
});

// Guru
Route::group(['middleware' => ['auth', 'role:2']], function () {
    Route::get('/guru/daftar-siswa', [GuruController::class, 'daftar_siswa']);
    Route::get('/guru/histori', [GuruController::class, 'master_history']);
    Route::get('/guru/histori/{id}', [GuruController::class, 'history_siswa']);
    Route::get('/guru/penanganan', [PenangananController::class, 'guru_index']);
    Route::post('/guru/penanganan/{id}', [PenangananController::class, 'guru_konfirmasi']);
});

// Admin
Route::group(['middleware' => ['auth', 'role:1']], function () {
    Route::get('/master-siswa', [AdminController::class, 'daftar_siswa']);
    Route::get('/master-user', [UserAdminController::class, 'daftar_user']);
    Route::post('/master-user/{id}', [UserAdminController::class, 'destroy']);
    Route::get('/pelanggaran/tambah/{siswa:nisn}', [PoinController::class, 'tambah_view']);
    Route::get('/pelanggaran/kurang/{siswa:nisn}', [PoinController::class, 'kurang_view']);
    Route::put('/pelanggaran/{id}', [PoinController::class, 'tambah_poin']);
    Route::put('/pelanggaran/kurang/{id}', [PoinController::class, 'kurang_poin']);
    Route::get('/master-histori', [AdminController::class, 'histori_index']);
    Route::get('/master-histori/{id}', [AdminController::class, 'histori_admin']);
    Route::get('/penanganan', [PenangananController::class, 'index']);
    Route::post('/penanganan/{id}', [PenangananController::class, 'konfirmasi']);
});