<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{

    use HasFactory;
    
    protected $fillable = [

        'name' 
    ];

    public function products(): HasMany
    {
        return $this->HasMany(Product::class);
    }
}
