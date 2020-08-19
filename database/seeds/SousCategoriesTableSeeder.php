<?php

use Illuminate\Database\Seeder;

class SousCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sous_categories')->delete();
        
        \DB::table('sous_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Audit Interne',
                'slug' => 'audit-interne',
                'created_at' => '2020-08-13 08:27:53',
                'updated_at' => '2020-08-13 08:27:53',
                'parent_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Qualité',
                'slug' => 'qualite',
                'created_at' => '2020-08-13 08:28:12',
                'updated_at' => '2020-08-13 08:28:12',
                'parent_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Mase',
                'slug' => 'mase',
                'created_at' => '2020-08-13 08:28:33',
                'updated_at' => '2020-08-13 08:28:33',
                'parent_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'HSE',
                'slug' => 'hse',
                'created_at' => '2020-08-13 08:28:57',
                'updated_at' => '2020-08-13 08:28:57',
                'parent_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Santé Sécurité',
                'slug' => 'sante-securite',
                'created_at' => '2020-08-13 08:29:17',
                'updated_at' => '2020-08-13 08:29:17',
                'parent_id' => 4,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'Environnement',
                'slug' => 'environnement',
                'created_at' => '2020-08-13 08:29:30',
                'updated_at' => '2020-08-13 08:29:30',
                'parent_id' => 5,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'Laboratoire',
                'slug' => 'laboratoire',
                'created_at' => '2020-08-13 08:29:42',
                'updated_at' => '2020-08-13 08:29:42',
                'parent_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'Métrologie',
                'slug' => 'metrologie',
                'created_at' => '2020-08-13 08:29:53',
                'updated_at' => '2020-08-13 08:29:53',
                'parent_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'Aéronautique',
                'slug' => 'aeronautique',
                'created_at' => '2020-08-13 08:30:09',
                'updated_at' => '2020-08-13 08:30:09',
                'parent_id' => 6,
            ),
        ));
        
        
    }
}