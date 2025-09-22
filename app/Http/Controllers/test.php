<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class test
{
    public function todoList()
    {
        $response = Http::get('http://jsonplaceholder.typicode.com/todos');

        $list = $response->json();

        return view('todos', ['todos' => $list]);
    }
}
