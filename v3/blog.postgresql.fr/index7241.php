<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Tag - sortie</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/tag/sortie/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
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
    <title>Sortie de PostGIS 2.0</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2012/04/10/Sortie-de-PostGIS-2.0" rel="alternate" type="text/html"
    title="Sortie de PostGIS 2.0" />
    <id>urn:md5:fe5ca03d46a214ab692be74d31e8b20a</id>
    <published>2012-04-10T10:05:00+01:00</published>
    <updated>2012-04-10T10:09:54+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>sortie</dc:subject>    
    <content type="html">    &lt;p&gt;Le groupe de développement de PostGIS vient d'annoncer la sortie officielle de la version 2.0 de PostGIS.&lt;/p&gt;


&lt;p&gt;Vous pouvez dès maintenant télécharger et installer cette version en vous rendant sur la page de téléchargement du projet&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;http://postgis.org/download/&quot;&gt;http://postgis.org/download/&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Pour rappel, PostGIS est la cartouche spatiale de PostgreSQL, la base de donnée open source relationnelle la plus avancée. Le couple PostgreSQL/PostGIS est souvent la pierre angulaire des systèmes d'information géographique. PostGIS apporte de nouveaux types de données (points, lignes, polygones…), un mécanisme d'indexation spatial, et un grand nombre de fonctions pour travailler avec ces données.&lt;/p&gt;


&lt;p&gt;PostGIS 2.0, qui vient donc de voir le jour, arrive après un peu plus de 2 ans de développement. Les améliorations sont nombreuses, tant en terme de fonctionnalités, que de changements dans le code interne de PostGIS. Cette version utilise également les bibliothèques GEOS 3.3.3 et GDAL 1.9.0, qui sont sorties récemment.&lt;/p&gt;


&lt;p&gt;Parmi les grandes nouvelles fonctionnalités, on trouve la gestion des Raster (données image) dans la base de données, ainsi que la gestion d’un modèle topologique respectant le standard SQL/MM. Mais ce n’est pas tout, et voici la liste des fonctionnalités introduites par PostGIS 2.0&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Gestion des données raster et analyse raster/vecteur en base de données&lt;/li&gt;
&lt;li&gt;Modèle topologique pour gérer les objets avec des frontières communes (pavages de plan par exemple)&lt;/li&gt;
&lt;li&gt;Intégration du typmod PostgreSQL, avec table geometry_columns automatique&lt;/li&gt;
&lt;li&gt;Indexation 3D et 4D&lt;/li&gt;
&lt;li&gt;Recherche de plus proches voisins optimisée grâce à l’utilisation de l'indexation (KNN-search)&lt;/li&gt;
&lt;li&gt;De nombreuses nouvelles fonctions de traitement vectoriel, dont&amp;nbsp;:  ST_Split,ST_Node, ST_MakeValid, ST_OffsetCurve, ST_ConcaveHull, ST_AsX3D, ST_GeomFromGeoJSON, ST_3DDistance&lt;/li&gt;
&lt;li&gt;Utilisation du mécanisme d’extension de PostgreSQL 9.1&lt;/li&gt;
&lt;li&gt;Améliorations sur l’outil de chargement/sauvegarde de shapefiles en ligne de commande&lt;/li&gt;
&lt;li&gt;Gestion multi fichier pour l’import et l’export dans l’outil d’interface graphique&lt;/li&gt;
&lt;li&gt;Un géocodeur pour les données US Census TIGER 2010&lt;/li&gt;
&lt;li&gt;Gestion initiale de primitives 3D&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;En outre, de nombreuses améliorations et refactorisations ont été faites dans le cœur de PostGIS, rendant cet outil un des plus performants du marché.&lt;/p&gt;


&lt;p&gt;Tous les membres de l'équipe de développement de PostGIS tiennent à remercier leurs parents d'avoir rendu cette sortie possible.&lt;/p&gt;


&lt;p&gt;Quelques liens&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Le site officiel de PosGIS&amp;nbsp;: &lt;a href=&quot;http://www.postgis.org&quot; title=&quot;http://www.postgis.org&quot;&gt;http://www.postgis.org&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;L'annonce officielle&amp;nbsp;: &lt;a href=&quot;http://postgis.refractions.net/pipermail/postgis-users/2012-April/033467.html&quot; title=&quot;http://postgis.refractions.net/pipermail/postgis-users/2012-April/033467.html&quot;&gt;http://postgis.refractions.net/pipe...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;


&lt;p&gt;(Merci à Vincent Picavet pour la traduction)&lt;/p&gt;</content>
    
    

    
      </entry>
  
</feed>