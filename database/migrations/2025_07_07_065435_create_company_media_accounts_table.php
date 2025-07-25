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
        Schema::create('company_media_accounts', function (Blueprint $table) {
         $table->id();
         $table->string('username_account');
         $table->foreignId('section_id')->constrained()->cascadeOnDelete();
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_media_accounts');
    }
};
