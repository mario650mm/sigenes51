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
        Schema::create('half_years', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 30);
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('half_years')->insert([
            [
                'name' => 'Primer Semestre',
                'created_at' => $now
            ],
            [
                'name' => 'Segundo Semestre',
                'created_at' => $now            
            ],
            [
                'name' => 'Tercer Semestre',
                'created_at' => $now            
            ],
            [
                'name' => 'Cuarto Semestre',
                'created_at' => $now  
            ],
            [
                'name' => 'Quinto Semestre',
                'created_at' => $now  
            ],
            [
                'name' => 'Sexto Semestre',
                'created_at' => $now  
            ],
            [
                'name' => 'Septimo Semestre',
                'created_at' => $now  
            ],
            [
                'name' => 'Octavo Semestre',
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
        Schema::drop('half_years');
    }
}
