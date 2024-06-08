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
        Schema::create('_demande_traveaux', function (Blueprint $table) {
            $table->id();
            $table->string("CODE_DEM");
            $table->timestamp('DATE_DEM')->useCurrent = true;
            $table->integer("Qte");
            $table->string("CODE_PIE");
            $table->string("MATR_EMP");
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
        Schema::dropIfExists('_demande_traveaux');
    }
};
