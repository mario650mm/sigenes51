<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuspensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspensions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('period_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->longText('reason');
            $table->date('date_init');
            $table->date('date_end');
            $table->binary('evidence');
            $table->boolean('clinic');
            $table->boolean('library');
            $table->boolean('lab');
            $table->boolean('social_services');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade')->onUpdte('cascade');
            $table->foreign('period_id')->references('id')
                ->on('periods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')
                ->on('status')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suspensions');
    }
}
