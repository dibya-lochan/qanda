<?php

use Illuminate\Database\Seeder;

class questionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$data = ['What is lumen?', 'What is Laravel?'];

    	// foreach ($data as $value) {
    	// 	 DB::table('questions')->insert([    		 	
     //        'questions' => $value            
     //    ]);
    	DB::raw("INSERT INTO `questions` (`id`, `questions`, `created_at`, `updated_at`) VALUES
(1, 'What is lumen?', '2016-06-07 18:30:00', '2016-06-08 18:30:00'),
(2, 'What is Laravel?', '2016-06-13 18:30:00', '2016-06-14 18:30:00')
");
    	}
      
    }
}
