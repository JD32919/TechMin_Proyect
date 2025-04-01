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
        Schema::create('stock', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('title')->index();
            $table->text('description')->nullable(); 
            $table->string('image');
            $table->integer('rating')->nullable(); 
            $table->integer('reviews')->nullable();
            $table->decimal('old_price',10,2)->nullable();
            $table->decimal('new_price',10,2);
            $table->integer('discount')->nullable();
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
