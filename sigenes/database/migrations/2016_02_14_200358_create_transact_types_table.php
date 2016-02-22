<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transact_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 85);
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('transact_types')->insert([
            [
                'name' => 'Constancia de inscripción',
                'created_at' => $now
            ],
            [
                'name' => 'Costancia de creditos y promedio',
                'created_at' => $now
            ],
            [
                'name' => 'Constancia de inscripción con foto',
                'created_at' => $now
            ],
            [
                'name' => 'Constancia de historia academica',
                'created_at' => $now
            ],
            [
                'name' => 'Constancia para beca',
                'created_at' => $now
            ],
            [
                'name' => 'Constancia de terminos de estudios',
                'created_at' => $now
            ],
            [
                'name' => 'Reposición Credencial',
                'created_at' => $now
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transact_types');
    }
}
