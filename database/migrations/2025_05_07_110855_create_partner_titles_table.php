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
        Schema::create('partner_titles', function (Blueprint $table) {
            $table->id();
            $table->string('section_name');
            $table->string('sub_title'); //نقصد فيه الجمله الصغيره اللي تحت العنوان في صفحه الشركاء 

            $table->foreignId('section_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_titles');
    }
};
