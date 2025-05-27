<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $allCategories = Category::query()->paginate(5);
        return view('admin.category.index', [
            'allCategories' => $allCategories
        ]);
    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['max:255'],
        ]);

        Category::query()->create($validated);
        return redirect()->route('admin.category.index')->with('success', 'Новая категория добавлена');

    }

    public function edit(string $id)
    {
        $category = Category::query()->findOrFail($id);
        return view('admin.category.edit', [
            'category' => $category
        ]);

    }

    public function update(Request $request, string $id)
    {
        $category = Category::query()->findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['max:255'],
        ]);

        $category->update($validated);
        return redirect()->route('admin.category.index')->with('success', 'Категория обновлена');
    }

    public function destroy(string $id){
        $category = Category::query()->findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Категория удалена');
    }
}
