<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProviderColId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->unsignedBigInteger('provider_id')->after('name')->nullable();
            $table->foreign('provider_id')->references('id')->on('providers')->cascadeOnDelete();
            $table->unsignedBigInteger('user_level_id')->after('name');
            $table->foreign('user_level_id')->references('id')->on('user_levels')->cascadeOnDelete();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
}
