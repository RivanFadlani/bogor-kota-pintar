<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuickwinController;
use App\Models\Quickwin;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/general', function () {
    return view('general');
});

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

    Route::get('/admin/quickwins', [QuickwinController::class, 'index'])->name('admin/quickwins');
    Route::get('/admin/quickwins/create', [QuickwinController::class, 'create'])->name('admin/quickwins/create');

    //DOKUMEN ROUTE
    Route::get('/admin/dokumen', [DokumenController::class, 'index'])->name('admin.dokumen.index');
    Route::get('/admin/dokumen/create', [DokumenController::class, 'create'])->name('admin.dokumen.create');
    Route::post('/admin/dokumen/create', [DokumenController::class, 'store'])->name('admin.dokumen.store');

});

require __DIR__ . '/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
