<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('firstlastname', 25);
            $table->string('secondlastname', 25);
            $table->string('curp', 18);
            $table->timestamp('birthdate');
            $table->enum('sex', ['Maculino', 'Femenino']);
            $table->string('email1', 60);
            $table->string('email2', 45);
            $table->enum('nationality', ['M', 'E']);
            $table->string('telephone', 25);
            $table->string('celphone', 25);
            $table->enum('maritalstatus',
                ['Casado', 'Soltero', 'Divorciado', 'Viudo']);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('partners')->insert([
            [
                'name' => 'Administrador',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'AAAA800313HCMLNS09',
                'birthdate' => '1980-03-13',
                'sex' => 'Masculino',
                'nationality' => 'M',
                'maritalstatus' => 'Casado',
                'user_id' => 1,
                'created_at' => $now
            ],
            [
                'name' => 'Director',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'DIRE800313HCMLNS09',
                'birthdate' => '1970-02-11',
                'sex' => 'Masculino',
                'nationality' => 'M',
                'maritalstatus' => 'Casado',
                'user_id' => 2,
                'created_at' => $now
            ],
            [
                'name' => 'Coordinador',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'COOR800313MCMLNS09',
                'birthdate' => '1965-03-13',
                'sex' => 'Femenino',
                'nationality' => 'M',
                'maritalstatus' => 'Casado',
                'user_id' => 3,
                'created_at' => $now
            ],
            [
                'name' => 'Control Escolar',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'CTRL800313HCMLNS09',
                'birthdate' => '1970-03-13',
                'sex' => 'Masculino',
                'nationality' => 'M',
                'maritalstatus' => 'Casado',
                'user_id' => 4,
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 1',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'ADMIN800313FCMLNS09',
                'birthdate' => '1980-02-09',
                'sex' => 'Femenino',
                'nationality' => 'F',
                'maritalstatus' => 'Casado',
                'user_id' => 5,
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 2',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'ADMIN800313MCMLNS10',
                'birthdate' => '1955-02-09',
                'sex' => 'Masculino',
                'nationality' => 'F',
                'maritalstatus' => 'Casado',
                'user_id' => 6,
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 3',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'ADMIN800313MCMLNS11',
                'birthdate' => '1975-03-09',
                'sex' => 'Masculino',
                'nationality' => 'F',
                'maritalstatus' => 'Casado',
                'user_id' => 7,
                'created_at' => $now
            ],
            [
                'name' => 'Alumno Demo 1',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'ALUMO800313MCMLNS10',
                'birthdate' => '1987-02-09',
                'sex' => 'Masculino',
                'nationality' => 'F',
                'maritalstatus' => 'Casado',
                'user_id' => 8,
                'created_at' => $now
            ],
            [
                'name' => 'Alumno Demo 2',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'curp' => 'ALUMO800313MCMLNS10',
                'birthdate' => '1990-02-09',
                'sex' => 'Masculino',
                'nationality' => 'F',
                'maritalstatus' => 'Casado',
                'user_id' => 9,
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
        Schema::drop('partners');
    }
}
