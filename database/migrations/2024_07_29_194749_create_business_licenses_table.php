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
        Schema::create('business_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('holderId')->nullable();
            $table->string('businessName')->nullable();
            $table->string('shopNo')->nullable();
            $table->string('businessType')->nullable();
            $table->string('businessYear')->nullable();
            $table->string('issueDate')->nullable();
            $table->string('expireDate')->nullable();
            $table->string('ownershipType')->nullable();
            $table->string('location')->nullable();
            $table->string('postOffice')->nullable();
            $table->string('policeStation')->nullable();
            $table->string('district')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_licenses');
    }
};
