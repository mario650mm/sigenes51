<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('firstlastname', 25);
            $table->string('secondlastname', 25);
            $table->string('curp', 18);
            $table->string('rfc', 13);
            $table->date('birthdate');
            $table->enum('sex', ['Masculino', 'Femenino']);
            $table->string('email', 60);
            $table->enum('nationality', ['Mexicana', 'Extranjero']);
            $table->string('telephone', 25);
            $table->string('celphone', 25);
            $table->integer('nss');
            $table->integer('account_number');
            $table->enum('maritalstatus',
                ['Casado', 'Soltero', 'Divorciado', 'Viudo']);
            $table->string('street', 30);
            $table->string('num_int', 6);
            $table->string('num_ext', 6);
            $table->string('colony', 50);
            $table->integer('zip');
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('school_name', 100);
            $table->string('specialty', 50);
            $table->string('month_start', 25);
            $table->string('year_start', 4);
            $table->string('month_end', 25);
            $table->string('year_end', 4);
            $table->double('average', 15, 1);
            $table->integer('career_id');
            $table->longText('observations');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('city_id')->references('id')
                ->on('citys')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')
                ->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('country_id')->references('id')
                ->on('countrys')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
    }
}
