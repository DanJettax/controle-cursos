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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('color_nome');
            $table->integer('bc_batch');
            $table->string('vin');
            $table->string('model');
            $table->string('part');
            $table->boolean('delta');
            $table->Float('result_15');
            $table->Float('result_25');
            $table->Float('result_45');
            $table->Float('result_75');
            $table->Float('result_110');
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
        Schema::dropIfExists('series');
    }
};
