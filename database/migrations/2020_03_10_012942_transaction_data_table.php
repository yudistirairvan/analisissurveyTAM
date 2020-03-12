<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactiondatas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('id_variabel');
            $table->string('id_pertanyaan');
            $table->string('sangat_setuju')->nullable();
            $table->string('setuju')->nullable();
            $table->string('tidak_setuju')->nullable();
            $table->string('sangat_tidak_setuju')->nullable();
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
        Schema::dropIfExists('transactiondatas');
    }
}
