<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Sécurité</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/category/Securite/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
  <entry>
    <title>Risque de corruption sur les &quot;esclaves&quot; en Hot-Standby</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/11/25/Risque-de-corruption-sur-les-esclaves-en-Hot-Standby" rel="alternate" type="text/html"
    title="Risque de corruption sur les &quot;esclaves&quot; en Hot-Standby" />
    <id>urn:md5:c748438795503088bf4450e53139e0a7</id>
    <published>2013-11-25T14:45:00+00:00</published>
    <updated>2013-11-25T15:45:47+00:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Sécurité</dc:subject>
            
    <content type="html">    &lt;p&gt;Le 18 novembre, un problème de réplication a été découvert dans les
dernières versions de PostgreSQL. Ce problème peut causer des
corruptions de données sur un serveur secondaire (&quot;esclave&quot;) en
Hot-Standby au (re)démarrage de celui-ci.&lt;/p&gt;


&lt;p&gt;Les versions concernées sont les suivantes:
9.3.0, 9.3.1, 9.2.5, 9.1.10 et 9.0.14.&lt;/p&gt;


&lt;p&gt;Tous les détails techniques concernant ce problème (et comment s'en
protéger) sont décrits sur la page ci-dessous&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;https://wiki.postgresql.org/wiki/Nov2013ReplicationIssue&quot;&gt;https://wiki.postgresql.org/wiki/Nov2013ReplicationIssue&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Un correctif est en cours de préparation et devrait être disponible en
début de semaine prochaine.&lt;/p&gt;


&lt;p&gt;D'ici là, la vigilance est de mise si vous utilisez la réplication Hot
Standby.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Mises à jour mineures de PostgreSQL : 9.2.4, 9.1.9, 9.0.13, 8.4.17</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/04/04/Mises-%C3%A0-jour-mineures-de-PostgreSQL-%3A-9.2.4%2C-9.1.9%2C-9.0.13%2C-8.4.17" rel="alternate" type="text/html"
    title="Mises à jour mineures de PostgreSQL : 9.2.4, 9.1.9, 9.0.13, 8.4.17" />
    <id>urn:md5:06f317b104aece6bcb810eb32c5c45d1</id>
    <published>2013-04-04T21:51:00+01:00</published>
    <updated>2013-04-04T21:56:57+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Sécurité</dc:subject>
        <dc:subject>PostgreSQL</dc:subject><dc:subject>sortie</dc:subject>    
    <content type="html">    &lt;blockquote&gt;&lt;p&gt;
Ceci est une traduction libre de l'annonce officielle disponible ici&amp;nbsp;: &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/04/04/&quot;&gt;http://www.postgresql.org/about/news/1456/&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;&lt;/blockquote&gt;


&lt;p&gt;Le groupe de développement de PostgreSQL sort une mise à jour de sécurité pour toutes les versions stables du SGBD PostgreSQL. Cela inclut les versions 9.2.4, 9.1.9, 9.0.13 et 8.4.17. Cette mise à jour corrige une faille de sécurité très critique dans les versions 9.0 et supérieures. Il est fortement recommandé à tous les utilisateurs des versions concernées d'appliquer la mise à jour immédiatement.&lt;/p&gt;


&lt;p&gt;La faille de sécurité corrigée dans cette version a la dénomination CVE-2013-1899. Elle permettait à une requête de connexion contenant un nom de base de données commençant par ”-” d'être utilisé afin d'endommager ou de détruire des fichiers dans le répertoire de données du serveur. Quiconque ayant accès au port d'écoute de PostgreSQL peut initier une telle requête. Cette faille a été découverte par Mitsumasa Kondo et Kyotaro Horiguchi du NTT Open Source Software Center.&lt;/p&gt;


&lt;p&gt;Deux autres correctifs de failles de sécurité moins importantes sont également inclus dans cette version: CVE-2013-1900, où un nombre généré aléatoirement par les fonctions du module contrib pgcrypto pouvait être facile à deviner par un autre utilisateur de la base de données, et CVE-2013-1901, qui permet à tort à un utilisateur non autorisé de lancer des commandes qui peuvent interférer avec une sauvegarde en cours. Finalement, cette version résout également deux problèmes de sécurité pour les installeurs graphiques pour Linux et Mac OS X&amp;nbsp;: transmission non sécurisée des mots de passe super utilisateur à un script (CVE-2013-1903) et utilisation de noms de fichiers prévisibles dans /tmp (CVE-2013-1902). Marko Kreen, Noah Misch et Stegan Kaltenbrunner ont respectivement rapportés ces failles.&lt;/p&gt;


&lt;p&gt;Nous sommes reconnaissants des efforts de chacun des développeurs pour rendre PostgreSQL plus sûr.
Cette mise à jour corrige également plusieurs erreurs dans la gestion des index GiST. Après la mise à jour, il est conseillé d'utiliser un REINDEX sur chacun des index GiST qui correspondent à un des problèmes reportés ci-dessous.&lt;/p&gt;


&lt;p&gt;Cette mise à jour contient également des correctifs à plusieurs problèmes mineurs découverts et corrigés par la communauté PostgreSQL durant les deux derniers mois, dont&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Corriger les index GiST pour qu'ils n'utilisent plus de comparaisons géométriques «floues» pour des colonnes de type box, polygon, circle et point.&lt;/li&gt;
&lt;li&gt;Corriger un problème dans le module contrib btree_gist sur les index GiST pour des colonnes de type text, bytea et numeric.&lt;/li&gt;
&lt;li&gt;Corriger un bug dans le code de séparation pour les index GiST multi-colonnes.&lt;/li&gt;
&lt;li&gt;Corriger une fuite tampon dans le rejeu des WAL causant des erreurs «&amp;nbsp;incorrect local pin count ».&lt;/li&gt;
&lt;li&gt;S'assurer d'effectuer la restauration après un arrêt brutal avant d'entrer en restauration d'archive après un arrêt brutal lorsque le fichier recovery.conf est présent.&lt;/li&gt;
&lt;li&gt;Éviter de supprimer les WAL non encore archivés lors d'une restauration après arrêt brutal.&lt;/li&gt;
&lt;li&gt;Corriger un problème de séquencement critique (race condition) lors d'un DELETE RETURNING.&lt;/li&gt;
&lt;li&gt;Corriger un crash possible du planificateur après l'ajout de colonnes à une vue dépendant d'une autre vue.&lt;/li&gt;
&lt;li&gt;Éliminer une fuite mémoire dans la fonction spi_prepare() de PL/Perl.&lt;/li&gt;
&lt;li&gt;Corriger pg_dumpall pour gérer correctement un nom de base de données contenant «&amp;nbsp;= ».&lt;/li&gt;
&lt;li&gt;Éviter un crash de pg_dump lorsqu'une chaîne de connexion incorrecte est utilisée.&lt;/li&gt;
&lt;li&gt;Ignorer les index invalides dans pg_dump et pg_upgrade.&lt;/li&gt;
&lt;li&gt;Inclure uniquement le sous-répertoire de la version courante du serveur lors d'une sauvegarde d'un tablespace avec pg_basebackup.&lt;/li&gt;
&lt;li&gt;Ajouter une vérification de version de serveur dans les outils pg_basebackup et pg_receivexlog.&lt;/li&gt;
&lt;li&gt;Corriger le module contrib dblink pour gérer de manière sécurisée des valeurs incohérentes des paramètres DateStyle ou IntervalStyle.&lt;/li&gt;
&lt;li&gt;Corriger la fonction similarity() du module contrib pg_trgm pour retourner zéro pour les chaînes de moins d'un trigramme.&lt;/li&gt;
&lt;li&gt;Permettre la compilation de PostgreSQL avec Microsoft Visual Studio 2012.&lt;/li&gt;
&lt;li&gt;Mettre à jour les fichiers de données de fuseaux horaires pour les modifications de changements d'heure au Chili, Haïti, Maroc, Paraguay et quelques zones russes.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Comme avec les autres versions mineures, les utilisateurs n'ont besoin ni de sauvegarder et recharger leur instance, ni d'utiliser pg_upgrade pour appliquer cette mise à jour. Vous devez simplement arrêter PostgreSQL et mettre à jour les binaires. Les utilisateurs qui n'ont pas effectuées les mises à jour précédentes peuvent avoir quelques étapes supplémentaires. Les détails sont disponibles dans les notes de version (Release Notes). Pour cette version, il est aussi conseillé de reconstruire (REINDEX) les index de type GIST qui pourraient exister sur les bases.&lt;/p&gt;


&lt;p&gt;Téléchargez les nouvelles versions maintenant sur&amp;nbsp;:
&lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/04/04/&quot;&gt;http://www.postgresql.org/download/&lt;/a&gt;&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;FAQ du correctif de sécurité&amp;nbsp;: &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/04/04/&quot;&gt;http://www.postgresql.fr/faq_correctif_20130404&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Code source: &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/04/04/&quot;&gt;http://www.postgresql.org/ftp/source/&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Paquets binaires: &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/04/04/&quot;&gt;http://www.postgresql.org/ftp/binary/&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Installeur One-click (dont le paquet Windows): &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/04/04/&quot;&gt;http://www.enterprisedb.com/products-services-training/pgdownload&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Mise à jour importante à prévoir le 4 avril !</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/04/02/Mise-%C3%A0-jour-importante-%C3%A0-pr%C3%A9voir-le-4-avril-%21" rel="alternate" type="text/html"
    title="Mise à jour importante à prévoir le 4 avril !" />
    <id>urn:md5:24762d5d18a916a29f01247bcdc37c57</id>
    <published>2013-04-02T08:55:00+01:00</published>
    <updated>2013-04-02T09:03:35+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Sécurité</dc:subject>
        <dc:subject>PostgreSQL</dc:subject>    
    <content type="html">    &lt;p&gt;Le jeudi 4 avril 2013, le groupe de développement de PostgreSQL
annoncera une mise à jour de sécurité pour toutes les versions de
PostgreSQL. Ce correctif corrigera une vulnérabilité majeure. Tous les
administrateurs de PostgreSQL devront dès lors mettre à jour leur
système le plus rapidement possible.&lt;/p&gt;


&lt;p&gt;Les détails de la vulnérabilité ne sont pas publiés mais tout indique qu'il s'agit d'un problème très sérieux.&lt;/p&gt;


&lt;p&gt;Cette pré-annonce est diffusée en avance pour que les mesures adéquates
soient prises afin que les mises à jour soit effectuées rapidement après la
sortie de l'annonce officielle le 4 avril.&lt;/p&gt;


&lt;p&gt;Comme toujours, les mises à jours de sécurité se font très simplement en
installant les nouveaux paquets et en relançant le serveur. Il n'est pas
nécessaire de faire un dump/restore, ni d'utiliser pg_upgrade.&lt;/p&gt;



&lt;p&gt;Voir l'annonce officielle&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/about/news/1454/&quot;&gt;http://www.postgresql.org/about/news/1454/&lt;/a&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>[ANNONCE] Communiqué de correctif de sécurité</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/274" rel="alternate" type="text/html"
    title="[ANNONCE] Communiqué de correctif de sécurité" />
    <id>urn:md5:9df61b1b2c158989e68be1d9c34ea849</id>
    <published>2008-01-08T10:05:00+00:00</published>
    <updated>2008-10-14T02:09:37+00:00</updated>
    <author><name>kryskool</name></author>
        <dc:subject>Sécurité</dc:subject>
            
    <content type="html">&lt;h1&gt;Le 07 Janvier 2008&lt;/h1&gt;
&lt;p&gt;Aujourd'hui le «&amp;nbsp;PostgreSQL Global Development Group&amp;nbsp;» a publié des mises à jours de version, qui corrigent cinq failles de sécurité. Ces publications mettent à jour toutes les versions de &lt;strong&gt;PostgreSQL&lt;/strong&gt;, de la &lt;strong&gt;8.2&lt;/strong&gt; à la &lt;strong&gt;7.3&lt;/strong&gt;. Elles sont considérées comme &lt;ins&gt;CRITIQUE&lt;/ins&gt; et les administrateurs PostgreSQL et systèmes doivent appliquer les mises à jours le plus rapidement possible. L'équipe de PostgreSQL dédiée à la sécurité a fait de gros efforts pour permettre à ces mises à jours d'être portées également sur les anciennes versions pour que la mise à jour ne nécessite pas de conversion de données.&lt;/p&gt;
&lt;p&gt;Merci de lire le reste de ce message pour davantage d'informations complémentaires et d'annonces.&lt;/p&gt;    &lt;h2&gt;Détail des correctifs de sécurités&lt;/h2&gt;
&lt;p&gt;Il y a cinq correctifs de sécurité inclus dans ces versions. Aucune de ces failles n'a pour le moment été exploitée sur le terrain&amp;nbsp;; elles ont été découvertes au travers d'une analyse de sécurité.&lt;/p&gt;
&lt;p&gt;&lt;em&gt;Index Functions Privilege Escalation&lt;/em&gt; (&lt;strong&gt;CVE-2007-6600&lt;/strong&gt;)&amp;nbsp;: PostgreSQL permet aux utilisateurs de créer des index à partir du résultat d'une fonction utilisateur. Ce sont des index d'expression. Deux vulnérabilités par élévation de droit en découlent&amp;nbsp;:
&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;les index fonctionnels sont exécutés en tant que super-utilisateur et non pas en tant que propriétaire de la table durant le VACUUM et l'ANALYSE&amp;nbsp;&lt;/li&gt;
&lt;li&gt;SET ROLE et SET SESSION AUTHORIZATION sont autorisés dans le cadre des index fonctionnels.&lt;/li&gt;
&lt;/ol&gt;
Ces deux failles sont maintenant corrigées.
&lt;p&gt;&lt;em&gt;Regular Expression Denial-of-Service&lt;/em&gt; (&lt;strong&gt;CVE-2007-4772&lt;/strong&gt;, &lt;strong&gt;CVE-2007-6067&lt;/strong&gt;, &lt;strong&gt;CVE-2007-4769&lt;/strong&gt;)&amp;nbsp;: trois problèmes distincts dans la bibliothèque des expressions rationnelles utilisée par PostgreSQL autorise un utilisateur mal intentionné d'initier un déni de service (DOS) en passant certaines expressions dans les requêtes SQL. La première peut créer une boucle infinie en utilisant une expression rationnelle forgée pour. Pour la seconde, certaines expressions rationnelles peuvent consommer une quantité excessive de mémoire. La troisième permet un dépassement du nombre de références de retour qui pouvait être utilisé pour arrêter brutalement le serveur. Tous ces problèmes ont été corrigés.&lt;/p&gt;
&lt;p&gt;&lt;em&gt;DBLink Privilege Escalation&lt;/em&gt; (&lt;strong&gt;CVE-2007-6601&lt;/strong&gt;)&amp;nbsp;: les fonctions DBLink combinées avec une identification locale trust ou ident peuvent être utilisées par un utilisateur mal intentionné dans le but d'acquérir les droits super-utilisateur. Ce problème a été corrigé, et n'affecte pas les utilisateurs qui veulent installer DBLink (comme module optionnel), ou qui utilisent l'authentification &lt;em&gt;password&lt;/em&gt; pour les accès locaux. Ce problème avait été traité dans les versions précédentes (voir &lt;strong&gt;CVE-2007-3278&lt;/strong&gt;), mais le correctif n'avait pas bouché toutes les formes possibles de la faille.&lt;/p&gt;
&lt;h2&gt;Notification de fin de vie produit&lt;/h2&gt;
&lt;p&gt;La version mineure &lt;strong&gt;7.3.21&lt;/strong&gt; sera certainement la dernière mise à jour de la série &lt;strong&gt;7.3&lt;/strong&gt;. Comme la version 7.3 a maintenant plus de 5 ans, la communauté ne produira plus de mises à jours après celle-ci. Les utilisateurs de la &lt;strong&gt;7.3&lt;/strong&gt; sont encouragés à mettre à jour vers la dernière version stable le plus rapidement possible, ou obtenir du support auprès de partenaire commerciaux qui voudront bien continuer la maintenance de cette série.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;8.1.11&lt;/strong&gt; et &lt;strong&gt;8.0.15&lt;/strong&gt; sont également les dernières versions mises à jours des séries &lt;strong&gt;8.1&lt;/strong&gt; et &lt;strong&gt;8.0&lt;/strong&gt; pour lesquelles la communauté PostgreSQL produit des binaires pour la plateforme Windows. Les utilisateurs de Windows sont encouragés à migrer vers la version &lt;strong&gt;8.2.6&lt;/strong&gt; ou supérieurs, qui comprend des correctifs impossible à intégrer aux versions majeures précédentes. Les mises à jours de la &lt;strong&gt;8.1&lt;/strong&gt; et &lt;strong&gt;8.0&lt;/strong&gt; continueront à être publiées sur les autres plateformes.&lt;/p&gt;
&lt;h2&gt;Téléchargement et Installation.&lt;/h2&gt;
&lt;p&gt;Les publications mineures de PostgreSQL &lt;strong&gt;8.2.6&lt;/strong&gt;, &lt;strong&gt;8.1.11&lt;/strong&gt;, &lt;strong&gt;8.0.15&lt;/strong&gt;, &lt;strong&gt;7.4.19&lt;/strong&gt; et &lt;strong&gt;7.3.21&lt;/strong&gt; sont disponibles à travers notre réseau de miroirs FTP&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Code source&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/ftp/source/&quot; target=&quot;_blank&quot;&gt;http://www.postgresql.org/ftp/source/&lt;/a&gt;&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Binaires pour différentes plateformes&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/ftp/binary/&quot; target=&quot;_blank&quot;&gt;http://www.postgresql.org/ftp/binary/&lt;/a&gt;.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Si vous avez besoin d'informations complémentaires concernant ces mises à jours, celles-ci sont disponibles dans les notes de version (&lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot; target=&quot;_blank&quot;&gt;http://www.postgresql.org/docs/current/static/release.html&lt;/a&gt;). Ces mises à jours peuvent être copiées directement sur une installation existante de PostgreSQL et ne nécessitent pas de sauvegarde/restauration pour les systèmes qui ont bénéficiés des mises à jours durant les six derniers mois (les versions plus anciennes peuvent nécessiter des procédures complémentaires, voir les notes de version).&lt;/p&gt;
&lt;p&gt;Naturellement, les publications de mises à jours de sécurités sont cumulatives. Tous les correctifs de sécurités ont été inclus dans la prochaine version &lt;strong&gt;8.3&lt;/strong&gt; &quot;Release candidate&quot;. Cette note a été postée sur la page de sécurité de PostgreSQL&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/support/security&quot; target=&quot;_blank&quot;&gt;http://www.postgresql.org/support/security&lt;/a&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Révisions de sécurité (Mise à jour)</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/127" rel="alternate" type="text/html"
    title="Révisions de sécurité (Mise à jour)" />
    <id>urn:md5:7866a37566d4b7f16a1b222d87e43228</id>
    <published>2007-02-07T21:05:00+00:00</published>
    <updated>2008-10-14T14:17:20+00:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Sécurité</dc:subject>
            
    <content type="html">&lt;p&gt;Le  PostgreSQL Global Development Group a publié aujourd'hui une mise à jour de sécurité pour les versions antérieures de PostgreSQL&amp;nbsp;: les révisions 8.0.11, 7.4.16 et 7.3.18. Ces correctifs concernent des trous de sécurité de risque moyen. Il est donc fortement conseillé d'effectuer une mise à jour rapidement.&lt;/p&gt;
&lt;p&gt; Les révisions pour les versions 8.1 et 8.2 sont toujours en attente. Les sources publiés pour les révisions 8.2.2 et 8.1.7 ont été &lt;strong&gt;retirées&lt;/strong&gt; à cause d'un bogue concernant les types de données typemod utilisés avec des contraintes de vérification ou des index d'expression. Les nouvelles révisions devraient être publiées sous 24 à 48 heures.&lt;/p&gt;    &lt;p&gt;Cette révision corrige CVE-2007-0555 et CVE-2007-0556. Ces deux failles autorisent un utilisateur authentifié disposant des permissions d'exécuter du code SQL à lancer une attaque de type &quot;déni de service&quot; ou de lire des portions aléatoires de la mémoire. Puisqu'il est nécessaire d'être authentifié, ce risque n'est jugé que moyen. Plus d'informations sur Mitre&amp;nbsp;:
&lt;br /&gt;&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2007-0555&quot;&gt;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2007-0555&lt;/a&gt;&lt;br /&gt;&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2007-0556&quot;&gt;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2007-0556&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;Conformément à la politique de correction des failles de sécurité du projet, cette mise à jour a été réalisée aussi vite que possible&amp;nbsp;: moins de deux semaines après le premier rapport de bogue, et cinq jours après la publication du correctif. Ces réponses rapides sont inhérentes à la réputation de PostgreSQL d'être une des bases industrielles les plus sûres.&lt;/p&gt;
&lt;p&gt;Ces révisions peuvent être téléchargées depuis notre page de téléchargement&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/download/&quot; target=&quot;_blank&quot;&gt;http://www.postgresql.org/download/&lt;/a&gt;. Aucun besoin d'export/import pour cette mise à jour. Quoiqu'il en soit, n'hésitez pas à consulter les notes de version pour la vôtre&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/docs/8.2/static/release.html&quot; target=&quot;_blank&quot;&gt;http://www.postgresql.org/docs/8.2/static/release.html&lt;/a&gt;.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Attention : Révisions des versions 8.1 et 8.2 corrompues</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/236" rel="alternate" type="text/html"
    title="Attention : Révisions des versions 8.1 et 8.2 corrompues" />
    <id>urn:md5:69131cabb86bbe9eb5ced1cde2ab94d5</id>
    <published>2007-02-07T17:12:00+00:00</published>
    <updated>2008-10-14T14:35:29+00:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Sécurité</dc:subject>
            
    <content type="html">&lt;p&gt;Les derniers correctifs de sécurité publiés contiennent une faille. Celle-ci peut engendrer des erreurs lorsque des types de données de taille variable sont utilisés avec des contraintes sur ces types ou des index d'expression. Il est donc très fortement recommandé aux utilisateurs des versions 8.1 et 8.2 de ne pas installer ces correctifs pour le moment.&lt;/p&gt;
&lt;p&gt;Le PostgreSQL Global Development Group publiera de nouvelles révisions pour les versions 8.1 et 8.2 dans les prochaines 24 à 48h. Les utilisateurs des versions 7.3 et 7.4 ne sont pas concernés et sont invités à effectuer les mises à jour. La version 8.0.11 n'est probablement pas concernée, mais les tests continuent. Toute aide pour les tests est la bienvenue.&lt;/p&gt;    &lt;p&gt;Le PGDG est désolé pour la confusion ainsi engendrée et les problèmes que cela a pu causer aux utilisateurs. Les procédures de tests des révisions de sécurité sont à l'heure actuelle en débat sur la liste pgsql-hackers.&lt;/p&gt;
&lt;p&gt;Merci de votre patience et de votre compréhension.&lt;/p&gt;</content>
    
    

    
      </entry>
  
</feed>