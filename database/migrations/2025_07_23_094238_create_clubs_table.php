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
        Schema::create('clubs', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 255);
            $table->string('acronym', 255)->unique();
            $table->foreignUlid('country_id')->references('id')->on('countries')->restrictOnDelete();
            $table->foreignUlid('state_id')->references('id')->on('states')->restrictOnDelete();
            $table->foreignUlid('city_id')->references('id')->on('cities')->restrictOnDelete();
            $table->string('postal_code', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->foreignUlid('created_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreignUlid('updated_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreignUlid('deleted_by')->nullable()->references('id')->on('users')->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
