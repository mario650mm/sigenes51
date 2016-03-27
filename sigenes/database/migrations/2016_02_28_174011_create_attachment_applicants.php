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
            $table->integer('applicant_id');
            $table->integer('attachment_type_id');
            $table->timestamps();
            $table->softDeletes();

        });
        DB::statement("ALTER TABLE attachment_applicants ADD document LONGBLOB");
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
