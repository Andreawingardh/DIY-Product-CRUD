<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

                'name' => 'required|max:100',
                'description' => 'nullable|min:10',
                'brand' => 'required|min:3',
                'price' => 'required|decimal:0.2|max:8',
                'height' => 'nullable|decimal:0.2|max:4',
                'width' => 'nullable|decimal:0.2|max:4',
                'weight' => 'nullable|decimal:0.2|max:4',
                'category' => 'required|max:50',
        ]);

        Product::create($request->input());
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
