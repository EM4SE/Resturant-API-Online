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
        Schema::create('payment_dets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Idx')->unique();
            $table->bigInteger('RowNo')->nullable();
            $table->unsignedInteger('PayTypeID')->nullable();
            $table->decimal('Amount', 18, 4)->nullable();
            $table->decimal('Balance', 18, 4)->nullable();
            $table->dateTime('SDate')->nullable();
            $table->char('Receipt', 10)->nullable();
            $table->unsignedInteger('LocationID')->nullable();
            $table->bigInteger('CashierID')->nullable();
            $table->unsignedInteger('UnitNo')->nullable();
            $table->unsignedInteger('BillTypeID')->nullable();
            $table->unsignedInteger('SaleTypeID')->nullable();
            $table->string('RefNo', 30)->nullable();
            $table->bigInteger('BankId')->nullable();
            $table->date('ChequeDate')->nullable();
            $table->boolean('IsRecallAdv')->nullable();
            $table->string('RecallNo', 10)->nullable();
            $table->string('Descrip', 20)->nullable();
            $table->string('EnCodeName', 50)->nullable();
            $table->bigInteger('UpdatedBy')->nullable();
            $table->integer('Status')->nullable();
            $table->bigInteger('CustomerID')->nullable();
            $table->integer('CustomerType')->nullable();
            $table->string('CustomerCode', 50)->nullable();
            $table->bigInteger('ZNo')->nullable();
            $table->unsignedInteger('TerminalID')->nullable();
            $table->integer('LoyaltyType')->nullable();
            $table->unsignedInteger('LocationIDBilling')->nullable();
            $table->unsignedInteger('TableID')->nullable();
            $table->bigInteger('TicketID')->nullable();
            $table->bigInteger('OrderNo')->nullable();
            $table->bigInteger('ShiftNo')->nullable();
            $table->boolean('IsDayEnd')->nullable();
            $table->unsignedInteger('UpdateUnitNo')->nullable();
            $table->date('ZDate')->nullable();
            $table->unsignedInteger('DocumentID')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_dets');
    }
};
