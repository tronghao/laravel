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
      	DB::table('abc')->insert([
      		array('username'=>'admin', 'password'=>'123456'),
      		array('username'=>'tai', 'password'=>'123456'),
      		array('username'=>'hao', 'password'=>'123456'),
      		array('username'=>'chau', 'password'=>'123456')
      	]); 
    }
}
