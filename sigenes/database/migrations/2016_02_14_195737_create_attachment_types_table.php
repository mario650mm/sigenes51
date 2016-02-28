<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->enum('type', ['employee', 'applicant', 'student']);
            $table->timestamps();
            $table->softDeletes();
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('attachment_types')->insert([
            [
                'name' => 'Identificación Oficial',
                'type' => 'applicant',
                'created_at' => $now
            ],
            [
                'name' => 'Acta de Nacimiento',
                'type' => 'applicant',
                'created_at' => $now
            ],
            [
                'name' => 'Certificado de bachillerato',
                'type' => 'applicant',
                'created_at' => $now
            ],
            [
                'name' => 'CURP',
                'type' => 'applicant',
                'created_at' => $now
            ],
            [
                'name' => 'Pago inscripción',
                'type' => 'applicant',
                'created_at' => $now
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attachment_types');
    }
}
