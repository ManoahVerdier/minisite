<?php

use Illuminate\Database\Seeder;

class FormationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('formations')->delete();
        
        \DB::table('formations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titre' => 'AUDIT QUALITÉ INTERNE - FORMATION À DISTANCE',
                'nom' => 'AUDIT QUALITÉ INTERNE - FORMATION À DISTANCE',
                'sous_titre' => 'Maîtrisez les méthodes et les outils de l\'audit qualité interne',
                'objectif' => '<p><span style="color: #202b3d; font-family: RalewayRegular, Arial, sans-serif; letter-spacing: 0.5px;">&Agrave; l\'issue de cette formation, vous serez capable de ma&icirc;triser toutes les &eacute;tapes pour r&eacute;aliser un audit qualit&eacute; interne.</span></p>',
                'infos_pratiques' => '<ul style="box-sizing: border-box; transform-origin: 0px 0px; margin: 0px; padding: 0px; list-style: none; color: #202b3d; font-family: RalewayRegular, Arial, sans-serif; letter-spacing: 0.5px;">
<li style="box-sizing: border-box; transform-origin: 0px 0px; position: relative; margin-bottom: 2rem;">Cette formation peut se d&eacute;rouler en intra-entreprise. La mise en situation pourra alors se faire&nbsp;sur un/des processus de l\'entreprise.</li>
<li style="box-sizing: border-box; transform-origin: 0px 0px; position: relative; margin-bottom: 2rem;">Si vous souhaitez obtenir une certification de vos comp&eacute;tences d\'auditeur, vous pouvez suivre le module 2 de la formation code&nbsp;<a style="box-sizing: border-box; transform-origin: 0px 0px; background-color: transparent; color: #202b3d; text-decoration-line: none; font-size: 1.4rem;" href="https://competences.afnor.org/formations/auditeur-qualite-interne-maitriser-la-methode-et-les-outils-pour-certifier-vos-competences">C0003</a></li>
</ul>',
                'contenu' => '<ul>
<li>Programme 1</li>
<li>Programme 2</li>
<li>Programme 3</li>
</ul>',
                'duree' => '3 jours',
                'prix' => '1710,00 € HT',
                'type' => 'Intra-entreprise',
                'created_at' => '2020-06-29 09:27:25',
                'updated_at' => '2020-06-30 08:31:24',
                'categorie' => 'qualite',
                'sous_categorie' => 'qualite',
            ),
        ));
        
        
    }
}