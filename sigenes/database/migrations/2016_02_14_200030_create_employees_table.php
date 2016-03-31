<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Factory as Faker;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table){
            $table->increments('id');
            $table->integer('no_employee');
            $table->integer('partner_id')->unsigned();
            $table->integer('heigher_education');
            $table->integer('certificate_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('partner_id')->references('id')
                ->on('partners')->onDelete('cascade')->onUpdate('cascade');
        });
        $faker = Faker::create();
        $now = date('Y-m-d H:i:s');
        \DB::table('employees')->insert([
            [
                'no_employee' => 100,
                'partner_id' => 1,
                'heigher_education' => $faker->numberBetween($min =2,$max=5),
                'certificate_id' => 1,
                'created_at' => $now
            ],
            [
                'no_employee' => 110,
                'partner_id' => 2,
                'heigher_education' => $faker->numberBetween($min=2,$max=5),
                'certificate_id' => 1,
                'created_at' => $now
            ],
            [
                'no_employee' => 120,
                'partner_id' => 3,
                'heigher_education' => $faker->numberBetween($min=2,$max=5),
                'certificate_id' => 1,
                'created_at' => $now
            ],
            [
                'no_employee' => 130,
                'partner_id' => 4,
                'heigher_education' => $faker->numberBetween($min=2,$max=5),
                'certificate_id' => 1,
                'created_at' => $now
            ],
            [
                'no_employee' => 140,
                'partner_id' => 5,
                'heigher_education' => $faker->numberBetween($min=2,$max=5),
                'certificate_id' => 1,
                'created_at' => $now
            ],
            [
                'no_employee' => 150,
                'partner_id' => 6,
                'heigher_education' => $faker->numberBetween($min=2,$max=5),
                'certificate_id' => 1,
                'created_at' => $now
            ],
            [
                'no_employee' => 160,
                'partner_id' => 7,
                'heigher_education' => $faker->numberBetween($min=2,$max=5),
                'certificate_id' => 1,
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
        Schema::drop('employees');
    }
}
