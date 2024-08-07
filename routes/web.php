<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'showPage']);

Route::get('/new-todo', function () {
    return view('new-todo');
});
