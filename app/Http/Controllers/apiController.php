<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class apiController
{
    public function getPosts()
    {
        $response = Http::get('http://jsonplaceholder.typicode.com/posts');

        $posts = $response->json();

        return view('about', ['kuninMona' => $posts]);
    }
}
