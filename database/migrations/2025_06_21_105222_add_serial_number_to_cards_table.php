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
        Schema::table('cards', function (Blueprint $table) {
            $table->string('serial_number')->unique()->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropColumn('serial_number');
        });
    }
};
