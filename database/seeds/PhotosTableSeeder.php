<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('photos')->insert([
//            'event_id' => rand(1,10),
//            'photo' => str_random(10),
//        ]);
        factory(App\Photo::class, 10)->create();
    }
}
