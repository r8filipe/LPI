<?php

use Illuminate\Database\Seeder;

class Local_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Local_type::class, 10)->create();
    }
}
