<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use Spatie\QueryBuilder\QueryBuilder;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $products = QueryBuilder::for(Product::class)
        ->allowedFilters(['name', 'brand_id', 'category_id'])
        ->allowedSorts(['name', 'price', 'brand_id'])
        ->defaultSort('name')
        ->with(['category', 'brand'])
        ->paginate(15)
        ->appends($request->query());

        return view('dashboard', [
            'user' => Auth::user(),
            'products' => $products,
            'brands' => Brand::all(), 'categories' => Category::all()
        ]);
    }
}

