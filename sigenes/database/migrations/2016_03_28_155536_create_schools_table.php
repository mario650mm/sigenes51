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
            $table->timestamps();
            $table->softDeletes();
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('schools')->insert([['key' => 600, 'name' => 'Escuela nacional de estudios superiores unidad León', 'created_at' => $now]]);
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
