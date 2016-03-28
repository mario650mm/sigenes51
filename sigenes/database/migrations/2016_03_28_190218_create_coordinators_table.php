<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('career_id')->unsigned();
            $table->integer('campu_id')->unsigned();
            $table->datetime('startDate');
            $table->datetime('endDate');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('career_id')->references('id')
                ->on('careers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('campu_id')->references('id')
                ->on('campus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coordinators');
    }
}
