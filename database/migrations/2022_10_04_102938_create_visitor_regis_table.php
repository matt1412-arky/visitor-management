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
        Schema::create('visitor_register', function (Blueprint $table) {
            $table->id();
            $table->foreignId('link_visitor_id')->constrained('link_visitors');
            $table->string('fullname', 100);
            $table->string('phone', 13)->unique();
            $table->string('transportation_used', 110);
            $table->string('invitation_from');
            $table->text('visitation_purpose');
            $table->text('picture')->nullable();
            $table->text('file_doc')->nullable();
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
        Schema::dropIfExists('visitor_regis');
    }
};
