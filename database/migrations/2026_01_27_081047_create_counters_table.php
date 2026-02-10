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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Idx');
            $table->unsignedInteger('GroupOfCompanyID')->nullable();
            $table->unsignedInteger('LocationID')->nullable();
            $table->string('LocationCode', 50)->nullable();
            $table->string('LocationName', 100)->nullable();
            $table->string('IdWithLocation', 150)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
