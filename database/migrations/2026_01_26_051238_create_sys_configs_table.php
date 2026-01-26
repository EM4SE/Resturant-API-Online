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
         Schema::create('sys_configs', function (Blueprint $table) {
            $table->id(); // Idx
            $table->bigInteger('idx');
            $table->unsignedBigInteger('GroupOfCompanyID');
            $table->unsignedBigInteger('LocationID')->nullable();
            $table->string('LocationCode', 15)->nullable();
            $table->string('LocationName', 50)->nullable();

            // Heads
            for ($i = 1; $i <= 10; $i++) {
                $table->string("Head{$i}", 48)->nullable();
            }

            // Tails
            for ($i = 1; $i <= 10; $i++) {
                $table->string("Tail{$i}", 48)->nullable();
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_configs');
    }
};
