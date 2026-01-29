<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/* =======================
   BERITA
======================= */
Route::get('/berita', function () {
    return view('berita.index');
})->name('berita');

Route::get('/berita/detail', function () {
    return view('berita-detail');
})->name('berita.detail');

/* =======================
   GALERI & KONTAK
======================= */
Route::get('/galeri', function () {
    return view('galeri.index');
})->name('galeri');

Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak');

/* =======================
   PROFIL
======================= */
Route::get('/profil/biro-adpim', function () {
    return view('profil.biro-adpim');
})->name('profil.biro');

Route::get('/profil/struktur-organisasi', function () {
    return view('profil.struktur-organisasi');
})->name('profil.struktur');

Route::get('/profil/kepala-biro', function () {
    return view('profil.kepala-biro');
})->name('profil.kepala');

Route::get('/profil/sdm', function () {
    return view('profil.sdm');
})->name('profil.sdm');

Route::get('/profil/daftar-urut-kepangkatan', function () {
    return view('profil.dukp');
})->name('profil.dukp');

Route::get('/profil/statistik-kepegawaian', function () {
    return view('profil.statistik');
})->name('profil.statistik');

Route::get('/agenda-harian', function () {
    return view('dokumen.agenda');
})->name('agenda.harian');

Route::get('/agenda-harian/preview', function () {
    return view('dokumen.agenda-preview');
})->name('agenda.preview');



