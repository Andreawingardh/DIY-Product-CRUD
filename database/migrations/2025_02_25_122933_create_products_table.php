<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 100);
            $table->text('description')->nullable();
            $table->text('brand');
            $table->decimal('price', total: 8, places: 2)->default(0);
            $table->decimal('height',total: 4, places: 2)->default(0);
            $table->decimal('width', total: 4, places: 2)->default(0);
            $table->decimal('weight',total: 4, places: 2)->default(0);
            $table->string('category', length: 50);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
