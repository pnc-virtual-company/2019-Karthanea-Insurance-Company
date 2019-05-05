<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
             $table->increments('id');
            $table->text('status');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('monthlybill');
            $table->timestamps();

            $table->integer('contract_id')->unsigned();
            $table->foreign('contract_id')
                  ->references('id')
                  ->on('contracts')
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
        Schema::dropIfExists('bills');
    }
}
