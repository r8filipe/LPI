<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('events')->insert([
//            'lat' => str_random(10),
//            'long' => str_random(10),
//            'sub_category_id' => rand(1, 10),
//            'local_type_id' => rand(1, 10),
//            'address' => str_random(10),
//        ]);
        factory(App\Event::class, 2)->create();
    }
}
