<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  // for ($i =1; $i++,$i<20) { 
        DB::table('users')->insert([
            'name' => 'bbb',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    	  	# code...
    	  // }

    }
}
