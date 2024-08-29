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
                $table->string('name');
                $table->text('description')->nullable();
                $table->decimal('price', 10, 2);
                $table->unsignedInteger('stock')->default(0);
                $table->string('sku')->unique()->nullable();
                $table->string('image_url')->nullable();
                $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Assuming you have a categories table
                $table->string('brand'); // Assuming you have a brands table
                $table->text('additional_info')->nullable(); // For any additional information
                $table->timestamps();
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
