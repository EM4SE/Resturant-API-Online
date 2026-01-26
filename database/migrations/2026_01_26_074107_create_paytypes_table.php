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
        Schema::create('paytypes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('PaymentID')->unique();
            $table->string('Descrip', 15)->nullable();
            $table->boolean('IsSwipe')->nullable();
            $table->integer('Type')->nullable();
            $table->decimal('Rate', 18, 0)->nullable();
            $table->boolean('IsRefundable')->nullable();
            $table->boolean('IsActive')->nullable();
            $table->boolean('IsBillCopy')->nullable();
            $table->string('PrintDescrip', 12)->nullable();
            $table->string('PreFix', 5)->nullable();
            $table->integer('MaxLength')->nullable();
            $table->integer('OrderNo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paytypes');
    }
};
