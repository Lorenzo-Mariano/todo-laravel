<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getTodos()
    {
        return view('home', [
            'todos' => DB::table('todos')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'description', 'finished_on')
                ->where('is_done', '=', 0)
                ->paginate(5)
        ]);
    }

    public function getFinishedTodos()
    {
        return view(
            'finished-todos',
            [
                'todos' => DB::table('todos')
                    ->orderBy('created_at', 'desc')
                    ->select('id', 'title', 'description', 'is_done', 'finished_on')
                    ->where('is_done', '=', 1)
                    ->paginate(5)
            ]
        );
    }

    public function newTodo(Request $request)
    {
        $validatedTodo = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validatedTodo) {
            DB::table('todos')->insert([
                'title' => $validatedTodo['title'],
                'description' => $validatedTodo['description'],
                'is_done' => 0,
                'finished_on' => null
            ]);
        }

        return redirect('/');
    }

    public function editTodo(Request $request, $id)
    {
        $validatedTodo = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validatedTodo) {
            DB::table('todos')
                ->where('id', '=', $id)
                ->update([
                    'title' => $validatedTodo['title'],
                    'description' => $validatedTodo['description'],
                ]);
        }

        return redirect('/');
    }

    public function finishTodo(string $id)
    {
        DB::table('todos')
            ->where('id', '=', $id)
            ->update(['is_done' => 1, 'finished_on' => date('Y-m-d H:i:s')]);
        return redirect('/');
    }
}
