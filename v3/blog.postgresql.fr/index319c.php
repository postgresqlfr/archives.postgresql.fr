<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Tag - phppgadmin</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/tag/phppgadmin/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
  <entry>
    <title>Sortie de phpPgAdmin 5.0 béta 2</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2010/10/01/Sortie-de-phpPgAdmin-5.0-b%C3%A9ta-2" rel="alternate" type="text/html"
    title="Sortie de phpPgAdmin 5.0 béta 2" />
    <id>urn:md5:26dce83997888ee8c9bd5a61d7d4faba</id>
    <published>2010-10-01T23:38:00+02:00</published>
    <updated>2010-10-02T00:26:09+02:00</updated>
    <author><name>ioguix</name></author>
        <dc:subject>Dans les bacs</dc:subject>
        <dc:subject>php</dc:subject><dc:subject>phppgadmin</dc:subject>    
    <content type="html">    &lt;p&gt;La seconde version béta de phpPgAdmin 5.0 vient d'être publiée ce 1er octobre 2010.&lt;/p&gt;


&lt;p&gt;La version 5.0 de PPA supporte les dernières versions de PostgreSQL, ajoute de nouvelles fonctionnalités et de nombreuses corrections.&lt;/p&gt;


&lt;p&gt;Annonce officielle du projet&amp;nbsp;: &lt;a href=&quot;http://sourceforge.net/news/?group_id=37132&amp;amp;id=292379&quot; hreflang=&quot;en&quot;&gt;http://sourceforge.net/news/?group_id=37132&amp;amp;id=292379&lt;/a&gt;&lt;/p&gt;



&lt;h2&gt;Téléchargement&lt;/h2&gt;


&lt;p&gt;Rendez vous sur le lien suivant pour télécharger l'archive de phpPgAdmin 5.0-beta2&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;http://phppgadmin.sourceforge.net/?page=download&quot; hreflang=&quot;en&quot;&gt;http://phppgadmin.sourceforge.net/?page=download&lt;/a&gt;&lt;/p&gt;



&lt;h2&gt;Nouvelles fonctionnalités&lt;/h2&gt;

&lt;ul&gt;
&lt;li&gt;Support des versions 8.4 et 9.0 de PostgreSQL&lt;/li&gt;
&lt;li&gt;Support de l'interclassement par base ajouté en 8.4&lt;/li&gt;
&lt;li&gt;Les commentaires sur les fonctions&lt;/li&gt;
&lt;li&gt;La sélection de la base modèle à la création d'une base de donnée&lt;/li&gt;
&lt;li&gt;L'export par schéma&lt;/li&gt;
&lt;li&gt;La modification du propriétaire d'un schéma&lt;/li&gt;
&lt;li&gt;La création d'index en parallèle&lt;/li&gt;
&lt;li&gt;L'arrêt d'un processus&lt;/li&gt;
&lt;li&gt;Améliore le support des domaines&lt;/li&gt;
&lt;li&gt;Améliore le support de la configuration de l'autovacuum par table&lt;/li&gt;
&lt;li&gt;Améliore le support de la recherche plein texte&lt;/li&gt;
&lt;li&gt;Améliore le support de l'auto-complétion lors des insertions et mise à jour de clé étrangère
&lt;ul&gt;
&lt;li&gt;Affiche toutes les colonnes de la table référencée par la clé&lt;/li&gt;
&lt;li&gt;Corrige les références inter-schéma&lt;/li&gt;
&lt;li&gt;Supporte les clés étrangères sur plusieurs champs&lt;/li&gt;
&lt;li&gt;Présente toutes les clés possibles répondant au préfixe donné de façon paginée&lt;/li&gt;
&lt;/ul&gt;&lt;/li&gt;
&lt;li&gt;Facilite l'édition de plusieurs paramètres à la fois pour un rôle&lt;/li&gt;
&lt;li&gt;Ajout d'un onglet d'administration par table&lt;/li&gt;
&lt;li&gt;Permet à l'administrateur de regrouper ses serveurs dans des groupes logiques&lt;/li&gt;
&lt;li&gt;Un nouveau thème et une liste de choix du thème sur la page d'accueil&lt;/li&gt;
&lt;li&gt;Auto-rafraîchissement des pages de verrous et processus (GSoC 2010)&lt;/li&gt;
&lt;li&gt;Navigation à travers les données via les clés étrangères (GSoC 2010)&lt;/li&gt;
&lt;li&gt;Nouvelle suite de tests fonctionnels&lt;/li&gt;
&lt;/ul&gt;


&lt;h2&gt;Traductions&lt;/h2&gt;


&lt;p&gt;Liste des traductions à jour:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Tchèque (Marek Cernocky)&lt;/li&gt;
&lt;li&gt;Grecque (Adamantios Diamantidis)&lt;/li&gt;
&lt;li&gt;Brésilien (Fernando Wendt)&lt;/li&gt;
&lt;li&gt;L'espagnole (Miguel Useche)&lt;/li&gt;
&lt;li&gt;Le français (JG 'ioguix' de Rorthais)&lt;/li&gt;
&lt;li&gt;Le Catalan (Bernat Pegueroles)&lt;/li&gt;
&lt;/ul&gt;


&lt;h2&gt;Correctifs&lt;/h2&gt;


&lt;p&gt;Principaux correctifs&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Valide les chemins vers pg_dump et pg_dumpall avant l'exportation&lt;/li&gt;
&lt;li&gt;Multiple corrections à propos de l'échappement des noms d'objets avec des caractères spéciaux&lt;/li&gt;
&lt;li&gt;Multiple corrections sur l'arbre de navigation dans les objets&lt;/li&gt;
&lt;li&gt;Multiple corrections sur le formulaire d'exécution SQL et fichiers de scripts SQL&lt;/li&gt;
&lt;li&gt;Multiple corrections à propos des commentaires sur les bases de données&lt;/li&gt;
&lt;li&gt;Correction d'une faille de sécurité (injection de code)&lt;/li&gt;
&lt;li&gt;Empêche d'accéder au formulaire d'insertion si la table ne possède pas de champs&lt;/li&gt;
&lt;li&gt;suppression des fonctions obsolètes en PHP 5.3&lt;/li&gt;
&lt;li&gt;Agrandi la fenêtre d'exécution de requête SQL&lt;/li&gt;
&lt;li&gt;Énormément de nettoyage de code&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Et bien d'autres encore moins visibles.&lt;/p&gt;


&lt;h2&gt;Note de fin&lt;/h2&gt;


&lt;p&gt;Pensez à tester cette version Béta2&amp;nbsp;! Le projet à besoin de vous&amp;nbsp;!&lt;/p&gt;


&lt;p&gt;Les rapports d'anomalies peuvent se faire en ligne à cette adresse:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;https://sourceforge.net/tracker/?func=add&amp;amp;group_id=37132&amp;amp;atid=418980&quot; hreflang=&quot;en&quot;&gt;https://sourceforge.net/tracker/?func=add&amp;amp;group_id=37132&amp;amp;atid=418980&lt;/a&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
  
</feed>