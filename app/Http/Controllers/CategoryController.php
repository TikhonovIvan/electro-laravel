<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::with(['category', 'images']);

        // Фильтрация по категориям (по slug)
        if ($request->has('categories') && is_array($request->categories)) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->whereIn('slug', $request->categories);
            });
        }

        // Фильтрация по цене
        if ($request->has('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->has('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $products = $query->paginate(9); // или сколько нужно
        $categories = Category::all();

        return view('category.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = trim($request->input('query'));

        if (!$query) {
            return redirect()->route('category.index');
        }

        // Поиск по категории (точное совпадение)
        $category = Category::where('name', 'like', "%{$query}%")->first();
        if ($category) {
            return redirect()->route('category.index', ['categories[]' => $category->slug]);
        }

        // Сначала ищем точное совпадение по SKU
        $productBySku = Product::where('sku', $query)->first();
        if ($productBySku) {
            return redirect()->route('product.show', $productBySku->id);
        }

        // Затем ищем частичное совпадение по названию товара
        $productByName = Product::where('name', 'like', "%{$query}%")->first();
        if ($productByName) {
            return redirect()->route('product.show', $productByName->id);
        }

        // Если ничего не найдено — покажем все товары с фильтрацией по названию или SKU
        $products = Product::with(['category', 'images'])
            ->where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('sku', 'like', "%{$query}%");
            })
            ->paginate(9);

        $categories = Category::all();

        return view('category.index', compact('products', 'categories'))
            ->with('message', 'Результаты поиска по: ' . $query);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
