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

     
        Schema::create('lubricant_details', function (Blueprint $table) {
            $table->increments('lubricant_id');
            $table->string('lubricant_Name');
            $table->string('lubricant_Type');
            $table->string('lubricant_Performance_Level');
            $table->string('lubricant_Brand');
            $table->string('number_Certification')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lubricant_details');
    }
};
