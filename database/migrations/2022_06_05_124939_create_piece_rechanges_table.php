<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece_rechanges', function (Blueprint $table) {
            $table->id();
            $table->string("code_pie");
            $table->string("lib_pie");
            $table->string("marq_pie");
            $table->integer("qty_pie");
            $table->string("modele_pie");
            $table->string("type_pie");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piece_rechanges');
    }
};
