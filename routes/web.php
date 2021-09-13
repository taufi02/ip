<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NilaiSemSatuController;
use App\Http\Controllers\NilaiSemDuaController;
use App\Http\Controllers\NilaiSemTigaController;
use App\Http\Controllers\NilaiSemEmpatController;
use App\Http\Controllers\NilaiSemLimaController;
use App\Http\Controllers\NilaiSemEnamController;
use App\Http\Controllers\SkdController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Instansi;
use App\Http\Livewire\Nilai\Sem1;
use App\Http\Livewire\Nilai\Sem2;
use App\Http\Livewire\Nilai\Sem3;
use App\Http\Livewire\Nilai\Sem4;
use App\Http\Livewire\Nilai\Sem5;
use App\Http\Livewire\Nilai\Sem6;
use App\Http\Livewire\Nilai\Skd;

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', Dashboard::class)->name('dashboard')->middleware('user');
Route::get('/instansi', Instansi::class)->name('instansi')->middleware('user');

Route::get('/guest', function(){return view('guest');})->name('guest');
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->name('auth.login');
Route::get('/auth/callback', [AuthController::class, 'proses']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/nilai-satu', Sem1::class)->middleware('user');
Route::get('/nilai-dua', Sem2::class)->middleware('user');
Route::get('/nilai-tiga', Sem3::class)->middleware('user');
Route::get('/nilai-empat', Sem4::class)->middleware('user');
Route::get('/nilai-lima', Sem5::class)->middleware('user');
Route::get('/nilai-enam', Sem6::class)->middleware('user');
Route::get('/nilai-skd', Skd::class)->middleware('user');

// Route::resource('nilai-sem-satu', NilaiSemSatuController::class)->middleware('user');
// Route::resource('nilai-sem-dua', NilaiSemDuaController::class)->middleware('user');
// Route::resource('nilai-sem-tiga', NilaiSemTigaController::class)->middleware('user');
// Route::resource('nilai-sem-empat', NilaiSemEmpatController::class)->middleware('user');
// Route::resource('nilai-sem-lima', NilaiSemLimaController::class)->middleware('user');
// Route::resource('nilai-sem-enam', NilaiSemEnamController::class)->middleware('user');
// Route::resource('skd', SkdController::class)->middleware('user');

