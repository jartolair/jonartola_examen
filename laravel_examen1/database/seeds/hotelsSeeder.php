<?php

use Illuminate\Database\Seeder;

class hotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0;$i<5;$i++){
    		DB::table('hotels')->insert([
                'nombre' => str_random(10),
                'direccion' => str_random(10),
                'categoria' => random_int(0,5),
                'completo' => random_int(0,1),
                'antiguedad' => random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1,28)
            ]);
    	}
        
    }
}
