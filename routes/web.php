<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TujuanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('index');

Route::get('/pendaftaraan', [App\Http\Controllers\Frontend\IndexController::class, 'pendaftaraan'])->name('pendaftaraan');
Route::post('/pendaftaraan', [App\Http\Controllers\Frontend\IndexController::class, 'store'])->name('pendaftaraan.store');
Route::get('/cek', [App\Http\Controllers\Frontend\IndexController::class, 'cek'])->name('cek');
Route::post('/cek', [App\Http\Controllers\Frontend\IndexController::class, 'cek_bansos'])->name('cek_bansos');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::prefix('admin')->middleware('revalidate', 'auth', 'role:admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

    Route::get('penduduk', [App\Http\Controllers\Admin\PendudukController::class, 'index'])->name('admin.penduduk.index');
    Route::get('penduduk/{id}', [App\Http\Controllers\Admin\PendudukController::class, 'lihat'])->name('admin.penduduk.lihat');
    Route::delete('penduduk/{id}/hapus', [App\Http\Controllers\Admin\PendudukController::class, 'destroy'])->name('admin.penduduk.destroy');

    Route::get('penyaluran', [App\Http\Controllers\Admin\PenyaluranController::class, 'index'])->name('admin.penyaluran.index');
    Route::post('penyaluran', [App\Http\Controllers\Admin\PenyaluranController::class, 'store'])->name('admin.penyaluran.store');
    Route::get('penyaluran/{id}', [App\Http\Controllers\Admin\PenyaluranController::class, 'edit'])->name('admin.penyaluran.edit');
    Route::patch('penyaluran/{id}', [App\Http\Controllers\Admin\PenyaluranController::class, 'update'])->name('admin.penyaluran.update');
    Route::delete('penyaluran/{id}/hapus', [App\Http\Controllers\Admin\PenyaluranController::class, 'destroy'])->name('admin.penyaluran.destroy');


    Route::resource('blog', BlogController::class);
});

Route::prefix('{slug}')->group(function () {
    Route::get('', [App\Http\Controllers\Frontend\IndexController::class, 'detail'])->name('index.detail');
});
