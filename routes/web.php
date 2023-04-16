<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswas',[MahasiswaController::class,'index'])
    ->name('mahasiswas.index');
Route::get('/mahasiswas/create',[MahasiswaController::class,'create'])
    ->name('mahasiswas.create');
Route::post('/mahasiswas',[MahasiswaController::class,'store'])
    ->name('mahasiswas.store');
Route::get('mahasiswas/{mahasiswa}',[MahasiswaController::class,'show'])
    ->name('mahasiswas.show');
Route::get('mahasiswas/{mahasiswa}/edit',[MahasiswaController::class,'edit'])
    ->name('mahasiswas.edit');
Route::patch('mahasiswas/{mahasiswa}',[MahasiswaController::class,'update'])
    ->name('mahasiswas.update');
Route::delete('mahasiswas/{mahasiswa}',[MahasiswaController::class,'destroy'])
    ->name('mahasiswas.destroy');
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin', function () { return view('admin'); })->middleware('chekRole:Admin');
Route::get('dosen', function () { return view('dosen'); })->middleware(['chekRole:Dosen,Admin']);
Route::get('presensi', function(){return view('presensi');})->middleware(['chekRole:Mahasiswa,Dosen']);
// Route::get('mahasiswa', function () { return view('mahasiswa'); })->middleware(['chekRole:Mahasiswa,Admin']);
// Route::middleware('auth')->group(function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//       });
Route::middleware('chekRole:Mahasiswa,Admin')->group(function(){
    Route::get('mahasiswa' , [HomeController::class ,'mhs']);
});
Route::middleware('chekRole:Dosen,Admin')->group(function(){
    Route::get('dosen' , [HomeController::class ,'dsn']);
});
Route::middleware('chekRole:Admin')->group(function(){
    Route::get('admin' , [HomeController::class ,'adm']);
});
