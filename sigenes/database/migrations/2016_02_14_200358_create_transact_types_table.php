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
