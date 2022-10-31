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
        Schema::create('paket_menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket_menu')->unique();
            $table->string('makanan', 100);
            $table->string('minuman', 100);
            // $table->unsignedBigInteger('id_menu');
            // $table->foreign('id_menu')->references('id')
            //     ->on('menus')
            //     ->cascadeOnUpdate()
            //     ->cascadeOnDelete();
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
        Schema::dropIfExists('paket_menus');
    }
};
