<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraordinaryTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extraodinary_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->boolean('islegal')->default(false);
            $table->integer('legal_subject_1')->default(0);
            $table->integer('legal_subject_2')->default(0);
            $table->boolean('isapply')->default(false);
            $table->integer('apply_subject_1')->default(0);
            $table->integer('apply_subject_2')->default(0);
            $table->boolean('isoptional')->default(false);
            $table->integer('optional_subject_1')->default(0);
            $table->integer('optional_subject_2')->default(0);
            $table->integer('optional_subject_3')->default(0);
            $table->datetime('date_registration');
            $table->boolean('allow')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('extraodinary_tests');
    }
}
