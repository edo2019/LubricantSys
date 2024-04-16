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
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('license'); // e.g., 'licensed', 'notLicensed'
            $table->string('company_Name');
            $table->string('region');
            $table->string('block')->nullable(); // Allow null values
            $table->string('address')->nullable();
            $table->string('telephone');
            $table->string('email')->unique(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
