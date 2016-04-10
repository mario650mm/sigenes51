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
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('account_number', 45);
            $table->dateTime('data_register');
            $table->integer('partner_id')->unsigned();
            $table->boolean('active')->default(true);
            $table->integer('career_id');
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
                'partner_id' => 9,
                'created_at' => $now,
            ],
            [
                'account_number' => 'STU12000790',
                'data_register' => $now,
                'partner_id' => 10,
                'created_at' => $now,
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
        Schema::drop('students');
    }
}
