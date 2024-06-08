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
        Schema::create('fornisseurs', function (Blueprint $table) {
            $table->id();
            $table->string("code_frs");
            $table->string("nom_frs");
            $table->string("prenom_frs");
            $table->string("adresse_frs");
            $table->string("tel_frs");
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
        Schema::dropIfExists('fornisseurs');
    }
};
