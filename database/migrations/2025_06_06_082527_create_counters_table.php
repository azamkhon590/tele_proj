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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('count')->default(0);
            $table->integer('updated')->default(1);
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('coins')->default(0);
            $table->integer('clickPower')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
