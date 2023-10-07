<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('karyawan', [KaryawanController::class, 'store']); //create
Route::get('karyawan', [KaryawanController::class, 'index']);
Route::get('karyawan/create', [KaryawanController::class, 'create']);
Route::get('karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::patch('karyawan/{id}', [KaryawanController::class, 'update']); //update
Route::get('karyawan/{id}/delete', [KaryawanController::class, 'destroy']); //delete
