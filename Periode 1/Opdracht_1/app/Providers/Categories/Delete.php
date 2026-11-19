<?php

namespace App\Providers\Categories;

use App\Models\Category;

class Delete
{
    public function delete(int $id)
    {
        $category = Category::findOrFail($id);

        if (!$category->canDelete()) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Deze categorie kan niet verwijderd worden omdat er nog producten aan gekoppeld zijn.');
        }

        $category->delete();

        return redirect()->route('categories.index');
    }
}
