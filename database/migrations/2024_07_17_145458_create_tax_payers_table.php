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
        Schema::create('tax_payers', function (Blueprint $table) {
            $table->id();
            $table->string('taxPayer')->nullable();
            $table->string('wordNo')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('idCard')->nullable();
            $table->string('profession')->nullable();
            $table->string('fName')->nullable();
            $table->string('mName')->nullable();
            $table->string('nationality')->nullable();
            $table->string('dob')->nullable();
            $table->string('totalMember')->nullable();
            $table->string('maleMember')->nullable();
            $table->string('femaleMember')->nullable();
            $table->string('avatar')->nullable();
            $table->string('holdingNumber')->nullable();
            $table->string('village')->nullable();
            $table->string('postOffice')->nullable();
            $table->string('policeStation')->nullable();
            $table->string('district')->nullable();
            $table->string('multiStoredBuilding')->nullable();
            $table->string('building')->nullable();
            $table->string('semiBuilding')->nullable();
            $table->string('rawHouse')->nullable();
            $table->string('holdingPic')->nullable();
            $table->string('taxYear')->nullable();
            $table->string('yearlyIncome')->nullable();
            $table->string('totalTax')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_payers');
    }
};
