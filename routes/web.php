<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page', function () {
    return view('/articles/page');
});

Route::get("/any", function () {
    return view('permite tudo');
});

Route::get('/page2', function () {
    return view('/articles/page2');
});

Route::get('/cisco', function () {
    return view('/site/cisco');
});
