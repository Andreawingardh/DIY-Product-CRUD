<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        
        return view('dashboard', [
            'user' => Auth::user(),
            'products' => $products // Use the paginated products
        ]);
    }
}

