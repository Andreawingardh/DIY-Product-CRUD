<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SaveProductRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminOnly;
use Spatie\QueryBuilder\QueryBuilder;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $products = QueryBuilder::for(Product::class)
        ->allowedFilters(['name', 'brand_id', 'category_id'])
        ->allowedSorts(['name', 'price', 'brand_id'])
        ->defaultSort('name')
        ->with(['category', 'brand'])
        ->paginate(20)
        ->appends($request->query());
        
        return view('products.index', ['products' => $products, 'brands' => Brand::all(), 'categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $middleware = new AdminOnly();
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.create', ['categories' => $categories, 'brands' => $brands, 'title' => 'Create product']);
        /**
         * Store a newly created resource in storage.
         */
    }
    public function store(SaveProductRequest $request)
    {
        // $product = new Product();
        // $product->category_id = $request->category_id;
        // $product->brand_id = $request->brand_id;

        $product = Product::create($request->validated());
        return redirect()->route('products.show', ['product' =>$product])
        ->with(['message' => 'Product successfully created']);
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
       
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.edit', ['product' => $product, 'categories' => $categories, 'brands' => $brands, 'title' => 'Edit product']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveProductRequest $request, Product $product)
    {
        

        $product->update($request->validated());
        return redirect()->route('products.show', $product)
        ->with(['message' => 'Product successfully created']);
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
