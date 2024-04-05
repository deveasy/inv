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
        Schema::create('sales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_0900_ai_ci';
            $table->id();
            $table->foreignIdFor(Customers::class);
            $table->timestamp('order_date');
            $table->enum('status', ['Pending', 'Processing', 'Shipped', 'Completed']);
            $table->decimal('amount', total: 8, places: 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
