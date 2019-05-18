<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContracttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracttypes', function (Blueprint $table) {
             $table->increments('id');
            $table->string('contracttype');
            $table->timestamps();
        });

        DB::table('contracttypes')->insert(
            array(
                [
                    'id' => 1,
                    'contracttype' => 'Motor',
                ],
                [
                    'id' => 2,
                    'contracttype' => 'Car',
                ],
                [
                    'id' => 3,
                    'contracttype' => 'House',
                ],
                [
                    'id' => 4,
                    'contracttype' => 'Bike Cycle',
                    ]

            )
                );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracttypes');
    }
}
