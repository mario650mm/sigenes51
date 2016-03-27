<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertStudiesPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::table('studies_plans')->insert([
            // Planes de estudio de la carrera de Administración Agropecuaria
            ['name' => 'Administración Agropecuaria (tronco común)','key' => '1562', 'is_deepending' => false],
            ['name' => 'Agrícola', 'key' => '1563', 'is_deepending' => true],
            ['name' => 'Pecuaria y Piscícola','key' => '1564', 'is_deepending' => true],
            ['name' => 'Forestal y Servicios Ambientales','key' => '1565', 'is_deepending' => true],

            // Planes de estudio de la carrera de  Economía Industrial
            ['name' => 'Economía Industrial (tronco común)','key' => '1532', 'is_deepending' => false],

            // Planes de estudio de la carrera de Desarrollo y gestión interculturales
            ['name' => 'Desarrollo y gestión interculturales (tronco común)','key' => '1523', 'is_deepending' => false],
            ['name' => 'Mediación Intercultural', 'key' => '1524', 'is_deepending' => true],
            ['name' => 'Gestión del Patrimonio Cultural','key' => '1525', 'is_deepending' => true],
            ['name' => 'Ciencia Tecnología y Sociedad','key' => '1526', 'is_deepending' => true],

            // Planes de estudio de la carrera de Fisioterapia
            ['name' => 'Fisioterapia (tronco común)','key' => '1528', 'is_deepending' => false],
            ['name' => 'Geriatría', 'key' => '1529', 'is_deepending' => true],
            ['name' => 'Neurológica','key' => '1530', 'is_deepending' => true],
            ['name' => 'Ortopedia y Lesiones Deportivas','key' => '1531', 'is_deepending' => true],

            // Planes de estudio de la carrera de Odontologia
            ['name' => 'Odontologia (tronco común)','key' => '1512', 'is_deepending' => false],
            ['name' => 'Odontopediatría y Ortodoncia', 'key' => '1513', 'is_deepending' => true],
            ['name' => 'Endodoncia y Periodoncia','key' => '1514', 'is_deepending' => true],
            ['name' => 'Rehabilitación Funcional y Estética','key' => '1515', 'is_deepending' => true],
            ['name' => 'Cirugía Bucal','key' => '1516', 'is_deepending' => true],

            // Planes de estudio de la carrera de Ciencias Agrogenómicas
            ['name' => 'Ciencias Agrogenómicas (tronco común) 1562','key' => '1624', 'is_deepending' => false],

            // Planes de estudio de la carrera de Desarrollo Territorial
            ['name' => 'Desarrollo Territorial (tronco común)','key' => '2053', 'is_deepending' => false],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
