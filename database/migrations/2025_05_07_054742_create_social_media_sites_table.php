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
        Schema::create('social_media_sites', function (Blueprint $table) {
            $table->id();

            $table->string('instagram_url');
            $table->string('linkedin_url');
            $table->string('x_url');
            $table->string('whatsapp_url');
            $table->foreignId('sections_id');
            $table->foreignId('icons_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media_sites');
    }
};
