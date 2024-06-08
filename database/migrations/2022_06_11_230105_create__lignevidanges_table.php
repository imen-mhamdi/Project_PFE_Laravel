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
        Schema::create('lignevidanges', function (Blueprint $table) {
            $table->id();
            $table->integer("QTE_PRD_VID");
            $table->string("CODE_VID");
            $table->string("Code_prd_vid");
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
        Schema::dropIfExists('_lignevidanges');
    }
};
