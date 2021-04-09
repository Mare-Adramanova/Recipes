<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name'=> 'Flour',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Milk',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Oil',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Salt',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Sugar',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Eggs',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Tomatoes',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Peppers',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Cheese',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Potatoes',
            
        ]);
        DB::table('ingredients')->insert([
            'name'=> 'Meat',
            
        ]);
    }
}
