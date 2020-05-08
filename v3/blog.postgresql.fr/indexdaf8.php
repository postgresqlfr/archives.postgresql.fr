<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Tag - 9.2</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/tag/9.2/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
  <entry>
    <title>Publication de PostgreSQL 9.2</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2012/09/10/Publication-de-PostgreSQL-9.2" rel="alternate" type="text/html"
    title="Publication de PostgreSQL 9.2" />
    <id>urn:md5:db80ba063c85fc115eba3f8bc5aeccc6</id>
    <published>2012-09-10T16:09:00+02:00</published>
    <updated>2012-09-18T22:25:52+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
        <dc:subject>9.2</dc:subject>    
    <content type="html">    Le PostgreSQL Global Development Group annonce la sortie de PostgreSQL 9.2, dernière version en date du système de gestion de bases de données libre de référence.&lt;br /&gt;Depuis l'annonce de la version bêta en mai, les développeurs et les intégrateurs louent les avancées en terme de performance, de flexibilité et d'extensibilité.&lt;br /&gt;Une adoption massive de cette version est attendue.&lt;br /&gt;&lt;br /&gt;« PostgreSQL 9.2 intègre le support natif de JSON, les index couvrants, des performances et une réplication encore améliorées, et beaucoup d'autres fonctionnalités. Nous attendons cette version avec impatience. Elle sera disponible en &quot;Early Access&quot; dès sa publication par la communauté, » déclare Ines Sombra, Lead Data Engineer, EngineYard.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;h2&gt;Performances et extensibilité accrues&lt;/h2&gt;
&lt;br /&gt;Grâce aux améliorations apportées à l'extensibilité verticale, PostgreSQL exploite mieux les ressources matérielles de serveurs plus puissants.&lt;br /&gt;Les avancées dans la gestion des verrous, l'efficacité d'écriture, les accès aux données par les index couvrants, et autres opérations de bas niveau permettent à PostgreSQL de gérer des volumes conséquents. &lt;br /&gt;En chiffres, cela donne :&lt;br /&gt;&lt;br /&gt;&lt;ul&gt;&lt;li&gt;jusqu’à 350.000 requêtes en lecture par seconde (plus de 4x plus rapide) ;&lt;/li&gt;
&lt;li&gt;les accès aux données à partir des index pour les requêtes de type entrepôt de données (2 à 20x plus rapide) ;&lt;/li&gt;
&lt;li&gt;jusqu’à 14.000 requêtes en écriture par seconde (5x plus rapide) ;&lt;/li&gt;
&lt;li&gt;une consommation électrique des processeurs jusqu’à 30% moindre.&lt;/li&gt;
&lt;/ul&gt;
&lt;br /&gt;De plus, l'ajout de la réplication en cascade augmente les possibilités d'extension horizontale.&lt;br /&gt;&lt;br /&gt;« NewsBlur, un lecteur d'informations issues des réseaux sociaux, repose sur PostgreSQL pour stocker des millions de sites et de contributions. Solide et fiable depuis des années, » déclare Samuel Clay, fondateur de NewsBlur.com. « Nous sommes toujours à la pointe (9.1 actuellement, et bientôt en 9.2 pour la seule réplication en cascade) et le plaisir dure depuis la version 8.4. »&lt;br /&gt;&lt;br /&gt;&lt;h2&gt;Flexibilité orientée développeurs&lt;/h2&gt;
&lt;br /&gt;La flexibilité de PostgreSQL se reflète dans la diversité des organismes qui l'ont adopté. Citons la NASA, la FAA, le Chicago Mercantile Exchange et Instagram. Tous reposent sur PostgreSQL pour leurs applications critiques.&lt;br /&gt;La version 9.2 étend encore le concept de flexibilité en incluant les types « Range » (étendue) et JSON, permettant ainsi aux développeurs d'élargir leurs utilisations de PostgreSQL.&lt;br /&gt;&lt;br /&gt;Les types « Range » permettent de créer de meilleures applications de type calendrier, scientifiques ou financières. Aucun autre système majeur de gestion de bases de données ne propose cette fonctionnalité, qui autorise une gestion intelligente des intervalles de temps ou de nombre.&lt;br /&gt;&lt;br /&gt;Avec PostgreSQL 9.2, les résultats de requête peuvent être retournés sous la forme de types de données JSON. Combiné aux nouvelles extensions de programmation javascript PL/V8 et PL/Coffee, et au système de stockage optionnel clé-valeur HStore, cela permet d'utiliser PostgreSQL comme une base documentaire de type « NoSQL », tout en conservant la fiabilité, la flexibilité et la performance de PostgreSQL.&lt;br /&gt;&lt;br /&gt;« Le support natif du JSON dans PostgreSQL fournit un mécanisme efficace de création et de stockage de documents pour les APIs Web. Nous utilisons des bibliothèques frontales de type jQuery pour interroger des données structurées en arbres et tableaux. Notre travail se trouve facilité par la disponibilité des données au format JSON, qui améliore également les performances, » explique&amp;nbsp; Taras Mitran, Architecte senior, IVC Inc.&lt;br /&gt;&lt;br /&gt;&lt;ul&gt;&lt;li&gt;Press Kit : http://www.postgresql.org/about/press/presskit92/fr&lt;/li&gt;
&lt;li&gt;Notes de version : http://www.postgresql.org/docs/9.2/static/release-9-2.html&lt;/li&gt;
&lt;li&gt;Téléchargements : http://www.postgresql.org/downloads&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
  
</feed>