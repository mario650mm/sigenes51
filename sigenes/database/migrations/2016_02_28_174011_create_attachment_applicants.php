<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->integer('attachment_type_id')->unsigned();
            $table->binary('document');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('attachment_type_id')->references('id')
                ->on('attachment_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('applicant_id')->references('id')
                ->on('applicants')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attachment_applicants');
    }
}
