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
        Schema::create('icons', function (Blueprint $table) {
            $table->id();
            $table->string('icon_name');
            $table->string('icon_url');
            $table->foreignId('objective_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('company_media_account_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icons');
    }
};
