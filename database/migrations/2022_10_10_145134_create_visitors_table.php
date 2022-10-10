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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('age');
            $table->string('phone', 14);
            $table->string('invitation_from');
            $table->string('visitation_purpose');
            $table->string('waktu_kunjungan');
            $table->string('transportasi_visitor');
            $table->string('plat_nomor')->nullable();
            $table->string('picture')->nullable();
            $table->string('file_surat')->nullable();
            $table->string('no_darurat', 14);
            $table->foreignId('role_id')->constrained('roles');
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
        Schema::dropIfExists('visitors');
    }
};
