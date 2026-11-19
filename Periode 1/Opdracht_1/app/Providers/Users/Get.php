<?php

namespace App\Providers\Users;

use App\Models\User;

class Get
{
    public function get(int $id)
    {
        $user = User::findOrFail($id);

        return view('users.get', [
            'user' => $user,
        ]);
    }
}