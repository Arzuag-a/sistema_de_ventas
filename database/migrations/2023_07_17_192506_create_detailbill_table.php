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
        Schema::create('detailbill', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('amount');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('bill_id')->constrained('bills')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailbill');
    }
};
