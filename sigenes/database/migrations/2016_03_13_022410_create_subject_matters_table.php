<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_matters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key');
            $table->string('name', 50);
            $table->integer('half_year_id')->unsigned();
            $table->boolean('isopctional');
            $table->boolean('isdeepending');
            $table->boolean('iscomun_deep');
            $table->integer('study_area_id');
            $table->integer('credit');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('half_year_id')->references('id')
                ->on('half_years')->onDelete('cascade')->onUpdte('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subject_matters');
    }
}
