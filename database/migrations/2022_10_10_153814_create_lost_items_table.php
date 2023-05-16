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
        Schema::create('lost_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_visitor')->unsigned();
            $table->bigInteger('id_karyawan')->unsigned();
            $table->string('item_name');
            $table->string('item_image');
            $table->string('status');
            $table->string('takenby');
            $table->foreign('id_visitor')
                ->references('id')
                ->on('visitors')
                ->nullable()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('id_karyawan')
                ->references('id')
                ->on('karyawan_GA')
                ->nullable()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('lost_items');
    }
};
