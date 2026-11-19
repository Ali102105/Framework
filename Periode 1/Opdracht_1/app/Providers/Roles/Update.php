<?php

namespace App\Providers\Roles;

use App\Models\Role;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $role = Role::findOrFail($id);

    try {
        $role->name = $request->name;
        $role->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'Role kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('roles.index')
        ->with('success', 'Role bijgewerkt.');
}
}