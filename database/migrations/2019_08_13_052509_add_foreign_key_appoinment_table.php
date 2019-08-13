<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAppoinmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->bigInteger('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customer');
            $table->bigInteger('id_activity')->unsigned();
            $table->foreign('id_activity')->references('id')->on('activity');
            $table->bigInteger('post_activity')->unsigned();
            $table->foreign('post_activity')->references('id')->on('activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropColumn('id_customer');            
            $table->dropColumn('id_activity');            
            $table->dropColumn('post_activity');            
        });
    }
}
