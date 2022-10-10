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
        Schema::create('vaksinasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_visitor')
                ->constrained('visitors');
            $table->string('vaksin_pertama');
            $table->string('vaksin_kedua');
            $table->string('vaksin_ketiga');
            $table->string('vaksin_keempat');
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
        Schema::dropIfExists('vaksinasis');
    }
};
