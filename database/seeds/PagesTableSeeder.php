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
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'nos-clients',
                'contenu' => '<div class="wpb_text_column wpb_content_element " style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<h1 style="color: inherit !important; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 24px !important; line-height: inherit !important; font-weight: inherit !important; font-family: inherit !important; text-align: center;"><span class="blue" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #1db0ee !important;">Ils font confiance &agrave; nos partenaires</span></h1>
</div>
</div>
<div class="vc_empty_space" style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; height: 32px;">&nbsp;</div>
<div class="vc_row wpb_row section vc_row-fluid vc_inner " style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-3" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 332.5px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 332.5px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-9885" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-9885 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">A</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-9885 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">ACEPP<br style="box-sizing: border-box;" />ACTEMIUM ROANNE CONNECTIQUE<br style="box-sizing: border-box;" />ADIMC 74<br style="box-sizing: border-box;" />ADIVALOR<br style="box-sizing: border-box;" />AGENCE ADECCO<br style="box-sizing: border-box;" />AIR TRAINING ACADEMY<br style="box-sizing: border-box;" />ALIXIO MOBILIT&Eacute;<br style="box-sizing: border-box;" />ALOREN<br style="box-sizing: border-box;" />AMPLIG&Egrave;NE<br style="box-sizing: border-box;" />APAVE SUD-EUROPE<br style="box-sizing: border-box;" />ARVATO SERVICE<br style="box-sizing: border-box;" />ASTOR INDUSTRIE</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2312" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2312 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">B</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2312 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">BARRA SNM<br style="box-sizing: border-box;" />BCRM TOULON<br style="box-sizing: border-box;" />BELJ<br style="box-sizing: border-box;" />BMW<br style="box-sizing: border-box;" />BOSCH</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-9326" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-9326 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">C</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-9326 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">CARREFOUR SUPPLY CHAIN<br style="box-sizing: border-box;" />CEA GRENOBLE DRT INSTN URC 6<br style="box-sizing: border-box;" />CENTRE D&rsquo;IMAGERIE NUCL&Eacute;AIRE<br style="box-sizing: border-box;" />CENTRE HAUTE ENERGIE<br style="box-sizing: border-box;" />CENTRE HOSPITALIER DE CAMBRAIS<br style="box-sizing: border-box;" />CGR CRISTIN<br style="box-sizing: border-box;" />CITELUM<br style="box-sizing: border-box;" />COLAERT ESSIEUX<br style="box-sizing: border-box;" />CONSEIL G&Eacute;N&Eacute;RAL DU PAS DE CALAIS<br style="box-sizing: border-box;" />CONSTAT EVALUATION DIAGNOSTIC IMMOBILIER<br style="box-sizing: border-box;" />CONSULTYS SERVICES<br style="box-sizing: border-box;" />CROWN EMBALLAGE<br style="box-sizing: border-box;" />CSO-ENERGY SARL<br style="box-sizing: border-box;" />CVA IPEC</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-3445" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-3445 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">D</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-3445 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">DEPOT PETROLIER DE LYON<br style="box-sizing: border-box;" />DOCAPOST BPO<br style="box-sizing: border-box;" />DUBRULLE TP<br style="box-sizing: border-box;" />DUPONT</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-7315" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-7315 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">E</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-7315 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">EAU DE VALENCE<br style="box-sizing: border-box;" />ECONOCOM<br style="box-sizing: border-box;" />EDELWEISS D&Eacute;COLLETAGE<br style="box-sizing: border-box;" />EXPERTS MONTPELLIER IT U28<br style="box-sizing: border-box;" />EXPRESSIONS AROMATIQUES<br style="box-sizing: border-box;" />EXTRATOLE</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-3863" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-3863 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">F</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-3863 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">FINANCIERE ACCA<br style="box-sizing: border-box;" />FIVES ECL<br style="box-sizing: border-box;" />FLORESSENCE<br style="box-sizing: border-box;" />FLOWSERVE</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 332.5px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 332.5px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-4692" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-4692 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">G</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-4692 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">GE SUPPORT FRANCE<br style="box-sizing: border-box;" />GERALDINE GUERIN<br style="box-sizing: border-box;" />GIGA SECURITE<br style="box-sizing: border-box;" />GRETA OUEST 13<br style="box-sizing: border-box;" />GSF SATURNE<br style="box-sizing: border-box;" />GUY DEGRENNE</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2439" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2439 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">H</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2439 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">HANDIMAT<br style="box-sizing: border-box;" />HANDY JOB<br style="box-sizing: border-box;" />HANSA FLEX<br style="box-sizing: border-box;" />HOWDEN SOLYVENT-VENTEC<br style="box-sizing: border-box;" />HYDRATEC</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2798" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2798 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">I</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2798 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">IC AUTOMATION<br style="box-sizing: border-box;" />IDEX SERVICES<br style="box-sizing: border-box;" />IFREMER<br style="box-sizing: border-box;" />IMERYS PCC FRANCE<br style="box-sizing: border-box;" />INEO INFRACOM<br style="box-sizing: border-box;" />INTERFACE FIELD SERVICE<br style="box-sizing: border-box;" />ISAP<br style="box-sizing: border-box;" />ISG</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2794" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2794 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">J</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2794 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">JEAN CHARLES DARAI<br style="box-sizing: border-box;" />JOURNAL L&rsquo;ALSACE</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2693" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2693 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">K</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2693 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">KONTRON</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-3824" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-3824 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">L</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-3824 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">LABORATOIRE M ET S<br style="box-sizing: border-box;" />LES GENTLEMEN DU D&Eacute;M&Eacute;NAGEMENT<br style="box-sizing: border-box;" />LYONDELL CHIMIE FRANCE SAS<br style="box-sizing: border-box;" />LYONDELLBASELL SERVICES</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 332.5px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 332.5px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-4553" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-4553 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">M</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-4553 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">MA NOUVELLE MUTUELLE<br style="box-sizing: border-box;" />MAPAL FRANCE<br style="box-sizing: border-box;" />MARCEL CANDY<br style="box-sizing: border-box;" />MB RECYCLAGE<br style="box-sizing: border-box;" />MBC<br style="box-sizing: border-box;" />MERSEN</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-8255" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-8255 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">N</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-8255 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">NEXTER ELECTRONICS<br style="box-sizing: border-box;" />NEXTER SYSTEMS</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2498" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2498 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">O</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2498 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2730" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2730 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">P</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2730 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">PALUMBO<br style="box-sizing: border-box;" />PASCALINE SILVESTRE<br style="box-sizing: border-box;" />PEDERSEN CARBURE &amp; DIAMANT<br style="box-sizing: border-box;" />PELLENC SELECTIVE TECHNOLOGIES<br style="box-sizing: border-box;" />PIROUX TRAITEMENTS DE SURFACES<br style="box-sizing: border-box;" />PLANITEC BTP<br style="box-sizing: border-box;" />PMA<br style="box-sizing: border-box;" />POLE<br style="box-sizing: border-box;" />PROFILS SYST&Egrave;MES<br style="box-sizing: border-box;" />PROGRAMME BOR&Eacute;AL</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-1596" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-1596 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Q</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-1596 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">QUALI-CORDE</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-3872" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-3872 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">R</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-3872 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">RAGNI<br style="box-sizing: border-box;" />RECORD FRANCE<br style="box-sizing: border-box;" />R&Eacute;GIE DES EAUX ET ASSAINISSEMENT<br style="box-sizing: border-box;" />R&Eacute;SEAUX SERVICES ONET<br style="box-sizing: border-box;" />RICARD</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 332.5px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 332.5px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-6556" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-6556 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">S</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-6556 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">SAE SMB INDUSTRIES<br style="box-sizing: border-box;" />SAFEN<br style="box-sizing: border-box;" />SAINT JEAN<br style="box-sizing: border-box;" />SARL JOSEPH DE BRESC<br style="box-sizing: border-box;" />SARRAGALA<br style="box-sizing: border-box;" />SCHENKER FRANCE<br style="box-sizing: border-box;" />SECURIT INGENIERIE<br style="box-sizing: border-box;" />SERPE<br style="box-sizing: border-box;" />SETEC INTERNATIONAL<br style="box-sizing: border-box;" />SEVME<br style="box-sizing: border-box;" />SILVATRIM<br style="box-sizing: border-box;" />SN PROVENCALE D&rsquo;ENVIRONNEMENT<br style="box-sizing: border-box;" />SOPREN<br style="box-sizing: border-box;" />SPS<br style="box-sizing: border-box;" />STAUB FONDERIE<br style="box-sizing: border-box;" />STE<br style="box-sizing: border-box;" />STIC-IMAGE<br style="box-sizing: border-box;" />SUNAERO</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-7660" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-7660 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">T</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-7660 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">TECHNOFORM GLASS INSULATION<br style="box-sizing: border-box;" />TISSEO</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-8855" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-8855 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">U</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-8855 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">URIP</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-4102" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-4102 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">V</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-4102 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">VALECO<br style="box-sizing: border-box;" />VOS LOGISTICS LYON</p>
</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-5401" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-5401 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Z</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-5401 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2093" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2093 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">W</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2093 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-4847" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-4847 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">X</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-4847 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 42px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 42px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 14px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-9402" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 14px;">
<h3 class="ult-responsive info-list-heading" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; color: inherit !important; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-9402 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Y</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-9402 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: inherit !important; font-size: inherit; line-height: inherit; font-style: inherit !important; font-weight: inherit; box-sizing: border-box;">YEO FRAIS</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>',
                'created_at' => '2020-08-17 07:10:30',
                'updated_at' => '2020-08-17 07:10:30',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'nos-partenaires',
                'contenu' => '<div class="vc_row wpb_row section vc_row-fluid " style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-12" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 1330px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 1330px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<h1 style="color: inherit !important; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 24px !important; line-height: inherit !important; font-weight: inherit !important; font-family: inherit !important; text-align: center;"><span class="blue" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #1db0ee !important;">Nos Partenaires</span></h1>
</div>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; height: 32px;">&nbsp;</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2062" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="color: #4a4a4a; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2062 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Notre force r&eacute;side dans notre personnel, notre &eacute;quipe de partenaires est tr&egrave;s exp&eacute;riment&eacute;e, v&eacute;ritablement enthousiaste et passionn&eacute;e par les syst&egrave;mes de gestion ISO !</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2062 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-6409" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="color: #4a4a4a; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-6409 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Chaque entreprise peut faire mieux, de mani&egrave;re constante, continue et durable.</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-6409 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-9602" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="color: #4a4a4a; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-9602 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Nos services d\'&eacute;valuation, de certification et de formation permettent aux entreprises de mettre en &oelig;uvre le changement, d\'am&eacute;liorer les syst&egrave;mes de gestion et de garantir leur r&eacute;ussite future.</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-9602 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-8821" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="color: #4a4a4a; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-8821 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Nous encourageons nos partenaires &agrave; se d&eacute;velopper personnellement et professionnellement.</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-8821 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-2101" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="color: #4a4a4a; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-2101 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Il est important de relever des d&eacute;fis et de nous d&eacute;passer en d&eacute;veloppant continuellement des comp&eacute;tences par le biais de l\'apprentissage et la formation.</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-2101 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<ul class="smile_icon_list left square with_bg" style="background: 0px 0px; border: 0px; padding: 0px !important; vertical-align: baseline; outline: 0px; list-style: none !important; box-sizing: border-box; margin: 0px 0px !important 0px !important 0px !important;">
<li class="icon_list_item" style="background: 0px 0px; border: 0px; margin: 0px !important; padding: 0px !important; vertical-align: baseline; outline: 0px; box-sizing: border-box; line-height: 48px; overflow: visible; list-style: none !important; clear: both !important; position: relative !important; min-height: 1em !important; font-size: 48px;">
<div class="icon_list_icon" style="background: #0e62aa; border: 1px none #333333; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: content-box !important; font-size: 16px; width: 3em; height: 3em; line-height: 3em; text-align: center; float: left; z-index: 9; position: relative; color: #ffffff;" data-animation="" data-animation-delay="03">&nbsp;</div>
<div id="Info-list-wrap-1362" class="icon_description" style="background: 0px 0px; border: 0px; margin: 0px 0px 0px 3em; padding: 0px 0px 0px 25px; vertical-align: middle; outline: 0px; box-sizing: border-box; height: 3em; display: table-cell; line-height: 1em; font-size: 16px;">
<h3 class="ult-responsive info-list-heading" style="color: #4a4a4a; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 16px; line-height: 24px; letter-spacing: 0px; box-sizing: border-box; font-family: inherit !important; clear: none !important;" data-ultimate-target="#Info-list-wrap-1362 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}">Ainsi, nos partenaires suivent r&eacute;guli&egrave;rement des formations et font de la veille sur l&rsquo;&eacute;volution des normes afin de vous apporter le plus haut niveau de qualit&eacute; de service client.</h3>
<div class="icon_description_text ult-responsive" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; font-family: inherit; font-weight: inherit; color: inherit; font-size: 13px; line-height: 18px;" data-ultimate-target="#Info-list-wrap-1362 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:18px;&quot;}">&nbsp;</div>
</div>
</li>
</ul>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; height: 32px;">&nbsp;</div>
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<h3 style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; letter-spacing: 0px; text-align: center; color: inherit !important; font-size: inherit !important; line-height: inherit !important; font-weight: inherit !important; font-family: inherit !important;">Nos Partenaires en France</h3>
</div>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; height: 32px;">&nbsp;</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_row wpb_row section vc_row-fluid " style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">&nbsp;</div>
</div>
<div class="vc_row wpb_row section vc_row-fluid " style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-12" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; width: 1330px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box; width: 1330px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_single_image wpb_content_element vc_align_center" style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px; text-align: center;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="vc_single_image-wrapper   vc_box_border_grey" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: top; outline: 0px; display: inline-block; max-width: 100%;"><picture class="vc_single_image-img attachment-full"><source srcset="https://certificationiso.fr/wp-content/uploads/2016/07/Carte.png.webp 800w, https://certificationiso.fr/wp-content/uploads/2016/07/Carte-300x284.png.webp 300w, https://certificationiso.fr/wp-content/uploads/2016/07/Carte-768x728.png.webp 768w, https://certificationiso.fr/wp-content/uploads/2016/07/Carte-700x663.png.webp 700w" type="image/webp" sizes="(max-width: 800px) 100vw, 800px" /><img style="max-width: 100%; height: auto; vertical-align: middle;" src="https://certificationiso.fr/wp-content/uploads/2016/07/Carte.png" sizes="(max-width: 800px) 100vw, 800px" srcset="https://certificationiso.fr/wp-content/uploads/2016/07/Carte.png 800w, https://certificationiso.fr/wp-content/uploads/2016/07/Carte-300x284.png 300w, https://certificationiso.fr/wp-content/uploads/2016/07/Carte-768x728.png 768w, https://certificationiso.fr/wp-content/uploads/2016/07/Carte-700x663.png 700w" alt="" width="800" height="758" /></picture></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
                'created_at' => '2020-08-17 07:11:01',
                'updated_at' => '2020-08-17 07:11:01',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'audit-interne-qualite-externalise',
                'contenu' => '<div id="cons_title_row" class="vc_row wpb_row section vc_row-fluid  vc_custom_1586501333566" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; padding: 0px 0px !important 0px 0px !important; margin: 0px 0px !important 0px !important 0px !important;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-1/5 vc_col-has-fill" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner vc_custom_1586499661143" style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #f7f7f7 !important; border: 0px; margin: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; padding: 35px 15px 0px !important 15px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div id="banner" class="row" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; height: 450px; color: #212529; font-family: Nunito, sans-serif; font-size: 14.4px; background-color: #ffffff;">
<div class="col-12 col-md-2 pl-5 bg-light-grey pt-5 pt-md-1" style="box-sizing: border-box; background: #f7f7f7; position: relative; width: 317.156px; padding-right: 15px; padding-left: 3rem !important; flex: 0 0 16.6667%; max-width: 16.6667%; padding-top: 0.25rem !important;">
<div class="row h-100  pt-5 pt-md-1 pb-5 pb-md-1" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; height: 446px; padding-top: 0.25rem !important; padding-bottom: 0.25rem !important;">
<div class="col-12 align-self-center" style="box-sizing: border-box; position: relative; width: 284.156px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; align-self: center !important;">
<div class="h1 blue w-100 mb-0 muli-bold subtitle" style="box-sizing: border-box; color: #249fd5; font-family: \'Muli bold\', sans-serif; line-height: 1.2; font-size: 2.6rem; width: 254.156px; overflow: visible; white-space: nowrap; margin-bottom: 0px !important;">Conseil</div>
<div class="h2  w-100  mb-0 muli-bold dark-gray subtitle" style="box-sizing: border-box; color: #5e5e5e; font-family: \'Muli bold\', sans-serif; line-height: 1.2; font-size: 2.6rem; width: 254.156px; overflow: visible; white-space: nowrap; margin-bottom: 0px !important;">ISO 14001</div>
<div class="h1 blue w-100 font-weight-bold  mb-0 d-none d-md-block" style="box-sizing: border-box; color: #249fd5; line-height: 1.2; font-size: 2.25rem; width: 254.156px; margin-bottom: 0px !important; font-weight: 700 !important;">-</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 bg-blue " style="box-sizing: border-box; background-color: #1cb0ee !important; position: relative; width: 1110.08px; padding-right: 15px; padding-left: 15px; flex: 0 0 58.3333%; max-width: 58.3333%;">
<div class="row h-100" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; height: 450px;">
<div class="col-10 col-md-6 offset-1 offset-md-3 align-self-center h5 py-5 py-md-1" style="box-sizing: border-box; margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.125rem; position: relative; width: 555.031px; flex: 0 0 50%; max-width: 50%; margin-left: 277.516px; align-self: center !important; padding: 0.25rem !important 15px 0.25rem !important 15px;"><span class="w-100 d-inline-block pretty mb-3" style="box-sizing: border-box; font-family: \'Libre baskerville\'; font-size: 0.98em; display: inline-block !important; width: 525.031px; margin-bottom: 1rem !important;">Nos consultants</span>&nbsp;<span class="text-white muli" style="box-sizing: border-box; font-family: Muli, sans-serif; color: #ffffff !important;"><span style="box-sizing: border-box; font-weight: bolder;">vous accompagnent &agrave; la mise en place<br style="box-sizing: border-box;" />de la certification ISO 14001&nbsp;<span class="dark-grey" style="box-sizing: border-box; color: #303030 !important;">au sein</span></span>&nbsp;</span><span class="w-100 d-inline-block muli" style="box-sizing: border-box; font-family: Muli, sans-serif; display: inline-block !important; width: 525.031px;">de votre entreprise.</span></div>
</div>
</div>
<div class="col-12 col-md-3 d-none d-md-flex" style="box-sizing: border-box; position: relative; width: 475.75px; padding-right: 15px; padding-left: 15px; flex: 0 0 25%; max-width: 25%; display: flex !important;">
<div id="resume" class="wrap" style="box-sizing: border-box; background: #f2f2f2; padding: 30px 15px;">
<div class="row content" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: 0px; margin-left: 0px; background: #ffffff; font-size: 1rem;">
<div class="col-12 text-right line" style="box-sizing: border-box; position: relative; width: 415.75px; padding: 10px; flex: 0 0 100%; max-width: 100%; text-align: right !important; border-bottom: 1px dashed #f2f2f2;"><span class="font-weight-bold blue float-left" style="box-sizing: border-box; color: #249fd5; float: left !important; font-weight: 700 !important;">Dur&eacute;e</span>entre 6 et 12 jours</div>
<div class="col-12 text-right line" style="box-sizing: border-box; position: relative; width: 415.75px; padding: 10px; flex: 0 0 100%; max-width: 100%; text-align: right !important; border-bottom: 1px dashed #f2f2f2;"><span class="font-weight-bold blue float-left" style="box-sizing: border-box; color: #249fd5; float: left !important; font-weight: 700 !important;">Tarif</span>&agrave; partir de 500&euro; HT / jour</div>
<div class="col-12 text-right line" style="box-sizing: border-box; position: relative; width: 415.75px; padding: 10px; flex: 0 0 100%; max-width: 100%; text-align: right !important; border-bottom: 1px dashed #f2f2f2;"><span class="font-weight-bold blue float-left" style="box-sizing: border-box; color: #249fd5; float: left !important; font-weight: 700 !important;">Type</span>&agrave; distance ou pr&eacute;sentiel</div>
<div class="col-12 text-center p-3" style="box-sizing: border-box; position: relative; width: 415.75px; padding: 1rem !important; flex: 0 0 100%; max-width: 100%; text-align: center !important;"><a class="btn btn-blue" style="box-sizing: border-box; color: #ffffff; text-decoration-line: none; background-color: #249fd5; display: inline-block; vertical-align: middle; user-select: none; border: 1px solid #249fd5; padding: 0.375rem 0.75rem; font-size: 0.9rem; line-height: 1.6; border-radius: 0.25rem; transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s; cursor: pointer;" href="http://v2.certificationiso.fr/contact/2">Nous contacter</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3/5 vc_col-has-fill" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner vc_custom_1586499962304" style="background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #2bb1eb !important; border: 0px; margin: 0px; vertical-align: baseline; outline: 0px; box-sizing: border-box; padding: 35px 15px 0px !important 15px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_title_right" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 171px; position: absolute; left: 171.266px;">
<div class="cons_title pretty" style="background: 0px 0px; border: 0px; margin: 0px 0px 10px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: \'Libre baskerville\'; color: #2e3038; left: 132.078px; position: relative; display: inline-block; height: 20px;">Nos consultants</div>
&nbsp;
<div class="cons_title regular" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: Muli; color: #2e3038; left: 132.078px; position: relative; display: inline-block; height: 80px;"><span class="white" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: white;">vous accompagnent &agrave; la mise en place<br />d&rsquo;<strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">audit interne qualit&eacute; externalis&eacute;</strong>&nbsp;au sein<br style="margin-bottom: 0px;" /></span>de votre entreprise</div>
<span style="background-color: initial; font-family: Muli;">u pr&eacute;sentiel</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="cons_desc_row" class="vc_row wpb_row section vc_row-fluid  hidden-phone vc_custom_1586771590049" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; display: inherit !important; margin: 100px !important -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_desc_title_wrap" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_desc_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; display: inline-block;">
<div class="cons_text_title" style="background: 0px 0px; border: 0px; margin: 0px 0px 56.4844px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 2.6em; line-height: 45px; color: #2e3038 !important;">
<div class="regular" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: \'Muli bold\';">Externalis&eacute; votre&nbsp;<strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">audit&nbsp;</strong><span class="italic" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-style: italic; font-family: \'Libre baskerville\' !important;"><strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">interne qualit&eacute;</strong>,</span></div>
</div>
</div>
</div>
<div class="cons_desc_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; display: inline-block;">
<div class="cons_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #8c93aa;">les entreprises certifi&eacute;es conformes &agrave; une norme ISO, ou en cours de certification, doivent effectuer des audits internes &agrave; intervalles r&eacute;guliers. Les audits internes peuvent &ecirc;tre men&eacute;s par des salari&eacute;s internes &agrave; l&rsquo;entreprise. Toutefois, ils peuvent &eacute;galement &ecirc;tre &laquo;sous-trait&eacute;s&raquo; &ndash; &agrave; des consultants ext&eacute;rieurs.</div>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
<div class="cons_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #8c93aa;">Toutes les normes ISO n&eacute;cessitent des&nbsp;<strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">audits internes qualit&eacute;</strong>, notamment:ISO 9001, ISO 14001, ISO 45001, ISO 9100, ISO 17025, ISO 17020, ISO 22000</div>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
<div class="cons_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #8c93aa;">Nos consultants peuvent aider votre entreprise &agrave; r&eacute;pondre &agrave; cette exigence d&rsquo;am&eacute;lioration continue en effectuant vos audits internes aux emplacements et aux dates requis par votre syst&egrave;me de gestion, votre proc&eacute;dure d&rsquo;<strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">audit interne qualit&eacute;</strong>&nbsp;ou, en d&eacute;finitive, votre calendrier d&rsquo;audit interne.</div>
</div>
<div class="cons_desc_img" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; display: inline-block; float: right;"><picture class="alignnone wp-image-2332 size-full" style="margin-bottom: 0px;"><source srcset="https://certificationiso.fr/wp-content/uploads/2020/05/audit_interne_qualite_externalise.jpg.webp" type="image/webp" /><img style="max-width: 100%; height: auto; margin-bottom: 0px;" src="https://certificationiso.fr/wp-content/uploads/2020/05/audit_interne_qualite_externalise.jpg" alt="audit interne qualit&eacute; externalis&eacute;" width="300" height="265" /></picture></div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
</div>
</div>
<div class="vc_row wpb_row section vc_row-fluid  hidden-phone vc_custom_1586771623061" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; display: inherit !important; margin: 0px -15px 100px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_tab_lst" style="background: 0px 0px; border-width: 0px 0px 1px; border-image: initial; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; border-color: initial initial #e8e8e8 initial; border-style: initial initial solid initial;">
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">01</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Demander un devis</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">02</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Planifier votre audit</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">03</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Nous auditons</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
</div>
</div>
<div id="cons_ava_title_row" class="vc_row wpb_row section vc_row-fluid  hidden-phone vc_custom_1586772318713" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; display: inherit !important; margin: 100px !important -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_desc_title_wrap" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; display: inline-block;">
<div class="cons_desc_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_text_title" style="background: 0px 0px; border: 0px; margin: 0px 0px 38.4063px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 2.6em; line-height: 45px; color: #2e3038 !important;">
<div class="regular" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: \'Muli bold\';">
<h2 style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; letter-spacing: 0px; color: inherit !important; font-size: inherit !important; line-height: inherit !important; font-weight: inherit !important; font-family: inherit !important;">Nos avantages sur&nbsp;<span class="italic" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-style: italic; font-family: \'Libre baskerville\' !important;">l&rsquo;audit interne qualit&eacute; externalis&eacute;,</span></h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
</div>
</div>
<div id="cons_ava_tab_row" class="vc_row wpb_row section vc_row-fluid  hidden-phone vc_custom_1586772326394" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; display: inherit !important; margin: 0px -15px 100px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_tab_lst" style="background: 0px 0px; border-width: 0px 0px 1px; border-image: initial; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; border-color: initial initial #e8e8e8 initial; border-style: initial initial solid initial;">
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">01</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Consultants Experts</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">02</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Consultants &agrave; proximit&eacute;</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">03</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Sans frais cach&eacute;</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">04</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Vous &ecirc;tes un professionnel tr&egrave;s occup&eacute; qui a beaucoup &agrave; faire.</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 93.7813px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">05</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Nous sommes des auditeurs professionnels ayant l&rsquo;exp&eacute;rience de milliers d&rsquo;audits.</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 32.8125px; position: absolute; display: inline-block; height: 28.125px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
<div class="cons_tab_row" style="background: 0px 0px; border-width: 1px 0px 0px; border-image: initial; margin: 0px; padding: 33.8906px 0px; vertical-align: baseline; outline: 0px; position: relative; border-color: #e8e8e8 initial initial initial; border-style: solid initial initial initial;">
<div class="cons_tab_row_number" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; display: inline-block; height: 119.781px; left: -56.4844px; color: #d5d6d7; font-size: 1.4em; font-weight: bold; font-family: \'Muli bold\';">06</div>
<div class="cons_tab_row_content" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #2e3038; font-size: 1.3em; font-weight: bold; font-family: \'Muli extra bold\';">Laissez-nous vous d&eacute;charger de l&rsquo;audit pour toujours, afin que vous puissiez vous concentrer sur ce qui compte le plus.</div>
<div class="cons_tab_row_tick" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; top: 41.9219px; position: absolute; display: inline-block; height: 35.9219px; right: -56.4844px; color: #7dc84c; font-size: 1.4em; font-weight: 900; font-family: \'Muli bold\';">✓</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
</div>
</div>
<div id="temoignages" class="vc_row wpb_row section vc_row-fluid  hidden-phone vc_custom_1587481157073" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; display: inherit !important; padding: 100px !important 0px 50px !important 0px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-12" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_text_title" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 2.6em; line-height: 45px; text-align: center;">
<div class="regular" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: \'Muli bold\';">Les t&eacute;moignages<br /><span class="italic" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-style: italic; font-family: \'Libre baskerville\' !important;">de nos clients</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_row wpb_row section vc_row-fluid  hidden-phone vc_custom_1589174083918" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; text-align: center; margin: 0px !important; padding: 0px !important; display: inherit !important;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-12" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner vc_custom_1586550513116" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="q_image_with_text_over q_iwto_hover" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; display: inline-block; position: relative;">
<div class="shader" style="background: 0px 0px rgba(255, 255, 255, 0.01); border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; z-index: 20; transition: opacity 0.4s ease-in-out 0s; position: absolute; height: 573.688px; left: 0px; top: 0px;">&nbsp;</div>
<div class="shader_hover" style="background: 0px 0px rgba(255, 255, 255, 0.01); border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; z-index: 20; transition: opacity 0.4s ease-in-out 0s; position: absolute; height: 573.688px; left: 0px; top: 0px; opacity: 0;">&nbsp;</div>
<picture><source srcset="https://certificationiso.fr/wp-content/uploads/2020/04/temoignages-1.jpg.webp" type="image/webp" /><img style="max-width: 100%; height: auto; display: block; position: relative; z-index: 10;" src="https://certificationiso.fr/wp-content/uploads/2020/04/temoignages-1.jpg" alt="" /></picture>
<div class="text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: absolute; height: 573.688px; top: 0px; left: 0px; z-index: 30;">
<table style="background: 0px 0px; border: none; margin: 0px; padding: 0px; vertical-align: middle; outline: 0px; border-collapse: collapse; border-spacing: 0px; position: absolute; height: 573px; top: 0px; left: 0px;">
<tbody style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<tr style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<td style="border: 0px; margin: 0px; padding: 0px; vertical-align: middle; outline: 0px; background: 0px 0px !important;">
<h3 class="caption no_icon" style="color: #ffffff; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 1em; letter-spacing: 0px; transition: opacity 0.4s ease-in-out 0s; transform: translateZ(0px); opacity: 1; font-size: inherit !important; font-weight: inherit !important; font-family: inherit !important;">&nbsp;</h3>
</td>
</tr>
</tbody>
</table>
<table style="background: 0px 0px; border: none; margin: 0px; padding: 0px; vertical-align: middle; outline: 0px; border-collapse: collapse; border-spacing: 0px; position: absolute; height: 573px; top: 0px; left: 0px;">
<tbody style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<tr style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<td style="border: 0px; margin: 0px; padding: 0px; vertical-align: middle; outline: 0px; background: 0px 0px !important;">
<div class="desc" style="background: 0px 0px; border: 0px; margin: 0px 30px; padding: 0px; vertical-align: baseline; outline: 0px; display: inline-block; height: 573px; opacity: 0; transition: opacity 0.4s ease-in-out 0s; transform: translateZ(0px); backface-visibility: hidden; color: #ffffff;">&nbsp;</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; height: 32px;">&nbsp;</div>
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;"><strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous travaillons avec des entreprises, petites et grandes</strong></p>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;"><strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Nous pouvons aussi vous aider</strong></p>
</div>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">Nous avons affin&eacute; notre expertise en travaillant avec des organisations allant de marques mondialement reconnues &agrave; de petites entreprises familiales dans plus de 25 pays. Les jeunes entreprises et les multinationales &eacute;tablies nous choisissent comme partenaire pour atteindre et maintenir la conformit&eacute; aux normes et r&eacute;glementations mondiales. Nous sommes ainsi en mesure de fournir des informations uniques que vous ne trouverez nulle part ailleurs.</p>
</div>
</div>
</div>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; height: 32px;">&nbsp;</div>
<div class="wpb_single_image wpb_content_element vc_align_center" style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="vc_single_image-wrapper   vc_box_border_grey" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: top; outline: 0px; display: inline-block; max-width: 100%;"><picture class="vc_single_image-img attachment-full"><source srcset="https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne.jpg.webp 600w, https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne-300x172.jpg.webp 300w, https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne-345x198.jpg.webp 345w" type="image/webp" sizes="(max-width: 600px) 100vw, 600px" /><img style="max-width: 100%; height: auto; vertical-align: middle;" src="https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne.jpg" sizes="(max-width: 600px) 100vw, 600px" srcset="https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne.jpg 600w, https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne-300x172.jpg 300w, https://certificationiso.fr/wp-content/uploads/2020/02/Reference-Client-Audit-Interne-345x198.jpg 345w" alt="Audit Interne Qualit&eacute;" width="600" height="344" /></picture></div>
</div>
</div>
<div class="vc_empty_space" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; height: 32px;">&nbsp;</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1586505803538" style="background-image: initial; background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; vertical-align: baseline; outline: 0px; position: relative; color: #5e5e5e; font-family: Raleway, sans-serif; font-size: 17px; background-color: #f7f7f7 !important; padding: 100px !important 0px 0px 0px; margin: 0px -15px 0px !important -15px;">
<div class=" full_section_inner clearfix" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; z-index: 20;">
<div class="wpb_column vc_column_container vc_col-sm-1/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-4/5" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; position: relative; min-height: 1px; box-sizing: border-box; float: left;">
<div class="vc_column-inner" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px 15px; vertical-align: baseline; outline: 0px; box-sizing: border-box;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_text_column wpb_content_element " style="background: 0px 0px; border: 0px; margin: 0px 0px 35px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="wpb_wrapper" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="form_desc_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="form_text_title" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<div class="cons_text_title" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 2.6em; line-height: 45px;">
<div class="regular" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: \'Muli bold\';">Services associ&eacute;s</div>
<div style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
<div class="pretty italic" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: \'Libre baskerville\'; font-style: italic;"><strong style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">Formation sur l&rsquo;audit interne</strong></div>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
<div style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">&nbsp;</div>
</div>
<div class="form_text" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px;">
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">Nos consultants / formateurs peuvent vous former dans votre entreprise, avec un programme sur mesure sur l&rsquo;audit interne.</p>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
<p class="form_text_title pretty" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px; font-family: \'Libre baskerville\';"><a class="italic blue" style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; text-decoration-line: none; cursor: pointer; font-style: italic; color: #1db0ee !important;" href="https://certificationiso.fr/formation-auditeur-qualite/">D&eacute;couvrez les formations propos&eacute;es.</a></p>
<p style="background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; line-height: 28px;">&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
                'created_at' => '2020-08-18 07:27:00',
                'updated_at' => '2020-08-18 07:43:49',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'demarche-qualite',
                'contenu' => '<div id="form-title" style="background: none; padding-top: 20px; padding-bottom: 30px; color: #545151; font-family: \'Droid Sans\', sans-serif;">
<h1 style="margin: 0px; font-family: \'Open Sans Condensed\', sans-serif; color: #249fd5; font-size: 32pt; line-height: 38px; text-rendering: optimizelegibility; background: none; height: 38px; display: inline-block; text-align: center;">D&eacute;marche Qualit&eacute;</h1>
</div>
<div id="system-message-container">&nbsp;</div>
<div id="system" style="margin-left: 10px;">
<article class="item">
<div class="content clearfix" style="margin-bottom: 0px;">
<div style="margin-top: 0px; margin-bottom: 0px;">
<p style="margin: 10px 0px; text-align: center;"><strong>Cyn Communication :</strong></p>
<p style="margin: 10px 0px; text-align: center;"><strong>plus de 10 ans d&rsquo;engagement Qualit&eacute; dans la formation</strong></p>
<p style="margin: 10px 0px; text-align: center;"><strong>mais depuis toujours la recherche de la satisfaction des stagiaires et des clients.</strong></p>
<table style="max-width: 100%; background-color: transparent; border-collapse: collapse; border-spacing: 0px; table-layout: fixed; width: 100%;">
<tbody>
<tr style="height: 16px;">
<td style="padding: 0px; height: 16px;"><img style="max-width: 100%;" title="qualiopi" src="http://cyn-formation.fr/storage/pages/July2020/qualiopi.png" alt="qualiopi" /></td>
<td style="padding: 0px; height: 16px;"><strong><strong>Depuis le 22/01/2020</strong>&nbsp;:&nbsp;</strong>Cyn Communication est certifi&eacute; Qualiopi pour son action de : L.6313-1- 1 : Formation professionnelle continue</td>
</tr>
<tr style="height: 26px;">
<td style="padding: 10px; height: 26px;"><img class="my-2" style="max-width: 100%;" title="Logo afaq" src="http://cyn-formation.fr/storage/pages/July2020/logo-e-afaq-formation-professionnelle-png.png" alt="Logo afaq" /></td>
<td style="padding: 0px; height: 26px;"><strong>Depuis le 06/02/2017</strong>&nbsp;: Cyn Communicationa &eacute;t&eacute; &eacute;valu&eacute; et d&eacute;clar&eacute; conforme au r&eacute;f&eacute;rentiel &laquo; Conformit&eacute; en formation professionnelle &raquo;, reconnu par le CNEFOP et permettant de respecter l&rsquo;ensemble des crit&egrave;res de l&rsquo;article R 6316-1 du code du travail issu du d&eacute;cret n&deg;2015-790 du 30 juin 2015</td>
</tr>
<tr style="height: 16px;">
<td style="padding: 0px; height: 16px;"><img style="max-width: 100%;" title="datadock" src="http://cyn-formation.fr/storage/pages/July2020/datadock.webp" alt="datadock" /></td>
<td><strong>Depuis le 06/02/2017</strong>&nbsp;: DATADOCK a valid&eacute; les 21 crit&egrave;res de la d&eacute;claration de Cyn Communication</td>
</tr>
<tr style="height: 56px;">
<td style="padding: 0px; height: 56px;">&nbsp;</td>
<td style="padding: 0px; text-align: center; height: 56px;">
<p style="margin: 10px 0px;">&nbsp;</p>
<p style="margin: 10px 0px;">&nbsp;</p>
</td>
</tr>
<tr style="height: 154px;">
<td style="padding: 0px; height: 154px;" colspan="2">
<h3 style="margin: 5px 0px 0px; font-family: \'Open Sans Condensed\', sans-serif; color: #249fd5; font-size: 12pt; line-height: 32px; text-rendering: optimizelegibility; padding-bottom: 15px;">La satisfaction de nos clients et stagiaires sont notre meilleure publicit&eacute;&nbsp;!</h3>
<p style="margin: 10px 0px;"><strong>Taux de satisfaction globale de la formation : 96.17 %</strong></p>
<p style="margin: 10px 0px;"><strong>Taux de satisfaction moyen : 96 %</strong></p>
<p style="margin: 10px 0px;"><strong>Taux de r&eacute;clamation des stagiaires ou des clients : 0%</strong></p>
<p style="margin: 10px 0px;"><strong>Taux de r&eacute;ussite test de validation des acquis : 100%</strong></p>
</td>
</tr>
<tr style="height: 52px;">
<td style="padding: 0px; height: 52px;" colspan="2">
<h3 style="margin: 5px 0px 0px; font-family: \'Open Sans Condensed\', sans-serif; color: #249fd5; font-size: 12pt; line-height: 32px; text-rendering: optimizelegibility; padding-bottom: 15px;">&nbsp;</h3>
</td>
</tr>
<tr style="height: 53px;">
<td style="padding: 0px; height: 53px;" colspan="2">
<h3 style="margin: 5px 0px 0px; font-family: \'Open Sans Condensed\', sans-serif; color: #249fd5; font-size: 12pt; line-height: 32px; text-rendering: optimizelegibility; padding-bottom: 15px;"><img style="max-width: 100%;" title="Indicateur qualit&eacute;" src="http://cyn-formation.fr/storage/pages/July2020/Indicateur_Qualit&eacute;.jpg" alt="Indicateur qualit&eacute;" /></h3>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</article>
</div>',
                'created_at' => '2020-08-18 08:16:00',
                'updated_at' => '2020-08-18 08:30:56',
            ),
        ));
        
        
    }
}