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
            $table->string('rfc', 13)->unique();
            $table->string('curp', 18)->unique();
            $table->date('birthdate')->nullable();
            $table->enum('sex', ['Masculino', 'Femenino']);
            $table->string('email1', 60);
            $table->string('email2', 45)->nullable();
            $table->enum('nationality', ['Mexicana', 'Extranjero']);
            $table->string('telephone', 25);
            $table->string('cellphone', 25);
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
                'rfc' => 'ADMI000000XX0',
                'curp' => 'AAAA800313HCMLNS09',
                'birthdate' => '1980-03-13',
                'sex' => 'Masculino',
                'email1' => 'admin1200@unam.com',
                'email2' => 'admin1200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 1,
                'created_at' => $now
            ],
            [
                'name' => 'Director',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'DIRE000000XX0',
                'curp' => 'DIRE800313HCMLNS09',
                'birthdate' => '1970-02-11',
                'sex' => 'Masculino',
                'email1' => 'dire1200@unam.com',
                'email2' => 'dire1200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 2,
                'created_at' => $now
            ],
            [
                'name' => 'Coordinador',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'COOR000000XX0',
                'curp' => 'COOR800313MCMLNS09',
                'birthdate' => '1965-03-13',
                'sex' => 'Femenino',
                'email1' => 'coor1200@unam.com',
                'email2' => 'coor1200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Casado',
                'user_id' => 3,
                'created_at' => $now
            ],
            [
                'name' => 'Coordinador2',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'COOR000000XX1',
                'curp' => 'COOR900313MCMLNS10',
                'birthdate' => '1970-03-13',
                'sex' => 'Masculino',
                'email1' => 'coor1205@unam.com',
                'email2' => 'coor1205@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Casado',
                'user_id' => 4,
                'created_at' => $now
            ],
            [
                'name' => 'Control Escolar',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'CTRL000000XX0',
                'curp' => 'CTRL800313HCMLNS09',
                'birthdate' => '1970-03-13',
                'sex' => 'Masculino',
                'email1' => 'ctrl1200@unam.com',
                'email2' => 'ctrl1200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 5,
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 1',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'ADMI000000XX1',
                'curp' => 'ADMI800313FCMLNS09',
                'birthdate' => '1980-02-09',
                'sex' => 'Femenino',
                'email1' => 'adm11200@unam.com',
                'email2' => 'adm11200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 6,
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 2',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'ADMI000000XX2',
                'curp' => 'ADMI800313MCMLNS10',
                'birthdate' => '1955-02-09',
                'sex' => 'Masculino',
                'email1' => 'adm21200@unam.com',
                'email2' => 'adm21200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 7,
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 3',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'ADMI000000XX3',
                'curp' => 'ADMI800313MCMLNX11',
                'birthdate' => '1975-03-09',
                'sex' => 'Masculino',
                'email1' => 'adm31200@unam.com',
                'email2' => 'adm31200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 8,
                'created_at' => $now
            ],
            [
                'name' => 'Alumno Demo 1',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'ALUM000000XX1',
                'curp' => 'ALUM800313MCMLNS10',
                'birthdate' => '1987-02-09',
                'sex' => 'Masculino',
                'email1' => 'alum11200@unam.com',
                'email2' => 'alum11200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 9,
                'created_at' => $now
            ],
            [
                'name' => 'Alumno Demo 2',
                'firstlastName' => 'Apellido 1',
                'secondlastName' => 'Apellido 2',
                'rfc' => 'ALUM000000XX2',
                'curp' => 'ALUM800313MCMLNS11',
                'birthdate' => '1990-02-09',
                'sex' => 'Masculino',
                'email1' => 'alum21200@unam.com',
                'email2' => 'alum21200@gmail.com',
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => 10,
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
