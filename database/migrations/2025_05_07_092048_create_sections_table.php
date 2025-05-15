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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->boolean('who_we_are')->default(false);
            $table->boolean('services')->default(false);
            $table->boolean('objectives')->default(false);
            $table->boolean('partners')->default(false);
            $table->boolean('feedbacks')->default(false);
            $table->boolean('employee_of_the_months')->default(false);
            $table->boolean('social_media')->default(false);
            $table->boolean('locations')->default(false);
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->timestamps() ;
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
