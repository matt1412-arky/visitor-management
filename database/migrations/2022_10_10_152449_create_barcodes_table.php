<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ada fitur ask status = pending
        Schema::create('barcodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained('registration_visitors');
            $table->enum('status', ['checkin', 'checkout']); // expired
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barcodes');
    }
};
