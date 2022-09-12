<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\KklController;
use App\Http\Controllers\Frontend\SkripsiController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\PengajuanController;
use App\Http\Controllers\Admin\FrontendController;
// 
use App\Models\Kkl;
use App\Models\Skripsi;
// 


Route::get('/', [FrontendController::class, 'index']);
Route::get('/hasilkkl', [FrontendController::class, 'view']);
Route::get('/history-kkl', [FrontendController::class, 'history']);


Route::get('/hasilskripsi', [FrontendController::class, 'view_skripsi']);
Route::get('/history-skripsi', [FrontendController::class, 'history_skripsi']);

Auth::routes(['verify'=>true]);


Route::middleware(['auth'])->group(function(){

    Route::get('kkl', [KklController::class, 'kkl']);
    Route::post('pengajuan-kkl', [KklController::class, 'submitkkl']);

    Route::get('skripsi', [SkripsiController::class, 'skripsi']);
    Route::post('pengajuan-skripsi', [SkripsiController::class, 'submitskripsi']);

});

Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('adm-kkl', [PengajuanController::class, 'index_kkl']);
    Route::get('edit-kkl/{id}', [PengajuanController::class, 'edit']);
    Route::put('update-kkl/{id}', [PengajuanController::class, 'update']);
    Route::get('delete-kkl/{id}', [PengajuanController::class, 'destroy']);

    Route::get('adm-skripsi', [PengajuanController::class, 'index_skripsi']);
    Route::get('edit-skripsi/{id}', [PengajuanController::class, 'edit_skripsi']);
    Route::put('update-skripsi/{id}', [PengajuanController::class, 'update_skripsi']);
    Route::get('delete-skripsi/{id}', [PengajuanController::class, 'destroy_skripsi']);


});
