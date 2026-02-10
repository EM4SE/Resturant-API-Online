<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('login_attempts', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100);
            $table->string('ip_address', 45);
            $table->timestamp('attempt_time')->useCurrent();
            $table->boolean('success')->default(0);

            $table->index(['username', 'ip_address'], 'idx_username_ip');
            $table->index('attempt_time', 'idx_attempt_time');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('login_attempts');
    }
};
