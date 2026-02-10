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
        Schema::create('product_masters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idx');
            $table->bigInteger('ProductID')->nullable();
            $table->unsignedBigInteger('LocationID')->nullable();
            $table->string('ProductCode', 25)->nullable();
            $table->string('BarCode', 25)->nullable();
            $table->bigInteger('BarCodeFull')->nullable();
            $table->string('BatchNo', 40)->nullable();
            $table->dateTime('ExpiaryDate')->nullable();
            $table->string('SerialNo', 200)->nullable();
            $table->decimal('Stock', 18, 4)->nullable();
            $table->string('ReferenceCode1', 25)->nullable();
            $table->string('ReferenceCode2', 25)->nullable();
            $table->string('ReferenceCode3', 25)->nullable();
            $table->string('ProductName', 100)->nullable();
            $table->string('NameOnInvoice', 50)->nullable();
            $table->unsignedBigInteger('DepartmentID')->nullable();
            $table->unsignedBigInteger('CategoryID')->nullable();
            $table->unsignedBigInteger('SubCategoryID')->nullable();
            $table->unsignedBigInteger('SubCategory2ID')->nullable();
            $table->unsignedBigInteger('SupplierID')->nullable();
            $table->string('SearchColumn', 50)->nullable();
            $table->unsignedBigInteger('BaseUnitOfMeasureID')->nullable();
            $table->unsignedBigInteger('UnitOfMeasureID')->nullable();
            $table->string('UnitOfMeasureName', 50)->nullable();
            $table->decimal('ConvertFactor', 18, 4)->nullable();
            $table->string('PackSize', 25)->nullable();
            $table->decimal('CostPrice', 18, 4)->nullable();
            $table->decimal('AverageCost', 18, 4)->nullable();
            $table->decimal('SellingPrice', 18, 4)->nullable();
            $table->decimal('WholeSalePrice', 18, 4)->nullable();
            $table->decimal('MinimumPrice', 18, 4)->nullable();
            $table->decimal('FixedDiscount', 18, 4)->nullable();
            $table->decimal('MaximumDiscount', 18, 4)->nullable();
            $table->decimal('MaximumPrice', 18, 4)->nullable();
            $table->decimal('FixedDiscountPercentage', 18, 4)->nullable();
            $table->decimal('MaximumDiscountPercentage', 18, 4)->nullable();
            $table->boolean('IsActive')->nullable();
            $table->boolean('IsBatch')->nullable();
            $table->boolean('IsPromotion')->nullable();
            $table->boolean('IsFreeIssue')->nullable();
            $table->boolean('IsExpiary')->nullable();
            $table->boolean('IsCountable')->nullable();
            $table->boolean('IsTax')->nullable();
            $table->boolean('IsSerial')->nullable();
            $table->boolean('IsStock')->nullable();
            $table->boolean('IsExtendedPropertiesOnSale')->nullable();
            $table->dateTime('ProductDate')->nullable();
            $table->dateTime('BatchDate')->nullable();
            $table->unsignedBigInteger('ProductBatchNoExpiaryDetailID')->nullable();
            $table->unsignedBigInteger('ItemLayer1ID')->nullable();
            $table->unsignedBigInteger('ItemLayer2ID')->nullable();
            $table->unsignedBigInteger('OrderNo')->nullable();
            $table->unsignedInteger('OrderTerminalID')->nullable();
            $table->unsignedInteger('BillingLocationID')->nullable();
            $table->boolean('IsRawMaterial')->nullable()->nullable();
            $table->boolean('IsPastMovement')->nullable();
            $table->string('IdWithLocation', 150)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_masters');
    }
};
