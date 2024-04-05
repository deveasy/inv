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
        Schema::create('sales_details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_0900_ai_ci';
            $table->id();
            $table->foreignIdFor(Sales::class);
            $table->foreignIdFor(Products::class);
            $table->integer('quantity');
            $table->decimal('unit_price', total: 8, places: 2);
            $table->decimal('total_price', total:8, places: 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_details');
    }
};
