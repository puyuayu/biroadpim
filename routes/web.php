<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/berita/detail', function () {
    return view('berita-detail');
})->name('berita.detail');
