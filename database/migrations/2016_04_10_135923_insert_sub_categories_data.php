<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertSubCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('sub_categories')->insert(
            array(
                array(
                    'id' => '1',
                    'description' => 'Estado dos arruamentos',
                    'category_id' => '1'
                ),
                array(
                    'id' => '2',
                    'description' => 'Estado dos passeios',
                    'category_id' => '1'
                ),
                array(
                    'id' => '3',
                    'description' => 'Lixo disperso',
                    'category_id' => '2'
                ),
                array(
                    'id' => '4',
                    'description' => 'Degradação habitaçional',
                    'category_id' => '2'
                ),
                array(
                    'id' => '5',
                    'description' => 'Degradação das áreas públicas comuns',
                    'category_id' => '2'
                ),
                array(
                    'id' => '6',
                    'description' => 'Sinais de Vandalismo/Vandalismo',
                    'category_id' => '2'
                ),
                array(
                    'id' => '7',
                    'description' => 'Camaras de Vigilância',
                    'category_id' => '3'
                ),
                array(
                    'id' => '8',
                    'description' => 'Patrulhamento',
                    'category_id' => '3'
                ),
                array(
                    'id' => '9',
                    'description' => 'Transeuntes',
                    'category_id' => '3'
                ),
                array(
                    'id' => '10',
                    'description' => 'Residentes/Moradores',
                    'category_id' => '3'
                ),
                array(
                    'id' => '11',
                    'description' => 'Delimitação de passagens pedonais',
                    'category_id' => '4'
                ),
                array(
                    'id' => '12',
                    'description' => 'Areas/ Espaços de confinamento',
                    'category_id' => '4'
                ),
                array(
                    'id' => '14',
                    'description' => 'Iluminacao',
                    'category_id' => '5'
                ),
                array(
                    'id' => '15',
                    'description' => 'Barreiras Fisicas',
                    'category_id' => '5'
                ),
                array(
                    'id' => '16',
                    'description' => 'Esquinas cegas',
                    'category_id' => '5'
                ),
                array(
                    'id' => '17',
                    'description' => 'Locais cegos',
                    'category_id' => '5'
                ),
                array(
                    'id' => '18',
                    'description' => 'Distribuição de iluminação',
                    'category_id' => '5'
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
