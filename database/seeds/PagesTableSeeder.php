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
                'contenu' => '<div>
<h2>Mentions l&eacute;gales</h2>
</div>
<h2><strong><span style="text-decoration: underline;">Editeur :</span></strong></h2>
<p>&nbsp;</p>
<p>Le site www.certificationiso.fr est une r&eacute;alisation et une propri&eacute;t&eacute; de Cyn Communication &ndash;</p>
<p>Tel : 04 82 53 44 78</p>
<p>Siret : 522111137</p>
<p>Adresse : 1410 Route des bourdonnes 42800 Genilac</p>
<p><span style="text-decoration: underline;">Contact :</span><a href="mailto:contact@cyn-communication.fr">contact@cyn-communication fr</a></p>
<p><em>En utilisant ce site, le visiteur reconna&icirc;t avoir eu la possibilit&eacute; de prendre connaissance des conditions d\'utilisation.</em></p>
<p>La soci&eacute;t&eacute; Cyn Communication s\'efforce d\'assurer au mieux de ses possibilit&eacute;s, l\'exactitude et la mise &agrave; jour des informations diffus&eacute;es sur ce site, dont elle se r&eacute;serve le droit de corriger, &agrave; tout moment et sans pr&eacute;avis, le contenu. Toutefois, Cyn Communication ne peut garantir l\'exactitude, la pr&eacute;cision ou l\'exhaustivit&eacute; des informations mises &agrave; la disposition sur ce site. Nous remercions les utilisateurs du site de nous faire part d&rsquo;&eacute;ventuelles omissions, erreurs ou corrections, en adressant un email au webmestre du site.</p>
<p>En cons&eacute;quence, Cyn Communication d&eacute;cline toute responsabilit&eacute; : - pour toute interruption du site - survenance de bogues - pour toute inexactitude ou omission portant sur des informations disponibles sur le site ; - pour tous dommages r&eacute;sultant d\'une intrusion frauduleuse d\'un tiers ayant entra&icirc;n&eacute; une modification des informations mises &agrave; la disposition sur le site ; - et plus g&eacute;n&eacute;ralement de tout dommage direct et indirect, quelles qu\'en soient les causes, origines, natures ou cons&eacute;quences en ce y compris notamment les co&ucirc;ts pouvant survenir du fait de l\'acquisition de biens ou services propos&eacute;s sur le site, les pertes de profits, de client&egrave;le, de donn&eacute;es ou tout autre perte de biens incorporels pouvant survenir &agrave; raison de l\'acc&egrave;s de quiconque au site ou de l\'impossibilit&eacute; d\'y acc&eacute;der ou du cr&eacute;dit accord&eacute; &agrave; une quelconque information provenant directement ou indirectement de ce dernier.</p>
<p><strong>Donn&eacute;es personnelles</strong></p>
<p>En application de la loi Informatique et Libert&eacute;s du 6 janvier 1978 et de la r&eacute;glementation sur la protection des donn&eacute;es &agrave; caract&egrave;re personnel (RGPD), vous b&eacute;n&eacute;ficiez d&rsquo;un droit d&rsquo;acc&egrave;s, de rectification, de limitation du traitement ainsi que d&rsquo;un droit d&rsquo;opposition et de portabilit&eacute; de vos donn&eacute;es si cela est applicable que vous pouvez exercer en envoyant un email &agrave; : contact @ cyn-communication.fr, ou en nous &eacute;crivant &agrave; cette adresse&nbsp;: Cyn communication 1410 route des bourdonnes 42800 genilac. Pour toute demande, veuillez nous indiquer vos nom(s)/pr&eacute;nom(s), soci&eacute;t&eacute;, adresse email, ainsi que la modification souhait&eacute;e. Notez que cette base n&rsquo;est en aucun cas lou&eacute;e ou vendue &agrave; des tiers. Par ailleurs, son traitement est s&eacute;curis&eacute; et confin&eacute; &agrave; un r&eacute;seau interne. Vos donn&eacute;es sont conserv&eacute;es et utilis&eacute;es pour une dur&eacute;e maximum de 5 ans, conform&eacute;ment &agrave; la l&eacute;gislation en vigueur. Vous b&eacute;n&eacute;ficiez &eacute;galement du droit d&rsquo;introduire une r&eacute;clamation aupr&egrave;s d&rsquo;une autorit&eacute; de contr&ocirc;le si n&eacute;cessaire.</p>
<p><strong>Liens</strong></p>
<p>Le site peut inclure des liens vers d\'autres sites Web ou d\'autres sources Internet. Dans la mesure o&ugrave; Cyn Communication ne peut contr&ocirc;ler ces sites et ces sources externes, Cyn Communication ne peut &ecirc;tre tenu pour responsable de la mise &agrave; disposition de ces sites et sources externes, et ne peut supporter aucune responsabilit&eacute; quant au contenu, publicit&eacute;s, produits, services ou tout autre mat&eacute;riel disponible sur ou &agrave; partir de ces sites ou sources externes. De plus, Cyn Communication ne pourra &ecirc;tre tenu responsable de tous dommages ou pertes av&eacute;r&eacute;s ou all&eacute;gu&eacute;s cons&eacute;cutifs ou en relation avec l\'utilisation ou avec le fait d\'avoir fait confiance au contenu, &agrave; des biens ou des services disponibles sur ces sites ou sources externes.</p>
<p><strong>Droit de propri&eacute;t&eacute;</strong></p>
<p>Ce site est l\'enti&egrave;re propri&eacute;t&eacute; de Cyn Communication. L\'acc&egrave;s au site Cyn Communication vous conf&egrave;re un droit d\'usage priv&eacute; et non exclusif de ce site.</p>
<p>L\'ensemble des &eacute;l&eacute;ments &eacute;dit&eacute;s sur ce site, incluant notamment les textes, photographies, infographies, logos, marques&hellip; constituent des &oelig;uvres au sens du code de la Propri&eacute;t&eacute; Intellectuelle. Tous les logos et trademarks pr&eacute;sents sur ce site sont la propri&eacute;t&eacute; de leurs marques respectives. Les documents et commentaires appartiennent &agrave; leurs auteurs. Toute repr&eacute;sentation ou reproduction, int&eacute;grale ou partielle, qui pourrait &ecirc;tre faite sans le consentement de leurs auteurs ou de leurs ayants-droit, est donc illicite.</p>
<p><strong>Droit applicable</strong></p>
<p>Le Site Internet et ses conditions d\'acc&egrave;s et d\'utilisation sont r&eacute;gis par le droit fran&ccedil;ais. Tout diff&eacute;rend relatif au Site Internet sera soumis &agrave; la comp&eacute;tence exclusive des Tribunaux de Lyon.</p>
<p>Webmaster :&nbsp;<a href="mailto:contact@cyn-communication.fr">contact@cyn-communication fr</a></p>
<p><strong>H&eacute;bergement</strong></p>
<p><strong>OVH</strong><strong><br /></strong>2 rue Kellermann - 59100 Roubaix</p>',
                'created_at' => '2020-08-17 06:42:00',
                'updated_at' => '2020-08-17 14:41:50',
                'description' => NULL,
                'title' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'a-propos-nous',
                'contenu' => '<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<h1 style="color: inherit !important; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 24px !important; line-height: inherit !important; font-weight: inherit !important; font-family: inherit !important; text-align: center;"><span class="blue" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #1db0ee !important;">A propos de nous</span></h1>
</div>
</div>
<div class="vc_empty_space" style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; height: 20px;">&nbsp;</div>
<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<h4 style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; letter-spacing: 0px; color: inherit !important; font-size: inherit !important; line-height: inherit !important; font-weight: inherit !important; font-family: inherit !important;">O&ugrave; que vous soyez en France, quel que soit votre secteur d&rsquo;activit&eacute;, vous pouvez compter sur nos partenaires pour vous fournir des solutions adapt&eacute;es pour vos projets dans la qualit&eacute;.</h4>
</div>
</div>
<div class="vc_empty_space" style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; height: 20px;">&nbsp;</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-5985" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-5985 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Notre Soci&eacute;t&eacute;</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-5985 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="vc_row wpb_row section vc_row-fluid vc_inner " style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-12" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 1330px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 1330px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<ul style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; list-style-position: inside;">
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">CertificationISO.fr est une marque de Cyn Communication.</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Cyn Communication est une soci&eacute;t&eacute; ind&eacute;pendante, organisme de formation, proposant du conseil, de l&rsquo;accompagnement et des formations.</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Cyn Communication collabore avec des partenaires (consultants / formateurs ind&eacute;pendants) experts dans le domaine de la qualit&eacute; et pr&eacute;sents partout en France, qui interviennent directement chez les clients.</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Consulter notre&nbsp;<a style="color: #303030; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; text-decoration-line: none; cursor: pointer;" href="https://certificationiso.fr/notre-politique-de-confidentialite/">politique de confidentialit&eacute;</a></li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Cyn Communication est certifi&eacute;e Qualiopi et certifi&eacute;e Datadock</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-4669" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-4669 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Nos Services</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-4669 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<ul style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; list-style-position: inside;">
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous fournissons des services de conseil, d&rsquo;audit et de formation pour vous aider &agrave; am&eacute;liorer vos processus, vos performances, vos produits et vos services.</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous aidons les entreprises de toutes tailles &agrave; am&eacute;liorer leurs performances en termes de qualit&eacute;, d&rsquo;environnement, d&rsquo;&eacute;nergie, de durabilit&eacute; et de gestion de la sant&eacute; et de la s&eacute;curit&eacute;. De plus, nous veillons &agrave; ce que ces am&eacute;liorations se poursuivent ann&eacute;e apr&egrave;s ann&eacute;e.</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous sommes sp&eacute;cialis&eacute;s dans le conseil de syst&egrave;mes de management pour :
<ul style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 0px 0px 15px; vertical-align: baseline; outline: 0px; list-style-position: inside;">
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Qualit&eacute; (Automobile, A&eacute;rospatiale, Laboratoire,&hellip;)</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Environnement, &eacute;nergie</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Sant&eacute; et s&eacute;curit&eacute;</li>
</ul>
</li>
</ul>
</div>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-5794" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-5794 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Nos Clients</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-5794 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<ul style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; list-style-position: inside;">
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous avons le privil&egrave;ge de travailler avec diverses organisations, notamment des petites entreprises, des associations caritatives, des minist&egrave;res et des marques de renomm&eacute;e mondiale.</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Consultez nos r&eacute;f&eacute;rences clients</li>
</ul>
</div>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-8440" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-8440 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Nos Engagements</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-8440 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<ul style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; list-style-position: inside;">
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous vous &eacute;couterons et nous nous engagerons &agrave; vous fournir la meilleure r&eacute;ponse</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;"><span class="notranslate" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous nous engageons &agrave; vous fournir des conseils de qualit&eacute;, une expertise technique et des partenaires hautement qualifi&eacute;s</span></li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;"><span class="notranslate" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous fournirons des services con&ccedil;us pour r&eacute;pondre &agrave; vos besoins et qui &eacute;volueront au fur et &agrave; mesure que votre entreprise se d&eacute;veloppera.</span></li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;"><span class="notranslate" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous allons fournir un service rapide et professionnel</span></li>
</ul>
</div>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-9874" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-9874 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Qu\'est-ce qui nous diff&eacute;rencie ?</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-9874 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<ul style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; list-style-position: inside;">
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous fournirons des prix tout compris et transparents</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous veillerons &agrave; ce que nos partenaires soient comp&eacute;tents sur le plan technique pour votre secteur</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous fournirons un excellent service client</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous vous &eacute;couterons &agrave; tout moment</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous apporterons une valeur ajout&eacute;e gr&acirc;ce &agrave; nos audits et nos rapports</li>
<li style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous vous proposerons des formations sur mesure, adapt&eacute;es &agrave; vos besoins.</li>
</ul>
</div>
</div>',
                'created_at' => '2020-08-17 07:09:22',
                'updated_at' => '2020-08-17 07:09:22',
                'description' => NULL,
                'title' => NULL,
            ),
        ));
        
        
    }
}