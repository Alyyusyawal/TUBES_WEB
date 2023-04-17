<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/admins',[AdminController::class,'index'])
    ->name('admins.index');
Route::get('/admins/create',[AdminController::class,'create'])
    ->name('admins.create');
Route::post('/admins',[AdminController::class,'store'])
    ->name('admins.store');
Route::get('admins/{signup}',[AdminController::class,'show'])
    ->name('admins.show');
Route::get('admins/{signup}/edit',[AdminController::class,'edit'])
    ->name('admins.edit');
Route::patch('admins/{signup}',[AdminController::class,'update'])
    ->name('admins.update');
Route::delete('admins/{signup}',[AdminController::class,'destroy'])
    ->name('admins.destroy'); 





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
