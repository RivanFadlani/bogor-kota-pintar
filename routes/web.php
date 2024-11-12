<?php

use App\Models\Video;
use App\Models\Booklet;
use App\Models\Dimensi;
use App\Models\Roadmap;
use App\Models\Kategori;
use App\Models\Quickwin;
use App\Models\Subdimensi;
use App\Models\Visidanmisi;
use App\Http\Controllers\ProgramPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BookletController;
use App\Http\Controllers\DimensiController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NavigasiController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PenilaianPage;
use App\Http\Controllers\PenilianController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\QuickwinController;
use App\Http\Controllers\ProgramimpController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\SubdimensiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisidanmisiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/general', [GeneralController::class, 'general'])->name('general');
Route::get('/programimp', [ProgramPage::class, 'program'])->name('programimp');
Route::get('/penilaian', [PenilaianPage::class, 'penilaian'])->name('penilaian');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // PERMISSION ROUTE
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('/permission/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/permission', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('/permission/{id}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('/permission/{id}', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('/permission/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');

    // ROLES ROUTE
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    // ROLES ROUTE
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    // Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');
    // Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
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
    Route::get('/data/{id}', [DokumenController::class, 'getDataById']);
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

    // PROGRAM IMPLEMENTASI ROUTE
    Route::get('/admin/programimp', [ProgramimpController::class, 'index'])->name('admin.programimp.index');
    Route::get('/admin/programimp/create', [ProgramimpController::class, 'create'])->name('admin.programimp.create');
    Route::post('/admin/programimp/store', [ProgramimpController::class, 'store'])->name('admin.programimp.store');
    Route::get('/admin/programimp/{id}/edit', [ProgramimpController::class, 'edit'])->name('admin.programimp.edit');
    Route::put('/admin/programimp/{id}', [ProgramimpController::class, 'update'])->name('admin.programimp.update');
    Route::delete('/admin/programimp/{id}', [ProgramimpController::class, 'destroy'])->name('admin.programimp.destroy');

    // DIMENSI ROUTE
    Route::get('/admin/dimensi', [DimensiController::class, 'index'])->name('admin.dimensi.index');
    Route::get('/admin/dimensi/create', [DimensiController::class, 'create'])->name('admin.dimensi.create');
    Route::post('/admin/dimensi/store', [DimensiController::class, 'store'])->name('admin.dimensi.store');
    Route::get('/admin/dimensi/{id}/edit', [DimensiController::class, 'edit'])->name('admin.dimensi.edit');
    Route::put('/admin/dimensi/{id}', [DimensiController::class, 'update'])->name('admin.dimensi.update');
    Route::delete('/admin/dimensi/{id}', [DimensiController::class, 'destroy'])->name('admin.dimensi.destroy');

    // BOOKLET ROUTE
    Route::get('/admin/booklet', [BookletController::class, 'index'])->name('admin.booklet.index');
    Route::get('/admin/booklet/create', [BookletController::class, 'create'])->name('admin.booklet.create');
    Route::post('/admin/booklet/store', [BookletController::class, 'store'])->name('admin.booklet.store');
    Route::get('/admin/booklet/{id}/edit', [BookletController::class, 'edit'])->name('admin.booklet.edit');
    Route::put('/admin/booklet/{id}', [BookletController::class, 'update'])->name('admin.booklet.update');
    Route::delete('/admin/booklet/{id}', [BookletController::class, 'destroy'])->name('admin.booklet.destroy');

    // SUBDIMENSI ROUTE
    Route::get('/admin/subdimensi', [SubdimensiController::class, 'index'])->name('admin.subdimensi.index');
    Route::get('/admin/subdimensi/create', [SubdimensiController::class, 'create'])->name('admin.subdimensi.create');
    Route::post('/admin/subdimensi/store', [SubdimensiController::class, 'store'])->name('admin.subdimensi.store');
    Route::get('/admin/subdimensi/{id}/edit', [SubdimensiController::class, 'edit'])->name('admin.subdimensi.edit');
    Route::put('/admin/subdimensi/{id}', [SubdimensiController::class, 'update'])->name('admin.subdimensi.update');
    Route::delete('/admin/subdimensi/{id}', [SubdimensiController::class, 'destroy'])->name('admin.subdimensi.destroy');

    // VIDEO ROUTE
    Route::get('/admin/video', [VideoController::class, 'index'])->name('admin.video.index');
    Route::get('/admin/video/create', [VideoController::class, 'create'])->name('admin.video.create');
    Route::post('/admin/video/store', [VideoController::class, 'store'])->name('admin.video.store');
    Route::get('/admin/video/{id}/edit', [VideoController::class, 'edit'])->name('admin.video.edit');
    Route::put('/admin/video/{id}', [VideoController::class, 'update'])->name('admin.video.update');
    Route::delete('/admin/video/{id}', [VideoController::class, 'destroy'])->name('admin.video.destroy');

    // ROADMAP ROUTE
    Route::get('/admin/roadmap', [RoadmapController::class, 'index'])->name('admin.roadmap.index');
    Route::get('/admin/roadmap/create', [RoadmapController::class, 'create'])->name('admin.roadmap.create');
    Route::post('/admin/roadmap/store', [RoadmapController::class, 'store'])->name('admin.roadmap.store');
    Route::get('/admin/roadmap/{id}/edit', [RoadmapController::class, 'edit'])->name('admin.roadmap.edit');
    Route::put('/admin/roadmap/{id}', [RoadmapController::class, 'update'])->name('admin.roadmap.update');
    Route::delete('/admin/roadmap/{id}', [RoadmapController::class, 'destroy'])->name('admin.roadmap.destroy');

    // PENILAIAN ROUTE
    Route::get('/admin/penilaian', [PenilaianController::class, 'index'])->name('admin.penilaian.index');
    Route::get('/admin/penilaian/create', [PenilaianController::class, 'create'])->name('admin.penilaian.create');
    Route::post('/admin/penilaian/store', [PenilaianController::class, 'store'])->name('admin.penilaian.store');
    Route::get('/admin/penilaian/{id}/edit', [PenilaianController::class, 'edit'])->name('admin.penilaian.edit');
    Route::put('/admin/penilaian/{id}', [PenilaianController::class, 'update'])->name('admin.penilaian.update');
    Route::delete('/admin/penilaian/{id}', [PenilaianController::class, 'destroy'])->name('admin.penilaian.destroy');

    // SERTIFIKAT ROUTE
    Route::get('/admin/sertifikat', [SertifikatController::class, 'index'])->name('admin.sertifikat.index');
    Route::get('/admin/sertifikat/create', [SertifikatController::class, 'create'])->name('admin.sertifikat.create');
    Route::post('/admin/sertifikat/store', [SertifikatController::class, 'store'])->name('admin.sertifikat.store');
    Route::get('/admin/sertifikat/{id}/edit', [SertifikatController::class, 'edit'])->name('admin.sertifikat.edit');
    Route::put('/admin/sertifikat/{id}', [SertifikatController::class, 'update'])->name('admin.sertifikat.update');
    Route::delete('/admin/sertifikat/{id}', [SertifikatController::class, 'destroy'])->name('admin.sertifikat.destroy');

    // SERTIFIKAT ROUTE
    Route::get('/admin/navigasi', [NavigasiController::class, 'index'])->name('admin.navigasi.index');
    Route::get('/admin/navigasi/create', [NavigasiController::class, 'create'])->name('admin.navigasi.create');
    Route::post('/admin/navigasi/store', [NavigasiController::class, 'store'])->name('admin.navigasi.store');
    Route::get('/admin/navigasi/{id}/edit', [NavigasiController::class, 'edit'])->name('admin.navigasi.edit');
    Route::put('/admin/navigasi/{id}', [NavigasiController::class, 'update'])->name('admin.navigasi.update');
    Route::delete('/admin/navigasi/{id}', [NavigasiController::class, 'destroy'])->name('admin.navigasi.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
