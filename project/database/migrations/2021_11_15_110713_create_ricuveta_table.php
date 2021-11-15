<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRicuvetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ricuveta', function (Blueprint $table) {
            $table->id();
            $table->boolean("button");
            $table->string("name");
            $table->string("cogname");
            $table->integer("codice");
            $table->string("email");
            $table->string("indirizzo");
            $table->string("cita");
            $table->integer("cap");
            $table->string("provinzia");
            $table->string("nazione");
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ricuveta');
    }
}
