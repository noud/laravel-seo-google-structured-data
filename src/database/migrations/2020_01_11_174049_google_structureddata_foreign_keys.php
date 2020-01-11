<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GoogleStructureddataForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('google_web_site', function (Blueprint $table) {
            $table->foreign('thing_id')->references('id')->on('thing');
        });

        Schema::table('google_potential_action', function (Blueprint $table) {
            $table->foreign('google_web_site')->references('id')->on('google_web_site');
            $table->foreign('google_search_action_id')->references('in')->on('google_search_action');
        });

        Schema::table('google_search_action', function (Blueprint $table) {
            $table->foreign('query-input')->references('id')->on('property_value_specification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('google_web_site', function (Blueprint $table) {
            $table->dropForeign('google_web_site_thing_id_foreign');
        });

        Schema::table('google_potential_action', function (Blueprint $table) {
            $table->dropForeign('google_potential_action_google_web_site_foreign');
            $table->dropForeign('google_potential_action_google_search_action_id_foreign');
        });

        Schema::table('google_search_action', function (Blueprint $table) {
            $table->dropForeign('google_search_action_query-input_foreign');
        });
    }
}
