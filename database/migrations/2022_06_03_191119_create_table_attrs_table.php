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
        Schema::create('table_attrs', function (Blueprint $table) {
            $table->id();
            $table->string("code_veh");
            $table->string("matricule");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->boolean("status");
            $table->timestamps();
        });
    }
//I'd véhicule date début w date fin
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_attrs');
    }
};
