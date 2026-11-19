<?php

namespace App\Providers\Users;

use App\Models\User;

class Index
{
    public function index()
    {
        $users = User::all();

        return view('users.index', [
            'users' => $users,
        ]);
    }
}