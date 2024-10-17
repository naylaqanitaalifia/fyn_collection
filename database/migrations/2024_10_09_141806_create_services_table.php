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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('service_name', 255);
            $table->decimal('price', 15, 2);
            $table->text('desc');
            $table->enum('duration', ['Under 1 month', '1-3 months', '3-6 months', 'More than 6 months']);
            $table->binary('service_thumbnail');
            $table->enum('status', ['Active', 'Unactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
