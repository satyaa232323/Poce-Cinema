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
        Schema::create('movies', function(Blueprint $table){
            $table->id();
            $table->timestamp(false);
            $table->string('title');
            $table->string('year');
            $table->decimal('price');
            $table->string('description');
            $table->string('cover');
            $table->string('gallery');
            $table->enum('category', ['comedy', 'horror', 'cartoon', 'drama']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
