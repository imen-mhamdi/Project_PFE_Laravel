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
        Schema::create('facturevidanges', function (Blueprint $table) {
            $table->id();
            $table->string("code_frs");
            $table->string("Code_facture");
            $table->timestamp('DATE_Facture_vidange')->useCurrent = true;
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
        Schema::dropIfExists('facturevidanges');
    }
};
