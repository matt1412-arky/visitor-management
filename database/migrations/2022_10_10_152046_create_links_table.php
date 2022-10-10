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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_karyawan')->unsigned();
            $table->bigInteger('id_visitor')->unsigned();
            $table->string('token', 64)->unique();
            $table->foreign('id_karyawan')
                ->references('NIK')
                ->on('karyawan_GA')
                ->cascadeOnUpdate()
                ->cascadeOnUpdate();
            $table->foreign('id_visitor')
                ->references('id')
                ->on('visitors')
                ->cascadeOnUpdate()
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
        Schema::dropIfExists('links');
    }
};
