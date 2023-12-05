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
        Schema::create('shopping_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->noActionOnDelete()->noActionOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->tinyInteger('priority')->default(1)->comment('1: Low, 2: Medium, 3: High');
            $table->boolean('status')->defaul(0)->comment('0: Belum Dibeli, 1: Sudah Dibeli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_lists');
    }
};
