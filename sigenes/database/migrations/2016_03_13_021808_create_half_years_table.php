<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHalfYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesters', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 30);
            $table->integer('year_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('year_id')->references('id')
                ->on('years')->onDelete('cascade')->onUpdte('cascade');
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('semesters')->insert([
            [
                'name' => 'Primer Semestre',
                'year_id' => 1,
                'created_at' => $now
            ],
            [
                'name' => 'Segundo Semestre',
                'year_id' => 1,
                'created_at' => $now            
            ],
            [
                'name' => 'Tercer Semestre',
                'year_id' => 2,
                'created_at' => $now            
            ],
            [
                'name' => 'Cuarto Semestre',
                'year_id' => 2,
                'created_at' => $now  
            ],
            [
                'name' => 'Quinto Semestre',
                'year_id' => 3,
                'created_at' => $now  
            ],
            [
                'name' => 'Sexto Semestre',
                'year_id' => 3,
                'created_at' => $now  
            ],
            [
                'name' => 'Septimo Semestre',
                'year_id' => 4,
                'created_at' => $now  
            ],
            [
                'name' => 'Octavo Semestre',
                'year_id' => 4,
                'created_at' => $now  
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semesters');
    }
}
