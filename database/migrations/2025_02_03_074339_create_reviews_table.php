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
        
{
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained();  // Assuming products table exists
        $table->string('user_name');
        $table->text('review');
        $table->integer('rating'); 
        $table->timestamps();
    });
}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
