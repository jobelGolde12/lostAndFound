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
        Schema::create('lost_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name', 255);
            $table->string('category', 100);
            $table->date('date_lost')->nullable();
            $table->string('location_lost', 255);
            $table->string('owner_name', 255);
            $table->string('contact_info', 255);
            $table->text('additional_details')->nullable();
            $table->string('image_url', 255)->nullable();
            $table->enum('status', ['Lost', 'Found', 'Claimed'])->default('Lost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_items');
    }
};
