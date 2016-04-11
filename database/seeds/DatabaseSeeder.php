<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        $this->call(Local_typesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
    }
}
