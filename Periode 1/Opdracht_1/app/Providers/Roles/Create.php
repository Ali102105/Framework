<?php

namespace App\Providers\Roles;

use App\Models\Role;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect()->route('roles.index');
    }
}
