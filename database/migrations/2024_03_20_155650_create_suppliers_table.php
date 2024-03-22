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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('name');
            $table->text('address');
            $table->integer('phone');
            $table->integer('email')->nullable();
            $table->text('image')->nullable();
            $table->integer('hit_count')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
