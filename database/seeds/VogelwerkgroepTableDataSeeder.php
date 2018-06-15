<?php

use Illuminate\Database\Seeder;

class VogelwerkgroepTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    for ($i=0; $i < 6; $i++) {
		    DB::table('vogelwerkgroep')->insert([
			    'title' => 'Artikel titel '.$i,
			    'text' => 'Artikel Content '.$i
		    ]);
	    }
    }
}
