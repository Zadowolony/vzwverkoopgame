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
        Schema::create('user_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignId('platform_id')->constrained('platforms')->onDelete('cascade');
            $table->enum('status', ['te koop', 'verkocht']);
            $table->enum('conditie', ['nieuw', 'zo goed als nieuw', 'gebruikt', 'niet werkend', 'nog verpakt']);

            $table->unsignedBigInteger('koper_id')->nullable();
            $table->text('beschrijving')->nullable();
            $table->dateTime('verkoopdatum');
            $table->decimal('prijs', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_games');
    }
};
