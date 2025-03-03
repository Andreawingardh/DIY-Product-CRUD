<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category', 'brand'])->get();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('products.create');
        /**
         * Store a newly created resource in storage.
         */
    }
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:10|max:100',
            'description' => 'nullable|min:10',
            // 'brand' => 'required|min:3',
            'price' => 'required|decimal:0,2',
            'height' => 'nullable|decimal:0,2',
            'width' => 'nullable|decimal:0,2',
            'weight' => 'nullable|decimal:0,2',
            // 'category' => 'required|max:50',
        ]);

        Product::create($request->input());
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => Product::findOrFail($product->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([

            'name' => 'required|min:10|max:100',
            'description' => 'nullable|min:10',
            // 'brand' => 'required|min:3',
            'price' => 'required|decimal:0,2',
            'height' => 'nullable|decimal:0,2',
            'width' => 'nullable|decimal:0,2',
            'weight' => 'nullable|decimal:0,2',
            // 'category' => 'required|max:50',
        ]);

        Product::updated($request->input());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
