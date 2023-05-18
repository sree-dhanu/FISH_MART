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
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->string('procategory');
            $table->string('price');
            $table->string('productimage');
            $table->string('totstock');
            $table->string('availstock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addproducts');
    }
};
