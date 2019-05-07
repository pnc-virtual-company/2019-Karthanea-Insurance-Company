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
             $table->increments('id');
           
            $table->string('status');
            $table->string('startdate');
            $table->string('enddate');
            $table->integer('monthlybill');
            $table->timestamps();

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('cascade');
            // // $table->increments('id_contracttype');
             $table->integer('contracttype_id')->unsigned();
             $table->foreign('contracttype_id')
                        ->references('id')
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
