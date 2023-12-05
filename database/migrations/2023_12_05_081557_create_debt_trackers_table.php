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
        Schema::create('debt_trackers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->noActionOnDelete()->noActionOnDelete();
            $table->string('name')->comment('hutang/piutang sama siapa');
            $table->integer('amount');
            $table->boolean('type')->comment('0: hutang, 1: piutang');
            $table->text('description')->nullable();
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('status')->defaul(0)->comment('0: Belum Selesai, 1: Sudah Selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debt_trackers');
    }
};
