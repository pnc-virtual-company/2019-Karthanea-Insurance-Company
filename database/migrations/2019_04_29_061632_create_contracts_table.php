<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
             $table->increments('id_contract');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('status');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('monthlybill');
            $table->integer('editby');
            $table->timestamps();

            $table->integer('id_client')->unsigned();
            $table->foreign('id_client')
                  ->references('id_client')
                  ->on('clients')
                  ->onDelete('cascade');
            // $table->increments('id_contracttype');
             $table->integer('id_contracttype')->unsigned();
             $table->foreign('id_contracttype')
                        ->references('id_contracttype')
                        ->on('contracttypes')
                        ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
