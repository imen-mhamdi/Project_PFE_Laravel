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
        Schema::create('produit_vidanges', function (Blueprint $table) {
            $table->id();
            $table->string("Code_prd_vid");
            $table->string("Lib_prd_vid");
            $table->string("Typ_prd_vif");
            $table->string("Mod_prd_vid");
            $table->integer("QTE_STK_Prd");
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
        Schema::dropIfExists('produit_vidanges');
    }
};
