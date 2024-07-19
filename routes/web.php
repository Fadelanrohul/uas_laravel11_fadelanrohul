<?php
use App\Http\Controllers\BukuAzmiController;
use App\Http\Controllers\PenerbitAzmiController;
use App\Http\Controllers\AnggotaAzmiController;
use App\Http\Controllers\PeminjamAzmiController;

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SiswaController::class, 'index'])->name('siswa.index');
Route::resource('gallery', GalleryController::class);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/tambah', [SiswaController::class, 'tambah_proses'])->name('siswa.tambah_proses');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/edit/{id}', [SiswaController::class, 'edit_proses'])->name('siswa.edit_proses');
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus'])->name('siswa.hapus');
Route::delete('/siswa/hapus/{id}', [SiswaController::class, 'hapus_proses'])->name('siswa.hapus_proses');
Route::get('cetak_siswa', [SiswaController::class, 'cetak_siswa'])->name('cetak_siswa');

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');


//other way route
Route::resource('pelajaran', PelajaranController::class);

Route::resource('kurikulum', KurikulumController::class);

Route::resource('buku', BukuAzmiController::class);
Route::resource('penerbit', PenerbitAzmiController::class);
Route::resource('anggota', AnggotaAzmiController::class);
Route::resource('peminjam', PeminjamAzmiController::class);

Route::resource('hari', HariController::class);



Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

Route::resource('perkiraan', PerkiraanController::class);
Route::get('cetak_perkiraan', [PerkiraanController::class, 'cetak_perkiraan'])->name('cetak_perkiraan');


Route::resource('pengumuman', PengumumanController::class);

