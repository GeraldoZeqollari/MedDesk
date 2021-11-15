<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatiAnagraficiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dati_anagrafici', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cogname");
            $table->string("email");
            $table->bigInteger("cellulare");
            $table->string("nazionalita");
            $table->integer("code");
            $table->date("data");
            $table->boolean("male");
            $table->boolean("female");
            $table->integer("cap");
            $table->string("indirizzo");
            $table->boolean("checked");
            $table->boolean("checkbox_checked");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dati_anagrafici');
    }
}
