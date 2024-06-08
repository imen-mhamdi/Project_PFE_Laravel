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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string("code_veh");//
            $table->string("chass");//
            $table->string("imaat_veh");//
            $table->string("marq_veh");//
            $table->timestamp('date_mise_serv')->useCurrent = true;
            $table->timestamp('date_miss_serv')->useCurrent = true;
            $table->integer("puiss_fisc");//
            $table->string("modele_veh");//
            $table->string("energie");//
            $table->string("etat_veh");//
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
        Schema::dropIfExists('vehicules');
    }
};
