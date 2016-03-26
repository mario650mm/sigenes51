<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableYears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('years', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('seq');
            $table->softDeletes();
            $table->timestamps();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('years')->insert([
            ['name' => 'Primer Año','seq' => 1,'created_at' => $now],
            ['name' => 'Segundo Año','seq' => 2,'created_at' => $now],
            ['name' => 'Tercer Año','seq' => 3,'created_at' => $now],
            ['name' => 'Cuarto Año','seq' => 4,'created_at' => $now]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('years');
    }
}
