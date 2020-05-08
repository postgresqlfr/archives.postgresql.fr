<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Dans les bacs</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/category/Dans-les-bacs/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
  <entry>
    <title>Sortie de PostgreSQL 9.6.1 et Fin de Vie de PostgreSQL 9.1</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2016/10/27/Sortie-de-PostgreSQL-9.6.1-et-Fin-de-Vie-de-PostgreSQL-9.1" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.6.1 et Fin de Vie de PostgreSQL 9.1" />
    <id>urn:md5:759b81d48b4d5cd044ec01a9a2f723eb</id>
    <published>2016-10-27T16:13:00+01:00</published>
    <updated>2016-10-27T15:14:39+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;&lt;em&gt;Paris, le 27 octobre 2017&lt;/em&gt;&lt;/p&gt;


&lt;p&gt;Le PostgreSQL Global Development Group a publié une mise à jour pour toutes les versions supportées de notre système de base de données, les versions 9.6.1, 9.5.5, 9.4.10, 9.3.15, 9.2.19 et 9.1.24, où la version 9.1.24 est la dernière de la branche 9.1. Cette version corrige un problème d’enregistrement dans les journaux de transaction (WAL) des relations tronquées pouvant conduire à une corruption de données. Elle résout aussi un certain nombre de bugs rapportés sur les trois derniers mois. Les utilisateurs qui sont affectés par cette corruption de données doivent faire la mise à jour immédiatement. Les autres devraient planifier cette mise à jour à la prochaine interruption de service planifiée.&lt;/p&gt;


&lt;h2&gt;Enregistrement dans les WAL des relations tronquées&lt;/h2&gt;


&lt;p&gt;Cette mise à jour corrige l’enregistrement dans les journaux de transaction (WAL) des relations tronquées, et assure maintenant que la carte des epaces libres (Free Space Map ou FSM ) est elle aussi tronquée lorsqu’une commande TRUNCATE est envoyée, qui conduisait à la corruption de données. Si la FSM n’était pas tronquée, une base PostgreSQL en mode réparation (recovery) pouvait retourner une page qui avait déjà été tronquées et retourner une erreur du type&amp;nbsp;:&lt;/p&gt;

&lt;pre&gt;
ERROR:  could not read block 28991 in file &amp;quot;base/16390/572026&amp;quot;: read only 0 of 8192 bytes
&lt;/pre&gt;


&lt;p&gt;Si les checksum sont activés, des échecs de checksum sur la carte de visibilité (Visibility Map ou VM) peuvent aussi survenir.&lt;/p&gt;


&lt;p&gt;Ce problème est présent dans les séries 9.3, 9.4, 9.5 et 9.6 des publications de PostgreSQL.&lt;/p&gt;


&lt;h2&gt;Problèmes avec pg_upgrade sur les machines big-endian&lt;/h2&gt;


&lt;p&gt;Sur les machines big-endian (ex&amp;nbsp;: plusieurs architectures non-Intel), pg_upgrade pourrait écrire de manière incorrecte les octets de la carte de visibilité conduisant pg_upgrade à l’échec.&lt;/p&gt;


&lt;p&gt;Ce problème est présent uniquement dans les versions 9.6.0 de PostgreSQL.&lt;/p&gt;


&lt;h2&gt;Correctifs de bug et améliorations&lt;/h2&gt;


&lt;p&gt;En plus de ce qui énoncé ci-dessus, cette mise à jour corrige aussi un certain nombre de bugs rapportés sur les derniers mois. Certains problèmes ne touchent que la version 9.6, mais certains touchent toutes les versions supportées. Il y a plus de 50 correctifs dans cette version, incluant&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;Correction d’un risque d’utilisation de variable après libération (“use-after-free”) dans l’exécution des fonctions d’agrégats utilisant DISTINCT, pouvant conduire à un crash.&lt;/li&gt;
&lt;li&gt;Correction d’une manipulation incorrecte des agrégats polymorphes utilisés comme fonctions fenêtrées, pouvant conduire à des crashs.&lt;/li&gt;
&lt;li&gt;Correction de la création incorrecte des index GIN dans les enregistrements WAL sur les machines big-endian&lt;/li&gt;
&lt;li&gt;Correction de la perte de descripteur de fichier lorsqu’une relation temporaire de plus d’1 Go est tronquée&lt;/li&gt;
&lt;li&gt;Correction d’une fuite sur la durée de vie d’une requête en mémoire lors d’un UPDATE de masse sur une table avec une PRIMARY KEY ou un index REPLICA IDENTITY&lt;/li&gt;
&lt;li&gt;Correction des SELECT FOR UPDATE/SHARE pour verrouiller correctement les enregistrements qui ont été mis à jour par une transaction qui a été annulée par la suite&lt;/li&gt;
&lt;li&gt;Correction de COPY sur la liste de nom de colonne d’une table qui a la sécurité au niveau ligne (RLS) activée&lt;/li&gt;
&lt;li&gt;Correction de la suppression d’enregistrements TOAST spéculativement insérés en retour d’un INSERT … ON CONFLICT&lt;/li&gt;
&lt;li&gt;Correction de la longueur du timeout quand un VACUUM est en attente d’un verrou exclusif sur une table pour qu’il puisse tronquer la table&lt;/li&gt;
&lt;li&gt;Correction de problèmes dans la fusion de contraintes CHECK héritées lorsque une table est créée ou altérée&lt;/li&gt;
&lt;li&gt;Correction du remplacement d’un tableau d’éléments dans jsonb_set()&lt;/li&gt;
&lt;li&gt;Correction d’une possible erreur de tri lors de l’interruption de l’utilisation des clés abrégées dans les index btree&lt;/li&gt;
&lt;li&gt;Sur Windows, nouvel essai de création du segment de control en mémoire partagée dynamique après une erreur sur accès refusé&lt;/li&gt;
&lt;li&gt;Correction d’une erreur de calcul de la latence moyenne dans pgbench&lt;/li&gt;
&lt;li&gt;Fait en sorte que pg_receivexlog fonctionne correctement avec –synchronous sans slots&lt;/li&gt;
&lt;li&gt;Force pg_rewind à désactiver synchronous_commit dans sa session sur le serveur source&lt;/li&gt;
&lt;li&gt;Suppression des tentatives de partage des contextes SSL au travers de multiples connections dans la libpq&lt;/li&gt;
&lt;li&gt;Support de OpenSSL 1.1.0&lt;/li&gt;
&lt;li&gt;Installation de l’infrastructure de tests TAP de façon à ce qu’elle soit disponible pour le test des extensions&lt;/li&gt;
&lt;li&gt;Plusieurs corrections pour le décodage logique des WAL et les slots de réplication&lt;/li&gt;
&lt;li&gt;Plusieurs corrections de problèmes mineurs dans pg_dump, pg_xlogdump, et pg_upgrade&lt;/li&gt;
&lt;li&gt;Plusieurs corrections de problèmes mineurs dans le planificateur de requêtes et dans la sortie d’EXPLAIN&lt;/li&gt;
&lt;li&gt;Plusieurs corrections dans le support de timezone&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Cette mise à jour contient aussi le tzdata 2016h pour les changements légaux de DST en Palestine et Turquie, et des corrections historiques pour la Turquie et quelques régions de Russie. Basculement sur des abbréviations numériques pour quelques time zones en Antarctica, l’ancienne Union Soviétique, et le Sri Lanka.&lt;/p&gt;


&lt;p&gt;La base de données des time zones de l’IANA renvoyait précédemment des abréviations textuelles pour les time zones, faisant que parfois ces abréviations n’avaient que peu ou pas cours auprès de la population locale. L’IANA est en cours de renversement de cette politique en faveur de l’utilisation des offsets UTC numériques dans les zones où il n’y a pas d’évidence de l’utilisation d’abréviation anglaise dans le monde réel. Pour le moment tout au moins, PostgreSQL continuera d’accepter les abréviations supprimées pour l’entrée de timestamp. Mais elles ne seront pas montrées dans la vue pg_timezone_names ni utilisés en sortie.&lt;/p&gt;


&lt;p&gt;Dans cette mise à jour, AMT n’est plus montrée comme étant en cours d’utilisation pour signifier le temps en Arménie. Par conséquent, nous avons changé l’abréviation pour quelle soit interprétée par défaut comme Amazon Time, donc UTC-4 et pas UTC+4.&lt;/p&gt;


&lt;h2&gt;Notification d’EOL (End Of Life, fin de vie) pour la version 9.1.&lt;/h2&gt;


&lt;p&gt;PostgreSQL 9.1 est maintenant en fin de vie (EOL). Le projet prévoit de ne plus sortir aucune version supplémentaire pour cette version. Nous encourageons fortement les utilisateurs à commencer à planifier une mise à jour vers une version plus récente dès que possible. Voyez la politique de version pour plus d’informations&lt;/p&gt;


&lt;h2&gt;Mise à jour&lt;/h2&gt;

&lt;p&gt;Toutes les mises à jour de PostgreSQL sont cumulatives. Comme pour les autres versions mineures, les utilisateurs n’ont pas besoin d’exporter et réimporter leur base, ni d’utiliser pg_upgrade pour appliquer cette mise à jour. Vous pouvez simplement éteindre PostgreSQL et mettre à jour les binaires.&lt;/p&gt;


&lt;p&gt;Si votre système était affecté par le bug pg_upgrade sur big-endian, merci de lire https://wiki.postgresql.org/wiki/Visibility_Map_Problems et suivez les instructions sur comment corriger ce problème sur vos instances PostgreSQL.&lt;/p&gt;


&lt;p&gt;Les utilisateurs qui ont sauté une ou plusieurs mises à jour mineures pourraient avoir besoin de lancer des étapes supplémentaires après la mise à jour; merci de consulter les notes de version des versions précédentes pour plus de détails.&lt;/p&gt;


&lt;h2&gt;Liens&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt;Téléchargement: &lt;a href=&quot;http://postgresql.org/download&quot;&gt;http://postgresql.org/download&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Notes de version: &lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot;&gt;http://www.postgresql.org/docs/current/static/release.html&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sortie de PostgreSQL 9.6</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2016/09/29/Sortie-de-PostgreSQL-9.6" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.6" />
    <id>urn:md5:9797b6960217515b6b7769947a7690c8</id>
    <published>2016-09-29T14:49:00+02:00</published>
    <updated>2016-10-03T08:33:38+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;29 septembre 2016 : le PostgreSQL Global Development Group a publié aujourd'hui PostgreSQL 9.6, dernière version du système libre de gestion de bases de données SQL de référence.
Cette version va permettre aux utilisateurs de réaliser à la fois une expansion interne (scale up) et externe (scale out, répartition de la charge) de leurs bases de données haute-performance. Les nouvelles fonctionnalités incluent notamment le parallélisme des requêtes, des améliorations sur la réplication synchrone, la recherche par phrase, ainsi que des améliorations sur la performance et la facilité d'utilisation.&lt;/p&gt;
&lt;strong&gt;Expansion interne avec le parallélisme des requêtes&lt;/strong&gt;
&lt;p&gt;La version 9.6 ajoute le support du parallélisme pour certaines opérations dans les requêtes.
Ce parallélisme active l'utilisation de tout ou partie des cœurs de processeur d'un serveur pour retourner les résultats plus rapidement.
Sur cette version, le parallélisme concerne le parcours séquentiel (des tables), les agrégats et les jointures.
En fonction des caractéristiques et du nombre de cœurs, le parallélisme permet d'espérer des gains jusqu'à un facteur 32 sur des requêtes traitant des volumes importants de données.&lt;/p&gt;
&lt;p&gt;&quot;J'ai migré l'intégralité de notre plateforme génomique - soit un héritage de 25 milliards de lignes MySQL - vers une seule base de données Postgres, en utilisant les possibilités de compression du type JSONB, les excellentes méthodes d'indexation GIN, BRIN et B-tree. Aujourd'hui, avec la version 9.6, j'attends de pouvoir exploiter le parallélisme des requêtes pour améliorer encore plus les performances des requêtes sur les tables volumineuses&quot; indique Mike Sofen, Chief Database Architect chez Synthetic Genomics.&lt;/p&gt;
&lt;strong&gt;Répartition de charge avec la réplication synchrone et postgres_fdw&lt;/strong&gt;
&lt;p&gt;Deux nouvelles options ont été ajoutées à la réplication synchrone de PostgreSQL. Elles permettent de maintenir des lectures cohérentes de données sur les nœuds d'un cluster de bases de données. En premier lieu, il est désormais possible de configurer des groupes de réplication synchrone. En second lieu, le mode &quot;remote_apply&quot; (application distante) crée une vue plus cohérente des données sur les différents nœuds. Ces fonctionnalités utilisent la réplication interne pour maintenir un groupe de nœuds &quot;identiques&quot; afin d'équilibrer la charge de lecture (load-balancing).&lt;/p&gt;
&lt;p&gt;Le pilote de fédération de données entre bases PostgreSQL, postgres_fdw, dispose de nouvelles fonctionnalités d'exécution du travail sur le serveur distant. En &quot;t;externalisant&quot; les tris, les jointures et les mises à jour par lot, la charge peut être distribuée sur plusieurs serveurs PostgreSQL. Ces possibilités seront bientôt ajoutées aux autres pilotes FDW.&lt;/p&gt;
&lt;p&gt;&quot;Avec les possibilités d'externaliser les jointures, les mises à jour et les suppressions, les Foreign Data Wrappers offrent maintenant une solution complète de partage de données entre PostgreSQL et les autres bases de données. Par exemple, PostgreSQL peut être utilisé pour gérer en entrée des données qui vont vers des bases de données différentes&quot; indique Julyanto Sutandang, Director of Business Solutions chez Equnix.&lt;/p&gt;
&lt;strong&gt;Meilleure recherche de texte avec des phrases&lt;/strong&gt;
&lt;p&gt;La fonctionnalité de recherche plein texte de PostgreSQL supporte désormais les recherche par phrases. Cela permet une recherche de phrases exactes ou de mots proches les uns des autres, en utilisant l'indexation GIN. Additionné aux nouvelles fonctionnalités d'optimisation de la recherche textuelle, cet apport fait de PostgreSQL un outil de choix pour la &quot;recherche hybride&quot; mêlant relationnel, JSON et recherche plein texte.&lt;/p&gt;
&lt;strong&gt;Plus agréable, plus rapide et plus facile à utiliser&lt;/strong&gt;
&lt;p&gt;Grâce au retours d'expérience et aux tests effectués par les utilisateurs de PostgreSQL disposant de bases de données de production à fort volume, le projet a pu améliorer de nombreux aspects des performances et de la maniabilité dans cette version. La réplication, les agrégats, l'indexation, les tris et les procédures stockées sont plus efficaces, et PostgreSQL utilise désormais mieux les ressources lorsqu'il est installé sur des noyaux Linux récents. Le surcoût d’administration des tables volumineuses et des charges complexes a été réduit, notamment par des améliorations du VACUUM.&lt;/p&gt;
&lt;h2&gt;Détail des fonctionnalités&lt;/h2&gt;
&lt;p&gt;
Plus d'informations sur les fonctionnalités ci-dessus et les autres dans les liens suivants :
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;https://www.postgresql.org/docs/current/static/release-9-6.html&quot;&gt;Notes de version (En anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://wiki.postgresql.org/wiki/NewIn96&quot;&gt;Nouveautés de PostgreSQL 9.6 (En anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://www.postgresql.org//about/featurematrix&quot;&gt;Matrice de fonctionnalités (En anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://momjian.us/main/writings/pgsql/features.pdf&quot;&gt;Les principales fonctionnalités (En anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://www.youtube.com/watch?v=HjAeLE9aNhQ&quot;&gt;A Look Inside The Elephant's Trunk: 9.6&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://www.youtube.com/watch?v=RkkUbQP3G0A&quot;&gt;Présentation des performances de PostgreSQL 9.6&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Téléchargement&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;https://www.postgresql.org//download&quot;&gt;Page de téléchargement&lt;/a&gt; avec les liens pour les logiciels et outils d'installation pour Windows, Linux, OSX, BSD et Solaris.&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://www.postgresql.org//ftp/source/v9.6.0&quot;&gt;Code Source&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://hub.docker.com/_/postgres/&quot;&gt;Image Docker de Postgres&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://pgxn.org&quot;&gt;PostgreSQL Extension Network&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Documentation&lt;/h2&gt;
&lt;p&gt;
La documentation au format HTML et les pages de manuel sont installées avec PostgreSQL. La &lt;a href=&quot;https://www.postgresql.org/docs/9.6/static&quot;&gt;documentation en ligne&lt;/a&gt;, exhaustive et interactive, peut être parcourue, interrogée et commentée librement.
&lt;/p&gt;
&lt;h2&gt;Licence&lt;/h2&gt;
&lt;p&gt;
PostgreSQL utilise la &lt;a href=&quot;http://blog2.postgresql.fr/about/licence&quot;&gt;licence PostgreSQL&lt;/a&gt;, une licence permissive de type BSD. Cette &lt;a href=&quot;http://www.opensource.org/licenses/postgresql&quot;&gt;licence certifiée par l'OSI&lt;/a&gt; est largement appréciée pour sa flexibilité et sa compatibilité avec le monde des affaires, puisqu'elle ne restreint pas l'utilisation de PostgreSQL dans les applications propriétaires ou commerciales. Associée à un support proposé par de multiples sociétés et une propriété publique du code, sa licence rend PostgreSQL très populaire parmi les revendeurs souhaitant embarquer une base de données dans leurs produits sans avoir à se soucier des prix de licence, des verrous commerciaux ou modifications des termes de licence.
&lt;/p&gt;
&lt;h2&gt;Contacts&lt;/h2&gt;
&lt;p&gt;Pages Web&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;https://www.postgresql.org&quot;&gt;Page d'accueil PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Contact presse&lt;/p&gt;
&lt;p&gt;France et pays francophones&lt;br /&gt;
Stéphane Schildknecht&lt;br /&gt;
&lt;a href=&quot;mailto:fr@postgresql.org&quot;&gt;fr at postgresql dot org&lt;/a&gt;&lt;br /&gt;
+33 (0) 617 11 37 42&lt;/p&gt;
&lt;p&gt;Pour les contacts d'autres régions, consulter &lt;a href=&quot;https://www.postgresql.org/about/press/contact&quot;&gt;la liste des contacts internationaux.&lt;/a&gt;&lt;/p&gt;
&lt;h2&gt;Informations concernant les sociétés citées et texte intégral des citations
&lt;/h2&gt;
&lt;p&gt;
&quot;En tant qu'architecte en chef de bases de données chez Synthetic Genomics, j'ai été réellement impressionné par la puissance, la flexibilité et la richesse des interfaces de programmation de Postgres 9.5. J'ai migré l'intégralité de notre plateforme génomique — soit 25 milliards de lignes issues de MySQL — vers une seule base de données Postgres, en utilisant les possibilités de compression du type JSONB, les excellentes méthodes d'indexation GIN, BRIN et B-tree, ainsi que l'élégant langage de programmation de fonctions stockées PL/pgSQL. Aujourd'hui, avec la version 9.6, j'attends de pouvoir exploiter le parallélisme des requêtes pour améliorer encore plus les performances des requêtes sur les tables volumineuses.
Postgres 9.5 a prouvé par lui-même qu'il est complètement stable, remarquablement performant, et selon moi, le meilleur moteur à ce jour de stockage de données hybride relationnel-document sur le marché.&quot; indique Mike Sofen, Chief Database Architect chez Synthetic Genomics.
&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;https://www.syntheticgenomics.com/&quot;&gt;Synthetic Genomics, Inc.&lt;/a&gt; (SGI) est l'un des leaders mondiaux dans les domaines de la biologie de synthèse et la génomique de synthèse. SGI se fonde sur l'utilisation de la propriété intellectuelle dans cette discipline qui évolue rapidement, pour concevoir et réaliser des systèmes biologiques qui permettent de résoudre les défis de développement durable à l'échelle de la planète. SGI fournit des solutions dans les domaines de la recherche génomique, de la bio-production et des produits appliqués. La recherche est focalisée sur les solutions génomiques pour tout organisme de recherche et développement, académique ou commercial. Les produits et services commerciaux incluent l'instrumentation, les réactifs, les services de synthèse d'ADN et les logiciels et services en bio-informatique. Contact&amp;nbsp;: Synthetic Genomics, &lt;a href=&quot;mailto:media@syntheticgenomics.com&quot;&gt;media@syntheticgenomics.com&lt;/a&gt; (anglais)
&lt;/p&gt;
&lt;p&gt;&quot;Avec les possibilités d'externaliser les jointures, les mises à jour et les suppressions, les Foreign Data Wrappers offrent maintenant une solution complète de partage de données entre PostgreSQL et les autres bases de données. Par exemple, PostgreSQL peut être utilisé pour gérer en entrée des données qui vont vers des bases de données différentes&quot; indique Julyanto Sutandang, Director of Business Solutions chez Equnix.&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;http://www.equnix.co.id&quot;&gt;Equnix&lt;/a&gt; est fournisseur de solutions informatiques pour les entreprises. Cette société met en place des solutions alternatives complètes, basées sur la recherche, le développement et du code libre. Equnix fournit du service autour de PostgreSQL. Contact en anglais ou en indonésien&amp;nbsp;:  &lt;a href=&quot;mailto:info@equnix.co.id&quot;&gt;Info@equnix.co.id&lt;/a&gt; ou téléphoner à Johan D. au +6221-22866662.&lt;/p&gt;
&lt;h2&gt;Support Professionnel&lt;/h2&gt;
&lt;p&gt;PostgreSQL bénéficie du support de nombreuses sociétés, qui financent des développeurs, fournissent l'hébergement ou un support financier. Les plus fervents supporters sont listés sur la &lt;a href=&quot;https://www.postgresql.org/about/sponsors/&quot;&gt;page des mécènes du développement&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Il existe également une très grande communauté de &lt;a href=&quot;https://www.postgresql.org/support/professional_support&quot;&gt;sociétés fournissant du support PostgreSQL&lt;/a&gt;, des consultants indépendants aux sociétés multinationales.
&lt;/p&gt;
&lt;p&gt;Les &lt;a href=&quot;https://www.postgresql.org/about/donate&quot;&gt;dons&lt;/a&gt; sont acceptés avec plaisir.&lt;/p&gt;
&lt;p&gt;Vous pouvez également acheter des produits dérivés de qualité sur la &lt;a href=&quot;http://www.zazzle.com/postgresql&quot;&gt;Boutique Zazzle PostgreSQL&lt;/a&gt;. &lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sortie de PostgreSQL 9.6 RC 1</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2016/09/04/Sortie-de-PostgreSQL-9.6-RC-1" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.6 RC 1" />
    <id>urn:md5:6ecdffbcca5be6d5f82bfcad4d8e1dd9</id>
    <published>2016-09-01T18:25:00+01:00</published>
    <updated>2016-09-04T20:09:18+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">&lt;p&gt;Le groupe de développement de PostgreSQL (PGDG) vient d'annoncer la sortie de la première version  candidate de PostgreSQL 9.6. Cette version est théoriquement identique à la version finale qui sortira dans quelques semaines. Elle contient des corrections pour tous les problèmes identifiés lors de la phase de test.&lt;/p&gt;    &lt;h2&gt;Changements depuis la version Beta 4&lt;/h2&gt;


&lt;p&gt;PostgreSQL 9.6 RC 1 corrige des bugs découverts par les utilisateurs qui ont testé la Betat 4, notamment&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt; * Ajout de fonctions SQL pour inspecter les méthodes d'accès d'index
 * Corrections de bugs sur les index bloom
 * Ajout d'un test de régression pour l'instertion dans les TOAST
 * Meilleure gestion des locales pour les erreurs sur les requêtes parallèles
 * Beaucoup de mises à jour dans la documentation&lt;/pre&gt;


&lt;p&gt;A partir de la version RC 1, le traitement parallèle  des requêtes est désactivé par défaut dans le fichier postgresql.conf. Les utilisateurs qui souhaitent paralleliser leurs requêtes doivent augmenter le paramètre max_parallel_workers_per_gather.&lt;/p&gt;


&lt;h3&gt;Feuille de route&lt;/h3&gt;


&lt;p&gt;Cette version est la première candidate de PostgreSQL 9.6. D'autres versions candidates seront mises en ligne jusqu'à ce que tous les bugs remontés soient résolus et que la version 9.6.0 finale soit livrée. Pour plus d'information, rendez-vous sur la page dédiée aux tests sur les versions Beta.&lt;/p&gt;


&lt;h3&gt;Liens&lt;/h3&gt;

&lt;ul&gt;
&lt;li&gt;Annonce officielle&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/about/news/1693/&quot;&gt;http://www.postgresql.org/about/news/1693/&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Nouveautés de PostgreSQL 9.6&amp;nbsp;: &lt;a href=&quot;https://wiki.postgresql.org/wiki/NewIn96&quot;&gt;https://wiki.postgresql.org/wiki/NewIn96&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Travaux en cour ssure la 9.6&amp;nbsp;: &lt;a href=&quot;https://wiki.postgresql.org/wiki/PostgreSQL_9.6_Open_Items&quot;&gt;https://wiki.postgresql.org/wiki/PostgreSQL_9.6_Open_Items&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Page de téléchargement&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/download/&quot;&gt;http://www.postgresql.org/download/&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PostgreSQL 9.6 Beta est sortie ! Testez le parallèlisme</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2016/05/13/PostgreSQL-9.6-Beta-est-sortie-%21-Testez-le-parall%C3%A8lisme" rel="alternate" type="text/html"
    title="PostgreSQL 9.6 Beta est sortie ! Testez le parallèlisme" />
    <id>urn:md5:2f470f2d1ae42e8a1123cd0868377e96</id>
    <published>2016-05-13T15:41:00+01:00</published>
    <updated>2016-05-13T16:03:03+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le PostgreSQL Global Development Group (PGDG) vient d'annoncer la sortie de la première version bêta de PostgreSQL 9.6. Cette version donne un aperçu de toutes les fonctionnalités qui seront présentes dans la version finale, même si certains détails peuvent encore changer. Le projet PostgreSQL encourage tous les utilisateurs à tester leurs applications sur cette version.&lt;/p&gt;


&lt;h2&gt;Fonctionnalités principales de la 9.6&lt;/h2&gt;


&lt;p&gt;La version 9.6 contient des changements importants et des améliorations prometteuses, notamment&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Le parallélisme&amp;nbsp;: les parcours séquentiels, les jointures et les agrégats peuvent désormais être exécutés en parallèle&lt;/li&gt;
&lt;li&gt;La cohérence des lectures entre plusieurs noeuds Hot Standby synchrones&lt;/li&gt;
&lt;li&gt;la recherche plein-texte de phrases&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Le connecteur postgres_fdw peut exécuter les tris, jointures, UPDATEs, DELETEs sur les serveurs distants&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;La réduction de l'impact des autovacuum sur les grandes tables en évitant de &quot;refreezer&quot; les données anciennes.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Parmi ces nouveautés, le parallèlisme devrait apporter un gain de performance important pour certaines requêtes.&lt;/p&gt;


&lt;h2&gt;La chasse aux bugs est ouvertes&lt;/h2&gt;


&lt;p&gt;Comme pour toutes les versions majeures, les améliorations de PostgreSQL impliquent des modifications sur de très grandes parties du code. La communauté PostgreSQL compte sur vous pour tester cette version dans votre contexte et signaler les bugs et les régressions avant la sortie de la version 9.6.0. Au-delà des nouvelles fonctionnalités, vous pouvez également tester si&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;les requêtes parallèles améliorent les performances pour vous&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;les requêtes parallèles crashent ou provoquent des pertes de données&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;PostgreSQL fonctionne correctement sur vos plateformes&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;l'amélioration du vacuum freeze réduit l'autovacuum des tables volumineuses&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;la recherche plein texte sur des phrases retourne les résultats attendus&amp;nbsp;?&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;La version 9.6 beta 1 modifie également l'API des backups binaires. Les DBA sont invités à tester la version 9.6 avec les outils de sauvegarde tels que pgBackRest, Barman, WAL-E ou tout autre outil interne ou packagé.&lt;/p&gt;


&lt;p&gt;Il s'agit d'une beta et donc des modifications mineures sont possibles au niveau du comportement, des fonctionnalités et des APIs. Votre feedback et vos tests aideront à finaliser les nouveautés, alors attaquez les tests le plus rapidement possible&amp;nbsp;! La qualité des tests utilisateurs  a un impact important sur la date de sortie de la version finale.&lt;/p&gt;


&lt;h3&gt;Calendrier&lt;/h3&gt;


&lt;p&gt;Ceci est la première version beta de la version 9.6. Le projet PostgreSQL sortira des versions beta supplémentaires aussi souvent que nécessaires, suivies de version candidates et enfin la version finale prévue pour fin 2016. Pour plus d'information, rendez-vous sur cette page&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/developer/beta/&quot;&gt;http://www.postgresql.org/developer/beta/&lt;/a&gt;&lt;/p&gt;


&lt;h2&gt;Liens&lt;/h2&gt;

&lt;ul&gt;
&lt;li&gt;Annonce officielle&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/about/news/1668/&quot;&gt;http://www.postgresql.org/about/news/1668/&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Nouveautés de PostgreSQL 9.6&amp;nbsp;: &lt;a href=&quot;https://wiki.postgresql.org/wiki/NewIn96&quot;&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Travaux en cour ssure la 9.6&amp;nbsp;: &lt;a href=&quot;https://wiki.postgresql.org/wiki/PostgreSQL_9.6_Open_Items&quot;&gt;https://wiki.postgresql.org/wiki/PostgreSQL_9.6_Open_Items&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Page de téléchargement&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/download/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sortie de PostgreSQL 9.5.3, 9.4.8, 9.3.13, 9.2.17 et 9.1.22</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2016/05/13/Sortie-de-PostgreSQL-9.5.3%2C-9.4.8%2C-9.3.13%2C-9.2.17-et-9.1.22" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.5.3, 9.4.8, 9.3.13, 9.2.17 et 9.1.22" />
    <id>urn:md5:3364254fb971f98d36f6fc0b55adf761</id>
    <published>2016-05-13T12:51:00+01:00</published>
    <updated>2016-05-13T12:51:23+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le PostgreSQL Global Development Group a publié une mise à jour de toutes les versions supportées du SGBD, incluant les versions 9.5.3, 9.4.8, 9.3.13, 9.2.17 and 9.1.22. Ces versions mineures corrigent un certain nombre de problèmes découverts par les utilisateurs sur les deux derniers mois. Les utilisateurs touchés par les problèmes corrigés sont invités à mettre à jour leur installation immédiatement; les autres doivent planifier la mise à jour dès que possible.&lt;/p&gt;


&lt;h2&gt;Corrections de bugs et améliorations&lt;/h2&gt;


&lt;p&gt;Cette mise à jour corrige plusieurs problèmes qui provoquent des indisponibilités pour les utilisateurs&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Suppression de la file d’erreur OpenSSL avant un appel à OpenSSL, pour éviter des erreurs sur les connexions SSL, en particulier en utilisant les wrappers OpenSSL Python, Ruby ou PHP&lt;/li&gt;
&lt;li&gt;Correction de l’optimiseur pour éviter des erreurs de type “failed to build N-way joins”&lt;/li&gt;
&lt;li&gt;Correction sur la gestion des équivalences dans des plans d’exécution utilisant plusieurs Nested Loop, qui peuvent retourner des lignes qui ne correspondaient pas à la clause WHERE&lt;/li&gt;
&lt;li&gt;Correction de deux fuites mémoires lors de l’utilisation d’index GIN, dont une pouvant potentiellement entraîner des corruptions d’index&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Cette mise à jour inclut également des corrections pour des problèmes reportés, dont la plupart affectent toutes les versions supportées&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Correction d’erreurs de parsing lorsque le paramètre operator_precedence_warning est activé&lt;/li&gt;
&lt;li&gt;Correction d’un possible mauvais comportement de la fonction to_timestamp() avec les codes TH, th et Y,YYY&lt;/li&gt;
&lt;li&gt;Correction de l’export des vues et des règles qui utilisent ANY (array) dans un sous-SELECT&lt;/li&gt;
&lt;li&gt;Interdiction d’utiliser un caractère retour-chariot dans la valeur d’un paramètre avec ALTER SYSTEM&lt;/li&gt;
&lt;li&gt;Correction de différents problèmes liés à la suppression du lien symbolique vers un tablespace&lt;/li&gt;
&lt;li&gt;Correction d’un plantage du décodage logique sur certaines plate-formes sensibles à l’alignement des données&lt;/li&gt;
&lt;li&gt;Suppression des demandes répétées de retour du destinataire lors de l’arrêt du processus walsender&lt;/li&gt;
&lt;li&gt;Correction de plusieurs problèmes de pg_upgrade&lt;/li&gt;
&lt;li&gt;Ajout du support de la compilation avec Visual Studio 2015&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Cette publication contient aussi la version 2016d de tzdata, qui réalise les mises à jour des timezones pour la Russie, le Venezuela, Kirov, Tomsk.&lt;/p&gt;


&lt;h3&gt;Mise à jour&lt;/h3&gt;


&lt;p&gt;Les mises à jours mineures sont cumulatives. Comme avec les autres versions mineures, les utilisateurs n’ont pas besoin de sauvegarder et restaurer les bases de données ou d’utiliser pg_upgrade pour mettre en place cette mise à jour. Vous pouvez simplement arrêter PostgreSQL, mettre à jour les binaires et le redémarrer. Les utilisateurs qui ont ignoré plusieurs mises à jour mineures peuvent avoir besoin de réaliser des opérations après mise à jour. Voir les notes de version pour les détails.&lt;/p&gt;


&lt;h3&gt;Liens&lt;/h3&gt;

&lt;ul&gt;
&lt;li&gt;Téléchargement: &lt;a href=&quot;http://postgresql.org/download&quot;&gt;http://postgresql.org/download&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Notes de version: &lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot;&gt;http://www.postgresql.org/docs/current/static/release.html&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sortie de PostgreSQL 9.5.1, 9.4.6, 9.3.11, 9.2.15 et 9.1.20</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2016/02/12/Sortie-de-PostgreSQL-9.5.1%2C-9.4.6%2C-9.3.11%2C-9.2.15-et-9.1.20" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.5.1, 9.4.6, 9.3.11, 9.2.15 et 9.1.20" />
    <id>urn:md5:86b9f53798c2ee162ea60a308febbba6</id>
    <published>2016-02-12T13:24:00+00:00</published>
    <updated>2016-02-17T13:36:41+00:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le PostgreSQL Global Development Group a publié une mise à jour de toutes les versions supportées du SGBD, incluant les versions 9.5.1, 9.4.6, 9.3.11, 9.2.15 et 9.1.20. Ces versions mineures corrigent deux problèmes de sécurité, ainsi qu'un certain nombre de problèmes découverts sur les quatre derniers mois. Les utilisateurs vulnérables aux problèmes de sécurité doivent mettre à jour leur installation immédiatement; les autres doivent planifier la mise à jour dès que possible.&lt;/p&gt;


&lt;h2&gt;Correction d'un problème de sécurité dans les expressions régulières, PL/Java&lt;/h2&gt;


&lt;p&gt;Cette publication clôt la faille de sécurité CVE-2016-0773, un problème avec l'analyse d'expressions régulières (regex). Le code précédent permettait à l'utilisateur de passer dans les expressions des valeurs en dehors de l'intervalle de caractères unicodes, déclenchant l'arrêt brutal du backend. Ce problème est critique pour les systèmes PostgreSQL avec des utilisateurs non approuvés (untrusted) ou qui génèrent des regex basées sur une entrée utilisateur.&lt;/p&gt;


&lt;p&gt;Cette mise à jour corrige aussi CVE-2016-0766, un problème d'élévation de privilège pour les utilisateurs de PL/Java. Certains paramètres de configuration particuliers (GUCS) pour le PL/Java sont maintenant seulement modifiables par le super-utilisateur de la base de données.&lt;/p&gt;


&lt;h2&gt;Autres corrections et améliorations&lt;/h2&gt;

&lt;p&gt;En plus des corrections indiquées ci-dessus, de nombreuses corrections de problèmes rapportés par les utilisateurs ces derniers mois ont été inclues. Ceci inclut notamment de nombreuses corrections sur les nouvelles fonctionnalités introduites en version 9.5.0, ainsi que la réécriture de pg_dump pour éliminer des problèmes chroniques dans la sauvegarde des extensions. Parmi eux il y a&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Correction de nombreux problèmes dans pg_dump avec certains types d'objets&lt;/li&gt;
&lt;li&gt;Prévention de l'affaissement over-eager des clauses HAVING pour les GROUPING SETS&lt;/li&gt;
&lt;li&gt;Correction de la transformation en chaîne de caractères des erreurs avec les clauses ON CONFLICT ... WHERE&lt;/li&gt;
&lt;li&gt;Correction d'erreurs de tableoid pour postgres_fdw&lt;/li&gt;
&lt;li&gt;Prévention d'exception sur les floating-point dans pgbench&lt;/li&gt;
&lt;li&gt;Fait en sorte que \det recherche toujours les noms de tables distantes&lt;/li&gt;
&lt;li&gt;Correction de l'encadrement par quote des noms de contraintes des domaines dans pg_dump&lt;/li&gt;
&lt;li&gt;Prévention d'introduire des objets étendus dans les noeuds Const&lt;/li&gt;
&lt;li&gt;Permet la compilation du PL/Java sur Windows&lt;/li&gt;
&lt;li&gt;Correction de l'erreur &quot;unresolved symbol&quot; dans l'exécution de code PL/Python&lt;/li&gt;
&lt;li&gt;Permet l'utilisation de Python2 et Python3 dans la même base de donnée&lt;/li&gt;
&lt;li&gt;Ajout du support de Python 3.5 dans le PL/Python&lt;/li&gt;
&lt;li&gt;Corrige un problème avec la création de sous répertoire pendant l'initdb&lt;/li&gt;
&lt;li&gt;Fait en sorte que pg_ctl rapporte le statut correctement sur Windows&lt;/li&gt;
&lt;li&gt;Supprime une erreur apportant de la confusion quand pg_receivexlog est utilisé avec de vieux serveurs&lt;/li&gt;
&lt;li&gt;Nombreuses corrections et ajouts dans la documentation&lt;/li&gt;
&lt;li&gt;Correction de calculs de hash erronés dans gin_extract_jsonb_path()&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Cette publication contient aussi la version 2016a de tzdata, qui réalise les mises à jour des timezones pour les zones Iles Caiman, Metlakatla, Trans-Baikal Territory (Zabaykalsky Krai), et Pakistan.&lt;/p&gt;


&lt;h2&gt;Comment mettre à jour&amp;nbsp;?&lt;/h2&gt;


&lt;p&gt;Les utilisateurs des versions 9.4 devront reindexer tout index jsonb_path_ops déjà créé, pour corriger un problème persistant d'entrées manquantes dans ces index.&lt;/p&gt;


&lt;p&gt;Comme avec les autres versions mineures, les utilisateurs n'ont pas besoin de sauvegarder et restaurer les bases de données ou d'utiliser pg_upgrade pour mettre en place cette mise à jour. Vous pouvez simplement arrêter PostgreSQL, mettre à jour les binaires et le redémarrer. Les utilisateurs qui ont ignoré plusieurs mises à jour mineures peuvent avoir besoin de réaliser des opérations après mise à jour. Voir les notes de version pour les détails.&lt;/p&gt;


&lt;h2&gt;Liens:&lt;/h2&gt;

&lt;ul&gt;
&lt;li&gt;Téléchargement: &lt;a href=&quot;http://postgresql.org/download&quot;&gt;http://postgresql.org/download&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Notes de version: &lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot;&gt;http://www.postgresql.org/docs/current/static/release.html&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PostgreSQL 9.5 : UPSERT, Row Level Security et Big Data</title>
    <link href="http://blog2.postgresql.fr/index.php?post/PostgreSQL-9-5" rel="alternate" type="text/html"
    title="PostgreSQL 9.5 : UPSERT, Row Level Security et Big Data" />
    <id>urn:md5:53f001203822507af4153496e7ce3234</id>
    <published>2016-01-07T15:56:00+00:00</published>
    <updated>2016-01-07T17:12:05+00:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le 7 janvier 2016&amp;nbsp;: Le PostgreSQL Global Development Group annonce la publication de la version 9.5 de PostgreSQL.
Cette version ajoute les capacités d'UPSERT, les droits de niveau ligne (Row Level Security), et de nombreuses fonctionnalités orientées Big Data, qui ouvrent plus grand encore les possibilités d'utilisation de PostgreSQL.
Avec ces nouvelles fonctionnalités, PostgreSQL va devenir le choix par défaut pour un nombre encore plus grands d'applications, qu'il s'agisse de startups, de grandes entreprises ou d'agences gouvernementales.&lt;/p&gt;


&lt;p&gt;Annie Prévot,  DSI de la CNAF, déclare, «&amp;nbsp;La CNAF sert 11 millions d'allocataires. Elle verse 73 milliards d'euros par an, au travers de 26 types de prestations. Ce service, essentiel à la population, s'appuie sur un système d'information qui se doit d'être absolument performant et fiable. Le système d'information de la CNAF s'appuie avec satisfaction sur le gestionnaire de Base de données PostgreSQL. En utilisation sur la moitié des systèmes, ce logiciel libre offre toutes les garanties de fonctionnement et de fiabilité. Il est en phase de déploiement sur l'ensemble des systèmes.&amp;nbsp;»&lt;/p&gt;


&lt;p&gt;&lt;strong&gt;UPSERT&lt;/strong&gt;&lt;/p&gt;



&lt;p&gt;UPSERT, raccourci de «&amp;nbsp;INSERT, ON CONFLICT UPDATE », est une fonctionnalité réclamée depuis longtemps par les développeurs d'applications.
Elle permet de traiter de la même façon l'ajout ou l'actualisation de lignes.
UPSERT simplifie le développement des applications web et mobile en permettant de laisser la base gérer les conflits entre modifications concurrentes des données.
Cette fonctionnalité supprime également la dernière barrière à la migration d'applications MySQL historiques vers PostgreSQL.&lt;/p&gt;


&lt;p&gt;Développée sur les deux dernières années par Peter Geoghegan, programmeur au sein de la société Heroku, l'implantation de UPSERT au sein de PostgreSQL est nettement plus souple et puissante que celle de la plupart des autres SGBDR.
La nouvelle clause ON CONFLICT permet d'ignorer la nouvelle donnée, ou d'actualiser différentes colonnes ou relations, de façon à supporter les chaînes d'ETL (Extract, Transform, LOAD) les plus complexes.
Et, à l'instar de PostgreSQL, cette fonctionnalité a été conçue pour être totalement concurrentielle, et s'intégrer avec les autres fonctionnalités de PostgreSQL, dont la réplication logique.&lt;/p&gt;


&lt;p&gt;&lt;strong&gt;Row Level Security&lt;/strong&gt;&lt;/p&gt;



&lt;p&gt;PostgreSQL continue d'étendre les possibilités de sécurisation des accès, avec la nouvelle fonctionnalité Row Level Security (RLS).
RLS propose un vrai contrôle d'accès par ligne et par colonne, qui s'intègre avec les outils externe de sécurisation, tel SELinux.
PostgreSQL est déjà connu comme «&amp;nbsp;la base la plus sécurisée par défaut ». RLS conforte cette position de meilleur choix par défaut pour les applications à fort besoin de sécurisation, telles que la conformité PCI, la dIrective Européenne de protection des données, et les standards de protection des données des systèmes de santé.&lt;/p&gt;


&lt;p&gt;RLS est l'aboutissement de 5 ans d'ajout de fonctionnalités de sécurité à PostgreSQL, ce qui inclut les travaux de  KaiGai Kohei de NEC, Stephen Frost de Crunchy Data, et ceux de Dean Rasheed. À travers cette fonctionnalité, les administrateurs de base de données peuvent définir des politiques de sécurité, qui filtrent les lignes visibles en fonction des utilisateurs.
La sécurisation mises en place par ce biais est résistante aux injections SQL et autres trous de sécurité de niveau applicatif.&lt;/p&gt;




&lt;p&gt;&lt;strong&gt;Fonctionnalités Big Data&lt;/strong&gt;&lt;/p&gt;



&lt;p&gt;PostgreSQL 9.5 inclut de nombreuses nouvelles fonctionnalités pour les bases plus volumineuses, et l'intégration avec les systèmes Big Data.
Ces fonctionnalités garantissent que PostgreSQL va continuer de jouer un rôle majeur dans le marché grandissant du Big Data en logiciels libres.
Citons&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;Les index BRIN&amp;nbsp;: Ce nouveau type d'index permet la création d'index beaucoup plus petits, mais très efficaces, pour les tables volumineuses. Il est nécessaire que les données soient ordonnées.
Par exemple, des tables contenant des millions de lignes de traces peuvent être indexées et interrogées en 5% du temps nécessaire lors de l'utilisation d'index de type BTree.&lt;/p&gt;


&lt;p&gt;Tris plus rapides&amp;nbsp;: PostgreSQL trie désormais les données textuelles et numériques plus rapidement, à l'aide d'un algorithme appelé &quot;clés abrégées&quot; ou &quot;abbreviated keys&quot;.
Cela accélère certaines requêtes qui nécessitent de trier des volumes considérables de données d'un facteur 2 à 12, et peut également accélérer la création d'index d'un facteur 20.&lt;/p&gt;


&lt;p&gt;CUBE, ROLLUP et GROUPING SETS&amp;nbsp;: Ces nouvelles clauses du standard permettent de produire des rapports avec plusieurs niveaux de synthèse en une seule requête.
CUBE permet également une meilleure intégration de PostrgreSQL avec un nombre plus grand d'outils de création de rapports OLAP (Online Analytic Processing), tel Tableau.&lt;/p&gt;


&lt;p&gt;Les Foreign Data Wrappers (FDW)&amp;nbsp;: Ils permettent déjà d'utiliser PostgreSQL pour interroger des systèmes Big Data, tel Hadoop ou Cassandra. La version 9.5 ajoute IMPORT FOREIGN SCHEMA et les jointures au niveau des sources externes, ce qui rend les connexions aux données externes plus efficaces et plus faciles à établir.&lt;/p&gt;


&lt;p&gt;TABLESAMPLE&amp;nbsp;: Cette clause SQL permet de récupérer rapidement un échantillon statistique d'une table sans tri coûteux.&lt;/p&gt;


&lt;p&gt;«&amp;nbsp;Le nouvel index BRIN apparu dans PostgreSQL 9.5 est une fonctionnalité puissante qui permet à PostgreSQL de gérer et indexer des volumes de données difficiles, voire impossibles à traiter par le passé. Il permet de faire évoluer les données et les performances au delà de la limite considérée précédemment avec les bases relationnelles traditionnelles et fait de PostgreSQL une solution parfaite pour les analyses Big Data,&quot; déclare Boyan Botev, Lead Database Administrator, Premier, Inc.&lt;/p&gt;


&lt;p&gt;&lt;strong&gt;Liens&lt;/strong&gt;&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Téléchargement&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/downloads&quot;&gt;http://www.postgresql.org/downloads&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Dossier de presse&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/about/press/presskit95/fr&quot;&gt;http://www.postgresql.org/about/press/presskit95/fr&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Notes de version&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/docs/9.5/static/release-9-5.html&quot;&gt;http://www.postgresql.org/docs/9.5/static/release-9-5.html&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;Nouveautés de la 9.5&amp;nbsp;: &lt;a href=&quot;https://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.5&quot;&gt;https://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.5&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Publication de PostgreSQL 9.5 Beta 2</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2015/11/12/Publication-de-PostgreSQL-9.5-Beta-2" rel="alternate" type="text/html"
    title="Publication de PostgreSQL 9.5 Beta 2" />
    <id>urn:md5:97e1db8e3c967ba7cf947f608496c021</id>
    <published>2015-11-12T08:05:00+01:00</published>
    <updated>2015-11-13T00:07:19+01:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">Le PostgreSQL Global Development Group annonce aujourd'hui la deuxième bêta de la version 9.5 de PostgreSQL. &lt;br /&gt;&lt;br /&gt;&lt;br /&gt;    Cette version contient toutes les fonctionnalités qui seront dans la version finale. Peu de modifications devraient intervenir.&lt;br /&gt;Les utilisateurs peuvent désormais tester leurs applications avec cette version en préparation de la version finale.
&lt;h2&gt;Différences avec la Bêta 1&lt;/h2&gt;
Les nombreux bogues remontés par les utilisateurs et les contributeurs ont été corrigés.
Citons :
&lt;ul&gt;
&lt;li&gt; de nombreux ajustements de la documentation ;
&lt;/li&gt;
&lt;li&gt; le renommage de PQsslAttributes() en PQsslAttributeNames() ;
&lt;/li&gt;
&lt;li&gt; le passage de données de contexte aux pgworkers ;
&lt;/li&gt;
&lt;li&gt; la correction de problèmes avec les workers parallèles ;
&lt;/li&gt;
&lt;li&gt;la correction de divers bogues sur les index BRIN ;
&lt;/li&gt;
&lt;li&gt; la correction de différents problèmes de traçage des timestamp de commit lors de la réplication ;
&lt;/li&gt;
&lt;li&gt; ssl_renegotiation_limit est désormais positionné à 0.
&lt;/li&gt;
&lt;/ul&gt;
&lt;br /&gt;&lt;br /&gt;Si vous avez fait un rapport de bogue lors de tests de PostgreSQL 9.5, nous vous demandons de retester avec la Bêta 1 pour vérifier que le problème a été corrigé.
&lt;br /&gt;&lt;br /&gt;Si vous n'avez pas encore testé PostgreSQL 9.5, c'est le bon moment pour aider au développement de PostgreSQL. &lt;br /&gt;Les problèmes connus et en attente de correction sont listés sur la page des problèmes à régler.
&lt;h2&gt;Agenda&lt;/h2&gt;
Il s'agit de la deuxième version bêta pour la 9.5. &lt;br /&gt;Cela signifie que peu de modifications sont prévues d'ici la version finale.
&lt;br /&gt;&lt;br /&gt;Le projet PostgreSQL publiera d'autres bêta, si nécessaire, puis une ou plusieurs release candidates, jusqu'à la version finale, fin 2015.&lt;br /&gt;&lt;br /&gt;Pour plus d'informations et des suggestions sur la manière de tester les bêta, on peut se référer à la page Beta Testing.&lt;br /&gt;&lt;br /&gt;La documentation complète et les notes de version sont disponibles en ligne, et installées avec PostgreSQL.
La page What's New donne les détails de chaque nouvelle fonctionnalité.
&lt;h2&gt;Liens&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt; Page de téléchargement : &lt;a hreflang=&quot;en&quot; href=&quot;http://www.postgresql.org/download/&quot;&gt;http://www.postgresql.org/download/
&lt;/a&gt;&lt;/li&gt;
&lt;li&gt; Information sur les tests des bêta : &lt;a hreflang=&quot;en&quot; href=&quot;http://www.postgresql.org/developer/alpha&quot;&gt;http://www.postgresql.org/developer/alpha&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt; Note de version de la 9.5 bêta : &lt;a href=&quot;http://www.postgresql.org/docs/devel/static/release-9-5.html &quot;&gt;http://www.postgresql.org/docs/devel/static/release-9-5.html
&lt;/a&gt;&lt;/li&gt;
&lt;li&gt; Quoi de neuf dans 9.5 : &lt;a href=&quot;https://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.5&quot;&gt;https://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.5&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt; Les problèmes ouverts : &lt;a href=&quot;https://wiki.postgresql.org/wiki/PostgreSQL_9.5_Open_Items&quot;&gt;https://wiki.postgresql.org/wiki/PostgreSQL_9.5_Open_Items &lt;/a&gt; &lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Publication de PostgreSQL 9.5 Beta 1</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2015/10/08/PostgreSQL-9.5-Beta-1" rel="alternate" type="text/html"
    title="Publication de PostgreSQL 9.5 Beta 1" />
    <id>urn:md5:5f10da8fb85655f8dcd2edf358da6c9d</id>
    <published>2015-10-08T18:09:00+02:00</published>
    <updated>2015-10-08T18:18:44+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">&lt;p&gt;Le PostgreSQL Global Development Group annonce aujourd'hui la première bêta de la version 9.5 de PostgreSQL.
Cette version contient toutes les fonctionnalités qui seront dans la version finale. Peu de modifications devraient intervenir.
Les utilisateurs peuvent désormais tester leurs applications avec cette version en préparation de la version finale.
&lt;/p&gt;    Le PostgreSQL Global Development Group annonce aujourd'hui la première bêta de la version 9.5 de PostgreSQL.
Cette version contient toutes les fonctionnalités qui seront dans la version finale. Peu de modifications devraient intervenir.
Les utilisateurs peuvent désormais tester leurs applications avec cette version en préparation de la version finale.
&lt;h2&gt;Différences avec Alpha2&lt;/h2&gt;
Les nombreux bogues remontés par les utilisateurs et les contributeurs ont été corrigés.
Citons :
&lt;ul&gt;
&lt;li&gt; de nombreux ajustements à la sémantique du Row Level Security (RLS) ;
&lt;/li&gt;
&lt;li&gt; des améliorations des deadlocks avec LWLock ;
&lt;/li&gt;
&lt;li&gt; les problèmes de corruption d'index BRIN ;
&lt;/li&gt;
&lt;li&gt; le problème de connexion avec PGSSLMODE=require sous Windows ;
&lt;/li&gt;
&lt;li&gt; différents problèmes de traçage des timestamp de commit ;
&lt;/li&gt;
&lt;li&gt; les fuites mémoire des hash join ;
&lt;/li&gt;
&lt;li&gt; le comportement incohérent de jsonb_set lors de l'ajout dans un tableau ;
&lt;/li&gt;
&lt;/ul&gt;
La sémantique du Row Level Security a été modifiée pour être cohérente avec le système de permissions de PostgreSQL basé sur GRANT.
&lt;br /&gt;Ainsi, RLS applique les politiques d'INSERT et SELECT lorsqu'INSERT RETURNING est utilisé.&lt;br /&gt;Il est recommandé aux utilisateurs de tester l'application des rêgles TLS et de retester toute configurations RLS existante pour vérifier l'absence de régression dans leurs cas d'utilisation.
&lt;br /&gt;&lt;br /&gt;Pour plus d'informations, on peut se référer à la documentation concernant CREATE POLICY (http://www.postgresql.org/docs/9.5/static/sql-createpolicy.html) et RLS (http://www.postgresql.org/docs/9.5/static/ddl-rowsecurity.html).
&lt;br /&gt;&lt;br /&gt;Si vous avez fait un rapport de bogue lors de tests de PostgreSQL 9.5, nous vous demandons de retester avec la Bêta 1 pour vérifier que le problème a été corrigé.
&lt;br /&gt;&lt;br /&gt;Si vous n'avez pas encore testé PostgreSQL 9.5, c'est le bon moment pour aider au développement de PostgreSQL. &lt;br /&gt;Les problèmes connus et en attente de correction sont listés sur la page des problèmes à régler.
&lt;h2&gt;Agenda&lt;/h2&gt;
Il s'agit de la première version bêta pour la 9.5. &lt;br /&gt;Cela signifie que peu de modifications sont prévues d'ici la version finale.
&lt;br /&gt;&lt;br /&gt;Le projet PostgreSQL publiera d'autres bêta, si nécessaire, puis une ou plusieurs release candidates, jusqu'à la version finale, fin 2015.&lt;br /&gt;&lt;br /&gt;Pour plus d'informations et des suggestions sur la manière de tester les bêta, on peut se référer à la page Beta Testing.&lt;br /&gt;&lt;br /&gt;La documentation complète et les notes de version sont disponibles en ligne, et installées avec PostgreSQL.
La page What's New donne les détails de chaque nouvelle fonctionnalité.
&lt;h2&gt;Liens&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt; Page de téléchargement : http://www.postgresql.org/download/
&lt;/li&gt;
&lt;li&gt; Information sur les tests des bêta : http://www.postgresql.org/developer/alpha
&lt;/li&gt;
&lt;li&gt; Note de version de la 9.5 bêta : http://www.postgresql.org/docs/devel/static/release-9-5.html
&lt;/li&gt;
&lt;li&gt; Quoi de neuf dans 9.5 : https://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.5
&lt;/li&gt;
&lt;li&gt; Les problèmes ouverts : https://wiki.postgresql.org/wiki/PostgreSQL_9.5_Open_Items
&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Nouvelles versions mineures au 8 octobre 2015</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2015/10/08/Nouvelles-versions-mineures-au-8-octobre-2015" rel="alternate" type="text/html"
    title="Nouvelles versions mineures au 8 octobre 2015" />
    <id>urn:md5:7abdf7e8536925c5e29bc3d20d1361a2</id>
    <published>2015-10-08T17:15:00+02:00</published>
    <updated>2015-10-08T17:26:57+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">&lt;p&gt;Le PostgreSQL Global Development Group a publié une mise à jour de
toutes les versions maintenues du système de gestion de bases de
données.&lt;br /&gt;
Cette mise à jour inclut les versions 9.4.5, 9.3.10, 9.2.14, 9.1.19 et 9.0.23. &lt;br /&gt;
Elle corrige deux failles de sécurité, et les bogues découverts au cours des 4 derniers mois.&lt;br /&gt;
Les utilisateurs vulnérables aux failles de sécurité doivent procéder à la mise à jour le plus vite possible.&lt;br /&gt;
Les autres peuvent utiliser la prochaine fenêtre de maintenance programmée pour procéder à la mise à jour.&lt;br /&gt;
&lt;br /&gt;
Il s'agit également de la dernière version corrective pour la branche 9.0.
&lt;/p&gt;    &lt;h2&gt;2015-10-08 Correctif de sécurité&lt;/h2&gt;
Le PostgreSQL Global Development Group a publié une mise à jour de toutes les versions maintenues du système de gestion de bases de données.&lt;br /&gt;
Cette mise à jour inclut les versions 9.4.5, 9.3.10, 9.2.14, 9.1.19 et 9.0.23. &lt;br /&gt;
Elle corrige deux failles de sécurité, et les bogues découverts au cours des 4 derniers mois.&lt;br /&gt;
Les utilisateurs vulnérables aux failles de sécurité doivent procéder à la mise à jour le plus vite possible.&lt;br /&gt;
Les autres peuvent utiliser la prochaine fenêtre de maintenance programmée pour procéder à la mise à jour.&lt;br /&gt;
&lt;br /&gt;
Il s'agit également de la dernière version corrective pour la branche 9.0.
&lt;h2&gt;Correctifs de sécurité&lt;/h2&gt;
Deux failles de sécurité ont été corrigées.&lt;br /&gt;
Elles concernent les utilisateurs des fonctionnalités suivantes :
&lt;strong&gt;CVE-2015-5289&lt;/strong&gt; : les valeurs json ou jsonb en entrée, construites à partir de saisies utilisateurs aléatoires, peuvent entraîner un crash de PostgreSQL et un déni de service.&lt;br /&gt;
&lt;strong&gt;CVE-2015-5288&lt;/strong&gt; : La fonction crypt() incluse dans le paquet d'extension optionnel pgCrypto peut être exploitée pour lire quelques octets supplémentaires de mémoire. Aucun exploit fonctionnel n'a été développé pour cette faille.&lt;br /&gt;
Le projet PostgreSQL est redevable à Josh Kupershmidt et Oskari Saarenmaa pour la découverte de ces failles.&lt;br /&gt;
Cette mise à jour désactive également la renégociation SSL par défaut.&lt;br /&gt;
Auparavant, elle était activée par défaut.&lt;br /&gt;
La renégociation SSL sera complètement supprimée des versions de PostgreSQL postérieures à la 9.5.&lt;br /&gt;
&lt;h2&gt;Autres correctifs et améliorations&lt;/h2&gt;
En plus de ce qui précède, d'autres problèmes, remontés par les utilisateurs au cours des derniers mois, ont été corrigés.
Citons :
&lt;ul&gt;
&lt;li&gt; Empêcher les expressions rationnelles imbriquées et comparaisons LIKE et SIMILAR de crasher le serveur ;
&lt;/li&gt;
&lt;li&gt; De nombreux autres correctifs de gestion des expressions rationnnelles ;
&lt;/li&gt;
&lt;li&gt; S'assurer que ALTER TABLE positionne tous les verrous pour les modifications de contraintes ;
&lt;/li&gt;
&lt;li&gt; Nettoyer les sous-transactions pour éviter les crashs serveur en cas d'échec d'un curseur ;
&lt;/li&gt;
&lt;li&gt; Éviter les deadlocks lors d'insertions dans les WAL lorsque commit_delay est défini ;
&lt;/li&gt;
&lt;li&gt; Correction du verrouillage lors de l'actualisation de vues modifiables ;
&lt;/li&gt;
&lt;li&gt; Éviter la corruption de l'« init file » du cache des relations ;
&lt;/li&gt;
&lt;li&gt; Amélioration de la performance des résultats des requêtes SPI volumineuses ;
&lt;/li&gt;
&lt;li&gt; Amélioration du temps de démarrage du LISTEN ;
&lt;/li&gt;
&lt;li&gt; Désactivation de la renégociation SSL par défaut ;
&lt;/li&gt;
&lt;li&gt; Diminution de la valeur minimale des paramètres *_freeze_max_age ;
&lt;/li&gt;
&lt;li&gt; Limitation de la valeur maximale des wal_buffers à 2 Go ;
&lt;/li&gt;
&lt;li&gt; Se prémunir des possibles dépassements de piles en différents endroits ;
&lt;/li&gt;
&lt;li&gt; Correction de la gestion de DOW, DOY dans les dates saisies en entrée ;
&lt;/li&gt;
&lt;li&gt; Permettre aux requêtes à expressions rationnelles d'être annulées plus rapidement ;
&lt;/li&gt;
&lt;li&gt; Correction de bogues du planificateur ;
&lt;/li&gt;
&lt;li&gt; Correction de plusieurs problèmes d'arrêt du postmaster ;
&lt;/li&gt;
&lt;li&gt; Rendre l'autovacuum de prévention du wraparound plus robuste ;
&lt;/li&gt;
&lt;li&gt; Correction de quelques problèmes mineurs sur les index GIN et SP-GiST ;
&lt;/li&gt;
&lt;li&gt; Correction de différents problèmes sur PL/Python, PL/Perl et PL/Tcl ;
&lt;/li&gt;
&lt;li&gt; Amélioration du ramasse-miettes de pg_stat_statements ;
&lt;/li&gt;
&lt;li&gt; Amélioration de la gestion des collations dans pgsql_fdw ;
&lt;/li&gt;
&lt;li&gt; Amélioration de la gestion par libpq des conditions de dépassement mémoire ;
&lt;/li&gt;
&lt;li&gt; Éviter le crash de psql quand il n'y a pas de connexion établie ;
&lt;/li&gt;
&lt;li&gt; Diverses corrections de pg_dump, dont les permissions sur les fichiers et objets ;
&lt;/li&gt;
&lt;li&gt; Amélioration de la gestion des privilèges lors de sauvegardes de bases d'anciennes versions de PostgreSQL ;
&lt;/li&gt;
&lt;li&gt; Corrections spécifiques aux plateformes Alpha, PPC, AIX et Solaris ;
&lt;/li&gt;
&lt;li&gt; Correction de problèmes au démarrage sous Windows en locale Chinoise ;
&lt;/li&gt;
&lt;li&gt; Correction du script Windows install.bat pour gérer les espaces dans les noms de fichiers ;
&lt;/li&gt;
&lt;li&gt; Rendre disponible aux extensions le numéro de version de PostgreSQL au format numérique.
&lt;/li&gt;
&lt;/ul&gt;
Cette version contient également la mise à jour 2015g de tzdata, avec les correctifs pour les Iles Caïmans, Fidji, La Moldavie, le Maroc, Norfolk Island, la Corée du Nord, La Turquie, l'Uruguay, et la nouvelle zone America/Fort_Nelson.
&lt;h2&gt;Dernier correctif pour la version 9.0&lt;/h2&gt;
9.0.23 est la dernière mise à jour pour la branche 9.0. Comme prévu, cette branche arrive en fin de vie.&lt;br /&gt;
Les prochaines mises à jour de sécurité n'inclueront plus la version 9.0.&lt;br /&gt;
C'est pourquoi les utilisateurs de cette branche sont encouragés à passer à une version plus récente dès que possible.&lt;br /&gt;&lt;br /&gt;
Pour plus d'informations sur la politique de support de la communauté et les échéances de fin de vie, on peut se référer à la page [Politique de versions](http://www.postgresql.org/support/versioning/).&lt;br /&gt;
&lt;h2&gt;Mise à jour&lt;/h2&gt;
Toutes les mises à jour de PostgreSQL sont cumulatives.&lt;br /&gt;
Comme pour les autres versions mineures, il n'est pas nécessaire d'extraire et recharger les bases ou d'utiliser pg_upgrade pour appliquer cette mise à jour. Il suffit d'arrêter PostgreSQL, et de mettre à jour les binaires.&lt;br /&gt;
Les utilisateurs qui auraient laissé passer plusieurs mises à jour auront éventuellement quelques étapes post-mise à jour à effectuer.&lt;br /&gt;
Pour les détails, on peut se référer aux notes de versions.&lt;br /&gt;
&lt;h2&gt;Liens&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt; [Téléchargement](http://www.postgresql.org/download)
&lt;/li&gt;
&lt;li&gt; [Notes de version](http://www.postgresql.org/docs/current/static/release.html)
&lt;/li&gt;
&lt;li&gt; [Page de sécurité](http://www.postgresql.org/support/security/)
&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Nouvelles versions mineures</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2015/05/22/Nouvelles-versions-mineures" rel="alternate" type="text/html"
    title="Nouvelles versions mineures" />
    <id>urn:md5:1b450c6c6f914151a882d2ff32f04691</id>
    <published>2015-05-22T15:40:00+02:00</published>
    <updated>2015-05-22T15:44:14+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le PostgreSQL Global Development Group a publié un correctif qui concerne de nombreuses fonctionnalités et failles de sécurité.
Toutes les versions de PostgreSQL sont concernées. Les nouvelles versions sont 9.4.2, 9.3.7, 9.2.11, 9.1.16 et 9.0.20.
La mise à jour contient le correctif d'une possible corruption de données sur les versions 9.3 et 9.4 de PostgreSQL. Il est recommandé de procéder à la mise à jour dès que possible.&lt;/p&gt;



&lt;h2&gt;Correctif de la corruption de données&lt;/h2&gt;


&lt;p&gt;Les utilisateurs des versions 9.3 et 9.4 sont concernés par ce correctif. Les versions 9.2 ou précédentes ne sont pas affectées.
La mise à jour corrige le problème du bouclage d'identifiant «&amp;nbsp;multixact&amp;nbsp;» (&quot;multixact wraparound&quot;), qui induit une corruption ou une perte de données. Les utilisateurs dont le taux de transactions est très élevé (1 million par heure) sur des bases ayant de nombreuses clés étrangères sont particulièrement vulnérables.
Il est plus que recommandé de procéder aux mises à jour des installations dans les prochains jours.&lt;/p&gt;


&lt;h2&gt;Correctifs de sécurité&lt;/h2&gt;


&lt;p&gt;Cette mise à jour corrige trois failles de sécurité rapportées ces derniers mois. Aucune n'est particulièrement urgente. Toutefois, il est conseillé aux utilisateurs de vérifier si leurs installations sont concernées.&lt;/p&gt;


&lt;pre&gt;   CVE-2015-3165 Double libération de mémoire après timeout d'authentification.
   CVE-2015-3166 Erreurs imprévues de la bibliothèque standard
   CVE-2015-3167 pgcrypto contient plusieurs messages d'erreur lors de déchiffrement avec une mauvaise clé.&lt;/pre&gt;


&lt;p&gt;Il est également conseillé aux utilisateurs des authentifications par Kerberos, GSSAPI, ou SSPI de positionner include_realm à 1 dans le fichier pg_hba.conf, cette valeur devenant la valeur par défaut dans les futures versions.&lt;/p&gt;


&lt;p&gt;Pour plus d'informations sur ces failles, on peut se référer aux pages de sécurité sur le site de PostgreSQL.&lt;/p&gt;


&lt;h2&gt;Autres correctifs et améliorations&lt;/h2&gt;


&lt;p&gt;Une nouvelle version, qui n'est pas celle par défaut, de l'extension citext corrige les fonctions regexp_matches() précédemment non-documentées, pour les aligner sur les versions texte usuelles de ces fonctions. La version corrigée utilisant un type de retour différent de l'ancienne, il est nécessaire de tester les applications avant d'exécuter la commande &quot;ALTER EXTENSION citext UPDATE&quot;.&lt;/p&gt;


&lt;p&gt;Plus de 50 autres correctifs sont fournis par ces mises à jour.
La plupart concernent l'ensemble des versions supportées.&lt;/p&gt;


&lt;p&gt;On peut citer&amp;nbsp;:&lt;/p&gt;

&lt;pre&gt; * la traduction des dates et estampilles temporelles infinies en &quot;infinity&quot; lors de conversion en json ;
 * la correction des fonctions json/jsonb populate_record() et to_record() ;
 * la correction de la vérification des contraintes d'exclusion différée ;
 * l'amélioration de la planification des requêtes touchant plusieurs schémas ;
 * la correction de trois problèmes de jointures ;
 * la garantie de verrouillage correct lors de l'utilisation de barrières de sécurité (&quot;security barriers&quot;) dans les vues ;
 * la correction du verrou mort au démarrage lorsque le paramètre max_prepared_transactions est trop faible ;
 * le parcours récusif par fsync() du répertoire de données après un crash ;
 * la correction du lanceur d'autovacuum qui pouvait ne pas s'arrêter ;
 * la gestion de signaux inattendus dans la fonction LockBufferForCleanup() ;
 * la correction du crash de COPY IN vers une table possédant des contraintes de vérification ;
 * la suppression de l'attente de réplication synchrone sur les transactions en lecture seule ;
 * la correction de deux problèmes sur les index hash ;
 * la suppression des fuites mémoire lors de vacuum sur les index GIN ; 
 * la correction de deux problèmes sur les « background workers » ;
 * plusieurs corrections sur la réplication par décodage logique ;
 * plusieurs corrections sur pg_dump et pg_ugrade.&lt;/pre&gt;


&lt;p&gt;Cette version inclut une mise à jour vers la version 2015d de tzdata, avec les mise à jour pour l'Egypte, la Mongolie, la Palestine, et des modifications historiques pour le Canada et le Chili.&lt;/p&gt;


&lt;h2&gt;Fin de vie proche pour la branche 9.0&lt;/h2&gt;


&lt;p&gt;La version 9.0 arrive en fin de vie en septembre 2015. Il est probable que cette mise à jour soit une des dernières de cette branche. Les utilisateurs de PostgreSQL 9.0 peuvent commencer à planifier la mise à jour vers une version plus récente. Voir la page d'information sur les versions (http://www.postgresql.org/support/versioning ) pour de plus amples informations sur les dates de fin de vie.&lt;/p&gt;


&lt;p&gt;Comme pour les autres versions mineures, il n'est pas nécessaire d'extraire et recharger les bases ou d'utiliser pg_upgrade pour appliquer cette mise à jour. Il suffit d'arrêter PostgreSQL, et de mettre à jour les binaires.&lt;/p&gt;


&lt;p&gt;Les utilisateurs de l'extension citext auront une commande à jouer.&lt;/p&gt;


&lt;p&gt;Les utilisateurs ayant négligé les mises à jour précédentes auront peut-être quelques actions post-mise à jour à effectuer.&lt;/p&gt;


&lt;h2&gt;Liens&amp;nbsp;:&lt;/h2&gt;

&lt;pre&gt; * &lt;a href=&quot;http://www.postgresql.org/download&quot;&gt;Téléchargement&lt;/a&gt;
 * &lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot;&gt;Notes de version&lt;/a&gt;
 * &lt;a href=&quot;http://www.postgresql.org/support/security/&quot;&gt;Page sécurité&lt;/a&gt;&lt;/pre&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PostgreSQL 9.4.0</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0" rel="alternate" type="text/html"
    title="PostgreSQL 9.4.0" />
    <id>urn:md5:e78750a874dbc54b0bf27c7016d9d0bf</id>
    <published>2014-12-18T17:00:00+01:00</published>
    <updated>2014-12-18T18:57:26+01:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;br /&gt;&lt;h2&gt;Contenu&lt;/h2&gt;
&lt;p&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#original_release&quot;&gt;Texte original&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#features&quot;&gt;Détail des fonctionnalités&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#download&quot;&gt;Téléchargement&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#docs&quot;&gt;Documentation&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#license&quot;&gt;Licence&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#contact&quot;&gt;Contacts&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#graphics&quot;&gt;Images et Logos&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#quoted_companies&quot;&gt;Informations concernant les sociétés citées&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2014/12/18/PostgreSQL-9.4.0#companies&quot;&gt;Support professionnel&lt;/a&gt;&lt;/p&gt;
&lt;img src=&quot;http://media.postgresql.org/propaganda/postgres94_sm.jpg&quot; /&gt;

&lt;h2&gt;Texte original&lt;/h2&gt;
&lt;h2&gt;PostgreSQL 9.4 améliore la flexibilité, l'évolutivité et les performances&lt;/h2&gt;
&lt;p&gt;
18 DÉCEMBRE 2014&amp;nbsp;: Le PostgreSQL Global Development Group annonce la sortie de PostgreSQL 9.4. Il s'agit de la dernière version en date du système de gestion de bases de données libre de référence.
Cette version ajoute de nombreuses fonctionnalités qui améliorent la flexibilité, l'évolutivité et les performances de PostgreSQL. Et cela pour de nombreux cas d'utilisation différents, avec notamment l'amélioration du support de JSON, de la réplication et de la performance de l'indexation.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;Flexibilité&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
Avec le nouveau type de données JSONB, plus besoin de choisir entre le stockage relationnel et non-relationnel : il y a les deux à la fois.
JSONB supporte les recherches rapides et les requêtes de recherche d'expressions simples en utilisant les index de type Generalized Inverted Indexes (GIN).
De nombreuses nouvelles fonctions permettent de manipuler les données JSON, avec des performances souvent meilleures que celles obtenues avec les bases de données orientées document les plus populaires.
Avec JSONB, les données des  tables peuvent être facilement intégrées à celles des documents  permettant d'obtenir un environnement de bases de données complètement intégré.
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;JSONB rapproche PostgreSQL des développeurs de la communauté JavaScript en permettant aux données JSON d'être stockées et requêtées nativement.
node.js et les autres frameworks JavaScript côté serveur peuvent désormais profiter de la sécurité et de la robustesse de PostgreSQL, tout en continuant à stocker les données dans le format sans schéma qu'ils préfèrent&amp;nbsp;», précise Matt Soldo, Responsable Produit chez Heroku Postgres.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;Evolutivité&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
Avec la 9.4, le décodage logique (Logical Decoding) offre une nouvelle API pour lire, filtrer et manipuler le flux de réplication de PostgreSQL.
Cette interface est la fondation de nouveaux outils de réplication, comme la réplication bi-directionnelle (Bi-Directional Replication), qui permet la création de grappes PostgreSQL multi-maîtres.
D'autres améliorations dans la réplication système concernent l'administration et l'utilisation des réplicats, notamment les connecteurs de réplication et les réplicats différés.
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;La raison principale à notre adoption immédiate de PostgreSQL 9.4 en production est la nouvelle fonctionnalité de décodage logique&amp;nbsp;», explique Marco Favale, responsable de production Cartographique chez Navionics. «&amp;nbsp;La possibilité d'écrire des greffons de sortie personnalisés et flexibles nous permettra de récupérer de manière transparente les modifications sur  certaines tables et de les répliquer où nous voulons, tout en supprimant les contraintes relatives aux solutions de réplication par triggers, lourdes et plus complexes à gérer.&amp;nbsp;»
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;Zalando dépend de la stabilité et des performances de centaines de serveurs de bases de données PostgreSQL pour satisfaire des millions de clients partout en Europe&amp;nbsp;», annonce Valentine Gogichashvili, Team Lead Database Operations chez Zalando Technologies. «&amp;nbsp;Nous sommes impatients d'utiliser la réplication différée, immédiatement utilisable, et nous allons évaluer les outils de réplication bi-directionnelle dès qu'ils seront disponibles.&amp;nbsp;»
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;Performances&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
La version 9.4 apporte également de multiples gains de performance, permettant aux utilisateurs de tirer plus d'avantages de leur serveur PostgreSQL dont :
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;des améliorations des index GIN, avec une taille réduite de 50% et une vitesse multipliée par 3&amp;nbsp;;
&lt;/li&gt;
&lt;li&gt;des vues matérialisées qui peuvent être mises à jour de manière concurrente, pour du reporting plus rapide et plus à jour&amp;nbsp;;
&lt;/li&gt;
&lt;li&gt;le rechargement rapide du cache de base de données au redémarrage avec pg_prewarm&amp;nbsp;;
&lt;/li&gt;
&lt;li&gt;une écriture parallèle plus rapide des journaux de transaction de PostgreSQL.
&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
«&amp;nbsp;Nous allons vraiment beaucoup gagner avec le rafraichissement concurrent des vues matérialisées, les réplicats différés (qui permettront aux restaurations après incident d'être plus robustes), ainsi qu'avec les améliorations de performances apportées par chaque nouvelle version&amp;nbsp;», ajoute Marco Favale.
&lt;/p&gt;
&lt;h2&gt;Détail des fonctionnalités&lt;/h2&gt;
&lt;p&gt;
Plus d'informations sur les fonctionnalités ci-dessus et les autres dans les liens suivants :
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/docs/9.4/static/release-9-4.html&quot;&gt;Notes de version&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/docs/9.4/static/index.html&quot;&gt;9.4 Documentation&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.4&quot;&gt;Nouveautés de PostgreSQL 9.4 (Anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://www.youtube.com/watch?v=oQ1LSW31Y1A&amp;amp;list=PLWW0CjV-Tafa2jvcjihXwSvZZKsLAsb9Y#t=2492&quot;&gt;9.4 On The Floor presentation (vidéo, Anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/about/featurematrix&quot;&gt;Matrice de fonctionnalités (En anglais seulement)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://wiki.postgresql.org/wiki/BDR_User_Guide&quot;&gt;Réplication bi-directionnelle (BDR)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://www.youtube.com/watch?v=MmzbnMqBMI0&amp;amp;index=28&amp;amp;list=PLWW0CjV-Tafa2jvcjihXwSvZZKsLAsb9Y&quot;&gt;Présentation sur l'utilisation de JSON dans la version 9.4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Téléchargement&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/download&quot;&gt;Page de téléchargement&lt;/a&gt; avec les liens pour les logiciels et outils d'installation pour Windows, Linux, OSX, BSD et Solaris.&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/ftp/source/v9.4.0&quot;&gt;Code Source&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://pgxn.org&quot;&gt;PostgreSQL Extension Network&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/download/product-categories&quot;&gt;Logiciels commerciaux et logiciels relatifs à PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Documentation&lt;/h2&gt;
&lt;p&gt;
La documentation au format HTML et les pages de manuel sont installées avec PostgreSQL. La &lt;a href=&quot;http://www.postgresql.org/docs/9.4/interactive&quot;&gt;documentation en ligne&lt;/a&gt;, exhaustive et interactive, peut être parcourue, interrogée et commentée librement.
&lt;/p&gt;
&lt;h2&gt;Licence&lt;/h2&gt;
&lt;p&gt;
PostgreSQL utilise la &lt;a href=&quot;http://www.postgresql.org/about/licence&quot;&gt;licence PostgreSQL&lt;/a&gt;, une licence permissive de type BSD. Cette &lt;a href=&quot;http://www.opensource.org/licenses/postgresql&quot;&gt;licence certifiée par l'OSI&lt;/a&gt; est largement appréciée pour sa flexibilité et sa compatibilité avec le monde des affaires, puisqu'elle ne restreint pas l'utilisation de PostgreSQL dans les applications propriétaires ou commerciales. Associée à un support proposé par de multiples sociétés et une propriété publique du code, sa licence rend PostgreSQL très populaire parmi les revendeurs souhaitant embarquer une base de données dans leurs produits sans avoir à se soucier des prix de licence, des verrous commerciaux ou modifications des termes de licence.
&lt;/p&gt;
&lt;h2&gt;Contacts&lt;/h2&gt;
&lt;p&gt;Pages Web&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org&quot;&gt;Page d'accueil PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.fr&quot;&gt;Page d'accueil de l'association francophone&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Contact presse&lt;/p&gt;
&lt;p&gt;France et pays francophones&lt;br /&gt;
Stéphane Schildknecht&lt;br /&gt;
&lt;a href=&quot;mailto:fr@postgresql.org&quot;&gt;fr at postgresql dot org&lt;/a&gt;&lt;br /&gt;
+33 (0) 617 11 37 42&lt;/p&gt;
&lt;p&gt;Pour les contacts d'autres régions, consulter &lt;a href=&quot;http://www.postgresql.org/about/press/contact&quot;&gt;la liste des contacts internationaux.&lt;/a&gt;&lt;/p&gt;
&lt;a name=&quot;graphics&quot;&gt;Images et Logos&lt;/a&gt;
&lt;img src=&quot;http://media.postgresql.org/propaganda/elephant2.png&quot; /&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://media.postgresql.org/propaganda/postgres94_large.jpg&quot;&gt;Affiche de PostgreSQL 9.4&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://media.postgresql.org/propaganda/pg94_acid_large.jpg&quot;&gt;Bouton NoSQL On Acid&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://media.postgresql.org/propaganda/elephant.png&quot;&gt;Logo de l'éléphant de PostgreSQL, format PNG&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://media.postgresql.org/propaganda/elephant64.jpg&quot;&gt;Icône de l'éléphant de PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://media.postgresql.org/propaganda/slonik_with_black_text_and_tagline.gif&quot;&gt;Bannière de PostgreSQL avec le logo, l'éléphant de PostgreSQL et le slogan&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
Tous les logos sont modifiables et redistribuables selon les termes de la licence PostgreSQL. Le nom PostgreSQL et le logo sont des marques déposées de la PostgreSQL Community Association of Canada.
&lt;/p&gt;
&lt;h2&gt;Informations concernant les sociétés citées&lt;/h2&gt;
&lt;p&gt;
«&amp;nbsp;JSONB rapproche  PostgreSQL des développeurs de la communauté JavaScript en permettant  aux données JSON d'être stockées et requêtées nativement.
node.js  et les autres frameworks JavaScript côté serveur peuvent désormais  profiter de la sécurité et de la robustesse de PostgreSQL, tout en  continuant à stocker les données dans le format sans schéma qu'ils  préfèrent&amp;nbsp;», précise Matt Soldo, Responsable Produit chez Heroku Postgres.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;À propos de Heroku&lt;/strong&gt;&amp;nbsp;: &lt;a href=&quot;http://www.heroku.com&quot;&gt;Heroku&lt;/a&gt; est le leader des plateformes en tant que service (PaaS), orienté sur la facilité d'utilisation, l'automatisation, et la fiabilité. Heroku, dont le siège se trouve à San Francisco, en Californie, est un supporter passioné et actif sur les technologies Ruby et les architectures en nuage. Pour plus d'informations, visitez &lt;a href=&quot;http://www.heroku.com&quot;&gt;notre site web&lt;/a&gt; et &lt;a href=&quot;http://blog.heroku.com&quot;&gt;notre blog&lt;/a&gt; ou suivez &lt;a href=&quot;http://twitter.com/heroku&quot;&gt;Heroku sur Twitter&lt;/a&gt;. Heroku est une filiale, propriété exclusive de salesforce.com. Contact (uniquement en Anglais): &lt;a href=&quot;mailto:pr@heroku.com&quot;&gt;Heroku PR&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;La raison principale à  notre adoption immédiate de PostgreSQL 9.4 en production est la  nouvelle fonctionnalité de décodage logique&amp;nbsp;», explique Marco Favale, responsable de production  Cartographique chez Navionics. «&amp;nbsp;La possibilité d'écrire des greffons de  sortie personnalisés et flexibles nous permettra de récupérer de  manière transparente les modifications sur  certaines tables et de les répliquer où nous voulons, tout en supprimant les contraintes relatives aux solutions de réplication par triggers, lourdes et plus complexes à gérer.&amp;nbsp;»
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;Nous  allons vraiment beaucoup gagner avec le rafraichissement concurrent des  vues matérialisées, les réplicats différés (qui permettront aux  restaurations après incident d'être plus robustes), ainsi qu'avec les  améliorations de performances apportées par chaque nouvelle version&amp;nbsp;»,  ajoute Marco Favale.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;À propos de Navionics&lt;/strong&gt;&amp;nbsp;: Navionics (www.navionics.com) dispose de la plus important base de données de cartes marines, de voies navigables et de lacs au monde, couvrant les océans, toutes les mers de la planète ainsi que des centaines de milliers de lacs et rivières. Nombre de ces cartes ont été élaborées par le biais d'enquêtes exclusives de Navionics réalisées à la fois sur le terrain et par sondage à distance notamment par imagerie satellitaire et scanners  laser aéroportés. Navionics est situé en Italie, aux États-Unis, en Inde et en Estonie, avec des ventes et des services partout dans le monde. Contact (Anglais ou Italien): &lt;a href=&quot;mailto:mfavale@navionics.com&quot;&gt;Marco Favale&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;Zalando dépend de la stabilité et des performances de centaines de serveurs de bases de données PostgreSQL pour satisfaire des millions de clients partout en Europe. Nous nous tenons à jour des dernières versions de développement de PostgreSQL depuis 2010, lorsque nous avons mis en place la première Release Candidate de PostgreSQL 9.0.  Chaque nouvelle version nous apporte plus de performances et des améliorations dont nous bénéficions pratiquement dès le premier jour. Nous sommes impatients d'utiliser la réplication différée, immédiatement utilisable avec PostgreSQL 9.4. Nous allons évaluer les outils de réplication bi-directionnelle, rendus possibles avec l'introduction du décodage logique. Notre équipe travaille déjà à l'amélioration de nos outils de supervision open source qui bénéficieront des statistiques temps réel sur les commandes fournies par le module pg_stat_statements et les multiples améliorations qu'il a reçu dans la version 9.4. Les améliorations des aggrégats, comme filter, rendent l'écriture des requêtes avec aggrégats plus facile et encourangent par la suite nos collègues à écrire du SQL bien plus élégant qu'auparavant&amp;nbsp;», explique Valentine Gogichashvili, responsable des opérations bases de données chez Zalando Technologies.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;Zalando&lt;/strong&gt; est l'une des plus grosses entreprises de e-commerce en europe, opérant dans 15 pays à ce jour. Chez Zalando Technology, nous avons développé l'essentiel de notre plateforme en interne, notamment la boutique, les systèmes internes et le logiciel de logistique. En ce qui concerne le développement et les opérations sur les systèmes, nous utilisons majoritairement des solutions open source et travaillons en petites équipes flexibles. Nos équipes technologiques créent l'incroyable aventure de shopping en ligne Zalando, que des millions de clients apprécient chaque jour. Venez visiter &lt;a href=&quot;http://www.zalando.de/&quot;&gt;notre site web&lt;/a&gt; ou &lt;a href=&quot;http://tech.zalando.com/&quot;&gt;notre blog&lt;/a&gt;
&lt;/p&gt;
&lt;h2&gt;Support professionnel&lt;/h2&gt;
&lt;p&gt;PostgreSQL bénéficie du support de nombreuses sociétés, qui financent des développeurs, fournissent l'hébergement ou un support financier. Les plus fervents supporters sont listés sur la &lt;a href=&quot;http://www.postgresql.org/about/sponsors&quot;&gt;page des mécènes du développement.&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Le travail sur JSONB a été financé par Engine Yard et soutenu par Heroku, Andrew Dunstan et plusieurs autres contributeurs. Le travail sur le Décodeur Logique a été piloté par 2ndQuadrant. Plusieurs autres sociétés ont contribué à cette version.&lt;/p&gt;
&lt;p&gt;Il existe également une très grande communauté de &lt;a href=&quot;http://www.postgresql.org/support/professional_support&quot;&gt;sociétés fournissant du support PostgreSQL&lt;/a&gt;, des consultants indépendants aux sociétés multinationales.&lt;/p&gt;
&lt;p&gt;Les &lt;a href=&quot;http://www.postgresql.org/about/donate&quot;&gt;dons&lt;/a&gt; sont acceptés avec plaisir.&lt;/p&gt;
&lt;p&gt;Vous pouvez également acheter des produits dérivés de qualité sur la &lt;a href=&quot;http://www.zazzle.com/postgresql&quot;&gt;Boutique Zazzle PostgreSQL&lt;/a&gt;.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Publication de PostgreSQL 9.4 RC1</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2014/11/21/Publication-de-PostgreSQL-9.4-RC1" rel="alternate" type="text/html"
    title="Publication de PostgreSQL 9.4 RC1" />
    <id>urn:md5:91e3361828ddaa2f3a89a1d7019cb675</id>
    <published>2014-11-21T12:34:00+01:00</published>
    <updated>2014-11-21T13:39:29+01:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le PostgreSQL Global Development Group a publié la version 9.4 RC1.&lt;/p&gt;


&lt;p&gt;Il s'agit de la première Release Candidate pour la prochaine version de PostgreSQL.&lt;br /&gt;
Cette version devrait être identique à la version finale de PostgreSQL 9.4, à l'exception des éventuels bogues rencontrés dans les deux prochaines semaines.&lt;/p&gt;


&lt;p&gt;Merci de la télécharger et de la tester, et au besoin de rapporter les failles rencontrées.&lt;/p&gt;


&lt;p&gt;La liste complète des fonctionnalités de la version 9.4 est disponible sur la page des notes de version&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/docs/devel/static/release-9-4.html&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/docs/devel/static/release-9-4.html&lt;/a&gt;.&lt;/p&gt;


&lt;p&gt;Les descriptions détaillées et les notes complémentaires concernant les nouvelles fonctionnalités sont disponibles sur la page Wiki des fonctionnalités de la version 9.4&amp;nbsp;:
&lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.4&quot; hreflang=&quot;en&quot;&gt;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.4&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Nous dépendons des tests de la communauté pour garantir que cette version est réellement performante et exempte de bogues.&lt;br /&gt;
Merci de télécharger la RC1 et de la tester dès que possible en conditions opérationnelles réelles. Vos retours et critiques sont indispensables aux développeurs.&lt;br /&gt;
Les fonctionnalités et API de cette RC1 sont identiques à la 9.4.0 finale, ce qui permet de construire et tester les applications avec celles-là.&lt;/p&gt;


&lt;p&gt;Plus d'informations sur la façon de tester et de rapporter les problèmes sur la page suivante&amp;nbsp;: &lt;br /&gt;
&lt;a href=&quot;http://www.postgresql.org/developer/beta&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/developer/beta&lt;/a&gt;.&lt;/p&gt;


&lt;p&gt;PostgreSQL 9.4 RC1 peut être obtenu en se rendant sur la page :&lt;br /&gt;
&lt;a href=&quot;http://www.postgresql.org/download&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/download&lt;/a&gt;&lt;br /&gt;
Cette page inclut les binaires et installeurs pour Windows, Linux et Mac.&lt;/p&gt;


&lt;p&gt;La documentation complète de la nouvelle version est disponible en ligne :&lt;br /&gt;
&lt;a href=&quot;http://www.postgresql.org/docs/devel/static&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/docs/devel/static&lt;/a&gt;, et s'installe également avec PostgreSQL.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Publication de PostgreSQL 9.4 bêta 3</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2014/10/14/Publication-de-PostgreSQL-9.4-b%C3%AAta-3" rel="alternate" type="text/html"
    title="Publication de PostgreSQL 9.4 bêta 3" />
    <id>urn:md5:b248da8c321b004045e27dd4cfea6ff4</id>
    <published>2014-10-14T19:17:00+02:00</published>
    <updated>2014-10-14T21:27:28+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le «&amp;nbsp;PostgreSQL Global Development Group&amp;nbsp;» vient de publier la version 9.4 bêta 3, la nouvelle révision bêta de la prochaine version.
&lt;br /&gt;
&lt;br /&gt;
Cette bêta présente toutes les fonctionnalités qui seront disponibles dans la version 9.4, ainsi que les correctifs de la plupart des problèmes rencontrés pas les utilisateurs qui ont testé la bêta 2.
Nous vous invitons à télécharger, tester, et signaler ce que vous trouverez.
&lt;br /&gt;
&lt;br /&gt;
Le changement principal dans la bêta 3 est la modification du type de format de données pour JSONB, afin de rendre les champs JSONB plus faciles à compacter et de réduire l'espace de stockage nécessaire.
Ce changement n'est pas rétrocompatible. Les utilisateurs qui ont chargé des données dans les champs JSONB, en utilisant la 9.4 bêta 1 ou bêta 2, devront utiliser pg_dump et lancer une restauration pour passer en bêta 3.
&lt;br /&gt;
&lt;br /&gt;
Parmi les autres changements faits depuis la bêta 2, citons&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Changement des arguments de pg_recvlogical --create/--drop en --create-slot/--drop-slot&lt;/li&gt;
&lt;li&gt;Éviter le délai excessif au démarrage du «&amp;nbsp;background worker&amp;nbsp;»&lt;/li&gt;
&lt;li&gt;Suppression du paramètre de configuration num_xloginsert_locks, remplacé par #define&lt;/li&gt;
&lt;li&gt;Correction de l'option &lt;code&gt;--if-exists&lt;/code&gt; de pg_dump pour les «&amp;nbsp;large objects&amp;nbsp;»&lt;/li&gt;
&lt;li&gt;Suppression de l'interdiction des clés d'objet JSON de taille nulle&lt;/li&gt;
&lt;li&gt;Retour de NULL par json_object_agg s'il n'y a pas de ligne&lt;/li&gt;
&lt;li&gt;Les instructions ALTER SYSTEM sont tracées comme des DDL&lt;/li&gt;
&lt;li&gt;Correction de l'impossibilité pour la contribution auto_explain à afficher les informations temporelles par nœud&lt;/li&gt;
&lt;li&gt;Plusieurs correctifs des vérifications TAP&lt;/li&gt;
&lt;li&gt;Support de la commande ALTER SYSTEM RESET&lt;/li&gt;
&lt;li&gt;Correctif de power_var_int() pour les exposants d'entiers long&lt;/li&gt;
&lt;li&gt;Correctif pour vacuumdb --analyze-in-stages --all&lt;/li&gt;
&lt;li&gt;Modification de la façon dont la latence est calculée avec l'option --rate de pgbench&lt;/li&gt;
&lt;li&gt;Support de ALTER ... ALL IN pour les déclencheurs sur événement&lt;/li&gt;
&lt;li&gt;Suppression de la restriction aux seuls superutilisateurs pour pg_is_xlog_replay_paused()&lt;/li&gt;
&lt;li&gt;Correction de FOR UPDATE NOWAIT sur les chaînes de tuples actualisés&lt;/li&gt;
&lt;li&gt;Correction de la gestion des Var pour les vues de barrière de sécurité&lt;/li&gt;
&lt;li&gt;Correction des rafraichissements concurrents de niveau superutilisateur pour les vues matérialisées appartenant à autrui&lt;/li&gt;
&lt;li&gt;Pas de suivi des DEALLOCATE dans pg_stat_statements&lt;/li&gt;
&lt;li&gt;Correction du comportement aux limites des opérateurs d'extraction JSON/JSONB&lt;/li&gt;
&lt;li&gt;Modification de la façon dont la cartographie des «&amp;nbsp;tablespace&amp;nbsp;» est effectuée par pg_basebackup&lt;/li&gt;
&lt;li&gt;Refonte du MOVE ALL en ALTER ALL ... IN TABLESPACE&lt;/li&gt;
&lt;li&gt;Correction du core dump de l'opérateur jsonb &lt;/li&gt;
&lt;li&gt;Abandon des modifications du psql pour supporter le mode étendu à retour chariot&lt;/li&gt;
&lt;li&gt;Ajout de l'option -S pour pg_receivexlog&lt;/li&gt;
&lt;li&gt;Rejet des doublons de noms de colonnes dans les listes de colonnes référencées par les clés étrangères&lt;/li&gt;
&lt;li&gt;Correction du crash du checkpointer&lt;/li&gt;
&lt;li&gt;Multiples corrections mineures sur JSON et les fonctionnalités JSONB&lt;/li&gt;
&lt;li&gt;Multiples corrections mineures sur le décodage logique&lt;/li&gt;
&lt;li&gt;De multiples corrections de bugs concernant d'anciens problèmes sont à venir dans une prochaine version mineure&lt;/li&gt;
&lt;li&gt;Également des améliorations et  modifications dans la documentation&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;La bêta 3 inclut des changements sur pg_control et les catalogues système. De fait, les utilisateurs ayant testé la bêta 1 ou la bêta 2 devront les mettre à jour pour tester la bêta 3.
Nous suggérons d'utiliser pg_upgrade pour cette mise à jour afin de le tester également.&lt;/p&gt;
&lt;p&gt;Pour une liste complète des fonctionnalités de la version 9.4 bêta, veuillez consulter les notes de version &lt;a href=&quot;http://www.postgresql.org/docs/devel/static/release-9-4.html&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/docs/devel/static/release-9-4.html&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Des descriptions et notes additionnelles des nouvelles fonctionnalités sont disponibles sur la page wiki des fonctionnalités 9.4&amp;nbsp;: &lt;br /&gt;&lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.4&quot; hreflang=&quot;en&quot;&gt;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.4&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Nous avons besoin de notre communauté pour nous aider à tester la prochaine version afin de garantir qu'elle a de bonnes performances et qu'elle est exempte de bogues.&lt;/p&gt;
&lt;p&gt;Nous vous invitons à télécharger PostgreSQL 9.4 bêta 3 et à l'essayer avec vos projets et applications dès que possible, puis à faire vos retours et critiques aux développeurs PostgreSQL.&lt;/p&gt;
&lt;p&gt;Les fonctionnalités et APIs de la bêta 3 ne changeront pas de manière substantielle avant la version finale, il est donc possible de créer des applications autour des nouvelles fonctionnalités en toute sécurité.&lt;/p&gt;
&lt;p&gt;Plus d'informations sur la manière de tester et de signaler les problèmes &lt;a href=&quot;http://www.postgresql.org/developer/beta&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/developer/beta&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Vous trouverez la bêta 3 de PostgreSQL 9.4, comprenant les binaires et les installeurs pour Windows, Linux et Mac, sur la page de téléchargement &lt;a href=&quot;http://www.postgresql.org/download&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/download&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;La documentation complète de la nouvelle version, disponible en ligne &lt;a href=&quot;http://www.postgresql.org/docs/9.4/static/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/docs/9.4/static/&lt;/a&gt;,  est également installée avec postgreSQL.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PostgreSQL 9.3.4, 9.2.8, 9.1.13, 9.0.17, et 8.4.21 publiées</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2014/03/20/Sortie-des-versions-correctives-9.3.4%2C-9.2.8%2C-9.1.13%2C-9.0.17%2C-et-8.4.21" rel="alternate" type="text/html"
    title="PostgreSQL 9.3.4, 9.2.8, 9.1.13, 9.0.17, et 8.4.21 publiées" />
    <id>urn:md5:e32332c6f373f0e391eb750d2a81e9ab</id>
    <published>2014-03-20T19:42:00+01:00</published>
    <updated>2014-03-24T16:11:03+01:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">&lt;p&gt;Le PostgreSQL Global Development Group a publié une mise-à-jour de
toutes les versions supportées du SGBD, soit les versions 9.3.4, 9.2.8,
9.1.13, 9.0.17, et 8.4.21.&lt;/p&gt;    &lt;p&gt;Le PostgreSQL Global Development Group a publié une mise-à-jour de toutes les versions supportées du SGBD, soit les versions 9.3.4, 9.2.8, 9.1.13, 9.0.17, et 8.4.21.&lt;/p&gt;
&lt;p&gt;Cette version corrige un problème de corruption des données par réplication et reprise sur panne sur la version 9.3, ainsi que quelques autres problèmes sur toutes les versions.
Il est urgent pour tous les utilisateurs de version 9.3 d'effectuer la mise à jour. L'urgence est moindre pour les autres versions.&lt;/p&gt;
&lt;p&gt;La corruption de données sous PostgreSQL 9.3 affecte les serveurs de secours en réplication binaire, les serveurs restaurés par PITR et les serveurs autonomes en cas de reprise sur incident.&lt;/p&gt;
&lt;p&gt;Le bogue entraîne une corruption d'index irréparable lors de la récupération du fait d'un rejeu incorrect des opérations de verrous de niveau ligne. Cela peut conduire à des résultats de requête inconsistants en fonction de l'utilisation ou non d'un index, et éventuellement amener à la violation de clés primaires ou problèmes similaires.&amp;nbsp;&lt;/p&gt;
&lt;p&gt;C'est pour cette raison qu'il est nécessaire de recréer tous les serveurs de secours après l'application de la mise à jour.&lt;/p&gt;
&lt;p&gt;Autres correctifs sur la seule version 9.3&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Assurance que les fichiers de statistiques des bases supprimées sont effacés&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Permettre aux vues matérialisées d'être référencées par les requêtes UPDATE et DELETE&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Ajout du paramètre data_checksum en lecture seule&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Empêcher les propagations abusives d'opérateurs dans postgres_fdw.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Ce correctif résoud également d'autres problèmes sur les autres versions de PostgreSQL, à savoir :&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Résolution d'un problème de consistence temporelleavec NOTIFY&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Permettre l'annulation de l'exécution d'une expression rationnelle&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Vérification des index sur les nouvelles colonnes insérées plus performantes&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Empêcher la déconnexion prématurée du walsender&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Empêcher les erreurs de mémoire sur les versions de Windows les plus récentes&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Mise-à-jour des fichiers de fuseaux horaires.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Les autres modifications et les détails des problèmes ci-dessus sont consultables dans les « Release Notes ». &lt;/p&gt;
&lt;p&gt;Des informations complémentaires concernant deux des bogues affectant la version 9.3 se trouvent sur la page Wiki de la mise à jour vers 9.3.4.&lt;/p&gt;
&lt;p&gt;L'attention des utilisateurs de versions 8.4 est attirée sur le fait qu'elle atteint sa fin de vie (EOL) d'ici trois mois, conformément à la &lt;a href=&quot;http://www.postgresql.org/support/versioning/&quot;&gt;Politique de Versions&lt;/a&gt;.
Cela signifie que nous approchons de la dernière version de cette branche. Il est recomandé de prévoir la migration vers une version plus récente de PostgreSQL.&lt;/p&gt;
&lt;p&gt;Comme pour toute mise-à-jour mineure, il n'est pas nécessaire de prévoir un export/import des bases ou d'utiliser pg_upgrade pour l'appliquer. Il suffit d'arrêter l'instance et de mettre à jour les binaires.
Des étapes supplémentaires peuvent être nécessaires si plusieurs mises-à-jour mineures ont été omises. On se référera aux notes de versions pour les détails.&lt;/p&gt;
&lt;h2&gt;Liens :&amp;nbsp;&lt;/h2&gt;
&lt;ul&gt;&lt;li&gt;&lt;a href=&quot;http://postgresql.org/download&quot;&gt;Téléchargement&lt;/a&gt;&amp;nbsp;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot;&gt;Notes de version&lt;/a&gt;&amp;nbsp;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://wiki.postgresql.org/wiki/20140320UpdateIssues&quot;&gt;Page Wiki de mise-à-jour 9.3.4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sortie des versions correctives 9.3.3, 9.2.7, 9.1.12, 9.0.16 et 8.4.20</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2014/02/20/Sortie-des-versions-correctives-9.3.3%2C-9.2.7%2C-9.1.12%2C-9.0.16-et-8.4.20" rel="alternate" type="text/html"
    title="Sortie des versions correctives 9.3.3, 9.2.7, 9.1.12, 9.0.16 et 8.4.20" />
    <id>urn:md5:b4723d6d972b3f5686ce258eb21fafb9</id>
    <published>2014-02-20T15:01:00+01:00</published>
    <updated>2014-02-20T11:13:31+01:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;Le PostgreSQL Global Development Group publie aujourd'hui une mise-à-jour importante de toutes les versions supportées du SGBD PostgreSQL. Les versions publiées sont&amp;nbsp;: 9.3.3, 9.2.7, 9.1.12, 9.0.16 et 8.4.20.&lt;/p&gt;


&lt;p&gt;Cette mise-à-jour contient les correctifs de nombreux problèmes de sécurité et d'intégrité des données.&lt;/p&gt;


&lt;p&gt;Cette mise-à-jour doit être appliquée avec la plus grande célérité, spécialement si la réplication binaire est utilisée, ou dans le cas d'applications sécurisées.&lt;/p&gt;



&lt;h2&gt;Correctifs de sécurité&lt;/h2&gt;

&lt;hr /&gt;

&lt;p&gt;Cette mise-à-jour corrige l'annonce de sécurité &lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0060&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0060&lt;/a&gt;, qui relève que PostgreSQL n'applique pas correctement la permission WITH ADMIN OPTION de la gestion des rôles.&lt;br /&gt;
Avant ce correctif, tout membre d'un ROLE pouvait accorder à d'autres la possibilité d'accéder à ce ROLE, même s'il n'avait pas le pouvoir WITH ADMIN OPTION.
Il corrige aussi plusieurs problèmes d'escalade de privilèges, dont :&lt;br /&gt;
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0061&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0061&lt;/a&gt;, &lt;br /&gt;
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0062&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0062&lt;/a&gt;, &lt;br /&gt;
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0063&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0063&lt;/a&gt;, &lt;br /&gt;
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0064&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0064&lt;/a&gt;, &lt;br /&gt;
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0065&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0065&lt;/a&gt; et &lt;br /&gt;
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0066&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0066&lt;/a&gt;.&lt;/p&gt;


&lt;p&gt;Pour plus d'informations concernant ces problèmes, se référer aux &lt;a href=&quot;http://www.postgresql.org/support/security/&quot; hreflang=&quot;en&quot;&gt;pages de sécurité&lt;/a&gt; et au détail sur le &lt;a href=&quot;http://wiki.postgresql.org/wiki/20140220securityrelease&quot; hreflang=&quot;en&quot;&gt;WIKI&lt;/a&gt;.&lt;/p&gt;


&lt;p&gt;Avec cette version, nous alertons également les utilisateurs sur une faille de sécurité connue qui permet aux utilisateurs d'une même machine d'accéder à un compte système lors d'un &quot;make check&quot; en cas de compilation depuis les sources&amp;nbsp;:
&lt;a href=&quot;http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0067&quot; hreflang=&quot;en&quot;&gt;CVE-2014-0067&lt;/a&gt;.&lt;/p&gt;


&lt;p&gt;Cette faille ne peut être corrigée sans problème pour notre infrastructure de test, aussi nous publierons un correctif distinct, et publique. Cette vulnérabilité étant temporelle, il est fortement recommandé de ne pas lancer de &quot;make check&quot; sur des systèmes où se trouvent des comptes utilisateurs non approuvés.&lt;/p&gt;



&lt;h2&gt;Corectifs de réplication et d'intégrité des données&lt;/h2&gt;

&lt;hr /&gt;


&lt;p&gt;Cette mise-à-jour corrige également des problèmes affectant la réplication binaire et le verrouillage de niveau ligne, et peut conduire à des corruptions de données récupérables.&lt;/p&gt;


&lt;p&gt;Elle contient aussi des correctifs au verrouillage des pages d'index qui peut entraîner la corruption des index sur le réplica.&lt;/p&gt;


&lt;p&gt;Un correctif d'un bogue du gel de transaction est fourni pour la version 9.3. Ce bogue pouvait faire réapparaître d'anciennes versions de lignes au sein de bases qui ont subit de nombreuses boucles dans les ID de transactions.&lt;/p&gt;


&lt;p&gt;3 bogues pouvant empêcher le démarrage de nouveaux serveurs en StandBy.&lt;/p&gt;


&lt;p&gt;Enfin, cette version corrige un bogue de corruption de clés étrangères, bien que les clés doivent être réparées manuellement après l'application du correctif.&lt;/p&gt;


&lt;p&gt;En version 9.3, ces correctifs résultent en l'ajout de nouveaux paramètres de configuration du serveur pour gérer le gel des multixact.&lt;/p&gt;


&lt;p&gt;À noter que les serveurs de secours doivent être mis à jour en 9.3.3 avant que le maître de réplication ne soit mis à jour, au risque de casser la réplication.&lt;/p&gt;



&lt;h2&gt;Autres améliorations&lt;/h2&gt;

&lt;hr /&gt;


&lt;p&gt;En plus des informations précédentes, les problèmes suivants ont été corrigés&amp;nbsp;:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Correctif des traces binaires des modifications de la carte de visibilité&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;S'assurer que les index GIN tracent toutes les insertions&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;S'assurer que pause_at_recovery_target s'interrompe au bon moment&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;S'assurer que walreceiver envoie les messages de retour hot-standby au bon moment&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Empêcher le code principal de perdre la main du fait de timeout&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Eliminer de nombreuses conditions de concurrence critique&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Corriger quelques HINTs dans les messages d'erreur&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Prévenir le blocage du serveur en cas de perte de la connexion SSL&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Correction de deux erreurs de gestion de l'Unicode&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Prévenir le crash sur certaines syntaxes de sous-requêtes&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Prévenir le crash lors de sélection sur des tables sans colonnes&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Correction de deux bogues sur LATERAL&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Correction de problèmes avec UNION ALL, le partitionnement et les updates&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;S'assurer que ANALYZE comprenne les domaines sur intervalles&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Eliminer les vérifications de permissions lors de l'utilisation du tablespace par défaut&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Correction de fuites mémoire dans les fonctions JSON&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Autoriser les extensions sur déclencheurs par événement (event triggers)&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Distinguer correctement les nombres dans les sorties JSON&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Corriger les permissions pour pg_start_backup() et pg_stop_backup()&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Accepter SHIFT_JIS comme nom de locale&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Corriger le développement des .* pour les variables de fonctions SQL&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Prévenir les boucles sans fin dans quelques erreurs de COPY&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Plusieurs correctifs de problème client sous Windows&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Rendre possible la construction de PostgreSQL avec Visual Studio 2013&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Mise-à-jour des fichiers de time zone en fonction des modifications récentes.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Des correctifs des modules suivants sont également publiés&amp;nbsp;: ECPG, dblink, ISN, pgbench, pg_stat_statements et postgres_fdw. Les modifications et détails sont accessibles dans les notes de version de la documentation officielle.&lt;/p&gt;


&lt;p&gt;Comme pour toute mise-à-jour mineure, il n'est pas nécessaire d'exporter/importer les bases ou d'utiliser pg_upgrade. Il suffit d'arrêter PostgreSQL, d'installer les nouveaux binaires, et de redémarrer.
Si des versions mineures ont été oubliées précédemment, il peut être nécessaire de procéder à des étapes supplémentaires.
Tous les détails sont accessibles dans les notes de version de la documentation officielle.&lt;/p&gt;



&lt;h2&gt;Liens:&lt;/h2&gt;

&lt;pre&gt; * &lt;a href=&quot;http://postgresql.org/download&quot; hreflang=&quot;en&quot;&gt;Téléchargement&lt;/a&gt;
 * &lt;a href=&quot;http://www.postgresql.org/docs/current/static/release.html&quot; hreflang=&quot;en&quot;&gt;Notes de version&lt;/a&gt;
 * &lt;a href=&quot;http://www.postgresql.org/support/security/&quot; hreflang=&quot;en&quot;&gt;Security Page&lt;/a&gt;
 * &lt;a href=&quot;http://wiki.postgresql.org/wiki/20140220securityrelease&quot; hreflang=&quot;en&quot;&gt;Security Issue Detail Page&lt;/a&gt;&lt;/pre&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Publication de PostgreSQL 9.3.0</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0" rel="alternate" type="text/html"
    title="Publication de PostgreSQL 9.3.0" />
    <id>urn:md5:4cc28398f542f0cdd5c58af61bb58106</id>
    <published>2013-09-09T15:46:00+02:00</published>
    <updated>2013-09-09T15:47:04+02:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;h1&gt;Dossier de presse PostgreSQL 9.3&lt;/h1&gt;
&lt;h2&gt;Contenu&lt;/h2&gt;
&lt;p&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#original_release&quot;&gt;Texte original&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#features&quot;&gt;Détail des fonctionnalités&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#download&quot;&gt;Où télécharger&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#docs&quot;&gt;Documentation&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#license&quot;&gt;Licence&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#contact&quot;&gt;Contacts&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#quoted_companies&quot;&gt;Informations concernant les sociétés citées&lt;/a&gt;&lt;br /&gt;
&amp;nbsp; &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/Publication-de-PostgreSQL-9.3.0#companies&quot;&gt;Support commercial&lt;/a&gt;&lt;/p&gt;
&lt;h2&gt;Texte original&lt;/h2&gt;
&lt;p&gt;9 SEPTEMBRE 2013&amp;nbsp;: Le PostgreSQL Global Development Group annonce la publication de PostgreSQL 9.3, la dernière version du système de gestion de bases de données relationnelles OpenSource le plus évolué.
Cette version étend la fiabilité, la disponibilité et la capacité de PostgreSQL à s'interfacer avec d'autres bases de données.
Les utilisateurs rapportent déjà des développements rendus possibles par cette version.
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;PostgreSQL 9.3 fournit des fonctionnalités qu'en tant que développeur d'applications je peux utiliser immédiatement&amp;nbsp;: des fonctionnalités JSON améliorées, l'indexation d'expressions rationnelles, et la facilité à fédérer des bases de données grâce aux gestionnaires de données externes («&amp;nbsp;Foreign Data Wrapper&amp;nbsp;», en anglais)
de PostgreSQL. Je me demande réellement comment je pouvais mener à bien mes projets avant cette version,&amp;nbsp;», déclare Jonathan S. Katz, CTO de VenueBook.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;Accès en écriture aux données externes&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
La version 9.3 de PostgreSQL permet l'écriture au travers des gestionnaires de
données externes («&amp;nbsp;Foreign Data Wrappers&amp;nbsp;», en anglais). Cela permet les échanges
bi-directionnels entre plusieurs systèmes. Les environnements informatiques
d'aujourd'hui intègrent plusieurs bases de données et des sources de données
semi-structurées. PostgreSQL permet de les intégrer dans un ensemble cohérent.
L'équipe a également développé postgres_fdw, pilote hautement performant de
fédération PostgreSQL-PostgreSQL en lecture/écriture.
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;Les gestionnaires de données externes modifiables nous permettent de connecter
et tester très facilement différentes alternatives. Divers besoins sont
adressés rapidement et le prototypage devient intelligent,&amp;nbsp;» explique Lee
Holloway, Co-fondateur et directeur de l'ingéniérie chez CloudFlare. «&amp;nbsp;Il
est intéressant d'assembler de nouveaux moteurs de stockages de données
(dont les nôtres, écrits en Go), de les mélanger et de les regarder lire,
écrire, voire intéragir entre eux.&amp;nbsp;»
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;Fiabilité et disponibilité renforcées&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
«&amp;nbsp;PostgreSQL a toujours eu ma préférence pour sa stabilité, sa robustesse,
ses garanties de cohérence et de durabilité des données, son respect des
propriétés ACID et de la norme SQL,&amp;nbsp;» affirme Pascal Bouchareine, directeur
Recherche et Développement chez Gandi.net. «&amp;nbsp;Je suis particulièrement
impatient d'en apprendre plus sur le mécanisme de bascule rapide annoncé en
9.3.&amp;nbsp;»
&lt;/p&gt;
&lt;p&gt;
Cette nouvelle version inclut de nouvelles fonctionnalités qui étendent et
améliorent encore la fiabilité et la disponibilité de PostgreSQL&amp;nbsp;:
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Sommes de contrôle sur les pages de données&amp;nbsp;: aide les administrateurs à détecter
rapidement tout disque ou composant matériel défectueux qui corrompt les données&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Bascule rapide&amp;nbsp;: bascule en moins d'une seconde entre le
maître et le réplicat, offrant une disponibilité dite «&amp;nbsp;carrier-grade&amp;nbsp;»&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Resynchronisation par streaming simple&amp;nbsp;: reconfiguration plus simple, plus rapide
des réplicats en cascade après bascule.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
&lt;strong&gt;Fonctionnalités orientées développeurs&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
Comme toute nouvelle version, PostgreSQL 9.3 propose de nombreuses fonctionnalités
facilitant le travail avec PostgreSQL. Cela le rend plus flexible et plus agréable
pour les développeurs, les administrateurs et les architectes.
Parmi ces fonctionnalités, citons&amp;nbsp;:
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;des méthodes additionnelles de constructeur et extracteur JSON&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;les vues matérialisées et les vues inscriptibles&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;la possibilité de paralléliser pg_dump pour accélerer les sauvegardes des bases
volumineuses&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;les LATERAL JOINs&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
De plus, avec PostgreSQL 9.3, la possibilité de définir ses propres processus
autonomes intégrés («&amp;nbsp;Background Workers&amp;nbsp;», en anglais) permet aux développeurs
d'écrire des gestionnaires de tâches, des gestionnaires de requêtes, des
traitements parallèles, des outils de «&amp;nbsp;queueing&amp;nbsp;» ou toute autre application
permettant d'utiliser PostgreSQL comme séquenceur de tâches.
Un exemple concret est Mongres, un processus autonome intégré qui accepte les
requêtes MongoDB, les interprète et les transmet à PostgreSQL.
&lt;/p&gt;
&lt;p&gt;
&lt;strong&gt;À propos de PostgreSQL&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
PostgreSQL est le système de gestion de bases de données libre de référence. Sa
communauté mondiale est composée de milliers d'utilisateurs et contributeurs,
et de plusieurs dizaines d'entreprises et institutions.
Le projet PostgreSQL, démarré il y a 25 ans, à l'université de Californie, à
Berkeley, a atteint aujourd’hui un rythme de développement sans pareil.
L'ensemble des fonctionnalités proposées est mature et plus riche que ceux
des systèmes commerciaux leaders sur les fonctionnalités avancées, les
extensions, la sécurité et la stabilité, offertes à un niveau que seul PostgreSQL
atteint.
Pour en savoir plus, et prendre part à la communauté, rendez-vous sur
&lt;a href=&quot;http://www.postgresql.org/&quot;&gt;le site du projet&lt;/a&gt;.
&lt;/p&gt;
&lt;h2&gt;Détail des fonctionnalités&lt;/h2&gt;
&lt;p&gt;
Pour des explications concernant les fonctionnalités décrites plus haut,
et les autres, se référer aux ressources suivantes&amp;nbsp;:
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/docs/9.3/static/release-9-3.html&quot;&gt;Notes de version&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/docs/9.3/static/index.html&quot;&gt;Documentation 9.3 en anglais&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://docs.postgresql.fr/9.3&quot;&gt;Documentation 9.3 en français&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot;&gt;What's New In PostgreSQL 9.3 (En anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/about/featurematrix&quot;&gt;Matrice des fonctionnalités (en anglais)&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://github.com/umitanuki/mongres&quot;&gt;Mongres&amp;nbsp;: émulateur MongoDB pour PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://blog.cloudflare.com/kyoto_tycoon_with_postgresql&quot;&gt;FDW Kyoto Tycoon pour PostgreSQL par CloudFlare&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;https://wiki.postgresql.org/wiki/Foreign_data_wrappers&quot;&gt;Liste des autres gestionnaires de données externes&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Téléchargements&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/download&quot;&gt;Page de téléchargement&lt;/a&gt; avec liens vers les installeurs et outils Windows, Linux, OSX, BSD et Solaris&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/ftp/source/v9.3.0&quot;&gt;Code source&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://code.google.com/p/plv8js/downloads/list&quot;&gt;PL/V8 et PL/Coffee&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://pgxn.org&quot;&gt;PostgreSQL Extension Network&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/download/product-categories&quot;&gt;Logiciels commerciaux et liés&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Documentation&lt;/h2&gt;
&lt;p&gt;La documentation au format HTML et les pages de manuel sont installées avec PostgreSQL. La &lt;a href=&quot;http://blog2.postgresql.fr/docs/9.3/interactive&quot;&gt;documentation en ligne&lt;/a&gt;, exhaustive et interactive, peut être parcourue, interrogée et commentée.&lt;/p&gt;
&lt;h2&gt;Licence&lt;/h2&gt;
&lt;p&gt;
PostgreSQL utilise la &lt;a href=&quot;http://blog2.postgresql.fr/about/licence&quot;&gt;licence PostgreSQL&lt;/a&gt;, une licence de type BSD qui nécessite simplement le maintien du copyright et des informations de licence dans le code source. Cette &lt;a href=&quot;http://www.opensource.org/licenses/postgresql&quot;&gt;licence certifiée par l'OSI&lt;/a&gt; est largement appréciée pour sa flexibilité et sa compatibilité avec le monde des affaires, puisqu'elle ne restreint pas l'utilisation de PostgreSQL au sein d'applications propriétaires ou commerciales. Associée à un support proposé par de multiples sociétés et une propriété publique du code, sa licence rend PostgreSQL très populaire parmi les revendeurs souhaitant embarquer une base de données dans leurs produits sans avoir à se soucier des droits de licence, des verrous commerciaux ou modifications des termes des licences.
&lt;/p&gt;
&lt;h2&gt;Contacts&lt;/h2&gt;
&lt;p&gt;Pages Web&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.org&quot;&gt;Page d'accueil PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.postgresql.fr&quot;&gt;Page d'accueil de l'association francophone&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Contact presse&lt;/p&gt;
&lt;p&gt;France et pays francophones&lt;br /&gt;
Stéphane Schildknecht&lt;br /&gt;
&lt;a href=&quot;mailto:fr@postgresql.org&quot;&gt;fr at postgresql dot org&lt;/a&gt;&lt;br /&gt;
+33 (0) 617 11 37 42&lt;/p&gt;
&lt;p&gt;Pour les contacts d'autres régions, consulter &lt;a href=&quot;http://blog2.postgresql.fr/about/press/contact&quot;&gt;la liste des contacts internationaux.&lt;/a&gt;&lt;/p&gt;
&lt;h2&gt;Contacts&lt;/h2&gt;
&lt;h2&gt;Informations concernant les sociétés citées&lt;/h2&gt;
&lt;strong&gt;VenueBook&lt;/strong&gt;
&lt;blockquote&gt;&lt;p&gt;«&amp;nbsp;PostgreSQL 9.3 fournit des fonctionnalités, qu'en tant que développeur d'applications,
je peux utiliser immédiatement&amp;nbsp;: des fonctionnalités JSON améliorées, l'indexation
d'expressions rationnelles, et la facilité à fédérer des bases de données gràce
au gestionnaire de données externes («&amp;nbsp;Foreign Data Wrapper&amp;nbsp;», en anglais)
de PostgreSQL. Je me demande réellement comment je pouvais mener à bien mes
projets avant cette version,&amp;nbsp;» déclare Jonathan S. Katz, CTO de VenueBook.
&lt;/p&gt;
&lt;/blockquote&gt;
&lt;p&gt;&lt;a href=&quot;http://venuebook.com/&quot;&gt;VenueBook&lt;/a&gt; est une solution de gestion d'événements en mode cloud qui permet de centraliser la gestion complète d'un événement. Nous fournissons un logiciel qui permet aux responsables de lieux de préparer et approuver les contrats, les menus et de procéder aux paiements, le tout en ligne. A la différence des autres systèmes du marché, qui permettent uniquement de gérer les événements, nous rationalisons les interactions et la réservation avec le planificateur. Contact (en anglais, uniquement)&amp;nbsp;: &lt;a href=&quot;mailto:info@venuebook.com&quot;&gt;info@venuebook.com&lt;/a&gt;, +1 646-543-8368&lt;/p&gt;
&lt;strong&gt;CloudFlare&lt;/strong&gt;
&lt;blockquote&gt;&lt;p&gt;«&amp;nbsp;CloudFlare est fier de compter PostgreSQL 9.3 parmi ses outils. Ceux-ci permettent d'accélérer et de sécuriser des millions de sites web. PostgreSQL offre l'extensibilité et la personnalisation dont nous avons besoin pour être agile et évolutif au niveaux des données.  Les parseurs de données externes modifiables nous permettent de connecter et tester très facilement différentes alternatives. Divers besoins sont adressés rapidement et le prototypage devient intelligent. Il est intéressant d'assembler de nouveaux moteurs de stockages de données (dont les nôtres, écrits en Go), de les mélanger et de les regarder lire, écrire, voire intéragir entre eux.&amp;nbsp;»
&lt;br /&gt;&lt;br /&gt;
«&amp;nbsp;L'association des gestionnaires de données externes aux vues matérielles et aux jointures latérales côté requêtes&amp;amp;nsp;; et les processus autonomes intégrés côté supervision, font de PostgreSQL un outil vraiment puissant sur lequel nous assoierons notre croissance. CloudFlare est ravi de posséder cette pépite dans sa boîte à outils,&amp;nbsp;» déclare Lee Holloway, co-fondateur et directeur de l'ingéniérie chez CloudFlare.&lt;/p&gt;
&lt;/blockquote&gt;
&lt;p&gt;&lt;a href=&quot;http://www.cloudflare.com&quot;&gt;CloudFlare, Inc.&lt;/a&gt; accélère les sites, les protège des attaques, assure leur disponibilité et facilite l'ajout de webapp. CloudFlare booste les sites web indépendamment de la taille ou de la plateforme sans qu'il soit nécessaire de rajouter des ressources matérielles, d'installer des logiciels ou de modifier la moindre ligne de code. La communauté CloudFlare se renforce en grossissant&amp;nbsp;; tout nouveau site améliore le réseau. Par notre technologie innovante, chaque mois des centaines de millions de personnes utilisent un Internet plus sûr et plus rapide. CloudFlare a été reconnu pionnier technologique par le World Economic Forum, nommé «&amp;nbsp; Most Innovative Network and Internet Technology Company of the Year&amp;nbsp;» en 2011 et 2012 par le Wall Street Journal, et classé parmi les 50 compagnies les plus innovantes en 2012 par Fast Company. CloudFlare est basée à San Francisco, Californie, USA. Contact (en anglais, uniquement)&amp;nbsp;: &lt;a href=&quot;mailto:press@cloudflare.com&quot;&gt;press@cloudflare.com&lt;/a&gt;, +1 (650) 485-1399&lt;/p&gt;
&lt;strong&gt;Gandi.net&lt;/strong&gt;
&lt;blockquote&gt;&lt;p&gt;«&amp;nbsp;Nous suivons les avancées de la réplication, et sommes très intéressés par les améliorations récentes dans ce domaine. Je suis particulièrement impatient d'en apprendre plus sur le mécanisme de bascule rapide annoncé en 9.3. Nous utilisons PostgreSQL pour la plateforme IAAS/PAAS de Gandi et depuis peu, en interne, comme socle d'un de nos systèmes temps réel qui stocke, calcule et présente des millions de lignes quotidiennement, sans difficulté.&amp;nbsp;»
&lt;br /&gt;&lt;br /&gt;
«&amp;nbsp;PostgreSQL a toujours eu ma préférence pour sa stabilité, sa robustesse, ses garanties de cohérence et de durabilité des données, son respect des propriétés ACID et de la norme SQL&amp;nbsp;» affirme Pascal Bouchareine, directeur Recherche et Développement chez Gandi.net.
&lt;/p&gt;
&lt;/blockquote&gt;
&lt;p&gt;&lt;a href=&quot;http://www.gandi.net&quot;&gt;GANDI.net&lt;/a&gt; a été l'un des premiers registraires approuvés par l'ICANN pour les domaines .COM, .NET,.ORG, .BIZ, .INFO, .NAME, .BE, .FR, .EU en France. Il propose aujourd'hui plus de 200 extensions et continue à faire croître cette liste. Gandi se considère comme un registraire éthique dans un milieu oùce n'est pas toujours le cas. Il place les droits et la vie privée de ses clients au dessus de tout le reste. Contact en anglais&amp;nbsp;: &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2013/09/09/thomas@gandi.net&quot;&gt;Thomas
Stocking&lt;/a&gt;, en français&amp;nbsp;: &lt;a href=&quot;mailto:nicolas.lhuillery@gandi.net&quot;&gt;Nicolas Lhuillery&lt;/a&gt;. Téléphone&amp;nbsp;: +1 410.429.7402.&lt;/p&gt;
&lt;h2&gt;Support commercial&lt;/h2&gt;
&lt;p&gt;PostgreSQL bénéficie du support de nombreuses sociétés, qui financent des développeurs, fournissent l'hébergement ou un support financier. Les plus fervents supporters sont listés sur la &lt;a href=&quot;http://blog2.postgresql.fr/about/sponsors&quot;&gt;page des mécènes du développement.&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Il existe également une très grande communauté de &lt;a href=&quot;http://blog2.postgresql.fr/support/professional_support&quot;&gt;sociétés fournissant du support PostgreSQL&lt;/a&gt;, des consultants indépendants aux sociétés multinationales.&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;http://blog2.postgresql.fr/about/donate&quot;&gt;Dons&lt;/a&gt; plaisamment acceptés.&lt;/p&gt;
&lt;br /&gt;</content>
    
    

    
      </entry>
    
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
    <title>Sortie de PostgreSQL 9.3 Bêta 2</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2013/06/28/Sortie-de-PostgreSQL-9.3-B%C3%AAta-2" rel="alternate" type="text/html"
    title="Sortie de PostgreSQL 9.3 Bêta 2" />
    <id>urn:md5:35ba9c91a8987be3fdc5301254f1f467</id>
    <published>2013-06-28T15:11:00+01:00</published>
    <updated>2013-06-28T14:13:06+01:00</updated>
    <author><name>daamien</name></author>
        <dc:subject>Dans les bacs</dc:subject>
            
    <content type="html">    &lt;p&gt;La seconde version bêta de PostgreSQL 9.3 est désormais disponible.
Cette bêta propose un avant-goût de toutes les fonctionnalités qui
seront inclues dans la version 9.3.&lt;/p&gt;


&lt;p&gt;Téléchargez, testez et envoyez vos commentaires&amp;nbsp;!&lt;/p&gt;


&lt;p&gt;&lt;strong&gt;Changements depuis la version Bêta 1&lt;/strong&gt;&lt;/p&gt;



&lt;p&gt;Ci-dessous la liste des changements et des corrections effectués depuis
la version précédente. Si vous avez testé une fonctionnalité de la
première bêta, merci de la testez à nouveau pour vous assurer que tous
les éventuels problèmes ont été résolus.&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;éviter le saut de xid au démarrage du Hot Standby&lt;/li&gt;
&lt;li&gt;éviter les verrous morts sur insertion avec les index SP-GiST&lt;/li&gt;
&lt;li&gt;ajout d'un drapeau &quot;updatable&quot; visible pour les utilisateurs sur les tables distantes et les vues&lt;/li&gt;
&lt;li&gt;correction de 2 problèmes avec JSON et Unicode&lt;/li&gt;
&lt;li&gt;s'assurer que pg_isready affiche des infos de connexion correctes&lt;/li&gt;
&lt;li&gt;correction de l'ordre des dépendances pour les triggers sur événements dans pg_dump&lt;/li&gt;
&lt;li&gt;correction des tests de régression pour postgres_fdw&lt;/li&gt;
&lt;li&gt;correction de  pg_xlogdump -r&lt;/li&gt;
&lt;li&gt;array_remove() ne retourne plus des tableaux vides incorrects&lt;/li&gt;
&lt;li&gt;correction de formattage du fichier recovery.conf généré automatiquement&lt;/li&gt;
&lt;li&gt;simplification de la gestion des crashs après une bascule d'urgence&lt;/li&gt;
&lt;li&gt;CREATE FOREIGN TABLE peut inclure une colonne SERIAL&lt;/li&gt;
&lt;li&gt;Le mot &quot;FOREIGN&quot;  est optionnel dans la commande &quot;ALTER TABLE&quot;&lt;/li&gt;
&lt;li&gt;intégration des mises à jour de traduction&lt;/li&gt;
&lt;li&gt;de nombreuses mises à jour sur la documentation&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;De plus, toutes les corrections effectuées sur les branches antérieures
de PostgreSQL ont été reportées sur la version bêta 2.&lt;/p&gt;


&lt;p&gt;Pour une liste complète des fonctionnalités de la version 9.3,
reportez-vous aux notes de version&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/docs/devel/static/release-9-3.html&quot;&gt;http://www.postgresql.org/docs/devel/static/release-9-3.html&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Des descriptions détaillées des nouveautés sont disponibles sur le wiki
du projet&amp;nbsp;:
&lt;a href=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot; title=&quot;http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3&quot;&gt;http://wiki.postgresql.org/wiki/Wha...&lt;/a&gt;.&lt;/p&gt;



&lt;p&gt;&lt;strong&gt;Testez  PostgreSQL 9.3 Bêta 2 dès maintenant !&lt;/strong&gt;&lt;/p&gt;



&lt;p&gt;Le projet PostgreSQL dépend de sa communauté pour les tests des versions
à venir et ainsi garantir que les performances seront au rendez-vous et
qu'il n'y aura pas de bugs.&lt;/p&gt;


&lt;p&gt;Téléchargez PostgreSQL 9.3 Bêta 2 et essayez-le avec vos applications
dès que vous le pouvez, puis renvoyez vos commentaires aux développeurs
de PostgreSQL.&lt;/p&gt;


&lt;p&gt;Les fonctionnalités et les API de la version bêta 2 ne vont pas évoluer
de manière significative d'ici la sortie de la version finale. Dès lors
il n'y a aucun problème à démarrer vos nouveaux projets en profitant des
nouveautés de cette version.&lt;/p&gt;


&lt;p&gt;Pour plus d'information sur comment tester et comment remonter un
problème, rendez-vous sur la page suivante:&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;http://www.postgresql.org/developer/beta&quot; title=&quot;http://www.postgresql.org/developer/beta&quot;&gt;http://www.postgresql.org/developer...&lt;/a&gt;&lt;/p&gt;


&lt;p&gt;Vous pouvez obtenir la version bêta 2 de PostgreSQL 9.3 sur la page de
téléchargement officielle&amp;nbsp;: http://www.postgresql.org/download.&lt;/p&gt;


&lt;p&gt;Des installateurs et paquets sont d'ores et déjà disponibles pour
plusieurs plate-formes, notamment Solaris and FreeBSD. Les autres seront
disponibles dans le courant de la semaine prochaine.&lt;/p&gt;


&lt;p&gt;La documentation de cette nouvelle version est disponible à l'adresse
suivante&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/docs/9.3/static/index.html&quot; title=&quot;http://www.postgresql.org/docs/9.3/static/index.html&quot;&gt;http://www.postgresql.org/docs/9.3/...&lt;/a&gt;&lt;/p&gt;




&lt;p&gt;PS&amp;nbsp;: L'annonce officielle est disponible ici&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/about/news/1471/&quot; title=&quot;http://www.postgresql.org/about/news/1471/&quot;&gt;http://www.postgresql.org/about/new...&lt;/a&gt;&lt;/p&gt;</content>
    
    

    
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
  
</feed>