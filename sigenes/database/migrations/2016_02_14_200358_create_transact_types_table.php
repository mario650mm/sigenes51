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
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('transact_types')->insert([
            ['name' => 'Constancia de beca', 'description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Constancia de creditos y promedio','description' => 'campo editable', 'created_at' => $now],
            ['name' => 'Constancia de Histroria Academica','description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Constancia de Inscripcion con foto','description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Constancia de Inscripcion Maestria','description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Constancia de Inscripcion Nivel Licenciatura','description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Constancia de Inscripcion PEO','description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Constancia de Termino de Estudios','description' => 'campo editable.', 'created_at' => $now],
            ['name' => 'Termino de Estudios con expedicion de titulo y cedula','description' => 'campo editable.', 'created_at' => $now]
        ]);

        DB::statement("ALTER TABLE transact_types ADD record LONGBLOB");
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
