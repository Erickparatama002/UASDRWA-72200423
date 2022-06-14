<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/guru/listguru',[App\Http\Controllers\APIController::class, 'listguru']);
Route::get('/mapel/listmapel',[App\Http\Controllers\APIController::class, 'listmapel']);
Route::get('/kelas/listkelas',[App\Http\Controllers\APIController::class, 'listkelas']);
Route::get('/jadwal/listjadwal',[App\Http\Controllers\APIController::class, 'listjadwal']);
Route::get('/presensi_harian/listpresh',[App\Http\Controllers\APIController::class, 'listpresh']);
Route::get('/presensi_mengajar/listpresm',[App\Http\Controllers\APIController::class, 'listpresm']);

Route::post('/guru/addguru',[App\Http\Controllers\APIController::class, 'addguru']);
Route::post('/guru/addmapel',[App\Http\Controllers\APIController::class, 'addmapel']);
Route::post('/guru/addjadwal',[App\Http\Controllers\APIController::class, 'addjadwal']);
Route::post('/guru/addkelas',[App\Http\Controllers\APIController::class, 'addkelas']);
Route::post('/guru/addpresensi_harian',[App\Http\Controllers\APIController::class, 'addpresesensi_harian']);
Route::post('/guru/addpresensi_mengajar',[App\Http\Controllers\APIController::class, 'addpresesensi_mengajar']);

Route::put('/guru/updateguru{id_guru}',[App\Http\Controllers\APIController::class, 'updateguru']);