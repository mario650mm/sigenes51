<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key');
            $table->string('name',150);
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('parent_id')->references('id')
                ->on('schools');
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('schools')->insert([['id' => 1,'key' => 600, 'name' => 'Escuela nacional de estudios superiores unidad León','parent_id' => null, 'created_at' => $now], ['id' => 2, 'key' => 604, 'name' => 'E.N.E.S. León(Desarrollo Territorial)', 'parent_id' => 1, 'created_at' => $now], ['id' => 3, 'key' => 606, 'name' => 'E.N.E.S. León(Administración  Agropecuaria)', 'parent_id' => 1, 'created_at' => $now], ['id' => 4, 'key' => 608, 'name' => 'E.N.E.S. León(Economía Industrial)', 'parent_id' => 1, 'created_at' => $now], ['id' => 5, 'key' => 610, 'name' => 'E.N.E.S. León(Desarrollo y Gestión Interculturales)', 'parent_id' => 1, 'created_at' => $now], ['id' => 6, 'key' => 612, 'name' => 'E.N.E.S. León(Fisioterapia)', 'parent_id' => 1, 'created_at' => $now], ['id' => 7, 'key' => 614, 'name' => 'E.N.E.S. León(Odontología)', 'parent_id' => 1, 'created_at' => $now], ['id' => 8, 'key' => 614, 'name' => 'E.N.E.S. León(Ciencias Agrogenómicas)', 'parent_id' => 1, 'created_at' => $now]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schools');
    }
}
