<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Menampilkan semua product
     */
    public function index()
    {
        $products = Product::with('category')
            ->latest()
            ->get();

        return view('product.index', compact('products'));
    }

    /**
     * Form tambah product
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('product.create', compact('categories'));
    }

    /**
     * Menyimpan product
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }

        Product::create($validated);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail product
     */
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);

        return view('product.show', compact('product'));
    }

    /**
     * Form edit product
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::orderBy('name')->get();

        return view(
            'product.edit',
            compact('product', 'categories')
        );
    }

    /**
     * Update product
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $validated['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }

        $product->update($validated);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product berhasil diperbarui.');
    }

    /**
     * Hapus product
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('product.index')
            ->with('success', 'Product berhasil dihapus.');
    }
}