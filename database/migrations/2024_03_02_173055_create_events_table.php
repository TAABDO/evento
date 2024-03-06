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
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->date('date');
        $table->string('location');
        $table->text('description');
        $table->unsignedInteger('availablePlaces');
        $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
        $table->boolean('isAuto');
        $table->unsignedBigInteger('category_id');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        $table->softDeletes();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
