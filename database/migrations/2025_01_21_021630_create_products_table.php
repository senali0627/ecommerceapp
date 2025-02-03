<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
           
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('name');
            $table->json('images')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 18, 2);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('in_stock')->default(false);
            $table->boolean('on_sale')->default(false);
            $table->timestamps(); // Created at and updated at
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
