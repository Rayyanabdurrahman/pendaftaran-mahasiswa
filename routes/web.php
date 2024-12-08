<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [MahasiswaController::class, 'index'])->name('dashboard');
    Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.post');
    Route::get('/mahasiswa/detail/{id}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');
    Route::get('/mahasiswa/failed/{id}', [MahasiswaController::class, 'failed'])->name('mahasiswa.failed');
    Route::get('/mahasiswa/success/{id}', [MahasiswaController::class, 'success'])->name('mahasiswa.success');
    Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
    Route::post('/mahasiswa/search', [MahasiswaController::class, 'search'])->name('mahasiswa.search');
});

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register']);
    Route::post('signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('signin', [AuthController::class, 'signin'])->name('signin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/', function(){
        return view('mahasiswa.formulir');
    });
