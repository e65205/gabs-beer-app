<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('brewer');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('style');
            $table->decimal('abv', 6, 1)->default(0.0);
            $table->string('complexity');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
            $table->timestamps();

            // Indexing for better query performance
            $table->index('section');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beers');
    }
};
