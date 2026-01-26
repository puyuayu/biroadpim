<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/berita/detail', function () {
    return view('berita-detail');
})->name('berita.detail');

Route::get('/berita', function () {
    return view('berita.index');
})->name('berita');

Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak');
