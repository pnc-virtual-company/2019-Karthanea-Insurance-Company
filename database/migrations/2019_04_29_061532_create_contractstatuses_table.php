<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractstatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->timestamps();
        });
        DB::table('contractstatuses')->insert(
            array(
                [
                'id' => 1,
                'status' => 'Open',
                ],
                [
                'id' => 2,
                'status' => 'To be completed',
                ],
                [
                    'id' => 3,
                    'status' => 'To be signed',
                ],
                [
                    'id' => 4,
                    'status' => 'Close',
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
        Schema::dropIfExists('contractstatuses');
    }
}
