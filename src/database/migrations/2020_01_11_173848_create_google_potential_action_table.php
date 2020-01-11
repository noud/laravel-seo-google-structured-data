<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGooglePotentialActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('google_potential_action', function (Blueprint $table) {
            $table->bigIncrements('id')->unique()->index();
            $table->bigInteger('google_web_site')->index()->unsigned();
            $table->bigInteger('google_search_action_id')->index()->unsigned();
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
        Schema::dropIfExists('google_potential_action');
    }
}
