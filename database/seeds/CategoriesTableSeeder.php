<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Audit',
                'slug' => 'audit',
                'created_at' => '2020-08-13 08:25:27',
                'updated_at' => '2020-08-13 08:25:27',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Qualité',
                'slug' => 'qualité',
                'created_at' => '2020-08-13 08:25:39',
                'updated_at' => '2020-08-13 08:25:39',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Mase',
                'slug' => 'mase',
                'created_at' => '2020-08-13 08:25:52',
                'updated_at' => '2020-08-13 08:25:52',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Santé Sécurité HSE',
                'slug' => 'sante-securite-hse',
                'created_at' => '2020-08-13 08:26:22',
                'updated_at' => '2020-08-13 08:26:22',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Environnement',
                'slug' => 'environnement',
                'created_at' => '2020-08-13 08:26:38',
                'updated_at' => '2020-08-13 08:26:38',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Aéronautique',
                'slug' => 'Aeronautique',
                'created_at' => '2020-08-13 08:26:54',
                'updated_at' => '2020-08-13 08:26:54',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Laboratoire',
                'slug' => 'laboratoire',
                'created_at' => '2020-08-13 08:27:11',
                'updated_at' => '2020-08-13 08:27:11',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => NULL,
                'order' => 1,
                'nom' => 'Métrologie',
                'slug' => 'metrologie',
                'created_at' => '2020-08-13 08:27:28',
                'updated_at' => '2020-08-13 08:27:28',
            ),
        ));
        
        
    }
}