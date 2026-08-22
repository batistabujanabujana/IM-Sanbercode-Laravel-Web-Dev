<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Menampilkan semua data category.
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('category.index', compact('categories'));
    }

    /**
     * Menampilkan form tambah category.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Menyimpan category baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($validated);

        return redirect()
            ->route('category.index')
            ->with('success', 'Category berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail category.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);

        return view('category.show', compact('category'));
    }

    /**
     * Menampilkan form edit category.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        return view('category.edit', compact('category'));
    }

    /**
     * Menyimpan perubahan category.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($validated);

        return redirect()
            ->route('category.index')
            ->with('success', 'Category berhasil diperbarui.');
    }

    /**
     * Menghapus category.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()
            ->route('category.index')
            ->with('success', 'Category berhasil dihapus.');
    }
}