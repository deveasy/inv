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
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_0900_ai_ci';
            $table->id();
            $table->enum('transaction_type', ['Sale', 'Purchase', 'Sale Return', 'Purchase Return', 'Transfer']);
            $table->timestamps('transaction_date');
            $table->foreignIdFor(Products::class);
            $table->integer('quantity');
            $table->decimal('transaction_price', total: 8, places: 2);
            $table->foreignIdFor(Sales::class);
            $table->foreignIdFor(Purchases::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
