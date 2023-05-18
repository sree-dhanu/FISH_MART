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
        Schema::create('addreceipes', function (Blueprint $table) {
            $table->id();
            $table->string('receipename');
            $table->longText('incrediants');
            $table->longText('method');
            $table->string('receimage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addreceipes');
    }
};
