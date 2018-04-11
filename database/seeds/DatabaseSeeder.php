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
        // $this->call(UsersTableSeeder::class);
        $this->call([
          // HotelSeeder::class,
          // RestarauntSeeder::class,
          TagsTableSeeder::class,
          PostsTableSeeder::class,
          RolesAndPermissionsSeeder::class,
          UsersTableSeeder::class,
        ]);
    }
}
