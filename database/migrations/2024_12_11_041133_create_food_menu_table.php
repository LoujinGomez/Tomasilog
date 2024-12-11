<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodMenuTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_menu', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Dish name
            $table->text('description')->nullable(); // Description
            $table->decimal('price', 8, 2); // Price (e.g., 99999.99)
            $table->string('image')->nullable(); // Image path or URL
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_menu');
    }
}
