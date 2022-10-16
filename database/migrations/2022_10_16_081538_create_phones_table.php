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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('type')->nullable();
            $table->timestamps();
        });

        Schema::create('phoneables', function (Blueprint $table) {
            $table->foreignId('phone_id');
            $table->morphs('phoneable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
        Schema::dropIfExists('phoneables');
    }
};
