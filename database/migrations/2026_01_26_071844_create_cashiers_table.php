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
        Schema::create('cashiers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CashierID')->unique();
            $table->string('Code', 50)->nullable();
            $table->unsignedInteger('LocationID')->nullable();
            $table->string('Name', 50)->nullable();
            $table->string('LogName', 10)->nullable();
            // $table->string('Password', 10);
            $table->string('Encode', 10)->nullable();
            $table->smallInteger('Type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashiers');
    }
};
