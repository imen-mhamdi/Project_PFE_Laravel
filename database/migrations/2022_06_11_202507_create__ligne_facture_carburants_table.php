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
        Schema::create('lignefacturecarburants', function (Blueprint $table) {
            $table->id();
            $table->integer("NB_LTR_F_C");
            $table->integer("PRIX_LTR");
            $table->string("N°_FAC_C");
            $table->string("TYPE_CARB");
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
        Schema::dropIfExists('_ligne_facture_carburants');
    }
};
