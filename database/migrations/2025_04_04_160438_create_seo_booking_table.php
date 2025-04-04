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
        Schema::create('seo_booking', function (Blueprint $table) {
            $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('contact');
        $table->string('technology');
        $table->string('website_link');
        $table->enum('status', ['pending', 'proceed', 'complete'])->default('pending');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_booking');
    }
};
