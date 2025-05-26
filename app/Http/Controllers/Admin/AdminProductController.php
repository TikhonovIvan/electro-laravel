<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $product = Product::with(['category'])->findOrFail($id);
        return view('admin.product.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with(['category', 'images'])->findOrFail($id);
        $categories = Category::all();
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }



    public function update(Request $request, string $id)
    {
        $product = Product::with('images')->findOrFail($id);

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

        // Обновляем товар
        $product->update($validated);

        // Если были загружены новые изображения
        if ($request->hasFile('images')) {
            // Создаем папку uploads/images/products/{id}
            $folder = "images/products/{$product->id}";

            foreach ($request->file('images') as $image) {
                $path = $image->store($folder, 'public_uploads');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.products.edit', $product->id)
            ->with('success', 'Товар успешно обновлен');
    }


    /*У*/
    public function deleteImage($id)
    {
        $image = ProductImage::findOrFail($id);

        // Удаляем файл из файловой системы
        $imagePath = public_path('uploads/' . $image->image_path);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Удаляем запись из базы данных
        $image->delete();

        return back()->with('success', 'Изображение удалено');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::with('images')->findOrFail($id);

        // Путь до папки изображений конкретного товара (например: uploads/images/products/12)
        $folderPath = 'images/products/' . $product->id;

        // Удаляем папку со всеми изображениями, если существует
        Storage::disk('public_uploads')->deleteDirectory($folderPath);

        // Удаляем сам товар (каскадно удалятся и изображения, если настроено)
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Товар удалён');
    }
}
