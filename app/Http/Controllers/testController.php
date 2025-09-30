<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class testController extends Controller
{
    public function home()
    {
        $postings = [
            [
                'author' => 'Simon Pasag',
                'message' => 'Hello I just learning Laravel hehe.',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'John Doe',
                'message' => 'Hello im Handsome.',
                'time' => '32 minutes ago'
            ],
            [
                'author' => 'Sara Jane',
                'message' => 'Hello im Pretty.',
                'time' => '3 hours ago'
            ],

        ];

        return view('home', ['postings' => $postings]);
    }
}

// t