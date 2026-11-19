<?php

namespace App\Providers\Users;

use App\Models\User;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $user = User::findOrFail($id);

    try {
        $user->name = $request->name;
        $user->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'User kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('users.index')
        ->with('success', 'User bijgewerkt.');
}
}