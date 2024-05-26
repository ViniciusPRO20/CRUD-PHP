<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

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