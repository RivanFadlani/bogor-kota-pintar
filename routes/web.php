<?php

use App\Models\Kategori;
use App\Models\Quickwin;
use App\Models\Visidanmisi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\QuickwinController;
use App\Http\Controllers\VisidanmisiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/program', function () {
    return view('programimp');
});

Route::get('/general', [GeneralController::class, 'general'])->name('general');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index']);

    // QUICKWIN ROUTE
    Route::get('/admin/quickwin', [QuickwinController::class, 'index'])->name('admin.quickwin.index');
    Route::get('/admin/quickwin/create', [QuickwinController::class, 'create'])->name('admin.quickwin.create');
    Route::post('/admin/quickwin/store', [QuickwinController::class, 'store'])->name('admin.quickwin.store');
    Route::get('/admin/quickwin/{id}/edit', [QuickwinController::class, 'edit'])->name('admin.quickwin.edit');
    Route::put('/admin/quickwin/{id}', [QuickwinController::class, 'update'])->name('admin.quickwin.update');
    Route::delete('/admin/quickwin/{id}', [QuickwinController::class, 'destroy'])->name('admin.quickwin.destroy');

    //DOKUMEN ROUTE
    Route::get('/admin/dokumen', [DokumenController::class, 'index'])->name('admin.dokumen.index');
    Route::get('/admin/dokumen/create', [DokumenController::class, 'create'])->name('admin.dokumen.create');
    Route::post('/admin/dokumen/store', [DokumenController::class, 'store'])->name('admin.dokumen.store');
    Route::get('/admin/dokumen/{id}/edit', [DokumenController::class, 'edit'])->name('admin.dokumen.edit');
    Route::put('/admin/dokumen/{id}', [DokumenController::class, 'update'])->name('admin.dokumen.update');
    Route::delete('/admin/dokumen/{id}', [DokumenController::class, 'destroy'])->name('admin.dokumen.destroy');

    //DOKUMEN KATEGORI ROUTE
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
    Route::get('/admin/kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
    Route::post('/admin/kategori/store', [KategoriController::class, 'store'])->name('admin.kategori.store');
    Route::get('/admin/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');

    // VISI MISI ROUTE
    Route::get('/admin/visimisi', [VisidanmisiController::class, 'index'])->name('admin.visimisi.index');
    Route::get('/admin/visimisi/create', [VisidanmisiController::class, 'create'])->name('admin.visimisi.create');
    Route::post('/admin/visimisi/store', [VisidanmisiController::class, 'store'])->name('admin.visimisi.store');
    Route::get('/admin/visimisi/{id}/edit', [VisidanmisiController::class, 'edit'])->name('admin.visimisi.edit');
    Route::put('/admin/visimisi/{id}', [VisidanmisiController::class, 'update'])->name('admin.visimisi.update');
    Route::delete('/admin/visimisi/{id}', [VisidanmisiController::class, 'destroy'])->name('admin.visimisi.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
