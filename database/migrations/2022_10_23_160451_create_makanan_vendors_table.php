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
        Schema::create('makanan_vendors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vendor');
            $table->unsignedBigInteger('id_paket_menu');
            
            $table->foreign('id_vendor')
                ->references('id')
                ->on('visitors')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('id_paket_menu')
                ->references('id')
                ->on('paket_menus')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->integer('jumlah');
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
        Schema::dropIfExists('makanan_vendors');
    }
};
