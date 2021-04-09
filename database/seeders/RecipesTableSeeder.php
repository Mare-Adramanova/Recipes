<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('recipes')->insert([
            'name'=> 'Corned Beef & CabbageCorned Beef & Cabbage',
            'source'=> 'That is the traditional beef in New England.',
            'preparation_time'=> '10',
            'instructions'=> 'Place brisket in a large Dutch oven and cover withwater. Add spice packet, bay leaves, and thyme and place on medium-high heat. Bring to a boil, then reduce to a simmer. Cook until tender, checking every 30 minutes and adding water if needed, until beef is tender, about 3 hours. Add potatoes and carrots and bring back up to a boil. Cook for 15 minutes, then add cabbage and boil 5 minutes more. Remove meat and drain vegetables. Let meat rest 10 minutes before slicing.',
            'hour'=> '01'

        ]);
    }
}
