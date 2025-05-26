<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category'])->paginate(10);

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'price' => ['required', 'numeric'],
            'discount' => ['nullable', 'numeric'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'color' => ['required'],
            'stock' => ['required', 'integer'],
            'category_id' => ['required', 'exists:categories,id'],
            'images' => ['nullable', 'array', 'max:10'],
            'images.*' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $product = Product::create($validated);

        // Папка для сохранения изображений: uploads/images/products/{id}
        $folder = "images/products/{$product->id}";

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Сохраняем изображение в кастомный диск 'public_uploads' с нужной подпапкой
                $path = $image->store($folder, 'public_uploads');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path, // сохраняем относительный путь
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Товар добавлен');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
