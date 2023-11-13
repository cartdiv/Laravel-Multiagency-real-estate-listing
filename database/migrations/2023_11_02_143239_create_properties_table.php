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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('place_id');
            $table->string('property_name');
            $table->string('amenity')->nullable();
            $table->string('property_address');
            $table->string('property_price');
            $table->text('property_description');
            $table->string('property_tags')->nullable();
            $table->string('property_image');
            $table->string('property_slug');
            $table->string('property_size')->nullable();
            $table->string('property_bedroom')->nullable();
            $table->string('property_bathroom')->nullable();
            $table->string('property_garage')->nullable();
            $table->integer('status')->default(0);
            $table->string('agent_id')->nullable();
            $table->unsignedBigInteger('popularity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
