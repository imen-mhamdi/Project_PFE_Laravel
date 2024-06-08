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
        Schema::create('BON_RET_PIE_OCC', function (Blueprint $table) {
            $table->id();
            $table->string("N°_BR");
            $table->timestamp('DATE_BR')->useCurrent = true;
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
        Schema::dropIfExists('_b_o_n__r_e_t__p_i_e__o_c_c');
    }
};
