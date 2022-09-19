<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'mentions-legales',
                'description' => NULL,
                'title' => 'Mentions légales',
                'contenu' => NULL,
                'created_at' => '2020-08-17 06:42:00',
                'updated_at' => '2022-06-16 12:34:34',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'a-propos-nous',
                'description' => NULL,
                'title' => 'A propos de nous',
                'contenu' => NULL,
                'created_at' => '2020-08-17 07:09:00',
                'updated_at' => '2022-06-16 12:34:13',
            ),
        ));
        
        
    }
}