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
        Schema::create('t_brands', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title')->nullable();
            $table->text('s_description')->nullable();
            $table->string('s_cover');
            $table->boolean('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });
        Schema::create('t_brand_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_locale', 2);
            $table->string('s_title');
            $table->text('s_description')->nullable();
            $table->unsignedBigInteger('fk_i_brand_id');
            $table->foreign('fk_i_brand_id')->references('pk_i_id')->on('t_brands');
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
        Schema::dropIfExists('t_brands');
        Schema::dropIfExists('t_brand_translations');
    }
};
