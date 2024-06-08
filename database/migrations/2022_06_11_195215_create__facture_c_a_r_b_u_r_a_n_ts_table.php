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
        Schema::create('facturecarburants', function (Blueprint $table) {
            $table->id();
            $table->string("N°_FAC_C");
            $table->timestamp('DATE_FAC_C')->useCurrent = true;
            $table->integer("MNT_T_FAC_C");
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
        Schema::dropIfExists('_facture_c_a_r_b_u_r_a_n_ts');
    }
};
