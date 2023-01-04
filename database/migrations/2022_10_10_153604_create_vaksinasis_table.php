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
            $table->enum('vaksin_pertama', [0, 1])->nullable()->default(0);
            $table->enum('vaksin_kedua', [0, 1])->nullable()->default(0);
            $table->enum('vaksin_ketiga', [0, 1])->nullable()->default(0);
            $table->enum('vaksin_keempat', [0, 1])->nullable()->default(0);
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
