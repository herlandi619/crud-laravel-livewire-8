<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $users = User::where('id', $id)->first();

        return view('users.show', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();

        return view('users.edit', [
            'users' => $users
        ]);
    }
}
