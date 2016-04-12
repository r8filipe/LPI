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
                    'icon' => 'acessibilidade'
                ),
                array(
                    'id' => '2',
                    'description' => 'Condições Ambientais',
                    'icon' => 'ambiental'
                ),
                array(
                    'id' => '3',
                    'description' => 'Controlo e Vigilância',
                    'icon' => 'vigilancia'
                ),
                array(
                    'id' => '4',
                    'description' => 'Estrutura de Espaços',
                    'icon' => 'espacos'
                ),
                array(
                    'id' => '5',
                    'description' => 'Visibilidade',
                    'icon' => 'visibilidade'
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
