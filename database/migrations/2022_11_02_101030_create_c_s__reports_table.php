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
        Schema::create('c_s__reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nik_cs');
            $table->foreign('nik_cs')
                ->references('NIK')
                ->on('karyawan_ga');
            $table->text('picture');
            $table->string('location')->nullable();
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
        Schema::dropIfExists('c_s__reports');
    }
};
