<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Foreign key to orders
            $table->string('first_name')->nullable(); // First name of the recipient
            $table->string('last_name')->nullable(); // Last name of the recipient
            $table->string('phone')->nullable(); // Phone number
            $table->string('street_address')->nullable(); // Street address
            $table->string('city')->nullable(); // City
            $table->string('state')->nullable(); // State
            $table->string('zip_code')->nullable(); // Zip code
            $table->timestamps(); // Created at and updated at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};