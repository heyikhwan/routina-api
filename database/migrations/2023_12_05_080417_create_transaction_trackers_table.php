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
        Schema::create('transaction_trackers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->noActionOnDelete()->noActionOnDelete();
            $table->foreignId('category_transaction_id')->constrained('category_transactions')->noActionOnDelete()->noActionOnDelete();
            $table->integer('amount');
            $table->text('description')->nullable();
            $table->date('date');
            $table->enum('type', ['income', 'expense']);
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_trackers');
    }
};
