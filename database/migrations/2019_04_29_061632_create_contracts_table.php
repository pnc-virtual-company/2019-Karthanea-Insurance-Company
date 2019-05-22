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
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('monthlyduedate');
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
            // // $table->increments('status_d');
             $table->integer('status_id')->unsigned();
             $table->foreign('status_id')
                        ->references('id')
                        ->on('contractstatuses')
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
