<?php

use Illuminate\Database\Seeder;

class ConseilsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('conseils')->delete();
        
        \DB::table('conseils')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'conseil-iso-9001',
                'certification' => 'ISO 9001',
                'created_at' => '2020-08-10 08:11:00',
                'updated_at' => '2020-08-19 07:42:08',
                'lien_formation' => 'https://certificationiso.fr/f/formation-iso-9001',
                'description' => NULL,
                'demarche' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'conseil-iso-14001',
                'certification' => 'ISO 14001',
                'created_at' => '2020-08-13 08:37:00',
                'updated_at' => '2020-08-19 07:41:49',
                'lien_formation' => 'https://certificationiso.fr/f/formation-iso-14001',
                'description' => '<p>votre entreprise d&eacute;montre son int&eacute;r&ecirc;t &agrave; atteindre davantage que les exigences minimales du client. Ceci est un engagement envers l&rsquo;environnement, et vous permettra de r&eacute;duire les d&eacute;chets et les co&ucirc;ts tout en augmentant les profits.</p>',
                'demarche' => 'une démarche environnementale réussie,',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'conseil-iso-17025',
                'certification' => 'ISO 17025',
                'created_at' => '2020-08-13 13:21:00',
                'updated_at' => '2020-08-19 07:41:38',
                'lien_formation' => 'https://certificationiso.fr/f/formation-iso-17025',
                'description' => '<p>votre laboratoire r&eacute;pond aux exigences auxquelles ces laboratoires doivent satisfaire pour d&eacute;montrer qu&rsquo;ils exploitent un syst&egrave;me qualit&eacute;, qu&rsquo;ils sont techniquement comp&eacute;tents et capables de g&eacute;n&eacute;rer des r&eacute;sultats techniquement valables. ISO / IEC 17025 est utile pour toute entreprise qui effectue des tests, &eacute;chantillonnage ou calibration et veut des r&eacute;sultats fiables.</p>',
                'demarche' => 'des étalonnages et / ou des tests réussis,',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'conseil-en-9100',
                'certification' => 'EN 9100',
                'created_at' => '2020-08-13 13:23:00',
                'updated_at' => '2020-08-19 07:41:23',
                'lien_formation' => 'https://certificationiso.fr/f/formation-en-9100',
                'description' => '<p>votre entreprise &agrave; la norme ISO 9100 version 2016. Elle est destin&eacute;e aux entreprises qui cr&eacute;ent, d&eacute;veloppent ou fournissent des produits ou services d&rsquo;aviation, d&rsquo;espace ou de d&eacute;fense, y compris les pi&egrave;ces, composantes et assembl&eacute;es.</p>',
                'demarche' => 'une démarche dans l’aéronautique réussie,',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'conseil-iso-17020',
                'certification' => 'ISO 17020',
                'created_at' => '2020-08-13 13:23:48',
                'updated_at' => '2020-08-13 13:23:48',
                'lien_formation' => NULL,
                'description' => '<p>votre entreprise d&eacute;montre ses comp&eacute;tences en mati&egrave;re d&rsquo;inspection vis &agrave; vis de ses clients. Ceci est un engagement pour prouver que votre organisme d&rsquo;inspection respecte les r&egrave;gles et les proc&eacute;dures d&rsquo;inspection.</p>',
                'demarche' => 'une évaluation de la conformité réussie,',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'conseil-iso-45001',
                'certification' => 'ISO 45001',
                'created_at' => '2020-08-13 13:24:00',
                'updated_at' => '2020-08-19 07:40:49',
                'lien_formation' => 'https://certificationiso.fr/f/formation-iso-45001',
            'description' => '<p>votre entreprise d&eacute;montre son int&eacute;r&ecirc;t dans la gestion de la sant&eacute; et de la s&eacute;curit&eacute; au travail. Le Syst&egrave;me de management de la sant&eacute; et de la s&eacute;curit&eacute; au travail (SMSST) est un &eacute;l&eacute;ment fondamental de la strat&eacute;gie de gestion des risques de toute entreprise.</p>',
                'demarche' => 'une gestion de la santé et sécurité au travail réussie,une gestion de la santé et sécurité au travail réussie,',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'mase',
                'certification' => 'MASE',
                'created_at' => '2020-08-13 13:25:00',
                'updated_at' => '2020-08-19 07:40:28',
                'lien_formation' => 'https://certificationiso.fr/f/formation-mase',
                'description' => '<p>votre entreprise d&eacute;montre son int&eacute;r&ecirc;t &agrave; atteindre davantage que les exigences minimales du client. Ceci est un engagement envers la s&eacute;curit&eacute;, la gestion des risques et vous permettra de r&eacute;duire les accidents de travail et les co&ucirc;ts tout en augmentant les profits.</p>',
                'demarche' => 'améliorer la sécurité dans votre entreprise',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'audit-interne-qualite-externalise',
                'certification' => NULL,
                'created_at' => '2020-09-04 14:12:26',
                'updated_at' => '2020-09-04 14:12:26',
                'lien_formation' => NULL,
                'description' => NULL,
                'demarche' => NULL,
            ),
        ));
        
        
    }
}