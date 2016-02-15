<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_types', function(Blueprint $table){
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employee_id')->references('id')
                ->on('employees')->onDelete('cascade')->onUpdte('cascade');
            $table->foreign('type_id')->references('id')
                ->on('types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_types');
    }
}
