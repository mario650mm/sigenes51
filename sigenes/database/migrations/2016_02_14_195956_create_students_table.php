<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Factory as Faker;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_number', 45);
            $table->dateTime('data_register');
            $table->integer('partner_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('partner_id')->references('id')
                ->on('partners')->onDelete('cascade')->onUpdate('cascade');
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('students')->insert([
            [
                'account_number' => 'STU12000789',
                'data_register' => $now,
                'partner_id' => 8,
                'created_at' => $now,
            ],
            [
                'account_number' => 'STU12000790',
                'data_register' => $now,
                'partner_id' => 9,
                'created_at' => $now,
            ],
        ]);

       /* $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
            $name =  $faker->name;
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = $faker->email;
            $user_id = \DB::table('users')->insertGetId([
                
                    'name' => $firstName . ' ' . $lastName . ' ' . $lastName,
                    'email' => $faker->email,
                    'rfc' => 'ALUM000000XX'.$i,
                    'password' => bcrypt('123456'),
                    'type' => 'student',
                    'created_at' => $now
                
            ]);
            $partner_id = \DB::table('partners')->insertGetId([
                'name' => $lastName,
                'firstlastName' => $lastName,
                'secondlastName' => $lastName,
                'curp' => 'AAAA800313HCMLNS09',
                'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'sex' => 'Masculino',
                'email1' => 
                'nationality' => 'Mexicana',
                'maritalstatus' => 'Soltero',
                'user_id' => $user_id,
                'created_at' => $now
                
            ]);

            \DB::table('students')->insert([
                
                    'account_number' => $faker->swiftBicNumber,
                    'data_register' => $now,
                    'partner_id' => $partner_id,
                    'created_at' => $now,
                
            ]);
        }*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
