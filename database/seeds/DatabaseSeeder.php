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
      DB::table('users')->insert(array(
        array('name' => 'Jonathan', 'email' => 'zaratedev@gmail.com', 'password' => bcrypt('123456'))
      ));
    }
}
