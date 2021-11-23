<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoice');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->bigInteger("cellphone");
            $table->string("nationality");
            $table->integer("fiscal_code");
            $table->date("date_of_birth");
            $table->boolean("gender");
            $table->string("municipality");
            $table->integer("zip_code");
            $table->string("address");
            $table->boolean("terms_conditions");
            $table->boolean("personal_data");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_data');
    }
}
