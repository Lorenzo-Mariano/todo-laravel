<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function showPage()
    {
        return view('home', [
            'todos' => DB::table('todos')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'description', 'finished_on')
                ->where('is_done', '=', 0)
                ->paginate(5)
        ]);
    }

    public function showPageFinished()
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

    public function finishTodo(string $id)
    {
        DB::table('todos')
            ->where('id', '=', $id)
            ->update(['is_done' => 1, 'finished_on' => date('Y-m-d H:i:s')]);
        return redirect('/');
    }
}
