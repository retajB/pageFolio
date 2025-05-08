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
            $table->boolean ('who_we_are') ;
            $table->boolean ('services') ;  
            $table->boolean ('objectives') ;
            $table->boolean ('partners') ; 
            $table->boolean ('feedbacks') ;
            $table->boolean ('individuals') ;   
            $table->boolean ('social_media') ;
            $table->boolean ('locations') ;  
            $table->foreignId('companies_id')->constrained()->cascadeOnDelete();
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
