<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Vinicius'; 

    return view('welcome', ['nome' => $nome]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});
