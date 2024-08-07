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
                ->select('id', 'title', 'description', 'is_done', 'finished_on')
                ->paginate(5)
        ]);
    }
}
