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
        Schema::create('employee_of_the_months', function (Blueprint $table) {
            $table->id();
           
            $table->text('content');
            $table->string('employee_name');
            $table->foreignId('image_id')->constrained();
            $table->foreignId('eotm_title_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_of_the_months');
    }
};
