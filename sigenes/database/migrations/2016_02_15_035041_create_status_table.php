<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 15);
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('status')->insert([
            [
                'name' => 'Borrador',
                'created_at' => $now
            ],
            [
                'name' => 'Tramitado',
                'created_at' => $now
            ],
            [
                'name' => 'Terminado',
                'created_at' => $now
            ],
            [
                'name' => 'Cancelado',
                'created_at' => $now
            ],
            [
                'name' => 'Recibido',
                'created_at' => $now
            ],
            [
                'name' => 'Autorizado',
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
        Schema::drop('status');
    }
}
