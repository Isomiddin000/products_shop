<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    /**
     * Barcha mahsulotlarni chiqarish.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Yangi mahsulot yaratish formasi.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Yangi mahsulotni saqlash.
     */
    public function store(Request $request)
    {
        // Validatsiya
        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli yaratildi!');
    }

    /**
     * Mahsulotni ID bo'yicha ko'rish.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Tahrirlash formasi.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Mahsulotni yangilash.
     */
    public function update(Request $request, string $id)
    {
        // Validatsiya
        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli yangilandi!');
    }

    /**
     * Mahsulotni o'chirish.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli o‘chirildi!');
    }
}
