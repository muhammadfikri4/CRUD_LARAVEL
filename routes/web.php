<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\angkatanController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\sharingController;
use App\Http\Controllers\tutorialController;
use App\Http\Controllers\userController;

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
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// CRUD ACARA / AGENDA
Route::get('/tambah-acara', [agendaController::class, 'createView'])->middleware('auth')->name('tambah');
Route::get('update-acara/{id}', [agendaController::class, 'updateView'])->middleware('auth')->name('update-acara');
Route::post('/action-addAcara', [agendaController::class, 'create'])->name('action-tambah');
Route::put('/action-updateAcara/{id}', [agendaController::class, 'update'])->name('action-updateAcara');
Route::get('/action-deleteAcara/{id}', [agendaController::class, 'destroy'])->name('action-deleteAcara');

// CRUD ANGKATAN
Route::get('/tambah-angkatan', [angkatanController::class, 'createView'])->middleware('auth')->name('tambah-angkatan');
Route::get('/update-angkatan/{id}', [angkatanController::class, 'updateView'])->middleware('auth')->name('update-angkatan');
Route::post('/action-addAngkatan', [angkatanController::class, 'create'])->name('action-tambahAngkatan');
Route::put('/action-updateAngkatan/{id}', [angkatanController::class, 'update'])->name('action-updateAngkatan');
Route::get('/action-deleteAngkatan/{id}', [angkatanController::class, 'destroy'])->name('action-deleteAngkatan');

// CRUD KATEGORI
Route::get('/tambah-kategori', [kategoriController::class, 'index'])->middleware('auth')->name('tambahKategori');
Route::get('/update-kategori/{id}', [kategoriController::class, 'updateView'])->middleware('auth')->name('update-kategori');
Route::post('/action-addKategori', [kategoriController::class, 'create'])->name('action-tambahKategori');
Route::put('/action-updatekategori/{id}', [kategoriController::class, 'update'])->name('action-updateKategori');
Route::get('action-deleteKategori/{id}', [kategoriController::class, 'destroy'])->name("action-deleteKategori");

// CRUD ANGGOTA
Route::get('/tambah-anggota', [anggotaController::class, 'createView'])->middleware('auth')->name('tambah-anggota');
Route::get('/update-anggota/{id}', [anggotaController::class, 'updateView'])->middleware('auth')->name('update-anggota');
Route::post('/action-addAnggota', [anggotaController::class, 'create'])->name('action-tambahAnggota');
Route::put('/action-updateAnggota/{id}', [anggotaController::class, 'update'])->name('action-updateAnggota');
Route::get('/action-deleteAnggota/{id}', [anggotaController::class, 'destroy'])->name('action-deleteAnggota');

// CRUD JADWAL SHARING
Route::get('/tambah-sharing', [sharingController::class, 'createView'])->middleware('auth')->name('tambah-sharing');
Route::get('/update-sharing/{id}', [sharingController::class, 'updateView'])->middleware('auth')->name('update-sharing');
Route::post('/action-addSharing', [sharingController::class, 'create'])->name('action-tambahSharing');
Route::put('action-updateSharing/{id}', [sharingController::class, 'update'])->name('action-updateSharing');
Route::get('/action-deleteSharing/{id}', [sharingController::class, 'destroy'])->name('action-deleteSharing');

// CRUD ARTIKEL
Route::get('/tambah-artikel', [artikelController::class, 'createView'])->middleware('auth')->name('tambah-artikel');
Route::get('/update-artikel/{id}', [artikelController::class, 'updateView'])->middleware('auth')->name('update-artikel');
Route::post('/action-addArtikel', [artikelController::class, 'create'])->name('action-tambahArtikel');
Route::put('/action-updateArtikel/{id}', [artikelController::class, 'update'])->name('action-updateArtikel');
Route::get('/action-deleteArtikel/{id}', [artikelController::class, 'destroy'])->name('action-deleteArtikel');

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/reg', [registerController::class, 'strike'])->name('reg');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('actionLogin', [loginController::class, 'actionLogin'])->name('action-login');

Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('tentang', [aboutController::class, 'index'])->name('tentang');

Route::get('/sharing', [sharingController::class, 'index'])->name('sharing');

Route::get('/tutorial', [tutorialController::class, 'index'])->name('tutorial');

Route::get('/agenda', [agendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{id}', [detailController::class, 'detailAgenda'])->name('detail-agenda');

Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}', [detailController::class, 'detailArtikel'])->name('detail-artikel');

Route::get('/user/{id}', [userController::class, 'index']);
