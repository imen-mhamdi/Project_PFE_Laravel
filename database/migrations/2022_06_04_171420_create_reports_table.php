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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string("code_rap");
            $table->string("etat_carros");
            $table->integer("km_vehicule_rapport");
            $table->timestamp('date_rapport')->useCurrent = true;
            $table->string("code_veh");
            $table->string("matricule");
            $table->string("pneaumatique");
            $table->string("remarques");
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
        Schema::dropIfExists('reports');
    }
};
