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
        Schema::create('transaction_dets', function (Blueprint $table) {
            $table->id();
            $table->integer('Idx')->unique();
            $table->bigInteger('ProductID')->nullable();
            $table->string('ProductCode', 25)->nullable();
            $table->string('RefCode', 25)->nullable();
            $table->bigInteger('BarCodeFull')->nullable();
            $table->string('Descrip', 50)->nullable();
            $table->string('BatchNo', 50)->nullable();
            $table->string('SerialNo', 50)->nullable();
            $table->date('ExpiaryDate')->nullable()->nullable();
            $table->decimal('Cost', 18, 4)->nullable();
            $table->decimal('AvgCost', 18, 4)->nullable();
            $table->decimal('Price', 18, 4)->nullable();
            $table->decimal('Qty', 18, 4)->nullable();
            $table->decimal('Amount', 18, 4)->nullable();
            $table->bigInteger('UnitOfMeasureID')->nullable();
            $table->string('UnitOfMeasureName', 10)->nullable();
            $table->decimal('ConvertFactor', 18, 4)->nullable();
            $table->integer('IDI1')->nullable();
            $table->decimal('IDis1', 18, 4)->nullable();
            $table->decimal('IDiscount1', 18, 4)->nullable();
            $table->bigInteger('IDI1CashierID')->nullable();
            $table->integer('IDI2')->nullable();
            $table->decimal('IDis2', 18, 4)->nullable();
            $table->decimal('IDiscount2', 18, 4)->nullable();
            $table->bigInteger('IDI2CashierID')->nullable();
            $table->integer('IDI3')->nullable();
            $table->decimal('IDis3', 18, 4)->nullable();
            $table->decimal('IDiscount3', 18, 4)->nullable();
            $table->bigInteger('IDI3CashierID')->nullable();
            $table->integer('IDI4')->nullable();
            $table->decimal('IDis4', 18, 4)->nullable();
            $table->decimal('IDiscount4', 18, 4)->nullable();
            $table->bigInteger('IDI4CashierID')->nullable();
            $table->integer('IDI5')->nullable();
            $table->decimal('IDis5', 18, 4)->nullable();
            $table->decimal('IDiscount5', 18, 4)->nullable();
            $table->bigInteger('IDI5CashierID')->nullable();
            $table->decimal('Rate', 18, 4)->nullable();
            $table->boolean('IsSDis')->nullable();
            $table->integer('SDNo')->nullable();
            $table->integer('SDID')->nullable();
            $table->decimal('SDIs', 18, 4)->nullable();
            $table->decimal('SDiscount', 18, 4)->nullable();
            $table->bigInteger('DDisCashierID')->nullable();
            $table->decimal('Nett', 18, 4)->nullable();
            $table->unsignedInteger('LocationID')->nullable();
            $table->unsignedInteger('DocumentID')->nullable();
            $table->unsignedInteger('BillTypeID')->nullable();
            $table->unsignedInteger('SaleTypeID')->nullable();
            $table->char('Receipt', 10)->nullable();
            $table->bigInteger('SalesmanID')->nullable();
            $table->string('Salesman', 15)->nullable();
            $table->bigInteger('CustomerID')->nullable();
            $table->string('Customer', 150)->nullable();
            $table->bigInteger('CashierID')->nullable();
            $table->string('Cashier', 15)->nullable();
            $table->time('StartTime')->nullable();
            $table->time('EndTime')->nullable();
            $table->date('RecDate')->nullable();
            $table->bigInteger('BaseUnitID')->nullable();
            $table->integer('UnitNo')->nullable();
            $table->integer('RowNo')->nullable();
            $table->boolean('IsRecall')->nullable();
            $table->char('RecallNo', 10)->nullable();
            $table->boolean('RecallAdv')->nullable();
            $table->decimal('TaxAmount', 18, 4)->nullable();
            $table->boolean('IsTax')->nullable();
            $table->decimal('TaxPercentage', 18, 4)->nullable();
            $table->boolean('IsStock')->nullable();
            $table->bigInteger('UpdateBy')->nullable();
            $table->integer('Status')->nullable();
            $table->integer('CustomerType')->nullable();
            $table->bigInteger('ZNo')->nullable();
            $table->integer('TransStatus')->nullable();
            $table->boolean('IsPromotionApplied')->nullable();
            $table->integer('PromotionID')->nullable();
            $table->boolean('IsPromotion')->nullable();
            $table->unsignedInteger('LocationIDBilling')->nullable();
            $table->integer('TableID')->nullable();
            $table->integer('OrderTerminalID')->nullable();
            $table->bigInteger('TicketID')->nullable();
            $table->bigInteger('OrderNo')->nullable();
            $table->boolean('IsPrinted')->nullable();
            $table->string('ItemComment', 100)->nullable();
            $table->integer('Packs')->nullable();
            $table->boolean('IsCancelKOT')->nullable();
            $table->integer('StewardID')->nullable();
            $table->string('StewardName', 50)->nullable();
            $table->decimal('ServiceCharge', 18, 4)->nullable();
            $table->decimal('ServiceChargeAmount', 18, 4)->nullable();
            $table->bigInteger('ShiftNo')->nullable();
            $table->boolean('IsDayEnd')->nullable();
            $table->integer('UpdateUnitNo')->nullable();
            $table->date('ZDate')->nullable();
            $table->string('TagNo', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_dets');
    }
};
