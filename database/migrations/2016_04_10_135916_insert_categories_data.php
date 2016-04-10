<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert(
            array(
                array(
                    'id' => '1',
                    'description' => 'Acessibilidade',
                    'icon' => 'Acessibilidade'
                ),
                array(
                    'id' => '2',
                    'description' => 'Condições Ambientais',
                    'icon' => 'Condições Ambientais'
                ),
                array(
                    'id' => '3',
                    'description' => 'Controlo e Vigilância',
                    'icon' => 'Controlo e Vigilância'
                ),
                array(
                    'id' => '4',
                    'description' => 'Estrutura de Espaços',
                    'icon' => 'Estrutura de Espaços'
                ),
                array(
                    'id' => '5',
                    'description' => 'Visibilidade',
                    'icon' => 'Visibilidade'
                ),
            )
        );
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
