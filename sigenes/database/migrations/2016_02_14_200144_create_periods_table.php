<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month_init', 25);
            $table->string('month_end', 25);
            $table->string('year', 4);
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('periods')->insert([
            [
                'month_init' => 'Enero',
                'month_end' => 'Julio',
                'year' => '2016',
                'created_at' => $now
            ],
            [
                'month_init' => 'Agosto',
                'month_end' => 'Diciembre',
                'year' => '2016',
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
        Schema::drop('periods');
    }
}
