<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    
        // $this->call(UsersTableSeeder::class);
    

     public function run() {

	DB::table('events')->insert(
		['caption' => 'Atlas Weekend 2017']

		);
	DB::table('events')->insert(
		['caption' => 'Грин Грей(Green Grey)']

		);
	DB::table('events')->insert(
		['caption' => 'Театр Теней 2018']

		);



    DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Василий',
		'email' => 'vas@gmail.com',
		'price' => '100']
		);
    DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Николай',
		'email' => 'ns@gmail.com',
		'price' => '150']
		);
    DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Екатерина',
		'email' => 'kate@gmail.com',
		'price' => '115']
		);
    DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Александр',
		'email' => 'alex@gmail.com',
		'price' => '190']
		);
    DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Константин',
		'email' => 'cos@gmail.com',
		'price' => '130']
		);
     DB::table('bids')->insert(
    	['id_event' => '2',
		'name' => 'Евгений',
		'email' => 'evg@gmail.com',
		'price' => '200']
		);
    	DB::table('bids')->insert(
    	['id_event' => '2',
		'name' => 'Иван',
		'email' => 'ivent@gmail.com',
		'price' => '100']
		);
    	DB::table('bids')->insert(
    	['id_event' => '2',
		'name' => 'Григорий',
		'email' => 'gregor@gmail.com',
		'price' => '300']
		);
    	DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Алина',
		'email' => 'alino@gmail.com',
		'price' => '270']
		);
    	DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Асан',
		'email' => 'asan4@gmail.com',
		'price' => '165']
		);
    	DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Виталий',
		'email' => 'vitak@gmail.com',
		'price' => '135']
		);
    	DB::table('bids')->insert(
    	['id_event' => '1',
		'name' => 'Степан',
		'email' => 'stepanko@gmail.com',
		'price' => '220']
		);




// DB::table('events')->insert([
//             'caption' => 'Atlas Weekend 2017',
//             'caption' => 'Грин Грей(Green Gray)'
//         ]);

    }

    // public function run() {
    //     DB::table('bids')->insert([
    //         'name' => 'sds',
    //         'name' => 'wds'
    //     ]);

        
    // }
}



   // DB::table('events')->insert([
   //          'caption' => 'Atlas Weekend 2017',
   //          'caption' => 'Грин Грей(Green Gray)'
   //      ]);