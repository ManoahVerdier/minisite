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
                'titre' => 'default',
                'nom' => 'default',
                'sous_titre' => 'default',
                'objectif' => '<p>default</p>',
                'infos_pratiques' => '<p>default</p>',
                'contenu' => '<p>default</p>',
                'duree' => 'default',
                'prix' => 'default',
                'type' => 'default',
                'created_at' => '2020-08-10 08:12:00',
                'updated_at' => '2020-08-19 08:31:08',
                'categorie_id' => NULL,
                'sous_categorie_id' => NULL,
                'sessions' => '24/09/20,29/10/20,26/11/20,10/12/20',
                'slug' => 'default',
            ),
            1 => 
            array (
                'id' => 2,
                'titre' => 'Formation auditeur qualité',
                'nom' => 'Formation auditeur qualité',
                'sous_titre' => 'Cette formation auditeur qualité se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir auditeur qualit&eacute; interne</li>
<li>Acqu&eacute;rir les outils et les m&eacute;thodes pour r&eacute;aliser des audits internes</li>
<li>Faire la synth&egrave;se des audits internes</li>
<li>R&eacute;aliser un cas pratique sur un audit interne</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<ul>
<li>Pr&eacute;sentation de l&rsquo;audit Interne</li>
<li>Les techniques d&rsquo;audit &ndash; Pr&eacute;paration de l&rsquo;audit</li>
<li>R&eacute;alisation d&rsquo;un audit</li>
<li>Restitution de l&rsquo;audit</li>
<li>Cas Pratique : R&eacute;alisation d&rsquo;un audit interne</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<ul>
<li>Les fonctions et le r&ocirc;le d&rsquo;un auditeur interne</li>
<li>Facteurs permettant de d&eacute;terminer la fr&eacute;quence des audits</li>
<li>Pr&eacute;paration, y compris la planification et la r&eacute;daction des listes de contr&ocirc;le</li>
<li>Performance de l&rsquo;audit, y compris les techniques d&rsquo;entretien</li>
<li>Rapports d&rsquo;audit et suivi, y compris la r&eacute;union de cl&ocirc;ture</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 16:40:00',
                'updated_at' => '2020-08-13 16:42:05',
                'categorie_id' => '1',
                'sous_categorie_id' => '1',
                'sessions' => NULL,
                'slug' => 'formation-auditeur-qualite',
            ),
            2 => 
            array (
                'id' => 3,
                'titre' => 'Formation ISO 9001',
                'nom' => 'Formation ISO 9001',
                'sous_titre' => 'Cette formation ISO 9001 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser la norme ISO 9001 Version 2015</li>
<li>Comprendre les enjeux de la d&eacute;marche qualit&eacute;</li>
<li>Optimiser Le Syst&egrave;me de Management de la Qualit&eacute;</li>
<li>La gestion de la qualit&eacute; au quotidien</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Le domaine d&rsquo;application et ses limites</li>
<li>Les impacts de cette nouvelle approche</li>
<li>Leadership et management de la qualit&eacute;</li>
<li>L&rsquo;approche processus</li>
<li>Le management des ressources</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Aper&ccedil;u et analyse de la structure et des exigences de la norme ISO 9001</li>
<li>Implications et avantages d&rsquo;un SMQ ISO 9001</li>
<li>Le processus d&rsquo;analyse des &eacute;carts, les m&eacute;thodes permettant d&rsquo;obtenir des r&eacute;sultats efficaces</li>
<li>Ce qu&rsquo;il faut pour planifier, mettre en &oelig;uvre et examiner un SMQ ISO 9001</li>
<li>G&eacute;rer et maintenir son SMQ au quotidien</li>
<li>La certification d&rsquo;un syst&egrave;me de management de la qualit&eacute; ISO 9001</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 16:48:37',
                'updated_at' => '2020-08-13 16:48:37',
                'categorie_id' => '2',
                'sous_categorie_id' => '2',
                'sessions' => NULL,
                'slug' => 'formation-iso-9001',
            ),
            3 => 
            array (
                'id' => 4,
                'titre' => 'Formation auditeur interne ISO 9001',
                'nom' => 'Formation auditeur interne ISO 9001',
                'sous_titre' => 'Cette formation auditeur interne ISO 9001 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir auditeur interne ISO 9001</li>
<li>Mettre en place les m&eacute;thodes pour r&eacute;aliser des audits internes ISO 9001</li>
<li>R&eacute;aliser une synth&egrave;se des audits internes ISO 9001</li>
<li>Faire un cas pratique d&rsquo;un audit interne ISO 9001</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pr&eacute;sentation de l&rsquo;audit Interne ISO 9001</li>
<li>Les techniques d&rsquo;audit interne</li>
<li>R&eacute;alisation d&rsquo;un audit interne ISO 9001</li>
<li>Restitution de l&rsquo;audit interne ISO 9001</li>
<li>Cas Pratique : R&eacute;alisation d&rsquo;un audit interne ISO 9001</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Les fonctions et le r&ocirc;le d&rsquo;un auditeur interne ISO 9001</li>
<li>Comment d&eacute;terminer la fr&eacute;quence des audits interne ISO 9001</li>
<li>Pr&eacute;paration, planification, r&eacute;daction des listes de contr&ocirc;le</li>
<li>Performance de l&rsquo;audit, techniques d&rsquo;entretien entre les ressources</li>
<li>Rapports d&rsquo;audit et de suivi, r&eacute;aliser la r&eacute;union de cl&ocirc;ture</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 16:53:49',
                'updated_at' => '2020-08-13 16:53:49',
                'categorie_id' => '1',
                'sous_categorie_id' => '1',
                'sessions' => NULL,
                'slug' => 'formation-auditeur-interne-iso-9001',
            ),
            4 => 
            array (
                'id' => 5,
                'titre' => 'Formation Système de Management de la Qualité SMQ',
                'nom' => 'Formation Système de Management de la Qualité SMQ',
                'sous_titre' => 'Cette formation SMQ se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Mettre en place le Syst&egrave;me de Management de la Qualit&eacute; &ndash; SMQ</li>
<li>Le syst&egrave;me de management de la Qualit&eacute; dans l&rsquo;entreprise</li>
<li>Mettre en place et piloter le SMI (Syst&egrave;me de Management Int&eacute;gr&eacute;)</li>
<li>La gestion de la qualit&eacute; au quotidien</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Le Syst&egrave;me de Management de la Qualit&eacute;</li>
<li>Mise en place d&rsquo;un SMQ</li>
<li>Du SMQ au SMI</li>
<li>Approche PDCA</li>
<li>Mise en application du SMQ</li>
<li>&nbsp;</li>
</ul>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Structure et contenu d&rsquo;un SMQ</li>
<li>Les outils &agrave; mettre en place pour un SMQ efficace</li>
<li>Suivre les &eacute;carts et les analyser</li>
<li>Le management des processus, des ressources</li>
<li>G&eacute;rer et maintenir son SMQ au quotidien</li>
<li>La certification d&rsquo;un syst&egrave;me de management de la qualit&eacute;</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 16:56:00',
                'updated_at' => '2020-08-13 16:57:07',
                'categorie_id' => '2',
                'sous_categorie_id' => '2',
                'sessions' => NULL,
                'slug' => 'formation-smq',
            ),
            5 => 
            array (
                'id' => 6,
                'titre' => 'Formation Pilote des processus',
                'nom' => 'Formation Pilote des processus',
                'sous_titre' => 'Cette formation Pilote des processus se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir Pilote des processus</li>
<li>Mettre en oeuvre des outils de pilotage d&rsquo;un processus</li>
<li>Animer un processus pour en am&eacute;liorer les r&eacute;sultats</li>
<li>Positionner le r&ocirc;le de pilote de processus et les responsabilit&eacute;s des acteurs qualit&eacute;</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>D&eacute;crire un processus</li>
<li>Mettre en oeuvre des outils de pilotage d&rsquo;un processus</li>
<li>Animer un processus pour en am&eacute;liorer les r&eacute;sultats</li>
<li>Positionner le r&ocirc;le de pilote de processus et les responsabilit&eacute;s des acteurs qualit&eacute;</li>
<li>Revue du processus</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Identifier et d&eacute;finir le nombre et la pertinence des processus</li>
<li>D&eacute;crire et ma&icirc;triser le d&eacute;roulement d&rsquo;un processus</li>
<li>Piloter et am&eacute;liorer un processus</li>
<li>Appr&eacute;hender et connaitre les responsabilit&eacute;s du pilote de processus</li>
<li>Mener une revue du processus</li>
<li>La gestion des processus au quotidien</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 17:36:00',
                'updated_at' => '2020-08-13 17:36:37',
                'categorie_id' => '2',
                'sous_categorie_id' => '2',
                'sessions' => NULL,
                'slug' => 'formation-pilote-processus',
            ),
            6 => 
            array (
                'id' => 7,
                'titre' => 'Formation Responsable Qualité',
                'nom' => 'Formation Responsable Qualité',
                'sous_titre' => 'Cette formation Responsable Qualité se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir Responsable Qualit&eacute;</li>
<li>Avoir une vision globale du responsable qualit&eacute;</li>
<li>Utiliser les outils et les m&eacute;thodes pour mener &agrave; bien cette fonction</li>
<li>Mettre en place une d&eacute;marche qualit&eacute; dans son entreprise</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Mettre en &oelig;uvre une d&eacute;marche Qualit&eacute;</li>
<li>G&eacute;rer les ressources internes, le leadership</li>
<li>Concevoir un tableau de bord, g&eacute;rer les indicateurs</li>
<li>Mettre en place un Syst&egrave;me de Management de la Qualit&eacute; (SMQ)</li>
<li>G&eacute;rer les audits internes</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Piloter les processus, g&eacute;rer les ressources</li>
<li>Mettre en place des outils de surveillance, des indicateurs et les suivre</li>
<li>Animer, motiver son &eacute;quipe, g&eacute;rer la communication</li>
<li>D&eacute;finir un Syst&egrave;me de Management de la Qualit&eacute; au sein de son entreprise</li>
<li>G&eacute;rer les non-conformit&eacute;s, les r&eacute;clamations clients et mettre en place les actions correctives</li>
<li>Les missions du responsable qualit&eacute; au quotidien</li>
</ul>
<p>&nbsp;</p>',
                'duree' => '4 Jours – 28 Heures',
                'prix' => '3000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 17:40:00',
                'updated_at' => '2020-08-13 17:46:56',
                'categorie_id' => '2',
                'sous_categorie_id' => '2',
                'sessions' => NULL,
                'slug' => 'formation-responsable-qualite',
            ),
            7 => 
            array (
                'id' => 8,
                'titre' => 'Formation Assistant Qualité',
                'nom' => 'Formation Assistant Qualité',
                'sous_titre' => 'Cette formation Assistant Qualité se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir Assistant Qualit&eacute;</li>
<li>Le r&ocirc;le et les missions de l&rsquo;assistant(e) qualit&eacute;</li>
<li>Utiliser des outils et des m&eacute;thodes adapt&eacute;es</li>
<li>Appr&eacute;hender le syst&egrave;me de management de la qualit&eacute;</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Appr&eacute;hender le syst&egrave;me de management de la qualit&eacute; (SMQ)</li>
<li>D&eacute;finir son r&ocirc;le vis &agrave; vis du responsable qualit&eacute;</li>
<li>Communiquer sur le syst&egrave;me qualit&eacute;, animer les r&eacute;unions</li>
<li>G&eacute;rer la documentation, les indicateurs, les plans d&rsquo;action</li>
<li>Etre force de proposition</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Le r&ocirc;le et les missions de l&rsquo;assistant qualit&eacute;</li>
<li>Analyser et am&eacute;liorer les processus</li>
<li>G&eacute;rer le syst&egrave;me documentaire</li>
<li>Mettre en place des plans d&rsquo;am&eacute;lioration</li>
<li>G&eacute;rer les non-conformit&eacute;s, les r&eacute;clamations</li>
<li>Les missions de l&rsquo;assistant qualit&eacute; au quotidien</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 17:46:00',
                'updated_at' => '2020-08-13 17:46:24',
                'categorie_id' => '2',
                'sous_categorie_id' => '2',
                'sessions' => NULL,
                'slug' => 'formation-assistant-qualite',
            ),
            8 => 
            array (
                'id' => 9,
                'titre' => 'Formation MASE',
                'nom' => 'Formation MASE',
                'sous_titre' => 'Cette formation mase se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser le r&eacute;f&eacute;rentiel MASE</li>
<li>Comprendre les enjeux du r&eacute;f&eacute;rentiel MASE-UIC</li>
<li>Effectuer un &eacute;tat des lieux de la conformit&eacute; et proposer un plan d&rsquo;actions</li>
<li>G&eacute;rer le syst&egrave;me de management S&eacute;curit&eacute; Sant&eacute; Environnement</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Engagement de la direction de l&rsquo;entreprise</li>
<li>Comp&eacute;tence et qualification professionnelle</li>
<li>Pr&eacute;paration et organisation du travail</li>
<li>Contr&ocirc;les et am&eacute;lioration</li>
<li>Rapport d&rsquo;audit Mase SSE</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Engagement de la direction de l&rsquo;entreprise</li>
<li>Ma&icirc;triser les risques S&eacute;curit&eacute; Sant&eacute; Environnement</li>
<li>Evaluer l&rsquo;efficacit&eacute; du syst&egrave;me de management</li>
<li>Am&eacute;liorer en continu le syst&egrave;me de management</li>
<li>G&eacute;rer et maintenir son S&eacute;curit&eacute; Sant&eacute; Environnement au quotidien</li>
<li>La certification MASE</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 17:49:00',
                'updated_at' => '2020-08-13 17:49:42',
                'categorie_id' => '3',
                'sous_categorie_id' => '3',
                'sessions' => NULL,
                'slug' => 'formation-mase',
            ),
            9 => 
            array (
                'id' => 10,
                'titre' => 'Formation ISO 45001',
                'nom' => 'Formation ISO 45001',
                'sous_titre' => 'Cette formation ISO 45001 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser la norme ISO 45001</li>
<li>Le champ d&rsquo;application, les clauses cl&eacute;s et les avantages de la norme ISO 45001</li>
<li>Processus de planification et de mise en &oelig;uvre d&rsquo;un syst&egrave;me de gestion ISO 45001</li>
<li>Mettre en oeuvre la certification ISO 45001</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pr&eacute;sentation de la norme l&rsquo;ISO 45001 version 2018</li>
<li>Les exigences de l&rsquo;ISO 45001 version 2018</li>
<li>Mise en &oelig;uvre de la norme ISO 45001 version 2018</li>
<li>&Eacute;valuation et am&eacute;lioration continue du SMSST</li>
<li>La certification Norme ISO 45001 Version 2018</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Avantages et implications de la mise en &oelig;uvre d&rsquo;un syst&egrave;me de gestion de la sant&eacute; et de la s&eacute;curit&eacute; au travail ISO 45001, y compris la conformit&eacute; &agrave; la l&eacute;gislation</li>
<li>Le cycle Plan Do Check Act (PDCA) et l&rsquo;am&eacute;lioration continue</li>
<li>Le processus de planification, de mise en &oelig;uvre et de r&eacute;vision d&rsquo;un syst&egrave;me de gestion de la sant&eacute; et de la s&eacute;curit&eacute; au travail (SMSST)</li>
<li>Ce qu&rsquo;il faut pour planifier, mettre en &oelig;uvre un SMSST</li>
<li>G&eacute;rer et maintenir son SMSST au quotidien</li>
<li>La certification d&rsquo;un syst&egrave;me de gestion de la sant&eacute; et de la s&eacute;curit&eacute; au travail (SMSST) ISO 45001</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:01:00',
                'updated_at' => '2020-08-13 18:01:19',
                'categorie_id' => '4',
                'sous_categorie_id' => '5',
                'sessions' => NULL,
                'slug' => 'formation-iso-45001',
            ),
            10 => 
            array (
                'id' => 11,
                'titre' => 'Formation auditeur interne ISO 45001',
                'nom' => 'Formation auditeur interne ISO 45001',
                'sous_titre' => 'Cette formation auditeur interne ISO 45001 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir auditeur interne ISO 45001</li>
<li>Mettre en place les m&eacute;thodes pour r&eacute;aliser des audits internes ISO 45001</li>
<li>R&eacute;aliser une synth&egrave;se des audits internes ISO 45001</li>
<li>Faire un cas pratique d&rsquo;un audit interne ISO 45001</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pr&eacute;sentation de l&rsquo;audit Interne ISO 45001</li>
<li>Les techniques d&rsquo;audit interne</li>
<li>R&eacute;alisation d&rsquo;un audit interne ISO 45001</li>
<li>Restitution de l&rsquo;audit interne ISO 45001</li>
<li>Cas Pratique : R&eacute;alisation d&rsquo;un audit interne ISO 45001</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Les fonctions et le r&ocirc;le d&rsquo;un auditeur interne ISO 45001</li>
<li>Comment d&eacute;terminer la fr&eacute;quence des audits interne ISO 45001</li>
<li>Pr&eacute;paration, planification, r&eacute;daction des listes de contr&ocirc;le</li>
<li>Performance de l&rsquo;audit, techniques d&rsquo;entretien entre les ressources</li>
<li>Rapports d&rsquo;audit et de suivi, r&eacute;aliser la r&eacute;union de cl&ocirc;ture</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:03:00',
                'updated_at' => '2020-08-13 18:03:38',
                'categorie_id' => '1',
                'sous_categorie_id' => '1',
                'sessions' => NULL,
                'slug' => 'formation-auditeur-interne-iso-45001',
            ),
            11 => 
            array (
                'id' => 12,
                'titre' => 'Formation Arbre des Causes',
                'nom' => 'Formation Arbre des Causes',
                'sous_titre' => 'Cette formation Arbre des Causes se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Analyse d&rsquo;accident selon la m&eacute;thode de l&rsquo;arbre des causes</li>
<li>Etablir un recueil des faits objectif et complet</li>
<li>Piloter la d&eacute;marche d&rsquo;analyse d&rsquo;accident selon la m&eacute;thode de l&rsquo;arbre des causes</li>
<li>Choisir les actions pr&eacute;ventives et correctives &agrave; retenir selon des crit&egrave;res d&eacute;finis</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Notions de base : danger, risque et situation dangereuse</li>
<li>Mod&eacute;lisation de l&rsquo;accident</li>
<li>Le recueil des faits</li>
<li>Conna&icirc;tre les 9 Principes G&eacute;n&eacute;raux de Pr&eacute;vention</li>
<li>Organiser l&rsquo;analyse</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>M&eacute;thodologie de l&rsquo;arbre des causes</li>
<li>Repr&eacute;senter graphiquement l&rsquo;arbre des causes</li>
<li>Savoir questionner pour obtenir un encha&icirc;nement logiquement et remonter aux causes profondes</li>
<li>Retenir les actions pr&eacute;ventives et correctives adapt&eacute;es &agrave; la situation</li>
<li>Rechercher les variations</li>
<li>Elaboration d&rsquo;un arbre des causes et proposition d&rsquo;actions correctives adapt&eacute;es</li>
</ul>',
                'duree' => '1 Jour – 7 Heures',
                'prix' => '500 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:08:08',
                'updated_at' => '2020-08-13 18:08:08',
                'categorie_id' => '4',
                'sous_categorie_id' => '5',
                'sessions' => NULL,
                'slug' => 'formation-arbre-causes',
            ),
            12 => 
            array (
                'id' => 13,
                'titre' => 'Formation Quart d’Heure de Sécurité',
                'nom' => 'Formation Quart d’Heure de Sécurité',
                'sous_titre' => 'Cette formation Quart d’Heure de Sécurité se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Animer le Quart d&rsquo;Heure de S&eacute;curit&eacute;</li>
<li>Organiser et animer des &frac14; d&rsquo;heures s&eacute;curit&eacute; efficaces au sein de leur service ou de leur entreprise</li>
<li>Etablir un climat propice &agrave; l&rsquo;&eacute;change avec leurs &eacute;quipes sur les th&eacute;matiques Sant&eacute; S&eacute;curit&eacute; au Travail</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>15 minutes pour convaincre</li>
<li>La pr&eacute;paration du &frac14; d&rsquo;heure s&eacute;curit&eacute;</li>
<li>D&eacute;finition du message cl&eacute; &agrave; faire passer</li>
<li>R&eacute;ussir sa communication</li>
<li>Identifier les m&eacute;canismes de motivation de vos interlocuteurs</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Choix des supports en tenant compte des diff&eacute;rents canaux de communication</li>
<li>Organisation pratique du &frac14; d&rsquo;heure s&eacute;curit&eacute;</li>
<li>Faire du &frac14; d&rsquo;heure s&eacute;curit&eacute; un moment d&rsquo;&eacute;change</li>
<li>Faire du &frac14; d&rsquo;heure s&eacute;curit&eacute; un moment d&rsquo;&eacute;change</li>
<li>Pr&eacute;paration d&rsquo;un &frac14; d&rsquo;heure s&eacute;curit&eacute;</li>
<li>Suivi du quart d&rsquo;heure s&eacute;curit&eacute;</li>
</ul>',
                'duree' => '0.5 Jour – 3.5 Heures',
                'prix' => '500 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:11:35',
                'updated_at' => '2020-08-13 18:11:35',
                'categorie_id' => '4',
                'sous_categorie_id' => '5',
                'sessions' => NULL,
                'slug' => 'formation-quart-heure-securite',
            ),
            13 => 
            array (
                'id' => 14,
                'titre' => 'Formation Document Unique',
                'nom' => 'Formation Document Unique',
                'sous_titre' => 'Cette formation Document Unique se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Retranscrire et hi&eacute;rarchiser les risques dans un document unique</li>
<li>Piloter une d&eacute;marche d&rsquo;&eacute;valuation des risques bas&eacute;e sur l&rsquo;observation du travail r&eacute;el</li>
<li>Poser les bases d&rsquo;un plan d&rsquo;actions adapt&eacute; &agrave; votre contexte pour am&eacute;liorer vos performances en mati&egrave;re de Sant&eacute; S&eacute;curit&eacute; au Travail</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pourquoi consigner son &eacute;valuation des risques professionnels dans un document unique ?</li>
<li>Le contexte r&eacute;glementaire</li>
<li>M&eacute;thodologie d&rsquo;&eacute;valuation des risques</li>
<li>Focus sur certains risques sp&eacute;cifiques</li>
<li>R&eacute;diger le document unique</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Le Document Unique : un levier de progr&egrave;s pour promouvoir la culture s&eacute;curit&eacute; et r&eacute;duire le nombre d&rsquo;accidents</li>
<li>Les 9 Principes G&eacute;n&eacute;raux de Pr&eacute;vention</li>
<li>Identifier les dangers et les risques &agrave; partir du travail prescrit</li>
<li>Proposer des mesures pour supprimer ou r&eacute;duire les risques</li>
<li>Int&eacute;grer les Risques Psycho-Sociaux (RPS) &agrave; l&rsquo;&eacute;valuation des risques</li>
<li>Evaluer les risques sur le terrain</li>
</ul>',
                'duree' => '1 Jour – 7 Heures',
                'prix' => '500 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:17:22',
                'updated_at' => '2020-08-13 18:17:22',
                'categorie_id' => '4',
                'sous_categorie_id' => '5',
                'sessions' => NULL,
                'slug' => 'formation-document-unique',
            ),
            14 => 
            array (
                'id' => 15,
                'titre' => 'Formation Responsable HSE',
                'nom' => 'Formation Responsable HSE',
                'sous_titre' => 'Cette formation Responsable HSE se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir Animateur / Responsable HSE</li>
<li>Le r&ocirc;le et les missions de l&rsquo;animateur &ndash; responsable HSE</li>
<li>Utiliser des outils et des m&eacute;thodes adapt&eacute;es</li>
<li>S&rsquo;assurer de la conformit&eacute; r&eacute;glementaire de leur entreprise en mati&egrave;re de HSE</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Enjeux du management de la Sant&eacute; S&eacute;curit&eacute; pour l&rsquo;entreprise</li>
<li>R&ocirc;le et responsabilit&eacute;s du Responsable HSE</li>
<li>M&eacute;thodologie d&rsquo;&eacute;valuation des risques</li>
<li>Points cl&eacute;s de la r&eacute;glementation</li>
<li>Poser les bases d&rsquo;un syst&egrave;me de management HSE</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Principales obligations de l&rsquo;employeur</li>
<li>Les grandes familles de risques professionnels</li>
<li>Les concepts de la pr&eacute;vention</li>
<li>La bo&icirc;te &agrave; outils de l&rsquo;Animateur HSE</li>
<li>Utiliser des outils facilitant la mise en place d&rsquo;une d&eacute;marche de pr&eacute;vention et d&rsquo;am&eacute;lioration continue en mati&egrave;re de HSE</li>
<li>Les missions du responsable HSE au quotidien</li>
</ul>',
                'duree' => '4 Jours – 28 Heures',
                'prix' => '3000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:20:45',
                'updated_at' => '2020-08-13 18:20:45',
                'categorie_id' => '4',
                'sous_categorie_id' => '4',
                'sessions' => NULL,
                'slug' => 'formation-responsable-hse',
            ),
            15 => 
            array (
                'id' => 16,
                'titre' => 'Formation ISO 14001',
                'nom' => 'Formation ISO 14001',
                'sous_titre' => 'Cette formation ISO 14001 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser la norme ISO 14001</li>
<li>Mettre en oeuvre un Syst&egrave;me de Management de l&rsquo;Environnement</li>
<li>Terminologie environnementale</li>
<li>PDCA, am&eacute;lioration continue</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pr&eacute;sentation de la norme ISO 14001</li>
<li>Les nouvelles exigences de l&rsquo;ISO 14001 version 2015</li>
<li>Mise en &oelig;uvre de la norme ISO 14001 version 2015</li>
<li>&Eacute;valuation et am&eacute;lioration continue du Syst&egrave;me de Management de l&rsquo;Environnement</li>
<li>La certification Norme ISO 14001 Version 2015</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Structure de la norme, du processus de r&eacute;vision et de la structure de haut niveau de l&rsquo;annexe SL</li>
<li>Durabilit&eacute;, d&eacute;veloppement durable et ISO 14001</li>
<li>Le cycle de vie au sein du Syst&egrave;me de Management de l&rsquo;Environnement (SME)</li>
<li>Ce qu&rsquo;il faut pour planifier, mettre en &oelig;uvre un SME</li>
<li>G&eacute;rer et maintenir son SME au quotidien</li>
<li>La certification d&rsquo;un Syst&egrave;me de Management de l&rsquo;Environnement ISO 14001</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:24:21',
                'updated_at' => '2020-08-13 18:24:21',
                'categorie_id' => '5',
                'sous_categorie_id' => '6',
                'sessions' => NULL,
                'slug' => 'formation-iso-14001',
            ),
            16 => 
            array (
                'id' => 17,
                'titre' => 'Formation auditeur interne ISO 14001',
                'nom' => 'Formation auditeur interne ISO 14001',
                'sous_titre' => 'Cette formation auditeur interne ISO 14001 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir auditeur interne ISO 14001</li>
<li>Mettre en place les m&eacute;thodes pour r&eacute;aliser des audits internes ISO 14001</li>
<li>R&eacute;aliser une synth&egrave;se des audits internes ISO 14001</li>
<li>Faire un cas pratique d&rsquo;un audit interne ISO 14001</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pr&eacute;sentation de l&rsquo;audit Interne ISO 14001</li>
<li>Les techniques d&rsquo;audit interne</li>
<li>R&eacute;alisation d&rsquo;un audit interne ISO 14001</li>
<li>Restitution de l&rsquo;audit interne ISO 14001</li>
<li>Cas Pratique : R&eacute;alisation d&rsquo;un audit interne ISO 14001</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Les fonctions et le r&ocirc;le d&rsquo;un auditeur interne ISO 14001</li>
<li>Comment d&eacute;terminer la fr&eacute;quence des audits interne ISO 14001</li>
<li>Pr&eacute;paration, planification, r&eacute;daction des listes de contr&ocirc;le</li>
<li>Performance de l&rsquo;audit, techniques d&rsquo;entretien entre les ressources</li>
<li>Rapports d&rsquo;audit et de suivi, r&eacute;aliser la r&eacute;union de cl&ocirc;ture</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:27:02',
                'updated_at' => '2020-08-13 18:27:02',
                'categorie_id' => '1',
                'sous_categorie_id' => '1',
                'sessions' => NULL,
                'slug' => 'formation-auditeur-interne-iso-14001',
            ),
            17 => 
            array (
                'id' => 18,
                'titre' => 'Formation EN 9100',
                'nom' => 'Formation EN 9100',
                'sous_titre' => 'Cette formation EN 9100 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser la norme EN 9100</li>
<li>Comprendre les enjeux de la d&eacute;marche qualit&eacute;</li>
<li>Optimiser le syst&egrave;mes de gestion de l&rsquo;a&eacute;rospatiale</li>
<li>La gestion de la qualit&eacute; au quotidien</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Syst&egrave;mes de gestion de l&rsquo;a&eacute;rospatiale</li>
<li>Les impacts de cette nouvelle approche</li>
<li>Interpr&eacute;tation des principales exigences de la norme AS9001D:2016</li>
<li>L&rsquo;approche processus EN 9100</li>
<li>Le management des ressources et l&rsquo;am&eacute;lioration continue</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Syst&egrave;me de management : la structure HLS sur la norme EN 9100</li>
<li>Responsabilit&eacute; de la direction et Management des ressources</li>
<li>R&eacute;alisation du produit et Conception &amp; D&eacute;veloppement</li>
<li>Processus Achats et v&eacute;rification produits achet&eacute;s</li>
<li>G&eacute;rer et maintenir son SMQ au quotidien</li>
<li>La certification d&rsquo;un syst&egrave;me de management de la qualit&eacute; EN 9100</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:32:14',
                'updated_at' => '2020-08-13 18:32:14',
                'categorie_id' => '6',
                'sous_categorie_id' => '9',
                'sessions' => NULL,
                'slug' => 'formation-en-9100',
            ),
            18 => 
            array (
                'id' => 19,
                'titre' => 'Formation auditeur interne EN 9100',
                'nom' => 'Formation auditeur interne EN 9100',
                'sous_titre' => 'Cette formation auditeur interne EN 9100 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Devenir auditeur interne EN 9100</li>
<li>Mettre en place les m&eacute;thodes pour r&eacute;aliser des audits internes EN 9100</li>
<li>R&eacute;aliser une synth&egrave;se des audits internes EN 9100</li>
<li>Faire un cas pratique d&rsquo;un audit interne EN 9100</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Pr&eacute;sentation de l&rsquo;audit Interne ISO 45001</li>
<li>Les techniques d&rsquo;audit interne EN 9100</li>
<li>R&eacute;alisation d&rsquo;un audit interne EN 9100</li>
<li>Restitution de l&rsquo;audit interne</li>
<li>Cas Pratique : R&eacute;alisation d&rsquo;un audit interne EN 9100</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Les fonctions et le r&ocirc;le d&rsquo;un auditeur interne EN 9100</li>
<li>Comment d&eacute;terminer la fr&eacute;quence des audits interne EN 9100</li>
<li>Pr&eacute;paration, planification, r&eacute;daction des listes de contr&ocirc;le</li>
<li>Performance de l&rsquo;audit, techniques d&rsquo;entretien entre les ressources</li>
<li>Rapports d&rsquo;audit et de suivi, r&eacute;aliser la r&eacute;union de cl&ocirc;ture</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:34:53',
                'updated_at' => '2020-08-13 18:34:53',
                'categorie_id' => '1',
                'sous_categorie_id' => '1',
                'sessions' => NULL,
                'slug' => 'formation-auditeur-interne-en-9100',
            ),
            19 => 
            array (
                'id' => 20,
                'titre' => 'Formation ISO 17025',
                'nom' => 'Formation ISO 17025',
                'sous_titre' => 'Cette formation ISO 17025 se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser la norme ISO 17025 Version 2017</li>
<li>Comprendre les exigences de la norme ISO 17025</li>
<li>Optimiser Le Syst&egrave;me de Management de la Qualit&eacute;</li>
<li>Acqu&eacute;rir les outils pour mettre en &oelig;uvre les &eacute;volutions</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>De la conformit&eacute; &agrave; la performance du SMQ selon ISO 17025</li>
<li>Nouvelle structure de la norme ISO 17025</li>
<li>Analyse des clauses de la norme ISO 17025 : Impartialit&eacute;, Confidentialit&eacute;</li>
<li>L&rsquo;approche processus</li>
<li>La gestion des non-conformit&eacute; et actions correctives</li>
<li>L&rsquo;audit interne et la revue de direction</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Vue d&rsquo;ensemble et exigences de la norme ISO/CEI 17025 version 17025</li>
<li>Comment obtenir une accr&eacute;ditation selon la norme ISO 17025</li>
<li>Carte des processus de haut niveau li&eacute;s au laboratoire</li>
<li>Comprendre les risques et les opportunit&eacute;s</li>
<li>Maintien efficace d&rsquo;un syst&egrave;me de gestion accr&eacute;dit&eacute; ISO 17025</li>
<li>L&rsquo;accr&eacute;ditation d&rsquo;un syst&egrave;me de management de la qualit&eacute; ISO 17025</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:41:25',
                'updated_at' => '2020-08-13 18:41:25',
                'categorie_id' => '7',
                'sous_categorie_id' => '7',
                'sessions' => NULL,
                'slug' => 'formation-iso-17025',
            ),
            20 => 
            array (
                'id' => 21,
                'titre' => 'Formation Métrologie',
                'nom' => 'Formation Métrologie',
                'sous_titre' => 'Cette formation Métrologie se déroule en distanciel ou en sur mesure dans votre entreprise.',
                'objectif' => '<ul>
<li>Ma&icirc;triser la m&eacute;trologie</li>
<li>Comprendre les modalit&eacute;s de raccordement des &eacute;talons aux &eacute;talons nationaux ou internationaux</li>
<li>Comprendre les fondamentaux des incertitudes de mesures</li>
<li>Savoir g&eacute;rer un parc d&rsquo;&eacute;quipements</li>
</ul>',
                'infos_pratiques' => '<p>Public vis&eacute; : La formation s&rsquo;adresse &agrave; tout public</p>
<p>A l&rsquo;issue de la formation le stagiaire recevra une attestation de formation</p>
<p>Pr&eacute;-requis : Comprendre et parler le fran&ccedil;ais</p>',
                'contenu' => '<h3>VUE D\'ENSEMBLE</h3>
<p>&nbsp;</p>
<ul>
<li>Les caract&eacute;ristiques principales d&rsquo;un &eacute;quipement</li>
<li>Les principales grandeurs physiques</li>
<li>D&eacute;terminer les modalit&eacute;s de raccordement de son &eacute;quipement</li>
<li>Les normes applicables (FDX 15-140, EN 45501, ISO 8655-XX, etc&hellip;)</li>
<li>Vocabulaire de base (d&eacute;finition ISO, BIPM, OIML)</li>
</ul>
<p>&nbsp;</p>
<h3>POINTS CLEFS</h3>
<p>&nbsp;</p>
<ul>
<li>Documenter ses &eacute;quipements et leurs contr&ocirc;les</li>
<li>D&eacute;termination des p&eacute;riodicit&eacute;s de contr&ocirc;le</li>
<li>Les fondamentaux sur les incertitudes de mesure</li>
<li>Capabilit&eacute; des moyens de mesure pour d&eacute;terminer son Ecart Maximal Tol&eacute;r&eacute; ou EMT</li>
<li>Savoir exploiter un certificat d&rsquo;&eacute;talonnage et ou constat de v&eacute;rification</li>
<li>R&ocirc;le et mission d&rsquo;une personne en charge de la fonction m&eacute;trologie dans un laboratoire selon GEN REF 10 COFRAC entre autres</li>
</ul>',
                'duree' => '2 Jours – 14 Heures',
                'prix' => '1000 € HT',
                'type' => 'A distance / En entreprise',
                'created_at' => '2020-08-13 18:47:50',
                'updated_at' => '2020-08-13 18:47:50',
                'categorie_id' => '8',
                'sous_categorie_id' => '8',
                'sessions' => NULL,
                'slug' => 'formation-metrologie',
            ),
        ));
        
        
    }
}