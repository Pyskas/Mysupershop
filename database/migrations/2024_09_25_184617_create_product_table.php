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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('category_id');
            $table->float('price');
            $table->integer('quantity')->nullable();
            $table->integer('sale')->nullable();
            $table->float('status')->default(1);
            $table->text('description')->nullable();
            $table->string('hash');
            $table->string('article');
            $table->string('image.path');
            $table->timestamps();



            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
