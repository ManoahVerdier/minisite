<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'question1',
                'question' => 'Question 1',
                'reponse' => 'Réponse etc etc',
                'description' => NULL,
                'created_at' => '2022-06-16 12:39:30',
                'updated_at' => '2022-06-16 12:39:30',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'question-2',
                'question' => 'Question 2',
                'reponse' => 'Réponse etc etc',
                'description' => NULL,
                'created_at' => '2022-06-16 12:39:45',
                'updated_at' => '2022-06-16 12:39:45',
            ),
        ));
        
        
    }
}