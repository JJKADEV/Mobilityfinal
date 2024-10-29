<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeHeureRetourNullableInMissionsTable extends Migration
{
    public function up()
    {
        Schema::table('missions', function (Blueprint $table) {
            $table->time('heure_retour')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('missions', function (Blueprint $table) {
            $table->time('heure_retour')->nullable(false)->change();
        });
    }
}
