<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $products = $query->orderBy('name')->paginate(5)->withQueryString();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
