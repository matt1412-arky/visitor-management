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
        Schema::create('feedback_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('NIK_Karyawan')
                ->constrained('karyawan_ga', 'NIK');
            $table->unsignedBigInteger('id_paket_menu')
                ->nullable();
            $table->float('rating')->nullable();
            $table->text('gambar')->nullable();
            $table->text('feedback')->nullable();
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
        Schema::dropIfExists('feedback_menus');
    }
};
