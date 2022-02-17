<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkSpaceAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_space_addons', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->unsignedBigInteger('work_space_id');
            $table->foreign('work_space_id')->references('id')->on('work_spaces')->onDelete('cascade');
            $table->unsignedBigInteger('addon_id');
            $table->foreign('addon_id')->references('id')->on('addons')->onDelete('cascade');
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
        Schema::dropIfExists('work_space_addons');
    }
}
