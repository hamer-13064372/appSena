<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det__facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('precio');
            $table->integer('cantidad');
            $table->string('total');
            $table->foreignId('id_fac')->constrained('facturas');
            $table->foreignId('id_categ')->constrained('categorias');
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
        Schema::dropIfExists('det__facturas');
    }
}
