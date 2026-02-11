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
        Schema::create('advances', function (Blueprint $table) {
            $table->id();

            $table->integer('RowNo')->nullable();
            $table->unsignedBigInteger('PayTypeID')->nullable();

            $table->decimal('Amount', 15, 2)->default(0);
            $table->decimal('Balance', 15, 2)->default(0);

            $table->dateTime('SDate')->nullable();
            $table->string('Receipt', 50)->nullable();

            $table->unsignedBigInteger('LocationID')->nullable();
            $table->unsignedBigInteger('CashierID')->nullable();

            $table->string('UnitNo', 50)->nullable();
            $table->unsignedBigInteger('BillTypeID')->nullable();
            $table->unsignedBigInteger('SaleTypeID')->nullable();

            $table->string('RefNo', 100)->nullable();
            $table->unsignedBigInteger('BankId')->nullable();
            $table->date('ChequeDate')->nullable();

            $table->boolean('IsRecallAdv')->default(false);
            $table->string('RecallNo', 100)->nullable();

            $table->string('Descrip', 255)->nullable();
            $table->string('EnCodeName', 100)->nullable();

            $table->unsignedBigInteger('TerminalID')->nullable();
            $table->unsignedBigInteger('LocationIDBilling')->nullable();

            $table->unsignedBigInteger('TableID')->nullable();
            $table->unsignedBigInteger('TicketID')->nullable();

            $table->string('OrderNo', 100)->nullable();
            $table->string('CustomerCode', 100)->nullable();

            $table->date('DayStartDate')->nullable();
            $table->dateTime('ShiftDate')->nullable();

            $table->boolean('IsDayEnd')->default(false);

            $table->string('TempPaymentReceipt', 100)->nullable();
            $table->string('IdWithLocation', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advances');
    }
};
