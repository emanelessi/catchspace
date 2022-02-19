<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->unsignedBigInteger('work_space_id');
            $table->foreign('work_space_id')->references('id')->on('work_spaces')->onDelete('cascade');
            $table->unsignedBigInteger('rent_type_id');
            $table->foreign('rent_type_id')->references('id')->on('rent_types')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('pricings');
    }
}
