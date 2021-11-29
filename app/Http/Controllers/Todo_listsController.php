<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo_list;

class Todo_listsController extends Controller
{
    public function index()
    {
        $todo_lists = Todo_list::all();
        return view('/Todo_list.index', 
        [
            'Todo_lists' => $todo_lists,
        ]);
    }
}
