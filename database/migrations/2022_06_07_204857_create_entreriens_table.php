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
        Schema::create('entreriens', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_facture')->useCurrent = true;
            $table->string("code_entretien");
            $table->string("code_vh");
            $table->string("code_piece_inputs");
            $table->string("km_vehicule");
            $table->string("avis");
            $table->string("code_pie");
            $table->string("model_pie");
            $table->integer("qte_pie");
          
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
        Schema::dropIfExists('entreriens');
    }
};
