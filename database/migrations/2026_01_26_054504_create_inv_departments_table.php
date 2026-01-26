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
        Schema::create('inv_departments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('InvDepartmentID')->unique();
            $table->string('DepartmentCode', 15)->nullable();
            $table->string('DepartmentName', 50)->nullable();
            $table->string('Remark', 150)->nullable()->nullable();
            $table->boolean('IsDelete')->default(false)->nullable();
            $table->unsignedBigInteger('GroupOfCompanyID')->nullable();
            $table->string('CreatedUser', 50)->nullable();
            $table->dateTime('CreatedDate')->nullable();
            $table->string('ModifiedUser', 50)->nullable();
            $table->dateTime('ModifiedDate')->nullable();
            $table->integer('DataTransfer')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inv_departments');
    }
};
