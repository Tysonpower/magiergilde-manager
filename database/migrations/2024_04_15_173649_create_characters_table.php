<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('characters', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('name');
      $table->string('start_tier');
      $table->string('external_link');
      $table->string('avatar')->nullable();
      $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('characters');
  }
};
