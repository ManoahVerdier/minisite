<?php

use Illuminate\Database\Seeder;

class TemoignagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temoignages')->delete();
        
        \DB::table('temoignages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'conseil_id' => 1,
                'texte' => 'Nous a donné une vision de la qualité. De la visibilité pour répondre à la norme ISO 9001 et à la mise en place.',
                'client' => 'BMW',
                'certification' => 'ISO 9001',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:55:06',
                'updated_at' => '2020-08-17 14:55:06',
            ),
            1 => 
            array (
                'id' => 2,
                'conseil_id' => 1,
                'texte' => 'Des échanges et une expertise qui vont nous permettre de mieux appréhender la norme ISO 9001',
                'client' => 'RICARD',
                'certification' => 'ISO 9001',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:56:18',
                'updated_at' => '2020-08-17 14:56:18',
            ),
            2 => 
            array (
                'id' => 3,
                'conseil_id' => 1,
                'texte' => 'Une meilleure assimilation de la norme ISO 9001 qui nous sera très utile dans la gestion de notre système qualité et des audits internes.',
                'client' => 'IMERYS',
                'certification' => 'ISO 9001',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:56:39',
                'updated_at' => '2020-08-17 14:56:39',
            ),
            3 => 
            array (
                'id' => 4,
                'conseil_id' => 2,
                'texte' => 'Des échanges et une expertise qui vont nous permettre de mieux appréhender la norme ISO 14001',
                'client' => 'RICARD',
                'certification' => 'ISO 14001',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:57:28',
                'updated_at' => '2020-08-17 14:57:28',
            ),
            4 => 
            array (
                'id' => 5,
                'conseil_id' => 2,
                'texte' => 'Merci pour ces outils et échanges qui nous apportent une meilleure compréhension de ce qui est attendu par la norme ISO 14001',
                'client' => 'BMW',
                'certification' => 'ISO 14001',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:57:46',
                'updated_at' => '2020-08-17 14:57:46',
            ),
            5 => 
            array (
                'id' => 6,
                'conseil_id' => 3,
                'texte' => 'Consultant disponible et expert sur cette norme ISO 17025. Merci pour les outils présentés pour analyser les risques et les opportunités.',
                'client' => 'VEOLIA',
                'certification' => 'ISO 17025',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:58:15',
                'updated_at' => '2020-08-17 14:58:15',
            ),
            6 => 
            array (
                'id' => 7,
                'conseil_id' => 4,
                'texte' => 'L\'expertise du consultant nous a permis de mieux assimiler la norme ISO 9100 dans la mise en place au sein de notre système qualité.',
                'client' => 'CEA',
                'certification' => 'EN 9100',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:59:01',
                'updated_at' => '2020-08-17 14:59:01',
            ),
            7 => 
            array (
                'id' => 8,
                'conseil_id' => 4,
                'texte' => 'ACTEMIUM',
                'client' => 'Des échanges positifs et enrichissants. Mise à disposition d\'outils et méthodes pour mettre en place cette norme EN 9100',
                'certification' => 'EN 9100',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 14:59:19',
                'updated_at' => '2020-08-17 14:59:19',
            ),
            8 => 
            array (
                'id' => 9,
                'conseil_id' => 6,
                'texte' => 'Des apports pour mettre en place une politique de management basée sur les exigences de la norme ISO 45001',
                'client' => 'AXIANS',
                'certification' => 'ISO 45001',
                'nb_etoiles' => 5,
                'created_at' => '2020-08-17 15:00:02',
                'updated_at' => '2020-08-17 15:00:02',
            ),
        ));
        
        
    }
}