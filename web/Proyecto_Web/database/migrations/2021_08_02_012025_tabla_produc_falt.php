<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaProducFalt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produc_falt', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_produc_falt",150);
            $table->string("tipo_produc_falt",50);
            $table->integer("cantidad_falt");
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
        Schema::dropIfExists('produc_falt');
    }
}
