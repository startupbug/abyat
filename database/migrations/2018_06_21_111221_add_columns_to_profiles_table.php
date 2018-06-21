<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('country')->nullable()->after('phone');
            $table->string('city')->nullable()->after('phone');
            $table->string('zip_code')->nullable()->after('phone');
            $table->string('phone_code')->nullable()->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('phone_code');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('zip_code');
        });
    }
}
