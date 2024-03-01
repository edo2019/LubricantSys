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
        Schema::create('supporting_documents', function (Blueprint $table) {
            $table->increments('supporting_documents_id');
            $table->string('number_NameOfCertification')->unique();
            $table->string('Attachment1');
            $table->string('Attachment2');
            $table->string('Attachment3');
            $table->string('Attachment4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supporting_documents');
    }
};
