<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transact_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('status_id');
            $table->integer('transact_type_id')->unsigned();
            $table->boolean('record');
            $table->boolean('credential');
            $table->date('date');
            $table->string('folio', 10);
            $table->binary('evidence');
            $table->boolean('clinic');
            $table->boolean('library');
            $table->boolean('lab');
            $table->boolean('social_services');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade')->onUpdte('cascade');
            $table->foreign('transact_type_id')->references('id')
                ->on('transact_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transact_students');
    }
}
