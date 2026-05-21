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
        Schema::table('achievers', function (Blueprint $table) {
            $table->string('wing_color')->after('mark');
        });
    }

    public function down()
    {
        Schema::table('achievers', function (Blueprint $table) {
            $table->dropColumn('wing_color');
        });
    }
};
