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
        Schema::create('ligne_facture_vidanges', function (Blueprint $table) {
            $table->id();
            $table->string("Code_prd_vid");
            $table->string("Code_facture");
            $table->integer("Qte_prd_vid_fac");
            $table->integer("Prix_prd_vid_fac");
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
        Schema::dropIfExists('ligne_facture_vidanges');
    }
};
