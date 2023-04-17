<?php

use App\Http\Controllers\umum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/umums/create',[umum::class,'create'])
    ->name('umums.create');
Route::post('/umums',[umum::class,'store'])
    ->name('umums.store');
Route::get('umums/{mahasiswa}',[umum::class,'show'])
    ->name('umums.show');
Route::get('umums/{mahasiswa}/edit',[umum::class,'edit'])
    ->name('umums.edit');
Route::patch('umums/{mahasiswa}',[umum::class,'update'])
    ->name('umums.update');
Route::delete('umums/{mahasiswa}',[umum::class,'destroy'])
    ->name('umums.destroy');
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
