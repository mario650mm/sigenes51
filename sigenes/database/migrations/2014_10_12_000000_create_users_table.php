<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('rfc')->unique();
            $table->string('password', 60);
            $table->enum('type',['admin','employee','student']);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@unam.com',
                'rfc' => 'ADMI000000XX0',
                'password' => bcrypt('123456'),
                'type' => 'admin',
                'created_at' => $now
            ],
            [
                'name' => 'Director',
                'email' => 'director@unam.com',
                'rfc' => 'DIRE000000XX0',
                'password' => bcrypt('123456'),
                'type' => 'employee',
                'created_at' => $now
            ],
            [
                'name' => 'Coordinador',
                'email' => 'coordinador@unam.com',
                'rfc' => 'COOR000000XX0',
                'password' => bcrypt('123456'),
                'type' => 'employee',
                'created_at' => $now
            ],
            [
                'name' => 'ControlEscolar',
                'email' => 'ctrlescolar@unam.com',
                'rfc' => 'CTRL000000XX0',
                'password' => bcrypt('123456'),
                'type' => 'employee',
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 1',
                'email' => 'administrativo1@unam.com',
                'rfc' => 'ADMI000000XX1',
                'password' => bcrypt('123456'),
                'type' => 'employee',
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 2',
                'email' => 'administrativo2@unam.com',
                'rfc' => 'ADMI000000XX2',
                'password' => bcrypt('123456'),
                'type' => 'employee',
                'created_at' => $now
            ],
            [
                'name' => 'Administrativo 3',
                'email' => 'administrativo3@unam.com',
                'rfc' => 'ADMI000000XX3',
                'password' => bcrypt('123456'),
                'type' => 'employee',
                'created_at' => $now
            ],
            [
                'name' => 'AlumnoDemo 1',
                'email' => 'alumnodemo1@unam.com',
                'rfc' => 'ALUM000000XX1',
                'password' => bcrypt('123456'),
                'type' => 'student',
                'created_at' => $now
            ],
            [
                'name' => 'AlumnoDemo 2',
                'email' => 'alumnodemo2@unam.com',
                'rfc' => 'ALUM000000XX2',
                'password' => bcrypt('123456'),
                'type' => 'student',
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
        Schema::drop('users');
    }
}
