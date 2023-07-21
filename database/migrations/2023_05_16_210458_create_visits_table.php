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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_visitor')->constrained('visitors');
            $table->foreignId('id_karyawan')->constrained('karyawan_ga');
            $table->string('name')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('invitation_from')->nullable();
            $table->string('visitation_purpose')->nullable();
            $table->date('visit_date')->nullable();
            $table->time('arrival_time')->nullable();
            $table->enum('checkin', ['checkin', 'pending'])->default('pending');
            $table->enum('checkout', ['checkout', 'pending'])->default('pending');
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
        Schema::dropIfExists('visits');
    }
};
