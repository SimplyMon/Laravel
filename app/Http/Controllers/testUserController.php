<?php

namespace App\Http\Controllers;

use App\Models\TestUser;
use Illuminate\Http\Request;

// test
class testUserController
{
    public function create()
    {
        return view('test_users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:test_users,email',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        TestUser::create($validated);

        return redirect()->back()->with('success', 'User created successfully!');
    }
}
