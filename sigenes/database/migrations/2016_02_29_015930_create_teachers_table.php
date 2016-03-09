<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noAccount', 25);
            $table->enum('type', ['Carrera','Asignatura']);
            $table->integer('partner_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('partner_id')->references('id')
                ->on('partners')->onDelete('cascade')->onUpdate('cascade');
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('teachers')->insert([
            [
                'noAccount' => 'ADMIN1200',
                'type' => 'Carrera',
                'partner_id' => 3,
                'created_at' => $now
            ],
            [
                'noAccount' => 'DIRE1200',
                'type' => 'Asignatura',
                'partner_id' => 4,
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
        Schema::drop('teachers');
    }
}
