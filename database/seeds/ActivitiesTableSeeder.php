<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 6; $i++) {
            DB::table('activities')->insert([
                'title' => 'Activitie Titel '.$i,
                'activity' => 'Activitie Content '.$i,
                'date' => Carbon::parse('2000-01-'.$i)
            ]);
        }
    }
}
