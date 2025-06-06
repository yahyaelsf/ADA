<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_agricultrels', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_name')->nullable();
            $table->string('s_key')->nullable();
            $table->text('s_description')->nullable();
            $table->string('s_cover');
            $table->boolean('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });
        Schema::create('t_agricultrel_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_locale', 2);
            $table->string('s_name');
            $table->text('s_description');
            $table->foreignIdFor(\App\Models\Agricultrel::class, 'fk_i_agricultrel_id')->nullable();
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_agricultrels');
        Schema::dropIfExists('t_agricultrel_translations');

    }
};
