<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengurusDashboardController;
use App\Http\Controllers\KeuanganDashboardController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\HarianDashboardController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\JumatDashboardController;
use App\Http\Controllers\JumatController;
use App\Http\Controllers\KegiatanDashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ImamDashboardController;
use App\Http\Controllers\MuadzinDashboardController;

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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/home', function () {
    return view('index');
});

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
Route::resource('pengurusdashboard', PengurusDashboardController::class)->middleware('auth');
Route::resource('keuangandashboard', KeuanganDashboardController::class)->middleware('auth');
Route::resource('hariandashboard', HarianDashboardController::class)->middleware('auth');
Route::resource('jumatdashboard', JumatDashboardController::class)->middleware('auth');
Route::resource('kegiatandashboard', KegiatanDashboardController::class)->middleware('auth');
Route::resource('imamdashboard', ImamDashboardController::class)->middleware('auth');
Route::resource('muadzindashboard', MuadzinDashboardController::class)->middleware('auth');
Route::resource('harian', HarianController::class);
Route::resource('jumat', JumatController::class);
Route::resource('kegiatan', KegiatanController::class);
Route::resource('keuangan', KeuanganController::class);
Route::get('laporan_keuangan', [KeuanganController::class,'cetak_pdf'])->middleware('auth');
