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
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Idx')->unique();
            $table->unsignedInteger('LocationID')->nullable();
            $table->unsignedInteger('LocationIDBilling')->nullable();
            $table->bigInteger('CashierID')->nullable();
            $table->date('DayStartDate')->nullable();
            $table->date('ShiftDate')->nullable();
            $table->dateTime('ShiftDateTime')->nullable();
            $table->dateTime('ShiftStartSystemDate')->nullable();
            $table->decimal('Float', 18, 4)->nullable();
            $table->boolean('IsShiftEnd')->nullable();
            $table->bigInteger('ShiftEndCashierID')->nullable();
            $table->dateTime('ShiftEndSystemDate')->nullable();
            $table->date('ShiftEndDate')->nullable();
            $table->dateTime('ShiftEndDateTime')->nullable();
            $table->bigInteger('ZNo')->nullable();
            $table->bigInteger('ShiftNo')->nullable();
            $table->decimal('CashInHand', 18, 4)->nullable();
            $table->unsignedInteger('UnitNo')->nullable();
            $table->boolean('IsDayEnd')->nullable();
            $table->string('IdWithLocation', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
