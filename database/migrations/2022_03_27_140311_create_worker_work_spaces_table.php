<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerWorkSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_work_spaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
            $table->date('date');
            $table->unsignedBigInteger('work_space_id');
            $table->foreign('work_space_id')->references('id')->on('work_spaces')->onDelete('cascade');
            $table->unsignedBigInteger('work_space_addon_id')->nullable();
            $table->foreign('work_space_addon_id')->references('id')->on('work_space_addons')->onDelete('cascade');
            $table->unsignedBigInteger('pricing_id');
            $table->foreign('pricing_id')->references('id')->on('pricings')->onDelete('cascade');
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
        Schema::dropIfExists('worker_work_spaces');
    }
}
