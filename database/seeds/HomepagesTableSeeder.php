<?php

use Illuminate\Database\Seeder;

class HomepagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homepages')->delete();
        
        \DB::table('homepages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slide' => 'ISO',
                'expertise' => 'Où que vous soyez en France, quel que soit votre secteur d’activité, vous pouvez compter sur nos partenaires pour vous fournir des solutions adaptées pour vos projets de certification ISO.',
                'img1' => 'AÉRONAUTIQUE',
                'img1_link' => 'http://formation-iso-9001.fr/c/communication',
                'img2' => 'INSPECTION',
                'img2_link' => 'http://formation-iso-9001.fr/c/immobilier',
                'img3' => 'ENVIRONNEMENT',
                'img3_link' => 'http://formation-iso-9001.fr/c/informatique',
                'img4' => 'LABORATOIRE',
                'img4_link' => 'http://formation-iso-9001.fr/c/qualite',
                'img5' => 'SÉCURITÉ',
                'img5_link' => 'http://formation-iso-9001.fr/c/marches_publics',
                'has_secteurs' => 1,
                'clients' => 'Ils nous font confiance dans le cadre de la certification ISO',
                'clients_certif_1' => 'norme ISO 9001',
                'clients_certif_2' => 'norme ISO 14001',
                'clients_certif_3' => 'audit interne iso 9001',
                'clients_certif_4' => 'norme EN 9100',
                'conseil_libelle' => 'Conseil',
                'created_at' => '2020-08-19 12:06:00',
                'updated_at' => '2020-08-19 12:09:27',
            ),
        ));
        
        
    }
}