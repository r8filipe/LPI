<?php

use Illuminate\Database\Seeder;

class Local_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('local_types')->insert([
//            'description' => str_random(10),
//        ]);
        factory(App\Local_type::class, 10)->create();
    }
}
