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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('city_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('neighborhood_id')->nullable();
            $table->string('address');
            $table->string('products');
            $table->string('total_price');
            $table->string('barcode')->nullable();
            $table->text('ref_url',2000)->nullable();
            $table->string('note')->nullable();
            $table->boolean('is_done')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
