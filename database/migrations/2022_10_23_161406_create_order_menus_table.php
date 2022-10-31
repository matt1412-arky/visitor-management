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
        Schema::create('order_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nik_karyawan');
            $table->unsignedBigInteger('id_makan_vendor');
            $table->foreign('nik_karyawan')
                ->references('NIK')
                ->on('karyawan_ga')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('id_makan_vendor')
                ->references('id')
                ->on('makanan_vendors')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('order_menus');
    }
};
