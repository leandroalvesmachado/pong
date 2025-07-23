<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 255);
            $table->string('nickname')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->foreignUlid('club_id')->references('id')->on('clubs')->restrictOnDelete();
            $table->foreignUlid('created_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreignUlid('updated_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreignUlid('deleted_by')->references('id')->on('users')->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
