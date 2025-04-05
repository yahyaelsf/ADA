<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeSValueColumnInTSystemSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_system_settings', function (Blueprint $table) {
           DB::statement("ALTER TABLE t_system_settings MODIFY COLUMN s_value VARCHAR(255) NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_system_settings', function (Blueprint $table) {
            DB::statement("ALTER TABLE t_system_settings MODIFY COLUMN s_value VARCHAR(255) NULL");
        });
    }
}
