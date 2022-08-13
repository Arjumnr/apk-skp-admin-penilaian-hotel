<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\RespondenController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/',[PertanyaanController::class, 'indexPertanyaan'])->name('indexPertanyaan');


//pertanyaan
Route::group(['prefix' => '/pertanyaan'], function(){
    Route::get('/',[PertanyaanController::class, 'indexPertanyaan'])->name('indexPertanyaan');
    // Route::put('/cekLaporan/{id}',[LaporanController::class, 'cekLaporan'])->name('cekLaporan');
});

//responden
Route::group(['prefix' => '/responden'], function(){
    Route::get('/',[RespondenController::class, 'indexResponden'])->name('indexResponden');
    // Route::put('/cekLaporan/{id}',[LaporanController::class, 'cekLaporan'])->name('cekLaporan');
});
