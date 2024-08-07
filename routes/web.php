<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'getTodos']);

Route::get('/finished-todos', [TodoController::class, 'getFinishedTodos']);

Route::get('/new-todo', function () {
    return view('new-todo');
});

Route::get('/edit-todo/{id}', function (string $id) {
    $todo = DB::table('todos')
        ->select('id', 'title', 'description')
        ->where('id', '=', $id)
        ->first();

    return view('edit-todo', ['todo' => $todo]);
});

Route::post('/new-todo', [TodoController::class, 'newTodo']);

Route::post('/todo/{id}', [TodoController::class, 'finishTodo']);

Route::patch('/todo/{id}', [TodoController::class, 'editTodo']);
