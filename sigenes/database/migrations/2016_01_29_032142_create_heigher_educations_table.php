<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeigherEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heigher_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->integer('key');
            $table->timestamps();
            $table->softDeletes();
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('heigher_educations')->insert([['id' => 1, 'name' => 'postdoctorado', 'created_at' => $now], ['id' => 2, 'name' => 'doctorado', 'created_at' => $now], ['id' => 3, 'name' => 'maestria', 'created_at' => $now],['id' => 4, 'name' => 'diplomado', 'created_at' => $now], ['id' => 5, 'name' => 'licenciatura', 'created_at' => $now],['id' => 6, 'name' => 'técnico', 'created_at' => $now],['id' => 7, 'name' => 'bachillerato', 'created_at' => $now]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('heigher_educations');
    }
}
