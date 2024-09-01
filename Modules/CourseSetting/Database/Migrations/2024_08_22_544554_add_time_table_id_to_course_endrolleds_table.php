<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('course_enrolleds', function (Blueprint $table) {
            $table->integer('time_table_id')->after('tracking')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_enrolleds', function (Blueprint $table) {
            $table->dropColumn('time_table_id');
        });
    }
};

