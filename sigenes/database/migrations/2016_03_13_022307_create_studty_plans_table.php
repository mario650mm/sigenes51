<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudtyPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_areas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('key');
            $table->integer('career_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('career_id')->references('id')
                ->on('careers')->onDelete('cascade')->onUpdte('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('study_areas');
    }
}
