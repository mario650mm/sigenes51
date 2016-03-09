<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 45);
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('types')->insert([['name' => 'Director', 'created_at' => $now],['name' => 'Administrativo', 'created_at' => $now], ['name' => 'Coordinador', 'created_at' => $now], ['name' => 'Profesor', 'created_at' => $now]]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('types');
    }
}
