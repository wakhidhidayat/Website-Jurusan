<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('prestasi', 'PrestasiController');
