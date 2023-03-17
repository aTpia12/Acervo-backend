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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('inventory')->unique();
            $table->foreignId('enclosure_id')->constrained();
            $table->integer('closure_now')->nullable();
            $table->string('collection');
            $table->string('title');
            $table->foreignId('author_id')->constrained();
            $table->string('technique')->nullable();
            $table->string('measures')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};
