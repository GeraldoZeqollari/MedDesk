<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string("f_name");
            $table->string("l_name");
            $table->integer("f_code");
            $table->string("invoice_email");
            $table->string("indirizzo");
            $table->string("citta");
            $table->integer("postal_code");
            $table->string("provinzia");
            $table->string("nazione");
            $table->foreignId('location_id')->constrained('locations');
            $table->foreignId('date_id')->constrained('dates');
            $table->foreignId('orari_id')->constrained('oraris');
            $table->string("tampon_type");
            $table->string("tampon_price");
            $table->integer("tampon_quantity");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
