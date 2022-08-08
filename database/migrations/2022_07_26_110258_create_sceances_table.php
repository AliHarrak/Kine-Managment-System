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
        Schema::create('sceances', function (Blueprint $table) {
            $table->id();
            $table->integer('room_no');
            $table->integer('treatment_id');
            $table->date('sceance_date');
            $table->time('sceance_time');
            $table->string('sceance_description');
            $table->string('sceance_notes');
            $table->float('sceance_price');
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
        Schema::dropIfExists('sceances');
    }
};
