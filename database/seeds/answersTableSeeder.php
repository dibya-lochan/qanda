<?php

use Illuminate\Database\Seeder;

class answersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'question_id' => str_random(10),
            'answers' => str_random(10).'@gmail.com',
            'status' => bcrypt('secret'),
        ]);
    }
}
