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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
    
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('room_types');
            
            $table->string('room_number');
            $table->boolean('has_ac');
            $table->integer('total_bed');
            $table->string('building')->nullable();
            $table->string('floor');
            $table->double('price', 9, 2);
            $table->text('remark')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
