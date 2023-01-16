<?php

use App\Http\Controllers\IPAController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\CSIController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/test', [LoginController::class, 'tess'])->name('tess');


Route::get('/login', [LoginController::class, 'indexLogin'])->name('indexLogin');
Route::post('/loginSS', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');


//pertanyaan
Route::group(['prefix' => '/pertanyaan'], function () {
    Route::get('/', [PertanyaanController::class, 'indexPertanyaan'])->name('indexPertanyaan');
    Route::get('/tambah-pertanyaan', [PertanyaanController::class, 'tambahPertanyaan'])->name('tambahPertanyaan');
    Route::post('/store-pertanyaan', [PertanyaanController::class, 'storePertanyaan'])->name('storePertanyaan');
    Route::get('/hapus-pertanyaan/{id}', [PertanyaanController::class, 'hapusPertanyaan'])->name('hapusPertanyaan');
    Route::get('/edit-pertanyaan/{id}', [PertanyaanController::class, 'editPertanyaan'])->name('editPertanyaan');
    Route::post('/update-pertanyaan/{id}', [PertanyaanController::class, 'updatePertanyaan'])->name('updatePertanyaan');
    // Route::put('/cekLaporan/{id}',[LaporanController::class, 'cekLaporan'])->name('cekLaporan');
});

//responden
Route::group(['prefix' => '/responden'], function () {
    Route::get('/', [RespondenController::class, 'indexResponden'])->name('indexResponden');
    // Route::put('/cekLaporan/{id}',[LaporanController::class, 'cekLaporan'])->name('cekLaporan');
});

//CSI
Route::group(['prefix' => '/CSI'], function () {
    Route::get('/', [CSIController::class, 'indexCSI'])->name('indexCSI');
    // Route::put('/cekLaporan/{id}',[LaporanController::class, 'cekLaporan'])->name('cekLaporan');
});

//IPA
Route::group(['prefix' => '/IPA'], function () {
    Route::get('/', [IPAController::class, 'indexIPA'])->name('indexIPA');
    // Route::put('/cekLaporan/{id}',[LaporanController::class, 'cekLaporan'])->name('cekLaporan');
});
