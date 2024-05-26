<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Vinicius'; 

    return view('welcome', ['nome' => $nome]);
});

Route::get('/contact', function () {

    $busca = request('search');

    return view('contact', ['busca' => $busca]);
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});