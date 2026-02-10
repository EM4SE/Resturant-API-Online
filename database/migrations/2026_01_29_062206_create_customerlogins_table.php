<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customerlogins', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100)->unique();
            $table->string('password', 255)->comment('Hashed password using password_hash()');
            $table->string('full_name', 150);
            $table->string('email', 150)->nullable();
            $table->enum('role', ['admin', 'manager', 'cashier', 'viewer'])->default('viewer')->comment('User role for access control');
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->dateTime('last_login')->nullable();
            $table->integer('login_count')->default(0);
            $table->timestamps(); // created_at & updated_at
            $table->integer('created_by')->nullable();
            $table->string('profile_image', 255)->nullable();
            $table->string('phone', 20)->nullable();

            $table->index('username', 'idx_username');
            $table->index('status', 'idx_status');
            $table->index('role', 'idx_role');
        });


         // 🔐 Create default ROOT ADMIN account
        DB::table('customerlogins')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'), // admin / admin
            'full_name' => 'System Administrator',
            'email' => null,
            'role' => 'admin',
            'status' => 1,
            'login_count' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => null,
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('customerlogins');
    }
};
