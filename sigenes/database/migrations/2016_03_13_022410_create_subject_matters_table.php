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
            $table->integer('semester_id')->unsigned();
            $table->integer('career_id')->unsigned();
            $table->boolean('isasmandatory');//Asignatura oblogatoria
            $table->boolean('isasopctional');//Asignatura opcional
            $table->boolean('isasopctionaltrans');//Asignatura opcional transversal
            $table->boolean('issermandatory');//seriacion obligatoria
            $table->boolean('isserindicative');//seriacion indicativa
            $table->boolean('isdeepending');
            $table->boolean('iscomun_deep');
            $table->boolean('istechnique');
            $table->integer('study_area_id');
            $table->integer('year_id');
            $table->integer('week_init');
            $table->integer('week_end');
            $table->integer('week_total');
            $table->integer('hours_teoric');
            $table->integer('hours_practique');
            $table->integer('hours_clinic')->default(0);
            $table->integer('hours_total');
            $table->integer('credit');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('semester_id')->references('id')
                ->on('semesters')->onDelete('cascade')->onUpdte('cascade');
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
        Schema::drop('subject_matters');
    }
}
