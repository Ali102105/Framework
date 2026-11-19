<?php

namespace App\Providers\Users;

use App\Models\User;

class Delete
{
    public function delete(int $id)
    {
        $user = User::findOrFail($id);

        if (!$user->canDelete()) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Deze gebruiker kan niet verwijderd worden omdat er nog bestellingen of reviews aan gekoppeld zijn.');
        }

        $user->delete();

        return redirect()->route('users.index');
    }
}
