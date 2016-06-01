<?php

use Illuminate\Database\Seeder;
use DB;

class OAuthUsersSeeder extends Seeder{
     
     public function run(){
         DB::table('oauth_users')->insert(array(
			'username' => "bshaffer",
			'password' => sha1('brent123'),
			'first_name' => "Brent",
			'last_name' => "Shaffer",
		));
        
     }  
     
 } 