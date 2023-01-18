<?php

use App\Http\Controllers\admin\PengajuanController as AdminPengajuanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengajuanController;
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

Route::get('/', function () {
    return redirect('dashboard');
});

Route::middleware(['auth'])->prefix("dashboard")->group(function () {
    Route::get("/", [DashboardController::class, "index"]);

    Route::get("/pengajuan", [PengajuanController::class, "index"])->name("pengajuan.index");
    Route::post("/pengajuan", [PengajuanController::class, "store"])->name("pengajuan.store");
    Route::get("/pengajuan/status", [PengajuanController::class, "check"])->name("pengajuan.status");

    Route::get("/penerima", [MasyarakatController::class, "index"])->name("penerima.index");
    Route::post("/penerima/update", [MasyarakatController::class, "update"])->name("penerima.update");

    Route::get("/pengaduan", [PengaduanController::class, "index"])->name("pengaduan.index");
    Route::post("/pengaduan", [PengaduanController::class, "store"])->name("pengaduan.store");

    Route::prefix("admin")->group(function () {
        Route::get("pengajuan", [AdminPengajuanController::class, "index"])->name("admin.pengajuan.index");
        Route::get("pengajuan/{id}/aksi", [AdminPengajuanController::class, "aksi"])->name("admin.pengajuan.aksi");

        Route::get("penerima", [AdminPengajuanController::class, "penerima"])->name("admin.penerima.index");

        Route::get("pengaduan", [PengaduanController::class, "admin"])->name("admin.pengaduan.index");

        Route::get("tertolak", [AdminPengajuanController::class, "tertolak"])->name("admin.tertolak.index");

        Route::get("kriteria", [KriteriController::class, "index"])->name('admin.kriteria.index');
        Route::post("kriteria", [KriteriController::class, "store"])->name('admin.kriteria.store');
        Route::put("kriteria/{id}", [KriteriController::class, "update"])->name('admin.kriteria.update');
        Route::delete("kriteria/{id}", [KriteriController::class, "delete"])->name('admin.kriteria.delete');
    });
});
