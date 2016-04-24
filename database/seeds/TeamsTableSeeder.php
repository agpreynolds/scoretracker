<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('teams')->insert(['name' => 'Arsenal']);
        DB::Table('teams')->insert(['name' => 'Aston Villa']);
        DB::Table('teams')->insert(['name' => 'Bournemouth']);
        DB::Table('teams')->insert(['name' => 'Chelsea']);
        DB::Table('teams')->insert(['name' => 'Crystal Palace']);
        DB::Table('teams')->insert(['name' => 'Everton']);
        DB::Table('teams')->insert(['name' => 'Leicester City']);
        DB::Table('teams')->insert(['name' => 'Liverpool']);
        DB::Table('teams')->insert(['name' => 'Manchester City']);
        DB::Table('teams')->insert(['name' => 'Manchester United']);
        DB::Table('teams')->insert(['name' => 'Newcastle United']);
        DB::Table('teams')->insert(['name' => 'Norwich City']);
        DB::Table('teams')->insert(['name' => 'Southampton']);
        DB::Table('teams')->insert(['name' => 'Stoke City']);
        DB::Table('teams')->insert(['name' => 'Swansea City']);
        DB::Table('teams')->insert(['name' => 'Sunderland']);
        DB::Table('teams')->insert(['name' => 'Tottenham Hotspur']);
        DB::Table('teams')->insert(['name' => 'Watford']);
        DB::Table('teams')->insert(['name' => 'West Bromwich Albion']);
        DB::Table('teams')->insert(['name' => 'West Ham United']);
    }
}
