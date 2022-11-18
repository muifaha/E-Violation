<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RuleController;

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
    return view('auth.login');
});

Auth::routes();
// Input More Info
Route::post('/siswa/store', [StudentController::class, 'store'])->name('siswa');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Siswa
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/identitas-siswa', [StudentController::class, 'show']);
    Route::put('/identitas-siswa/{id}', [StudentController::class, 'edit']);
    Route::get('/histori-skor', [StudentController::class, 'history']);
    // Route::get('/penangan', [StudentController::class, 'history']);
    // Route::get('/tata-tertib', [StudentController::class, 'history']);

});
//Admin
Route::group(['middleware' => ['auth:sanctum', 'admin']], function () {
    Route::get('/daftar-siswa', [AdminController::class, 'daftar_siswa']);
    Route::get('/daftar-user', [AdminController::class, 'daftar_user']);
    Route::get('/daftar-peraturan', [RuleController::class, 'index']);
    Route::get('/pelanggaran/tambah/{siswa:nisn}', [AdminController::class, 'pelanggaran']);
    Route::get('/pelanggaran/kurang/{siswa:nisn}', [AdminController::class, 'pelanggaran2']);
    Route::put('/pelanggaran/{id}', [AdminController::class, 'tambah_poin']);
    Route::put('/pelanggaran/kurang/{id}', [AdminController::class, 'kurang_poin']);
    Route::get('/guru/histori-skor', [AdminController::class, 'histori_index']);
    Route::get('/guru/histori/{id}', [AdminController::class, 'histori_admin']);
});