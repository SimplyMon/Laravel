<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class todosController
{
    public function todosList()
    {

        $response = Http::get('http://jsonplaceholder.typicode.com/todos');

        $todos = $response->json();

        return view('todos', ['todoLists' => $todos]);
    }
}
