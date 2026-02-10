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
        Schema::create('day_starts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idx');
            $table->unsignedInteger('LocationID')->nullable();
            $table->unsignedInteger('LocationIDBilling')->nullable();
            $table->bigInteger('DayStartCashierID')->nullable();
            $table->date('DayStart')->nullable();
            $table->decimal('Amount', 18, 4)->nullable();
            $table->dateTime('StartSystemDate')->nullable();
            $table->boolean('IsDayEnd')->nullable();
            $table->bigInteger('DayEndCashierID')->nullable();
            $table->dateTime('EndSystemDate')->nullable();
            $table->date('DayEnd')->nullable();
            $table->bigInteger('ZNo')->nullable();
            $table->decimal('CashInHand', 18, 4)->nullable();
            $table->boolean('IsShiftStarted')->nullable();
            $table->string('IdWithLocation', 150)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_starts');
    }
};
