<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('position_id')->after('phone');
            $table->unsignedBigInteger('village_id')->after('position_id');

            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('village_id')->references('id')->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['position_id', 'village_id']);

            $table->dropColumn('position_id');
            $table->dropColumn('village_id');
        });
    }
}
