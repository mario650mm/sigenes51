<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->integer('key');
            $table->timestamps();
            $table->softDeletes();
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('designations')->insert([['id' => 1, 'name' => 'Profesor de asignatura', 'created_at' => $now], ['id' => 2, 'name' => 'Profesor de carrera', 'created_at' => $now], ['id' => 3, 'name' => 'Técnico academico', 'created_at' => $now], ['id' => 4, 'name' => 'Ayudante Profesor', 'created_at' => $now],['id' => 5, 'name' => 'Ayudante de Investigador', 'created_at' => $now], ['id' => 6, 'name' => 'Investigador', 'created_at' => $now]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designations');
    }
}
