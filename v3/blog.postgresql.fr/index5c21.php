<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Tag - PostgreSQL</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/tag/PostgreSQL/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
  <entry>
    <title>Sortie de PostgreSQL 9.3 Release Candidate 1</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/08/27/Sortie-de-PostgreSQL-9.3-Release-Candidate-1" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.3 Release Candidate 1" />
    <id>urn:md5:e6b0745871c6e7320375e6ae7ad6d377</id>
    <published>2013-08-27T13:59:00+01:00</published>
    <updated>2013-08-27T14:03:01+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
        <dc:subject>PostgreSQL</dc:subject>    
    <content type="html">    &lt;p&gt;La RC1 de PostgreSQL 9.3 a été publiée ce jour.&lt;/p&gt;


&lt;p&gt;Toutes les fonctionnalités de la version 9.3 sont désormais disponibles, et
stabilisées. La communauté compte sur votre assistance pour vérifier que tous les bogues
ont été éradiqués.&lt;/p&gt;


&lt;p&gt;Les informations concernant les fonctionnalités sont disponibles sur&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;PostgreSQL 9.3 Release Notes  &lt;a href=&quot;http://www.postgresql.org/docs/9.3/static/release-9-3.html&quot;&gt;http://www.postgresql.org/docs/9.3/static/release-9-3.html&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;What's New in 9.3&amp;nbsp;: &lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot; title=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot;&gt;http://wiki.postgresql.org/wiki/Wha...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;N'hésitez pas à télécharger la version 9.3 rc1 le plus rapidement possible et
à remonter tout bogue rencontré, tout manque dans la documentation, ou toute
régression constatée.&lt;/p&gt;


&lt;p&gt;Nous souhaitons publier une version 9.3.0 exempte de bogue dans les semaines
qui viennent. Mais cela dépend aussi de l'aide reçue dans les campagnes de tests.&lt;/p&gt;


&lt;p&gt;Tout bogue doit être remonté à pgsql-bugs(at)postgresql(dot)org, ou signalé à l'aide
du formulaire &lt;a href=&quot;http://www.postgresql.org/support/submitbug/&quot; title=&quot;http://www.postgresql.org/support/submitbug/&quot;&gt;http://www.postgresql.org/support/s...&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Le code source et les installeurs binaires pour la plupart des plateformes
sont disponibles sur la page de téléchargement &lt;a href=&quot;http://www.postgresql.org/download/&quot; title=&quot;http://www.postgresql.org/download/&quot;&gt;http://www.postgresql.org/download/&lt;/a&gt;&lt;/p&gt;


&lt;hr /&gt;


&lt;p&gt;Annonce originelle publiée par Dave Page&lt;/p&gt;


&lt;p&gt;Adaptation personnelle par Stéphane Schildknecht&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sortie de PostgreSQL 9.3 bêta 1</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/05/14/Sortie-de-PostgreSQL-9.3-b%C3%AAta-1" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.3 bêta 1" />
    <id>urn:md5:cfcb7a1be53acf03fd3ed7addf2b443c</id>
    <published>2013-05-14T13:24:00+01:00</published>
    <updated>2013-05-14T14:16:54+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
        <dc:subject>PostgreSQL</dc:subject>    
    <content type="html">    &lt;p&gt;La première version bêta de PostgreSQL 9.3, la dernière mouture de la
meilleure base de données open source, est disponible.
Cette bêta vous donnera un avant-goût de toutes les fonctionnalités qui
seront disponibles dans la version 9.3. Vous pouvez d'ores et déjà
commencer les tests de validation.&lt;/p&gt;


&lt;p&gt;Téléchargez cette version, essayez-la et déclarez les éventuels
problèmes que vous découvrez&amp;nbsp;!&lt;/p&gt;



&lt;p&gt;&lt;ins&gt;Principales nouveautés :&lt;/ins&gt;&lt;/p&gt;


&lt;p&gt;Les fonctionnalités à tester en priorité sont les suivantes&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Écriture sur des tables distantes (Writeable Foreign Tables) et envoi des données sur des systèmes de stockage externes&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Fédérer des bases PostgreSQL avec le connecteur pgsql_fdw&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Mettre à jour des vues automatiquement&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Créer des vues matérialisées&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Tester les jointures latérales (LATERAL JOIN)&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Utiliser les nouvelles fonctions JSON&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Indexation pour la recherche par expressions rationnelles&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Checksums des pages disque pour détecter les erreurs du systèmes de fichiers&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Avec les version 9.3, PostgreSQL a réduit drastiquement son utilisation
des mémoires partagées SysV au profit de mmap. Ceci permet une
installation et une configuration plus facile. Cependant cela implique
que les utilisateurs de PostgreSQL testent cette nouveauté de manière
rigoureuse et s'assurent qu'aucun problème de mémoire n'est apparu.&lt;/p&gt;


&lt;p&gt;Les utilisateurs de PostgreSQL sont également invités à tester
attentivement les améliorations des verrous sur clefs étrangères
(&quot;Foreign Key Locks&quot;)&lt;/p&gt;




&lt;p&gt;&lt;ins&gt;Fonctionnalités supplémentaires&lt;/ins&gt;&lt;/p&gt;



&lt;p&gt;Ce n'est pas tout. Cette version apporte encore plus de nouveautés,
notamment&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Bascules d'urgence rapides (Failover) vers un serveur secondaire pour garantir la haute disponibilité de vos données&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Reconstruction d'un serveur secondaire uniquement via streaming&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Améliorations des verrous sur clefs étrangères&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;pg_dump en parallèle pour des sauvegardes plus rapides&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Un dossier pour les fichiers de configuration&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Sonde pg_isready pour vérifier la disponibilité d'une base&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Option COPY FREEZE pour réduire les entrées/sorties en cas de chargement massif&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Processus en arrière-plan définis par l'utilisateur pour effectuer des taches automatisées&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Déclaration de vues récursives&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Directive lock_timeout&lt;/li&gt;
&lt;/ul&gt;


&lt;p&gt;La liste complète des avancées de la version 9.3 bêta est disponible
dans la note de publication (en anglais)&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/docs/devel/static/release-9-3.html&quot; title=&quot;http://www.postgresql.org/docs/devel/static/release-9-3.html&quot;&gt;http://www.postgresql.org/docs/deve...&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Pour plus de détails et des exemples, rendez-vous sur la page wiki des
nouveautés de PostgreSQL 9.3 (en anglais)&amp;nbsp;:
&lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot; title=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot;&gt;http://wiki.postgresql.org/wiki/Wha...&lt;/a&gt;&lt;/p&gt;



&lt;p&gt;&lt;ins&gt;Testez PostgreSQL 9.3 bêta 1 dès maintenant !&lt;/ins&gt;&lt;/p&gt;



&lt;p&gt;La qualité et les performances de PostgreSQL dépendent de l'implication
de sa communauté dans les tests des versions bêta.&lt;/p&gt;


&lt;p&gt;Téléchargez PostgreSQL 9.3 Beta 1 et essayez-la dès que possible dans
vos environnements et avec vos applications. Et envoyez vos commentaires
aux développeurs de PostgreSQL.&lt;/p&gt;


&lt;p&gt;Les fonctionnalités et les API de la version bêta 1 ne changeront pas
d'ici la sortie de la version finale. Vous pouvez donc commencer à
développer des applications dès maintenant avec cette version.&lt;/p&gt;



&lt;p&gt;Plus d'information sur la façon de tester et remonter un problème&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/developer/beta&quot; title=&quot;http://www.postgresql.org/developer/beta&quot;&gt;http://www.postgresql.org/developer...&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Vous pouvez obtenir les binaires et les installeurs Windows, Linux et
Mac sur la page de téléchargement&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/download&quot; title=&quot;http://www.postgresql.org/download&quot;&gt;http://www.postgresql.org/download&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;La documentation de la nouvelle version est disponible
&lt;a href=&quot;http://www.postgresql.org/docs/devel/static&quot; title=&quot;http://www.postgresql.org/docs/devel/static&quot;&gt;http://www.postgresql.org/docs/deve...&lt;/a&gt;&lt;/p&gt;



&lt;p&gt;Lien vers l'annonce officielle:
&lt;a href=&quot;http://www.postgresql.org/about/news/1463/&quot; title=&quot;http://www.postgresql.org/about/news/1463/&quot;&gt;http://www.postgresql.org/about/new...&lt;/a&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PG Day France 2013 : une journée de conférences sur le SGBD PostgreSQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/04/17/PG-Day-France-2013-%3A-une-journ%C3%A9e-de-conf%C3%A9rences-sur-le-SGBD-PostgreSQL" rel="alternate" type="text/html"
    title="PG Day France 2013 : une journée de conférences sur le SGBD PostgreSQL" />
    <id>urn:md5:c975f9b4c8e2d640d342ffd7e6be2663</id>
    <published>2013-04-17T09:44:00+01:00</published>
    <updated>2013-04-17T09:45:35+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Événements</dc:subject>
        <dc:subject>PostgreSQL</dc:subject>    
    <content type="html">    &lt;p&gt;Le 13 juin à Nantes se tiendra le PG Day France 2013, une journée de
conférences et d'échanges sur le thème du SGBDR open source PostgreSQL.
Cette journée sera également l'occasion de rencontrer les acteurs de la
communauté PostgreSQL.&lt;/p&gt;


&lt;p&gt;Que vous soyez DBA, architecte, développeur, chef de projet utilisant
PostgreSQL, vous découvrirez des retours d'expérience d'autres
utilisateurs, ainsi que des présentations techniques de PostgreSQL, de
PostGIS (cartouche spatiale) ou d'autres extensions. Cette journée est
organisée par la communauté francophone des utilisateurs de PostGreSQL,
avec le soutien de plusieurs entreprises partenaires (SMILE, Dalibo).&lt;/p&gt;


&lt;p&gt;Inscrivez-vous dès à présent, et retrouvez les informations
complémentaires sur le site&amp;nbsp;: &lt;a href=&quot;http://www.pgday.fr/&quot;&gt;http://www.pgday.fr/&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Le programme des conférences comporte les sujets suivants&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Gestion de la capacité des ressources mémoire par Cédric Villemain&lt;/li&gt;
&lt;li&gt;Nouveautés de PostgreSQL 9.3 (30 min) par Damien Clochard&lt;/li&gt;
&lt;li&gt;Ma base de données tiendrait-elle la charge&amp;nbsp;? par Philippe Beaudouin&lt;/li&gt;
&lt;li&gt;PostGIS 2.x et au delà par Hugo Mercier&lt;/li&gt;
&lt;li&gt;OMM versus ORM par Grégoire HUBERT&lt;/li&gt;
&lt;li&gt;Vers le Peta Byte avec PostgreSQL par Dimitri Fontaine&lt;/li&gt;
&lt;li&gt;Comprendre EXPLAIN par Guillaume Lelarge&lt;/li&gt;
&lt;li&gt;Requêtes LATERALes par Vik Fearing&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Le nombre de places est limité. Inscrivez-vous vite à cette adresse&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;http://www.pgday.fr/inscriptions&quot;&gt;http://www.pgday.fr/inscriptions&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Rendez-vous à Nantes le 13 juin&amp;nbsp;!&lt;/p&gt;</content>
    
    

    
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
    <title>Mises à jour mineures de PostgreSQL : 9.1.5, 9.0.9, 8.4.13, 8.3.20</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2012/08/20/Mises-%C3%A0-jour-mineures-de-PostgreSQL-%3A-9.1.5%2C-9.0.9%2C-8.4.13%2C-8.3.20" rel="alternate" type="text/html"
    title="Mises à jour mineures de PostgreSQL : 9.1.5, 9.0.9, 8.4.13, 8.3.20" />
    <id>urn:md5:4b60dbffe74d027932d01e595d570cd4</id>
    <published>2012-08-20T13:13:00+01:00</published>
    <updated>2012-08-20T13:15:38+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
        <dc:subject>PostgreSQL</dc:subject>    
    <content type="html">    &lt;p&gt;Le projet PostgreSQL sort aujourd'hui des mises à jour de sécurité pour toutes les branches actives du SGBD PostgreSQL. Ces mises à jour correspondent aux versions 9.1.5, 9.0.9, 8.4.13 et 8.3.20.&lt;/p&gt;


&lt;p&gt;Cette mise à jour corrige des failles de sécurité liées à libxml2 et libxslt, similaires à celles affectant les autres projets open source utilisant ces librairies. Il est conseillé à tous les administrateurs de bases de données PostgreSQL de mettre à jour leur version de PostgreSQL lors de leur prochain arrêt de maintenance. Vous trouverez plus de détails sur les corrections de failles de sécurité ci-dessous.&lt;/p&gt;


&lt;p&gt;Cette publication de sécurité corrige une vulnérabilité dans les fonctionnalités intégrées XML et XSLT qui sont incluses avec l'extension en option XML2. Ces deux vulnérabilités permettent la lecture de fichiers arbitraires par n'importe quel utilisateur de base de données authentifié, et la vulnérabilité XSLT permet aussi l'écriture de fichiers. Les correctifs posent quelques problèmes de compatibilité ascendante. Cette mise à jour inclut deux correctifs de sécurité pour les failles suivantes&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-3488&quot;&gt;CVE-2012-3488: PostgreSQL insecure use of libxslt &lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;La librairie libxslt offre la possibilité de lire et d'écrire des fichiers et URLs au travers de commandes de feuilles de style, ce qui permet à un utilisateur non privilégié de la base de données de tenter de lire et d'écrire des données avec les privilèges du serveur de base de données. Il convient de désactiver cela au travers des propres options de sécurité de la librairie libxslt.&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-3489&quot;&gt;CVE-2012-3489: PostgreSQL insecure use of libxml2 &lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;La fonction xml_parse() pourrait tenter de récupérer des fichiers externes ou des URLs pour résoudre des DTD et des entités de références dans une valeur XML, ce qui permet à un utilisateur non privilégié de la base de données de tenter de ramener des données avec les privilèges du serveur de base de données. Même si les données externes ne sont pas renvoyées directement à l'utilisateur, des portions de ces données peuvent être exposées dans le message d'erreur affiché si les données XML sont détectés comme n'étant pas valides;  et dans tous les cas la possibilité de tester l'existence d'un fichier peut être utile pour un attaquant.&lt;/p&gt;


&lt;p&gt;Les utilisateurs qui utilisent la fonctionnalité XML interne pour valider des DTD externes auront besoin de développer une solution de contournement car le patch de sécurité désactive cette fonctionnalité. Les utilisateurs qui utilisent xslt_process() pour rapporter des documents ou feuilles de style à partir d'URL externe ne seront plus capable de le faire. Le projet PostgreSQL regrette qu'il ait été nécessaire de désactiver ces deux fonctionnalités pour maintenir le niveau de sécurité habituel. Ces problèmes de sécurités sont relativement similaires aux problèmes corrigés récemment par les projets WebKit (CVE-2011-1774), XMLsec (CVE-2011-1425) et PHP5 (CVE-2012-0057).&lt;/p&gt;


&lt;p&gt;Cette mise à jour contient également plusieurs correctifs pour la version 9.1 et un petit nombre de correctifs pour les anciennes versions&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Mise à jour et corrections des données de timezone.&lt;/li&gt;
&lt;li&gt;Nombreuses mises à jour et corrections dans la documentation.&lt;/li&gt;
&lt;li&gt;Ajout d'une limite à max_wal_senders.&lt;/li&gt;
&lt;li&gt;Corrections des dépendances générées pendant un ALTER TABLE ADD CONSTRAINT USING INDEX.&lt;/li&gt;
&lt;li&gt;Corrige le comportement des conversions unicode pour PL/Python.&lt;/li&gt;
&lt;li&gt;Correction de WITH attaché à un set d'opérations imbriquées (UNION/INTERSECT/EXCEPT).&lt;/li&gt;
&lt;li&gt;Correction du syslogger pour que log_truncate_on_rotation fonctionne lors de la première rotation.&lt;/li&gt;
&lt;li&gt;Autorise uniquement autovacuum à être automatiquement annulé par un processus directement bloqué.&lt;/li&gt;
&lt;li&gt;Amélioration des opérations des demande de file d'attente par fsync&lt;/li&gt;
&lt;li&gt;Empêche un cas particulier de core dump dans rfree().&lt;/li&gt;
&lt;li&gt;Corrige Walsender pour qu'il réponde correctement aux timeouts et deadlocks.&lt;/li&gt;
&lt;li&gt;Plusieurs corrections dans PL/Perl relatives à des problèmes d'encodage.&lt;/li&gt;
&lt;li&gt;Fait en sorte que les opérateurs de sélectivité utilisent la bonne collation.&lt;/li&gt;
&lt;li&gt;Empêche les esclaves inaptes d'être choisis pour la réplication synchrone.&lt;/li&gt;
&lt;li&gt;Fait en sorte que REASSIGN OWNED marche aussi avec les extensions.&lt;/li&gt;
&lt;li&gt;Corrige un cas non traité dans les comparaisons à base d'ENUM.&lt;/li&gt;
&lt;li&gt;Fait en sorte que NOTIFY prenne mieux en compte les problèmes out-of-disk-space.&lt;/li&gt;
&lt;li&gt;Corrige une fuite mémoire dans les sous-select de requêtes ARRAY.&lt;/li&gt;
&lt;li&gt;Réduction de la perte de données lors du basculement de la réplication.&lt;/li&gt;
&lt;li&gt;Corrige le comportement des sous transactions avec le Hot Standby.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Comme pour les autres versions mineures, il n'est pas nécessaire de sauvegarder et recharger les bases de données. Il n'est pas utile non plus d'utiliser pg_upgrade. Pour appliquer cette mise à jour, il suffit d'arrêter PostgreSQL, de mettre à jour les exécutables et de redémarrer PostgreSQL. Il faut réaliser les étapes post-mise-à-jour une fois le serveur redémarré.&lt;/p&gt;


&lt;p&gt;Toutes les versions supportées de PostgreSQL sont affectées. Les notes
de version de chaque branche contiennent une liste complète des
modifications avec de nombreux détails.&lt;/p&gt;


&lt;p&gt;Téléchargez les nouvelles versions maintenant sur&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;http://www.postgresql.org/download/&lt;/li&gt;
&lt;li&gt;Code source: http://www.postgresql.org/ftp/source/&lt;/li&gt;
&lt;li&gt;Paquets binaires: http://www.postgresql.org/ftp/binary/&lt;/li&gt;
&lt;li&gt;Installeur One-click (dont le paquet Windows): http://www.enterprisedb.com/products-services-training/pgdownload&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PG Day France 2012 : une journée de conférences sur le SGBDR PostgreSQL.</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2012/05/14/PG-Day-France-2012%C2%A0%3A%C2%A0une-journ%C3%A9e-de-conf%C3%A9rences-sur-le-SGBDR%C2%A0PostgreSQL." rel="alternate" type="text/html"
    title="PG Day France 2012 : une journée de conférences sur le SGBDR PostgreSQL." />
    <id>urn:md5:67f15138a574ed77c2e05799f21e2dff</id>
    <published>2012-05-14T20:43:00+01:00</published>
    <updated>2012-05-14T20:48:16+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Événements</dc:subject>
        <dc:subject>PosGIS</dc:subject><dc:subject>PostgreSQL</dc:subject>    
    <content type="html">    &lt;p&gt;Le 7 juin à Lyon se tiendra le PG Day France 2012, une journée de conférences et d'échanges sur le thème du SGBDR open source PostgreSQL. Cette journée sera également l'occasion de rencontrer les acteurs de la communauté PostgreSQL.&lt;/p&gt;


&lt;p&gt;Que vous soyez DBA, architecte, développeur, chef de projet utilisant PostgreSQL, vous découvrirez des retours d'expérience d'autres utilisateurs, ainsi que des présentations techniques de PostgreSQL, de PostGIS (cartouche spatiale) ou d'autres extensions. Cette journée est organisée par la communauté francophone des utilisateurs de PostGreSQL, avec le soutien de plusieurs entreprises partenaires (Oslandia, Dalibo, Auriga, EnterpriseDB, 2ndQuadrant).&lt;/p&gt;


&lt;p&gt;Inscrivez-vous dès à présent, et retrouvez les informations complémentaires sur le site&amp;nbsp;: &lt;a href=&quot;http://www.pgday.fr/&quot;&gt;http://www.pgday.fr/&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Le programme des conférences comporte les sujets suivants&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt; * Benchmark Tsung pour PostgreSQL par Cédric Villemain
 * Disponibilité et Durabilité, Architectures et Réplications par Dimitri Fontaine
 * E-Maj ... par l'image par Philippe Beaudouin
 * PostGIS 2.0, la géo nouvelle génération par Vincent Picavet
 * PostgreSQL-f par Grégory SMITS
 * Postgresql, PostGis en collectivité territoriale par Vincent Kober
 * Utilisation de foreign data wrappers dans différents contextes par Ronan Dunklau&lt;/pre&gt;


&lt;p&gt;Le nombre de places est limité. Inscrivez-vous vite à cette adresse&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;http://www.pgday.fr/inscriptions&quot;&gt;http://www.pgday.fr/inscriptions&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Rendez-vous à Lyon le 7 juin&amp;nbsp;!&lt;/p&gt;</content>
    
    

    
      </entry>
  
</feed>