<?php

namespace App\Providers\Roles;

use App\Models\Role;

class Delete
{
    public function delete(int $id)
    {
        $role = Role::findOrFail($id);

        if (!$role->canDelete()) {
            return redirect()
                ->route('roles.index')
                ->with('error', 'Deze rol kan niet verwijderd worden omdat er nog gebruikers aan gekoppeld zijn.');
        }

        $role->delete();

        return redirect()->route('roles.index');
    }
}
