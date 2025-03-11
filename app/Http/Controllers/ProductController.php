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
use App\Services\FileUploadService;
use Spatie\QueryBuilder\QueryBuilder;

class ProductController extends Controller
{
    protected $fileUploadService;
    
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

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
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.create', ['categories' => $categories, 'brands' => $brands, 'title' => 'Create product']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProductRequest $request)
    {

        $product = Product::create($request->validated());
        
        // Handle image upload if file is provided
        if ($request->hasFile('image')) {
            $product->image_url = $this->fileUploadService->uploadFile(
                $request->file('image'),
                'products'
            );
            $product->save();
        }

        return redirect()->route('products.show', ['product' => $product])
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

   
    public function update(SaveProductRequest $request, Product $product)
    {
        
        $product->update($request->validated());
        
       
        if ($request->hasFile('image')) {
           
            $this->fileUploadService->deleteFile($product->image_url);
            
            
            $product->image_url = $this->fileUploadService->uploadFile(
                $request->file('image'),
                'products'
            );
            $product->save();
        }

        return redirect()->route('products.show', $product)
            ->with(['message' => 'Product successfully edited']);
    }

   
    public function destroy(Product $product, Request $request)
{
    $this->fileUploadService->deleteFile($product->image_url);
    $product->delete();
    
    // Check if returning to dashboard
    if ($request->has('source') && $request->source === 'dashboard') {
        return redirect()->back()
            ->with(['message' => 'Product successfully deleted']);
    }
    
    // Default redirect
    return redirect()->route('products.index')
        ->with(['message' => 'Product successfully deleted']);
}
}