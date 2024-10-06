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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->string('company')->nullable();
            $table->string('company_address')->nullable();
            $table->timestamp('arrival_at');
            $table->timestamp('departure_at');
            $table->timestamp('checkin_at')->nullable();
            $table->timestamp('checkout_at')->nullable();
            $table->integer('total_adult');
            $table->integer('total_infant');
            $table->double('price', 9, 2);
            $table->double('advance_paid', 9, 2)->default(0);
            $table->string('paid_by')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->integer('discount')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
