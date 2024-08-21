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
        Schema::create('business_holdings', function (Blueprint $table) {
            $table->id();
            $table->string('ownerName')->nullable();
            $table->string('idCard')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('fName')->nullable();
            $table->string('mName')->nullable();
            $table->string('spouse')->nullable();
            $table->string('gender')->nullable();
            $table->string('wordNo')->nullable();
            $table->string('dob')->nullable();
            $table->string('religion')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('village')->nullable();
            $table->string('postOffice')->nullable();
            $table->string('policeStation')->nullable();
            $table->string('district')->nullable();
            $table->string('avatar')->nullable();
            $table->string('profileStatus')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_holdings');
    }
};
