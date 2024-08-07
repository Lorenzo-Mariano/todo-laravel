<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/new-todo', function () {
    return view('new-todo');
});
