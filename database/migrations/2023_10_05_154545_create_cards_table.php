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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('series');
            $table->string('service');
            $table->string('speed');
            $table->string('cert_img');
            $table->longText('desc');
            $table->integer('qty');
            $table->string('worn_edges');
            $table->string('creases');
            $table->string('scratches');
            $table->string('worn_corners');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
