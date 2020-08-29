<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1,'name' => 'Rozes','latin_url' => 'rozes'],
            ['id' => 2,'name' => 'Tulpes','latin_url' => 'tulpes'],
            ['id' => 3,'name' => 'Krizantēmas','latin_url' => 'krizantemas'],            
            ['id' => 4,'name' => 'Lefkojas','latin_url' => 'lefkojas'],           
            ['id' => 5,'name' => 'Peonijas','latin_url' => 'peonijas'],            
            ['id' => 6,'name' => 'Hiacintes','latin_url' => 'hiacintes'],            
            ['id' => 7,'name' => 'Gladiolas','latin_url' => 'gladiolas'],            
            ['id' => 8,'name' => 'Asteres','latin_url' => 'asteres'],           
            ['id' => 9,'name' => 'Citi ziedi','latin_url' => 'citi'],
            ['id' => 10,'name' => 'Pušķi','latin_url' => 'Puski']
        ];
        
        DB::table('categories')->insert($data);
    }
}
