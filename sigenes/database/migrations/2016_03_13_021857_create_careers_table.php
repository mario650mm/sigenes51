<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->char('father_campus', 5);
            $table->integer('campus');
            $table->integer('key')->unique();
            $table->string('name', 50);
            $table->longText('description');
            $table->integer('study_plan_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('careers')->insert([
            ['father_campus' => '600','campus' => 606,'key' => 314,'name' => 'Administración Agropecuaria', 'description' => 'campo editable.', 'created_at' => $now],
            ['father_campus' => '600','campus' => 608,'key' => 313,'name' => 'Economía Industrial', 'description' => 'campo editable', 'created_at' => $now],
            ['father_campus' => '600','campus' => 610,'key' => 429,'name' => 'Desarrollo y Gestión Interculturales', 'description' => 'campo editable.', 'created_at' => $now],
            ['father_campus' => '600','campus' => 612,'key' => 221,'name' => 'Fisioterapia', 'description' => 'campo editable.', 'created_at' => $now],
            ['father_campus' => '600','campus' => 614,'key' => 222,'name' => 'Odontología', 'description' => 'campo editable.', 'created_at' => $now],
            ['father_campus' => '600','campus' => 666,'key' => 223,'name' => 'Ciencias Agrogenómicas', 'description' => 'campo editable.', 'created_at' => $now],
            ['father_campus' => '600','campus' => 604,'key' => 320,'name' => 'Desarrollo Territorial', 'description' => 'campo editable.', 'created_at' => $now]
        ]);

        //DB::statement("ALTER TABLE students ADD career_id INTEGER");
        //DB::statement("ALTER TABLE students ADD CONSTRAINT fk_career_id foreign key (career_id) REFERENCES careers(id)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('careers');
    }
}
