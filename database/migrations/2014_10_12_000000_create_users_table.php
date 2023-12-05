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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('level', ['admin', 'user'])->default('user');
            $table->text('photo')->nullable();
            $table->date('birth_date')->nullable();
            $table->boolean('gender')->comment('1: Laki-laki, 2: Perempuan');
            $table->string('phone')->nullable();
            $table->text('bio')->nullable();
            $table->boolean('status')->default(1)->comment('1: Aktif, 0: Tidak Aktif');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
