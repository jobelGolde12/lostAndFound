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
        Schema::create('found_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name', 255);
            $table->string('category', 100);
            $table->date('date_found')->nullable();
            $table->string('location_found', 255);
            $table->string('person_name', 255);
            $table->string('contact_info', 255);
            $table->text('additional_details')->nullable();
            $table->string('image_url', 255)->nullable();
            $table->enum('status', ['Lost', 'Found', 'Claimed'])->default('Found');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('found_items');
    }
};
