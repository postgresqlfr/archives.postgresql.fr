<?xml version="1.0" encoding="utf-8"?><feed xmlns="http://www.w3.org/2005/Atom"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xml:lang="fr">
  
  <title type="html">PostgreSQLfr.org - Articles</title>
  <subtitle type="html"></subtitle>
  <link href="http://blog2.postgresql.fr/index.php?feed/category/Articles/atom" rel="self" type="application/atom+xml"/>
  <link href="http://blog2.postgresql.fr/index.php?" rel="alternate" type="text/html"
  title=""/>
  <updated>2020-04-26T22:23:31+01:00</updated>
  <author>
    <name></name>
  </author>
  <id>urn:md5:df94b576f96642f47f3251ba67b7ebdb</id>
  <generator uri="http://www.dotclear.org/">Dotclear</generator>
  
    
  <entry>
    <title>Premiers pas avec Postgresql</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2010/10/03/iiii" rel="alternate" type="text/html"
    title="Premiers pas avec Postgresql" />
    <id>urn:md5:8930b7081a7e65870851714f35bfc675</id>
    <published>2011-12-07T13:35:00+00:00</published>
    <updated>2011-12-07T00:08:03+00:00</updated>
    <author><name>florence</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;h2&gt;I  Introduction&lt;/h2&gt;

&lt;h3&gt;A. Pourquoi ce document?&lt;/h3&gt;

&lt;p&gt;J'ai commencé à développer sous PostgreSQL assez récemment après une longue expérience sous Oracle. La documentation générale de PostgreSQL est excellente, et très riche, mais j'avais besoin d'un document plus léger expliquant la procédure d'installation sur différents systèmes et comment démarrer (créer un cluster, configurer les connexions), ainsi que des informations sur ce qu'on pouvait faire avec PostgreSQL. Je ne l'ai pas trouvé.
Après quelques mois d'utilisation, je me suis rendu compte que les problèmes des débutants étaient toujours les mêmes. Ainsi, j'ai compilé mes notes des débuts et ce que j'ai appris depuis dans ce document.
Voici le résultat, en espérant qu'il vous aide à débuter et qu'il vous encourage à continuer avec PostgreSQL.&lt;/p&gt;


&lt;h3&gt;B. À qui s'adresse ce document?&lt;/h3&gt;

&lt;pre&gt;&lt;/pre&gt;

&lt;p&gt;Ce document a pour but de vous aider à installer PostgreSQL sous Windows ou sous Linux, et à commencer à développer.&lt;/p&gt;


&lt;p&gt;Il est écrit pour vous faire gagner du temps dans vos premiers pas avec PostgreSQL, tout en vous expliquant les points importants afin que vous puissiez progresser par vous-même.
Il s'adresse donc principalement aux développeurs d'applications, afin de leur permettre de découvrir ce puissant moteur sur une petite base de test, ou aux personnes qui débutent complètement avec PostgreSQL. Vous n'aurez pas besoin de connaissances système avancées pour suivre ce document.&lt;/p&gt;


&lt;p&gt;Une fois que vous aurez terminé la lecture de ce document, vous pourrez continuer par la lecture de la documentation officielle pour apprendre à administrer PostgreSQL ou devenir un développeur aguerri. La dernière section de ce document vous donne les liens et références nécessaires pour continuer à progresser.
Parfois les informations ne sont volontairement pas complètes, et lorsque la documentation de référence est plus claire et précise que ce qui aurait pu être fait ici, les liens sont fournis vers la documentation française.&lt;/p&gt;


&lt;p&gt;Ce document a été écrit initialement pour la version 8.3, puis mis à jour pour la version 9.0 (voir le chapitre sur les versions).&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Avertissement&lt;/ins&gt;&amp;nbsp;: ce document n'est en aucun cas un document sur le tuning de la base. Il n'est pas fait non plus pour vous apprendre à administrer une base de production.&lt;/p&gt;


&lt;h2&gt;II  Présentation de PostgreSQL&lt;/h2&gt;


&lt;p&gt;PostgreSQL est un moteur de bases de données relationnelle.
C'est un moteur adapté à des bases métier, donc riche en fonctionnalités et puissant. Son installation est cependant plutôt simple. Il faut juste comprendre quelques principes de base (ce que cette présentation s'efforce de faire)&lt;/p&gt;


&lt;p&gt;Si vous ne connaissez pas les principes relationnels ou le SQL, le mieux est de vous procurer un bon ouvrage sur le sujet. L'article de Wikipedia peut être une bonne introduction (&lt;a href=&quot;http://fr.wikipedia.org/wiki/SQL&quot;&gt;http://fr.wikipedia.org/wiki/SQL&lt;/a&gt;), et donne de nombreuses références. Le tutoriel de la documentation PostgreSQL peut également vous rendre service  si vous avez besoin de vous rafraîchir la mémoire&amp;nbsp;: &lt;a href=&quot;http://docs.postgresqlfr.org/9.0/tutorial-sql.html&quot;&gt;http://docs.postgresqlfr.org/9.0/tutorial-sql.html&lt;/a&gt;&lt;/p&gt;


&lt;h3&gt;A. Licence&lt;/h3&gt;

&lt;p&gt;La licence de PostgreSQL est une licence de type BSD, ce qui permet son utilisation sans restriction, dans un logiciel libre ou propriétaire. C'est un avantage certain, car cela permet par exemple d'utiliser PostgreSQL comme base de données pour un logiciel propriétaire.&lt;/p&gt;


&lt;p&gt;PostgreSQL est un projet indépendant. Il n'est détenu par aucune entreprise. La communauté PostgreSQL est très réactive (allez voir les mailings-lists si vous voulez vérifier). De nombreuses entreprises soutiennent et participent également au développement de PostgreSQL.&lt;/p&gt;


&lt;h3&gt;B. Caractéristiques et fonctionnalités&amp;nbsp;:&lt;/h3&gt;

&lt;p&gt;PostgreSQL comporte de nombreuses fonctionnalités intéressantes. Parmi celles-ci, on peut citer par exemple&amp;nbsp;:
moteur transactionnel
respect des normes SQL
MVCC (mécanisme permettant une concurrence efficace sans verrouiller les enregistrements pour assurer l'isolation des transactions)
procédures stockées dans de nombreux langages
triggers
réplication maître-esclaves en continu par application des journaux binaires (archives WAL), esclaves accessibles en lecture.&lt;/p&gt;


&lt;p&gt;PostgreSQL est conçu pour être robuste (aucune version ne sort sans avoir subi une suite extensive de tests) et peut supporter des volumes importants de données (ainsi par exemple Météo France gère une base de 3,5To).&lt;/p&gt;


&lt;p&gt;PostgreSQL est conçu pour pouvoir supporter des extensions. Des extensions et outils sont disponibles pour compléter le moteur, par exemple&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;PostGis&amp;nbsp;: moteur de données spatiales.&lt;/li&gt;
&lt;li&gt;Slony&amp;nbsp;: réplication maître-esclaves.&lt;/li&gt;
&lt;li&gt;Et de nombreux autres.&lt;/li&gt;
&lt;/ul&gt;

&lt;h2&gt;III  Installation&lt;/h2&gt;

&lt;p&gt;Avant de passer aux procédures d'installation proprement dites, il est nécessaire de comprendre certaines notions fondamentales.&lt;/p&gt;

&lt;h3&gt;A. Vocabulaire&lt;/h3&gt;

&lt;h4&gt;1. Base&lt;/h4&gt;

&lt;p&gt;Une base est un ensemble structuré de données. On utilise généralement une base de donnée par application.
Pour pouvoir créer une base de données, vous devez disposer d'un cluster de bases de données.&lt;/p&gt;

&lt;h4&gt;2. Cluster (ou grappe de base de données)&lt;/h4&gt;

&lt;p&gt;Un cluster est un ensemble de bases de données qui partagent les mêmes ressources (processus, mémoire, disque...) .&lt;/p&gt;

&lt;h4&gt;3. Schéma&lt;/h4&gt;

&lt;p&gt;Un schéma est un espace de nommage au sein d'une base de données.&lt;/p&gt;


&lt;h3&gt;B. Principes de base&lt;/h3&gt;

&lt;h4&gt;1. Comptes système&lt;/h4&gt;

&lt;p&gt;Les processus de PostgreSQL utilisent un compte système. Généralement c'est le compte postgres qui est utilisé pour cela, sauf si vous avez installé PostgreSQL sur votre compte (voir la partie compilation).&lt;/p&gt;

&lt;h4&gt;2. Rôles&lt;/h4&gt;

&lt;p&gt;Les droits de la base de données sont gérés par des rôles. Avant de pouvoir vous connecter à la base de données, le rôle que vous utilisez doit avoir les autorisation nécessaires.&lt;/p&gt;


&lt;p&gt;http://docs.postgresql.fr/9.0/user-manag.html&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;À retenir: les comptes systèmes et les rôles de base de données sont distincts!&lt;/ins&gt; Même s'il y a des possibilités de mapping entre les deux (cf. paragraphe sur pg_hba.conf)
La confusion entre ces 2 notions est une des causes fréquentes d'erreurs et de problèmes d'installation pour les débutants.&lt;/p&gt;


&lt;h4&gt;3. Versions (mineures/majeures)&lt;/h4&gt;

&lt;p&gt;Les versions majeures comprennent le chiffre avant le point et un chiffre après. Exemple&amp;nbsp;: 8.2 et 8.3 sont des versions majeures différentes.
Les versions mineures incrémentent la 3ème partie&amp;nbsp;: exemple&amp;nbsp;: 8.3.7
Pour changer de version mineure, il suffit de mettre à jour le moteur. Mais pour changer de version majeure, il est nécessaire de décharger puis recharger les données.&lt;/p&gt;


&lt;p&gt;Plus d'informations ici&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/support/versioning&quot;&gt;http://www.postgresql.org/support/versioning&lt;/a&gt;&lt;/p&gt;

&lt;h4&gt;4. Client/serveur&lt;/h4&gt;

&lt;p&gt;PostgreSQL est une application client/serveur. Le serveur gère les fichiers de la base de données, accepte les connexions des clients, et effectue les opérations demandées par les clients (requêtes...)
Le client peut prendre de nombreuses formes. Il existe par exemple un client en ligne de commande (psql), des clients graphiques (par exemple pgAdmin3)... Le client peut être sur la même machine que le serveur, ou bien communiquer avec lui par le réseau.&lt;/p&gt;

&lt;h4&gt;5. Processus serveur&lt;/h4&gt;

&lt;p&gt;Sous Windows, le serveur PostgreSQL tourne en tant que service.
Sous Linux, ce sont des démons système qui effectuent ces tâches.
(si vous êtes curieux, vous pouvez aller voir cet article&amp;nbsp;: http://dalibo.org/glmf112_les_processus_de_postgresql)
Il ne faut pas arrêter les processus du serveur n'importe comment. Pour arrêter le serveur, il faut utiliser les outils fournis (voir la section sur l'arrêt et le démarrage du serveur).
&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: par défaut, PostgreSQL est configuré pour écouter sur le port 5432. Les outils se connectent par défaut sur ce port&amp;nbsp;: pensez à cela si vous devez modifier ce paramètre.&lt;/p&gt;


&lt;h4&gt;6. Module de contribution&lt;/h4&gt;

&lt;p&gt;Ce sont des extensions intéressantes, maintenues par le projet, mais non intégrées au coeur du moteur.
&lt;ins&gt;Exemples&amp;nbsp;: &lt;/ins&gt;&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;adminpack (fonctions supplémentaires, utilisées par les outils d'administrations comme pgAdmin3)&lt;/li&gt;
&lt;li&gt;pg_buffercache (pour savoir ce qui est présent dans le cache)&lt;/li&gt;
&lt;li&gt;pg_freespacemap&amp;nbsp;: donne la liste des blocs vides et partiellement vides des tables et index (quantité d'espace libre dans chaque objet de la base)&lt;/li&gt;
&lt;li&gt;pgcrypto&amp;nbsp;: fonctions de cryptographie&lt;/li&gt;
&lt;/ul&gt;
&lt;h3&gt;C. Exemple&lt;/h3&gt;

&lt;p&gt;Pour l'installation et la suite, nous prendrons l'exemple de la création d'une base de données mabase, qui sera utilisée et gérée par un utilisateur &lt;em&gt;tom&lt;/em&gt;.&lt;/p&gt;


&lt;h3&gt;D. Sous Windows&lt;/h3&gt;

&lt;p&gt;À partir de la version 8.0, PostgreSQL fonctionne nativement sous Windows (Windows XP, Windows 2000, Windows 2003, Vista, Windows 2008...). Malgré tout, seules les versions à partir de la 8.2 sont supportées sous Windows. Il s'installe en tant que service.&lt;/p&gt;


&lt;p&gt;&lt;strong&gt;NB&lt;/strong&gt;&amp;nbsp;: si vous regardez dans la liste des processus, plusieurs processus postgres sont présents. Gardez à l'esprit que la mémoire est partagée entre ces processus&amp;nbsp;: la mémoire utilisée par PostgreSQL est donc inférieure à la somme de la mémoire utilisée par chaque processus qui est affichée dans le gestionnaire de tâches...&lt;/p&gt;

&lt;h4&gt;1. Où trouver PostgreSQL pour Windows?&lt;/h4&gt;

&lt;p&gt;Vous pouvez trouver deux types d'installeurs pour Windows&amp;nbsp;: l'installeur &quot;en un clic&quot;, ou l'installeur &quot;pgInstaller&quot;. Le premier est créé par EnterpriseDB, le seconde par la communauté. Vous les trouverez à partir d'ici&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/download/windows&quot;&gt;http://www.postgresql.org/download/windows&lt;/a&gt;
&quot;pgInstaller&quot; n'est disponible que pour les versions 8.2 et 8.3, le document détaille donc le processus d'installation pour l'installeur «en un clic ».
&lt;strong&gt;NB:&lt;/strong&gt;
il est possible de récupérer les binaires sans l'installeur (pour utilisateurs avancés uniquement), ou de  faire une installation silencieuse (voir sur le site de EnterpriseDB)&lt;/p&gt;


&lt;h3&gt;2. Installation&lt;/h3&gt;

&lt;p&gt;Lancez l'installeur (pour Postgresql 9.0, le fichier s'appelle&amp;nbsp;: postgresql-9.0.0-1-windows.exe )&lt;/p&gt;



&lt;p&gt;&lt;strong&gt;NB:&lt;/strong&gt; L'installeur logue toutes ses actions dans un fichier install-postgresql.log qui est dans le répertoire %TEMP% de Windows. En cas de problème, consulter ce fichier.&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.3_repertoire_m.jpg&quot; alt=&quot;3_repertoire.jpg&quot; title=&quot;3_repertoire.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;Le répertoire est celui où vont s'installer le programme serveur (postgres.exe) et les outils client (psql, pgdump...), ainsi que la documentation, etc...&lt;/p&gt;


&lt;p&gt;L'installeur ne permet actuellement pas d'installer les outils client et le serveur séparément.&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.4_donnees_m.jpg&quot; alt=&quot;4_donnees.jpg&quot; title=&quot;4_donnees.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;L'installeur demande ensuite où sera créé le cluster de données.
Il sera par la suite toujours possible de créér d'autres cluster avec l'outil initdb.&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.5_mot_passe_m.jpg&quot; alt=&quot;5_mot_passe.jpg&quot; title=&quot;5_mot_passe.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;L'installeur demande le mot de passe de l'utilisateur postgres. Attention, en réalité ceci recouvre 2 notions différentes&amp;nbsp;:
un utilisateur du système d'exploitation, celui sur le compte duquel fonctionnent les programmes du serveur,
le super-utilisateur de base de données.
Ils peuvent très bien avoir des noms et des mots de passe différents, mais pour cet installeur, il a été choisi de donner le même nom et le même mot de passe.&lt;/p&gt;


&lt;p&gt;Si l'utilisateur postgres du système d'exploitation existe déjà, il faut donner le mot de passe existant. Si vous l'avez oublié, vous pouvez le changer dans une console avec la commande net user&amp;nbsp;:
&lt;code&gt;net user postgres &amp;lt;motdepasse&amp;gt;&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Attention à ne pas mettre un mot de passe trivial à l'utilisateur postgres&lt;/ins&gt; (c'est encore plus important si vous autorisez les connexions à partir du réseau!). Évitez également de lui donner le même mot de passe que celui de l'utilisateur système postgres. En effet, l'utilisateur postgres dispose de tous les droits sur le cluster.&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.6_port_m.jpg&quot; alt=&quot;6_port.jpg&quot; title=&quot;6_port.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;Par défaut, le port sur lequel le serveur attend les connexions est le port 5432. Vous pouvez changer le numéro de port d'écoute. Attention dans ce cas à configurer correctement vos clients (JDBC, etc...)&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Remarque :&lt;/ins&gt; par défaut, postgres n'acceptera pas les connexions à partir du réseau. Ceci est parfait sur un poste de développement autonome, mais pas pour un serveur. &lt;ins&gt;Cela pourra être modifié par configuration.&lt;/ins&gt;&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.7_locale_m.jpg&quot; alt=&quot;7_locale.jpg&quot; title=&quot;7_locale.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;La locale définit le comportement du cluster pour les opérations de tri (ordre alphabétique) …
Par défaut, c'est celle du système qui est utilisée, mais vous pouvez en préférer une autre.&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.8_pret_m.jpg&quot; alt=&quot;8_pret.jpg&quot; title=&quot;8_pret.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;Si vous êtes certain(e) du paramétrage, vous pouvez cliquer sur « Suivant».&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.9_fin_m.jpg&quot; alt=&quot;9_fin.jpg&quot; title=&quot;9_fin.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;L'installation est terminée. Si vous souhaitez installer des modules complémentaires (phppgAdmin, Slony...), lancez l' outil Stackbuilder.&lt;/p&gt;


&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/install_windows_v9_0/.110_utilisation_flou_m.jpg&quot; alt=&quot;110_utilisation_flou.jpg&quot; title=&quot;110_utilisation_flou.jpg, avr. 2011&quot; /&gt;&lt;/p&gt;


&lt;p&gt;L'installation sous Windows est prête à être utilisée.
Dans le menu démarrer, vous pouvez retrouver tous les outils utiles pour gérer le serveur.&lt;/p&gt;


&lt;p&gt;Si vous avez conservé les options par défaut, les fichiers du cluster se trouvent dans C:\Program Files\PostgreSQL\9.0, et vous trouverez l'outil pour désinstaller dans le même répertoire.&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;NB&amp;nbsp;: notes sur la console Windows et psql&lt;/ins&gt;
La console Windows est par défaut dans un encodage compatible DOS (par exemple CP850). Lorsque vous démarrerez psql pour la première fois,  vous aurez le message d'avertissement suivant&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt;Attention : l'encodage console (850) diffère de l'encodage Windows (1252).
Les caractères 8 bits peuvent ne pas fonctionner correctement.
Voir la section « Notes aux utilisateurs de Windows » de la page
référence de psql pour les détails.&lt;/pre&gt;


&lt;p&gt;Il est recommandé de modifier l'encodage de la console,
Pour éviter cela, vous pouvez éditer le fichier C:\Program Files\PostgreSQL\9.0\scripts\runpsql.bat en ajoutant la ligne&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;chcp 1252&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;avant le lancement de psql.&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Remarque importante :&lt;/ins&gt; si vous avez installé PostgreSQL sur un poste de travail (dans le but par exemple de l'évaluer ou de vous familiariser avec lui), vous avez maintenant une installation qui fonctionne « à la sortie de la boîte », et vous pouvez commencer à l'utiliser via l'outil pgAdmin (crééer des bases, etc...). Mais si vous souhaitez autoriser des connexions distantes, il est indispensable de lire la suite du document. Il apporte également des informations qui pourraient vous être utiles (emplacement et rôle des différents répertoires...) même si vous utilisez peu les outils en ligne de commande.
Vous pouvez maintenant passer à la section « après l'installation » si vous le souhaitez.&lt;/p&gt;


&lt;h2&gt;IV  Après l'installation&lt;/h2&gt;

&lt;p&gt;Dans toute la suite du document, nous supposons que l'utilisateur système sous lequel PostgreSQL a été installé est postgres. Si ce n'est pas le cas, remplacez par l'utilisateur qui démarre le serveur.
Conseil&amp;nbsp;: avant toute modification de fichier de configuration, pensez à sauvegarder la version initiale du fichier! Une erreur est si vite arrivée...&lt;/p&gt;


&lt;h3&gt;A. Processus et emplacement des fichiers.&lt;/h3&gt;

&lt;p&gt;L'emplacement des fichiers de configuration et des fichiers du cluster dépend de votre distribution.
Le répertoire contenant les fichiers du cluster est couramment appelé PGDATA (du nom de la variable d'environnement correspondante). Par exemple&amp;nbsp;: /var/lib/pgsql/data (Linux) ou C:\Program Files\PostgreSQL\9.0\data (Windows)
Normalement, le  fichier postgresql.conf est dans le répertoire du cluster. Cependant, cela peut être autrement (sur Debian, tous les fichiers de configuration doivent être dans /etc)
Voici un moyen de retrouver leur emplacement sous Linux ou Unix si vous l'avez oublié.
Liste des processus nommés &quot;postgres&quot;&amp;nbsp;:
(exemple sur une Debian):&lt;/p&gt;


&lt;pre&gt;flo:~# ps -ef | grep postgres | grep -v grep
postgres  2797     1  0 06:14 ?        00:00:00 /usr/lib/postgresql/9.0/bin/postgres -D /var/lib/postgresql/9.0/main -c config_file=/etc/postgresql   /9.0/main/postgresql.conf
postgres  2798  2797  0 06:14 ?        00:00:00 postgres: logger process                                                                                        
postgres  2800  2797  0 06:14 ?        00:00:00 postgres: writer process                                                                                        
postgres  2801  2797  0 06:14 ?        00:00:00 postgres: wal writer process                                                                                    
postgres  2802  2797  0 06:14 ?        00:00:00 postgres: autovacuum launcher process                                                                           
postgres  2803  2797  0 06:14 ?        00:00:00 postgres: stats collector process                                                                               
flo:~#&lt;/pre&gt;


&lt;p&gt;Voyez que le processus 2797 est le père de tous les autres&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt;postgres  2797     1  0 06:14 ?        00:00:00 /usr/lib/postgresql/9.0/bin/postgres -D /var/lib/postgresql/9.0/main -c config_file=/etc/postgresql/9.0/main/postgresql.conf&lt;/pre&gt;


&lt;p&gt;le chemin derrière le -D est l'emplacement du cluster.
Celui derrière le -c l'emplacement du fichier de configuration.&lt;/p&gt;


&lt;p&gt;&lt;code&gt;config_file=/etc/postgresql/9.0/main/postgresql.conf&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;Normalement, les autres fichiers de configuration du cluster (pg_hba.conf, pg_ident.conf) sont dans le même répertoire .&lt;/p&gt;


&lt;p&gt;&lt;code&gt;/usr/lib/postgresql/9.0/bin/postgres&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;est l'emplacement des binaires.&lt;/p&gt;


&lt;p&gt;Arborescence du répertoire du cluster:&lt;/p&gt;


&lt;pre&gt;flo:/var/lib/postgresql/9.0/main# ls -l
total 48 
drwx&lt;del&gt;&lt;/del&gt;-- 11 postgres postgres 4096 mai 10 15:19 base 
drwx&lt;del&gt;&lt;/del&gt;--  2 postgres postgres 4096 mai 10 18:29 global
drwx&lt;del&gt;&lt;/del&gt;--  2 postgres postgres 4096 avr  4 19:58 pg_clog
drwxr-xr-x  2 postgres postgres 4096 mai 10 08:15 pg_log
drwx&lt;del&gt;&lt;/del&gt;--  4 postgres postgres 4096 avr  4 19:58 pg_multixact
drwx&lt;del&gt;&lt;/del&gt;--  2 postgres postgres 4096 avr  4 19:58 pg_subtrans
drwx&lt;del&gt;&lt;/del&gt;--  2 postgres postgres 4096 avr  4 19:58 pg_tblspc
drwx&lt;del&gt;&lt;/del&gt;--  2 postgres postgres 4096 avr  4 19:58 pg_twophase
-rw&lt;del&gt;&lt;/del&gt;---  1 postgres postgres    4 avr  4 19:58 PG_VERSION
drwx&lt;del&gt;&lt;/del&gt;--  3 postgres postgres 4096 avr  4 19:58 pg_xlog
-rw&lt;del&gt;&lt;/del&gt;---  1 postgres postgres  133 mai 10 08:15 postmaster.opts
-rw&lt;del&gt;&lt;/del&gt;---  1 postgres postgres   54 mai 10 08:15 postmaster.pid
lrwxrwxrwx  1 root     root       31 avr  4 19:58 root.crt -&amp;gt; /etc/postgresql-common/root.crt&lt;/pre&gt;


&lt;p&gt;Quelques sous-répertoires  et fichiers&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;base&amp;nbsp;: répertoire des fichiers de base de données&lt;/li&gt;
&lt;li&gt;pg_log&amp;nbsp;: log de la base de données (c'est le seul répertoire du cluster où vous pouvez supprimer des fichiers!)&lt;/li&gt;
&lt;li&gt;pg_clog et pg_xlog&amp;nbsp;: commit log (état des transactions) et répertoire des fichiers WAL (Write Ahead Log, utilisé pour la durabilité ).&lt;/li&gt;
&lt;li&gt;postmaster.pid&amp;nbsp;: fichier verrou utilisé pour éviter que plusieurs instances ne soient actives sur le même répertoire de données.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: le contenu de pg_clog et pg_xlog ne doit pas être supprimé!&lt;/p&gt;

&lt;h3&gt;B. Changer le mot de passe de l'utilisateur système postgres&lt;/h3&gt;


&lt;p&gt;À moins que vous n'ayez compilé les sources pour utiliser PostgreSQL sur votre compte utilisateur, un utilisateur postgres a été créé sur votre système.
Afin de pouvoir l'utiliser, vous devez changer le mot de passe de cet utilisateur.
Pour cela, sous Linux, connectez-vous en tant que root et exécutez la commande 'passwd postgres'.
(ne pas utiliser un mot de passe trivial!)&lt;/p&gt;


&lt;h3&gt;C. Créer un cluster de base de données.&lt;/h3&gt;


&lt;p&gt;Avec certaines distributions (Redhat, Debian), un cluster est créé par défaut à l'installation des paquets. De même pour l'installation sous Windows.
Si vous êtes dans un autre cas de figure, il vous faudra donc en créer un.
Pour cela, utilisez la commande initdb.&lt;/p&gt;


&lt;h3&gt;D. Autoriser les connexions&lt;/h3&gt;


&lt;p&gt;L'installation de PostgreSQL positionne des valeurs par défaut dans les fichiers de configuration.
Après l'installation, PostgreSQL est configuré de telle sorte que les connexions ne sont pas possibles à partir du réseau.
Pour autoriser des clients distants à se connecter, il faut configurer deux fichiers&amp;nbsp;:
postgresql.conf et pg_hba.conf.&lt;/p&gt;


&lt;h4&gt;1. Connexions réseau (postgresql.conf)&lt;/h4&gt;


&lt;p&gt;À l'installation, PostgreSQL est configuré pour n'accepter que les connexions locales (c'est le paramètre listen_addresses).
Si vous souhaitez pouvoir vous connecter à partir du réseau, il faut dé-commenter le paramètre &lt;em&gt;listen_addresses&lt;/em&gt; du fichier postgresql.conf, et préciser sur quelle(s) adresse(s) postgres accepte les connexions.&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: ce sont bien les adresses IP d'écoute, c'est-à-dire les adresses IP du serveur sur lesquelles le serveur PostgreSQL va écouter. Si vous précisez une adresse '*', postgres va écouter les connexions sur toutes les interfaces réseau du serveur. Si vous précisez une adresse IP, cela signifie que postgres va écouter sur l'interface réseau de votre machine qui a cette adresse IP.
Si vous souhaitez n'autoriser les connexions qu'à une liste de machines ou d'adresses IP, c'est dans pg_hba.conf que vous pouvez le faire (paragraphe suivant).
Pour que les paramètres soient pris en compte, il faut redémarrer le serveur PostgreSQL.
&lt;ins&gt;Exemples&lt;/ins&gt;&amp;nbsp;:
(connexion locales)&lt;/p&gt;


&lt;pre&gt;#listen_addresses = 'localhost'         # what IP address(es) to listen on;
                                       # comma-separated list of addresses;
                                       # defaults to 'localhost', '*' = all
                                       # (change requires restart)
port = 5432                             # (change requires restart)@@&lt;/pre&gt;


&lt;p&gt;(connexion sur l'adresse 192.168.0.4 et local, port 5433)&lt;/p&gt;


&lt;pre&gt;listen_addresses = '192.168.0.4, localhost'         # what IP address(es) to listen on;
                                       # comma-separated list of addresses;
                                       # defaults to 'localhost', '*' = all
                                       # (change requires restart)&lt;/pre&gt;

&lt;p&gt;port = 5432                             # (change requires restart)@@&lt;/p&gt;


&lt;h4&gt;2. Authentification des clients (pg_hba.conf)&lt;/h4&gt;


&lt;p&gt;Le fichier pg_hba.conf configure les autorisations pour les bases du cluster.
Chaque ligne précise une règle aidant à décider si l'utilisateur est habilité à se connecter ou non.
Le fichier est lu dans l'ordre par postgres, et, dès qu'une ligne est rencontrée qui correspond au cas testé, la lecture s'arrête. Cela signifie que l'ordre des lignes est important.
Sur chaque ligne est précisé le type de connexion, un nom de base de données, un nom d'utilisateur, et la méthode d'authentification.
Les méthodes d'authentification les plus classiques sont&amp;nbsp;: md5 (par mot de passe crypté), ident (à partir du nom d'utilisateur du système d'exploitation, non utilisable sous Windows).&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Exemple :&lt;/ins&gt;&lt;/p&gt;



&lt;pre&gt;# connection par socket Unix pour l'administration du serveur
# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD
local   all         postgres                               ident sameuser
# connection par socket Unix 
# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD
local   mabase      tom                                    md5
local   truc        all                                    ident sameuser
# Connexions locales en Ipv4 :
# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD
host    mabase      tom         127.0.0.1/32          md5
host    truc        all         127.0.0.1/32          md5
# Connexion distante en Ipv4 :
# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD
host    mabase      tom         192.168.12.10/32      md5
host    truc        all         192.168.12.10/32      md5&lt;/pre&gt;


&lt;p&gt;La première ligne&amp;nbsp;:
&lt;code&gt;local   all         postgres                               ident sameuser&lt;/code&gt;
signifie que, si postgres reçoit une demande de connexion sur n'importe quelle base (all) par socket Unix (local), pour l'utilisateur postgres, alors la méthode d'authentification utilisée est&amp;nbsp;: ident. sameuser signifie que postgres vérifie que le nom de l'utilisateur Unix propriétaire de la socket est le même que celui utilisé pour se connecter à la base.&lt;/p&gt;



&lt;p&gt;La ligne suivante&amp;nbsp;:
&lt;code&gt;local   mabase      tom                                    md5&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;signifie que, lorsque tom essaie de se connecter par socket Unix sur la base mabase, c'est l'authentification md5 qui est utilisée.&lt;/p&gt;


&lt;p&gt;La ligne&amp;nbsp;:
&lt;code&gt;local   truc        all                                    ident sameuser&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;signifie que lorsque n'importe que n'importe quel utilisateur essaie de se connecter à la base truc par socket Unix, c'est l'authentification ident sameuser qui est utilisée.&lt;/p&gt;


&lt;p&gt;La ligne&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;host    mabase       tom         127.0.0.1/32          md5&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;signifie qu'une demande de connexion à partir pour la base mabase, par un utilisateur tom, en local par Ipv4 est authentifiée par md5.&lt;/p&gt;


&lt;p&gt;La ligne&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;host    mabase      tom         192.168.12.10/32      md5&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;signifie qu'une demande de connexion de l'utilisateur &lt;em&gt;tom&lt;/em&gt; sur &lt;em&gt;mabase&lt;/em&gt;, à partir de l'adresse 192.168.12.10 est authentifiée par &lt;em&gt;md5&lt;/em&gt;.&lt;/p&gt;


&lt;p&gt;On voit donc que &lt;em&gt;tom&lt;/em&gt; est autorisé à se connecter sur la base &lt;em&gt;mabase&lt;/em&gt;, soit par socket Unix, soit par Ipv4 en local, soit par Ipv4 à partir de&amp;nbsp;: 192.168.12.10.
Les autres utilisateurs (à part l'utilisateur postgres) ne peuvent se connecter que sur la base &lt;em&gt;truc&lt;/em&gt;.
Tom peut également se connecter sur la base &lt;em&gt;truc&lt;/em&gt;, car &lt;em&gt;tom&lt;/em&gt; fait partie de l'ensemble des utilisateurs (all).
&lt;ins&gt;NB :&lt;/ins&gt; CIDR est une façon de noter les ensembles d'adresses IP, avec le chiffre derrière le '/' indiquant la taille du masque en bits  (ainsi un réseau de classe A est en /8, classe B, 16, classe C, 24, une IP unique /32, et tout le monde&amp;nbsp;: 0.0.0.0/0 ) (voir l'article Wikipedia&amp;nbsp;: &lt;a href=&quot;http://fr.wikipedia.org/wiki/Adresse_IPv4&quot; hreflang=&quot;fr&quot;&gt;http://fr.wikipedia.org/wiki/Adresse_IPv4&lt;/a&gt; )&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Remarques :&lt;/ins&gt;
Le fichier configure le cluster, il est donc commun à toutes les bases du cluster&amp;nbsp;: attention à ne pas autoriser un utilisateur sur une base par erreur.
Attention, ne surtout pas autoriser d'authentification trust ni ident par le réseau, parce que cela signifierait faire entièrement confiance au client...
Si vous voulez en savoir plus sur l'authentification du client, allez voir la documentation ici&amp;nbsp;:
&lt;a href=&quot;http://docs.postgresql.fr/9.0/client-authentication.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresql.fr/9.0/client-authentication.html&lt;/a&gt;&lt;/p&gt;



&lt;h2&gt;3. Prise en compte des paramètres de configuration&lt;/h2&gt;

&lt;p&gt;Pour que PostgreSQL prenne en compte les modifications de paramètres sans redémarrer le serveur, vous avez les solutions suivantes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;utiliser pg_ctl reload (remplacé par pg_ctlcluster sous Debian)&lt;/li&gt;
&lt;li&gt;envoyer un signal SIGHUP à postgres&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Sous Windows, il est possible d'utiliser un raccourci dans le menu Démarrer (« Rechargez la configuration »).&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: certaines options ne sont prises en compte qu'au démarrage (voir la documentation, les commentaires de postgresql.conf ou la colonne context de la vue pg_settings)&lt;/p&gt;


&lt;h4&gt;4. Créer une base&lt;/h4&gt;

&lt;p&gt;Nous allons créer une base mabase sur le cluster, puis faire de tom le propriétaire de la base (afin qu'il puisse faire ce qu'il veut sur cette base)&lt;/p&gt;


&lt;pre&gt;postgres@flo:/etc/postgresql/9.0/main$ pg_lsclusters
Version Cluster   Port Status Owner    Data directory                     Log file
9.0 main      5432 online postgres /var/lib/postgresql/9.0/main       custom&lt;/pre&gt;


&lt;p&gt;Pour cela, lancez la commande createdb&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;postgres@flo$ createdb mabase&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;NB&amp;nbsp;: createdb lance en fait la commande CREATE DATABASE pour vous.&lt;/p&gt;


&lt;h4&gt;5. Créer un rôle et lui donner des droits sur une base&lt;/h4&gt;

&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: les utilisateurs et les groupes sont tous gérés par des rôles.&lt;/p&gt;


&lt;p&gt;En tant qu'utilisateur postgres, lancez psql&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;postgres@flo:/usr/share/doc/postgresql-common$ psql
Bienvenue dans psql 9.0.6, l'interface interactive de PostgreSQL.&lt;/p&gt;


&lt;pre&gt;Saisissez:
    \copyright pour les termes de distribution
    \h pour l'aide-mémoire des commandes SQL
    \? pour l'aide-mémoire des commandes psql
    \g ou point-virgule en fin d'instruction pour exécuter la requête
    \q pour quitter&lt;/pre&gt;


&lt;pre&gt;postgres=#&lt;/pre&gt;



&lt;p&gt;Créez un rôle tom, avec les droits de login (pour qu'il ait le droit de se connecter au serveur), et le mot de passe&amp;nbsp;: &lt;em&gt;secret&lt;/em&gt;.&lt;/p&gt;


&lt;pre&gt;postgres=# CREATE ROLE tom LOGIN password 'secret';
CREATE ROLE
postgres=#&lt;/pre&gt;


&lt;p&gt;Pour que tom soit le propriétaire de mabase&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt;postgres=# ALTER DATABASE mabase OWNER TO tom;
ALTER DATABASE&lt;/pre&gt;


&lt;p&gt;Sortez de psql&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt;postgres=# \q
postgres@flo:/usr/share/doc/postgresql-common$&lt;/pre&gt;


&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: les commandes CREATE DATABASE et CREATE ROLE (création de base et d'utilisateur) sont globales au cluster. Il est donc possible de les exécuter de n'importe quelle base.&lt;/p&gt;


&lt;p&gt;Maintenant, l'utilisateur &lt;em&gt;tom&lt;/em&gt; peut se connecter sur &lt;em&gt;mabase&lt;/em&gt;&amp;nbsp;: lancez psql, en précisant que vous vous connectez en tant que &lt;em&gt;tom&lt;/em&gt;&amp;nbsp;:&lt;/p&gt;


&lt;pre&gt;flo@flo:~$ psql -U tom mabase
Mot de passe pour l'utilisateur tom :
Bienvenue dans psql 9.0.6, l'interface interactive de PostgreSQL.&lt;/pre&gt;


&lt;pre&gt;Saisissez:
    \copyright pour les termes de distribution
    \h pour l'aide-mémoire des commandes SQL
    \? pour l'aide-mémoire des commandes psql
    \g ou point-virgule en fin d'instruction pour exécuter la requête
    \q pour quitter&lt;/pre&gt;


&lt;pre&gt;mabase=&amp;gt;&lt;/pre&gt;


&lt;p&gt;&lt;ins&gt;Remarque&lt;/ins&gt;&amp;nbsp;: il faut préciser la base! Sinon psql cherchera à se connecter à une base &quot;&lt;em&gt;tom&lt;/em&gt;&quot;.&lt;/p&gt;


&lt;p&gt;Si vous souhaitez donner le droit à tom de créer des bases:&lt;/p&gt;


&lt;pre&gt;postgres=# ALTER ROLE tom CREATEDB;
ALTER ROLE
postgres=#&lt;/pre&gt;


&lt;p&gt;Pour les détails sur les droits, lisez le chapitre correspondant de la documentation&amp;nbsp;:
&lt;a href=&quot;http://docs.postgresqlfr.org/9.0/privileges.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/9.0/privileges.html&lt;/a&gt;&lt;/p&gt;


&lt;h3&gt;E. Super-utilisateur&lt;/h3&gt;

&lt;p&gt;Le super-utilisateur est un utilisateur qui dispose de droits spéciaux (certaines fonctions ne sont utilisables que par un super-utilisateur). Les super-utilisateurs passent au travers des vérifications de droits.
Si vous avez installé PostgreSQL en tant que root, classiquement vous avez un super-utilisateur &lt;em&gt;postgres&lt;/em&gt;.
&lt;ins&gt;Attention&lt;/ins&gt;! Le super-utilisateur disposant de tous les droits, éviter de l'utiliser si ce n'est pas nécessaire, afin de limiter le risque d'erreur.&lt;/p&gt;


&lt;h3&gt;F. Je ne peux pas me connecter à la base? Que faire?&lt;/h3&gt;

&lt;p&gt;Que vérifier?&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;D'abord&amp;nbsp;: lisez le message d'erreur! (ça peut suffire à trouver la solution à partir d'un bon moteur de recherche, des archives des mailing-lists ou de forums...)&lt;/li&gt;
&lt;li&gt;Consultez la log (voir chapitre suivant)&lt;/li&gt;
&lt;li&gt;Cherchez quels sont les clusters présents&amp;nbsp;? (sous Debian&amp;nbsp;: pg_lsclusters...)&lt;/li&gt;
&lt;li&gt;Vérifiez le fichier postgresql.conf (le paramètre listen_addresses est-il correct? Le port est-il celui souhaité? Le client essaie-t-il de se connecter sur le bon  port?)&lt;/li&gt;
&lt;li&gt;Vérifiez le fichier pg_hba.conf&lt;/li&gt;
&lt;li&gt;Vérifiez le propriétaire de la base&lt;/li&gt;
&lt;li&gt;Le rôle que vous utilisez a-t-il le droit de se loguer (autorisation &lt;em&gt;LOGIN&lt;/em&gt;)&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;Le rôle utilisé a-t-il le droit de se connecter à la base de données (sinon utilisez GRANT CONNECT on mabase ...)&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;&lt;ins&gt;NB :&lt;/ins&gt; vous obtenez la liste des bases d'un cluster avec la commande \l dans psql&lt;/p&gt;


&lt;h3&gt;G. Où se trouve la log&amp;nbsp;? Comment la configurer?&lt;/h3&gt;

&lt;p&gt;La configuration de la log est effectuée par le fichier postgresql.conf (voir les paramètres log_destination et log_directory)
Dans une installation standard de PostgreSQL, la log se trouve dans un répertoire pg_log sous le répertoire PGDATA  (répertoire du cluster).
Par exemple, sous Windows&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;C:\Program Files\PostgreSQL\9.0\data\pg_log&lt;/code&gt;&lt;/p&gt;


&lt;pre&gt;&lt;/pre&gt;

&lt;p&gt;En fonction de votre utilisation (production, test, développement), vous pourrez régler les paramètres de la log. Par exemple, loguer tous les ordres SQL peut être fort utile en développement (surtout lorsque vous utilisez un ORM).&lt;/p&gt;


&lt;p&gt;Pensez à recharger la configuration après modification.&lt;/p&gt;


&lt;h3&gt;H. Arrêter/démarrer le serveur PostgreSQL&lt;/h3&gt;

&lt;p&gt;Sous Windows&amp;nbsp;: vous pouvez utiliser &quot;stoppez le service&quot; et &quot;démarrez le service&quot; dans le menu démarrer, ou bien dans un terminal, utiliser pg_ctl&amp;nbsp;:&lt;/p&gt;

&lt;pre&gt;C:\Program Files\PostgreSQL\9.0\bin&amp;gt;pg_ctl start -D &quot;C:\Program Files\PostgreSQL\9.0\data&quot;
server starting&lt;/pre&gt;


&lt;p&gt;Sous Linux&amp;nbsp;: c'est la commande &lt;em&gt;pg_ctl&lt;/em&gt;  (sous Debian&amp;nbsp;: &lt;em&gt;pg_ctlcluster&lt;/em&gt; ou &lt;em&gt;service postresql start&lt;/em&gt;&lt;/p&gt;

&lt;pre&gt;sous Redhat)&lt;/pre&gt;


&lt;h2&gt;V  Outils&lt;/h2&gt;

&lt;h3&gt;A. Outil graphique&amp;nbsp;: pgAdmin3&lt;/h3&gt;

&lt;p&gt;PgAdmin3 est sans doute l'outil le plus populaire pour développer et administrer PostgreSQL.
&lt;a href=&quot;http://www.pgadmin.org/?lang=fr_FR&quot; hreflang=&quot;fr&quot;&gt;http://www.pgadmin.org/?lang=fr_FR&lt;/a&gt;
Voici un apercu de ce à quoi il ressemble. Pour le reste, vous pourrez vous reporter à sa documentation.
&lt;br /&gt;&lt;/p&gt;



&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/.Doc_postgresql_html_m32255e8d_m.jpg&quot; alt=&quot;pgadmin&quot; style=&quot;display:block; margin:0 auto;&quot; title=&quot;pgadmin, déc. 2011&quot; /&gt;
&lt;br /&gt;&lt;/p&gt;


&lt;h3&gt;B. psql (outil en ligne de commande)&lt;/h3&gt;

&lt;p&gt;Psql permet d'exécuter des ordres SQL sur les bases, et également des commandes de gestion et d'administration.
Pour lancer psql&amp;nbsp;:&lt;/p&gt;

&lt;h4&gt;1. Windows&amp;nbsp;:&lt;/h4&gt;


&lt;h5&gt;a)  Via le menu démarrer (gère tout seul le changement d'utilisateur)&lt;/h5&gt;


&lt;p&gt;&lt;ins&gt;Remarque&lt;/ins&gt;&amp;nbsp;: si, à la première connexion, vous avez ce message d'avertissement&amp;nbsp;:&lt;/p&gt;



&lt;pre&gt;Warning: Console code page (437) differs from Windows code page (1252)
        8-bit characters might not work correctly. See psql reference
        page &quot;Notes for Windows users&quot; for details.
postgres=#&lt;/pre&gt;


&lt;p&gt;reportez-vous à la partie installation sous Windows.&lt;/p&gt;


&lt;h5&gt;b) En ligne de commande dans une console&amp;nbsp;:&lt;/h5&gt;

&lt;p&gt;Si vous lancez psql non pas avec le menu démarrer, mais à partir d'une console Windows, il faut être connecté en tant qu'utilisateur système postgres. Ceci est possible avec la commande runas de Windows.&lt;/p&gt;


&lt;p&gt;&lt;code&gt;runas user:postgres cmd.exe  &lt;/code&gt;
Puis modifiez la police de la console pour utiliser Lucida Console, et changez de code page&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;cmd.exe /c chcp 1252&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;(pour la France)&lt;/p&gt;


&lt;p&gt;Malheureusement, si votre base est en UTF8, la console Windows est incapable de gérer correctement l'affichage. Il faudra également éviter de saisir des données avec psql, et préférer pgAdmin pour cet usage (pgAdmin gère parfaitement les différents encodages).&lt;/p&gt;


&lt;h4&gt;2. Sous Linux&amp;nbsp;:&lt;/h4&gt;


&lt;p&gt;&lt;code&gt;psql mabase&lt;/code&gt;&lt;/p&gt;


&lt;h4&gt;3. Remarques&amp;nbsp;:&lt;/h4&gt;


&lt;p&gt;Si vous ne précisez pas le nom de la base, psql essaie de se connecter à la base de même nom que l'utilisateur. Si vous ne précisez pas le nom d'utilisateur, c'est le nom de l'utilisateur du système qui est utilisé.&lt;/p&gt;


&lt;h4&gt;4. Commandes&lt;/h4&gt;

&lt;p&gt;Commandes psql à connaître absolument&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;\? pour l'aide des commandes psql (si vous deviez n'en retenir qu'une)&lt;/li&gt;
&lt;li&gt;\q quitter&lt;/li&gt;
&lt;li&gt;\h aide des commandes sql&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;autres commandes intéressantes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;\l liste des bases de données&lt;/li&gt;
&lt;li&gt;\c se connecter à une base&lt;/li&gt;
&lt;li&gt;\d [nom] pour la description d'une table, d'un index, séquence, vue&lt;/li&gt;
&lt;li&gt;\d liste des relations (tables, vues et séquences)&lt;/li&gt;
&lt;li&gt;\i nom_fichier  exécuter un fichier de commandes SQL&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Attention! Pour la commande \i, les noms de fichiers sous Windows doivent utiliser le séparateur slash &quot; / &quot;et non antislash &quot; \ &quot;  . Exemple&amp;nbsp;:&lt;/p&gt;


&lt;p&gt;&lt;code&gt;\i C:/tests.sql&lt;/code&gt;&lt;/p&gt;


&lt;h4&gt;C. phpPgAdmin&lt;/h4&gt;

&lt;p&gt;C'est un outil d'administration web pour PostgreSQL
&lt;a href=&quot;http://phppgadmin.sourceforge.net/&quot; hreflang=&quot;fr&quot;&gt;http://phppgadmin.sourceforge.net/&lt;/a&gt;&lt;/p&gt;


&lt;h4&gt;D. Copy&lt;/h4&gt;

&lt;p&gt;copy est un outil pour le chargement et déchargement de données en masse. Ce n'est pas une commande standard SQL.
&lt;a href=&quot;http://docs.postgresqlfr.org/9.0/sql-copy.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/9.0/sql-copy.html&lt;/a&gt;&lt;/p&gt;


&lt;h2&gt;VI  Développement&lt;/h2&gt;

&lt;h3&gt;A. SQL&lt;/h3&gt;

&lt;p&gt;Plusieurs outils permettent d'exécuter du code SQL de façon  interactive&amp;nbsp;: psql, pgAdmin (voir les sections qui leur sont consacrées).
Vous pouvez également utiliser un outil tiers, si vous préférez...&lt;/p&gt;


&lt;h3&gt;B. Procédures stockées&lt;/h3&gt;

&lt;p&gt;L'intérêt des procédures stockées est de pouvoir exécuter des fonctions directement sur le serveur. Les procédures stockées sont efficaces et rapides, et permettent de traiter des données, soit pour consultation par un client, soit en mise à jour.&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;PostgreSQL vous donne le choix du langage de procédures stockées.&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;Vous pouvez utiliser:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;PL/pgsql (proche de SQL, facile à utiliser, utilisable pour les triggers)&lt;/li&gt;
&lt;li&gt;PL/Tcl&lt;/li&gt;
&lt;li&gt;PL/Perl (pratique lorsqu'il y a des traitements de chaînes de caractères à effectuer)&lt;/li&gt;
&lt;li&gt;PL/Python&lt;/li&gt;
&lt;li&gt;D'autres langages ne sont pas inclus dans la distribution principale&amp;nbsp;:&lt;/li&gt;
&lt;li&gt;PL/Java, PL/PHP, PL/R,  PL/Ruby, PL/Scheme, PL/sh&lt;/li&gt;
&lt;li&gt;Vous pouvez aussi en définir un vous-même...&lt;/li&gt;
&lt;/ul&gt;

&lt;h3&gt;C. JDBC&lt;/h3&gt;

&lt;p&gt;Le pilote JDBC pour PostgreSQL est un pilote natif (il est entièrement écrit en Java)&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;Les différentes versions du pilote JDBC sont disponibles ici (ainsi que la documentation)&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;&lt;a href=&quot;http://jdbc.postgresql.org/index.html&quot; hreflang=&quot;fr&quot;&gt;http://jdbc.postgresql.org/index.html&lt;/a&gt;
Ensuite vous avez juste à utiliser le .jar de manière classique (le mettre dans le CLASSPATH de votre application)&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;NB :&lt;/ins&gt; la syntaxe de l'URL
&lt;code&gt;String url=&quot;jdbc:postgresql:test_conn&quot;;&lt;/code&gt;&lt;/p&gt;


&lt;p&gt;L'URL a une de ces formes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;jdbc:postgresql:database&lt;/li&gt;
&lt;li&gt;jdbc:postgresql://host/database&lt;/li&gt;
&lt;li&gt;jdbc:postgresql://host:port/database&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Allez voir la documentation &lt;a href=&quot;http://jdbc.postgresql.org/documentation/83/connect.html&quot; hreflang=&quot;fr&quot;&gt;http://jdbc.postgresql.org/documentation/83/connect.html&lt;/a&gt; pour plus de détails.&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Quel driver prendre ?&lt;/ins&gt;&lt;/p&gt;


&lt;p&gt;Normalement, la dernière version du driver devrait vous convenir (elle est compatible avec toutes les versions supportées de PostgreSQL). Mais il y en a 2 variétés : la JDBC3, à préférer pourt les JVM 1.4 et 1.5, et la JDBC4, pour la JVM 1.6. Plus de précisions et une matrice de compatibilité sur la page de téléchargement :
&lt;a href=&quot;http://jdbc.postgresql.org/download.html&quot; hreflang=&quot;fr&quot;&gt;http://jdbc.postgresql.org/download.html&lt;/a&gt;&lt;/p&gt;


&lt;h3&gt;D. Autres (PERL, Python, .Net, ODBC, Tcl...)&lt;/h3&gt;

&lt;p&gt;Voir ici&amp;nbsp;: &lt;a href=&quot;http://docs.postgresqlfr.org/9.0/external-projects.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/9.0/external-projects.html&lt;/a&gt;&lt;/p&gt;

&lt;h3&gt;E. A savoir&amp;nbsp;!&lt;/h3&gt;

&lt;h5&gt;1. Majuscules/minuscules&lt;/h5&gt;

&lt;p&gt;Le nom des objets dans les ordres SQL est converti automatiquement en minuscules.
Par exemple, si vous exécutez&amp;nbsp;:
&lt;code&gt;SELECT Id, Valeur FROM Matable;&lt;/code&gt;
l'ordre réellement exécuté sera&amp;nbsp;:
&lt;code&gt;SELECT id, valeur FROM matable;&lt;/code&gt;&lt;/p&gt;


&lt;pre&gt;mabase=&amp;gt; SELECT Id, Valeur FROM Matable;
 id | valeur
&lt;del&gt;&lt;/del&gt;+&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;
  1 | azerty
(1 ligne)&lt;/pre&gt;


&lt;pre&gt;mabase=&amp;gt;&lt;/pre&gt;

&lt;p&gt;Si vous souhaitez utiliser la casse dans les noms d'objets (ce qui n'est pas conseillé en général), utilisez les guillemets.&lt;/p&gt;


&lt;p&gt;Par exemple&amp;nbsp;:
&lt;code&gt;SELECT &quot;Id&quot;, &quot;Valeur&quot; FROM &quot;Matable&quot;;&lt;/code&gt;
Remarquez que ce comportement est différent d'autres moteurs, qui soit passent tous les noms en majuscule, soit conservent la casse. (Le comportement standard pour un SGBD est d'ignorer la casse, ainsi il est déconseillé généralement d'utiliser des noms d'objet avec des casses différentes&amp;nbsp;: si vous utilisez toujours des minuscules, le comportement sera toujours le même, quel que soit le SGBD)&lt;/p&gt;


&lt;h4&gt;2. Erreurs et transactions&lt;/h4&gt;

&lt;p&gt;Avec PostgreSQL, lorsqu'une erreur se produit dans une transaction, il n'est pas possible de l'ignorer. L'erreur doit être gérée. Sinon tous les ordres suivants sont également en erreur.
De plus, à la fin de la transaction, il n'est pas possible de commiter. L'ordre COMMIT provoque en réalité un ROLLBACK.&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Exemple :&lt;/ins&gt;&lt;/p&gt;


&lt;pre&gt;mabase=&amp;gt; begin;
BEGIN
mabase=&amp;gt; insert into matable(valeur, nb) values ('c',2);
INSERT 0 1
mabase=&amp;gt; insert into matable(valeur, nb) values ('c',2);
ERREUR:  la valeur d'une clé dupliquée rompt la contrainte unique « u_matable »
mabase=&amp;gt; insert into matable(valeur, nb) values ('d',2);
ERREUR:  la transaction est annulée, les commandes sont ignorées jusqu'à la fin du bloc
de la transaction
mabase=&amp;gt; commit;
ROLLBACK
mabase=&amp;gt; select valeur, nb from matable;
 valeur | nb
&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;+&lt;del&gt;&lt;/del&gt;
 a      |  2
 b      |  2
(2 lignes)&lt;/pre&gt;


&lt;pre&gt;mabase=&amp;gt;&lt;/pre&gt;


&lt;h4&gt;3. Savepoints&lt;/h4&gt;

&lt;p&gt;Les savepoints ne sont pas spécifiques à PostgreSQL. Mais c'est une fonctionalité SQL trop peu connue, et pourtant extrêmement utile, dans le cas de traitements lourds.&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;Un savepoint sert à marquer un point de reprise dans un traitement. Lorsque vous avez à effectuer un traitement long (par exemple lorqu'un programme doit mettre à jour tout un ensemble de données les unes après les autres), vous pouvez mettre des savepoints à intervalles réguliers. Lorsqu'une erreur se produit, vous faites en sorte que le programme effectue un ROLLBACK TO SAVEPOINT vers un point de sauvegarde où l'état de vos données est cohérent (généralement le dernier point de sauvegarde). Ensuite vous pouvez annuler le traitement (après par exemple pris la précaution de loguer les événements...)&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;L'intérêt est que seul les traitements effectués après le point de sauvegarde sont perdus. Cela évite à votre programme de faire un ROLLBACK sur l'ensemble du traitement! Votre programme peut ainsi effectuer des traitements partiellement.&lt;/p&gt;


&lt;h4&gt;4. DDL dans les transactions!&lt;/h4&gt;

&lt;p&gt;Une des fonctionnalités les plus épatantes de PostgreSQL est la possibilité d'inclure des ordres DDL dans des transactions.&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;&lt;ins&gt;Exemple :&lt;/ins&gt;&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;Dans une transaction, on crée une table &quot;test&quot;, puis une table &quot;matable&quot;. La création de &quot;matable&quot; échoue (la table existe déjà). On fait un rollback sur la transaction&amp;nbsp;: la table &quot;test&quot; n'existe pas.&lt;/p&gt;


&lt;pre&gt;mabase=&amp;gt; BEGIN;
BEGIN
mabase=&amp;gt; CREATE TABLE test (
    id serial NOT NULL,
    valeur character varying(20) NOT NULL);
NOTICE:  CREATE TABLE créera des séquences implicites « test_id_seq » pour la colonne serial « test.id »
CREATE TABLE
mabase=&amp;gt; ALTER TABLE test ADD CONSTRAINT pk_test PRIMARY KEY (id);
NOTICE:  ALTER TABLE / ADD PRIMARY KEY créera un index implicite « pk_test » pour la table « test »
ALTER TABLE
mabase=&amp;gt; CREATE TABLE matable (
    id serial NOT NULL,
    valeur character varying(20) NOT NULL);
NOTICE:  CREATE TABLE créera des séquences implicites « matable_id_seq1 » pour la colonne serial « matable.id »
ERREUR:  la relation « matable » existe déjà
mabase=&amp;gt; ROLLBACK;
ROLLBACK
mabase=&amp;gt; \d
                 Liste des relations
 Schéma |       Nom        |   Type   | Propriétaire
&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;+&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;&lt;del&gt;+&lt;/del&gt;&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;+&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;&lt;del&gt;&lt;/del&gt;--
 public | matable          | table    | tom
 public | matable_id_seq   | séquence | tom
 public | table_flo        | table    | flo
 public | table_flo_id_seq | séquence | flo
(4 lignes)&lt;/pre&gt;


&lt;pre&gt;mabase=&amp;gt;&lt;/pre&gt;


&lt;p&gt;&lt;ins&gt;Intérêt :&lt;/ins&gt;&lt;br /&gt;&lt;/p&gt;


&lt;p&gt;On peut faire tout un ensemble de modification de façon atomique (par exemple la migration d'un schéma pour l'évolution d'une application), C'est un soulagement pour le DBA qui devra passer votre script de migration, de nuit, de savoir qu'il n'aura pas à restaurer la base en cas d'échec.&lt;/p&gt;


&lt;h4&gt;5. Count(*)&lt;/h4&gt;

&lt;p&gt;En raison de l'implémentation actuelle du MVCC, count(*) force le parcours complet de la table, ce qui est donc lent.&lt;/p&gt;


&lt;h2&gt;VII  Et après?&lt;/h2&gt;

&lt;h3&gt;A. Lire la documentation&amp;nbsp;:&lt;/h3&gt;

&lt;p&gt;Lien vers la documentation en Français&amp;nbsp;:  &lt;a href=&quot;http://docs.postgresql.fr/&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresql.fr/&lt;/a&gt;
En anglais&amp;nbsp;: [http://www.postgresql.org/docs/
|http://www.postgresql.org/docs/|en]&lt;/p&gt;

&lt;h3&gt;B. Sites utiles&amp;nbsp;:&lt;/h3&gt;

&lt;p&gt;&lt;a href=&quot;http://www.postgresql.org/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/&lt;/a&gt;&amp;nbsp;: site officiel
&lt;a href=&quot;http://www.postgresql.fr/&quot; hreflang=&quot;fr&quot;&gt;http://www.postgresql.fr/&lt;/a&gt;&amp;nbsp;: site de la communauté francophone.&lt;/p&gt;


&lt;h3&gt;C. Pour trouver de l'aide complémentaire&amp;nbsp;:&lt;/h3&gt;

&lt;p&gt;La communauté PostgreSQL est très active, et vous trouverez facilement de l'aide pour les problèmes les plus simples aussi bien que pour les cas les plus tordus.&lt;/p&gt;

&lt;h4&gt;1. Listes de diffusion&amp;nbsp;:&lt;/h4&gt;

&lt;p&gt;La liste francophone&amp;nbsp;:
&lt;a href=&quot;http://archives.postgresql.org/pgsql-fr-generale/&quot; hreflang=&quot;fr&quot;&gt;http://archives.postgresql.org/pgsql-fr-generale/&lt;/a&gt;
Les autres&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/community/lists/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/community/lists/&lt;/a&gt;
&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: les listes &quot;developer&quot; sont pour les développeurs DE PostgreSQL uniquement&amp;nbsp;!&lt;/p&gt;


&lt;h4&gt;2. Forum de la communauté francophone&amp;nbsp;:&lt;/h4&gt;

&lt;p&gt;&lt;a href=&quot;http://forums.postgresql.fr/&quot; hreflang=&quot;fr&quot;&gt;http://forums.postgresql.fr/&lt;/a&gt;&lt;/p&gt;



&lt;h4&gt;3. Remarque&amp;nbsp;: comment poser vos questions?&lt;/h4&gt;

&lt;p&gt;Si vous posez une question parce que vous avez un problème, vous voulez  certainement qu'il soit résolu le plus vite possible. Alors pensez à ceux qui vont tenter de vous aider, et faites-leur gagner du temps en donnant les informations nécessaires. Soyez le plus clair possible. &lt;br /&gt;&lt;/p&gt;


&lt;p&gt;Pensez à préciser au minimum&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;La version de PostgreSQL utilisée,&lt;/li&gt;
&lt;li&gt;Le système d'exploitation.,&lt;/li&gt;
&lt;li&gt;ce que vous avez fait,&lt;/li&gt;
&lt;li&gt;ce que vous vouliez faire,&lt;/li&gt;
&lt;li&gt;le message d'erreur (ou son absence),&lt;/li&gt;
&lt;li&gt;le résultat obtenu.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Si vous n'arrivez pas à vous connecter, précisez si le client est sur la même machine que le serveur. Recopiez les messages d'erreurs, consultez la log... enfin donnez le maximum d'informations pertinentes, et si on vous pose des questions, répondez-y le plus précisément possible.&lt;br /&gt;
Evitez également de dire qu'il y a un bug si vous n'en êtes pas absolement certain(e), et postez sur la mailing-list ou le forum approprié (par exemple, la mailing-list pour les novices n'est pas un endroit indigne, et des hackers y répondent régulièrement et avec bienveillance)&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Premiers pas avec PostgreSQL 9.0</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2010/09/26/Premiers-pas-avec-PostgreSQL-9.0" rel="alternate" type="text/html"
    title="Premiers pas avec PostgreSQL 9.0" />
    <id>urn:md5:99f0f713c36e79282010fb024c267e88</id>
    <published>2010-10-03T15:42:00+01:00</published>
    <updated>2010-10-03T18:27:04+01:00</updated>
    <author><name>florence</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;p&gt;J'ai mis à jour le document que j'avais rédigé il y a un peu plus d'un an, afin qu'il soit à jour avec la sortie de la 9.0. À l'occasion, j'ai changé le titre, qui ne me plaisait pas beaucoup, pour &quot;Premiers pas avec PostgreSQL&quot;.
En attendant que je fasse la mise en forme pour le passer sur le blog − c'est très long − , voici la version pdf et la version OpenOffice, que vous pouvez dès à présent lire et distribuer. N'hésitez pas à me faire part de vos remarques.&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/public/Doc_postgresql_9_0.pdf&quot;&gt;Premiers_pas_9_0&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://blog2.postgresql.fr/public/Doc_postgresql_9_0.odt&quot;&gt;Premiers_pas_9_0_odt&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Présentation de la version 9.0 de PostgreSQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2010/06/16/Pr%C3%A9sentation-de-la-version-9.0-de-PostgreSQL2" rel="alternate" type="text/html"
    title="Présentation de la version 9.0 de PostgreSQL" />
    <id>urn:md5:45dc7ea07698084592d13f456b6691ec</id>
    <published>2010-06-16T15:30:00+01:00</published>
    <updated>2010-06-21T13:08:07+01:00</updated>
    <author><name>mcousin</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;p&gt;Ce document tente de présenter les principaux changements apportés par PostgreSQL 9.0, par rapport à la version majeure précédente, la version 8.4. Dans la mesure du possible, chaque fonctionnalité sera expliquée et accompagnée d'une démonstration. Toutes les nouveautés ne sont bien sûr pas présentées (il y en a plus de 200).&lt;/p&gt;
&lt;p&gt;La version 9.0, comme son nom l'indique, est une version capitale dans la progression de PostgreSQL. Même si les solutions de réplication pour PostgreSQL sont nombreuses et répondent à des problématiques variées, la version 9.0 apporte une réplication simple, robuste et intégrée au moteur, qui sera vraisemblablement utilisée par défaut dans la plupart des configurations de Haute Disponibilité reposant sur PostgreSQL.&lt;/p&gt;
&lt;p&gt;Les changements ont été subdivisés en quatre parties:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Les deux nouveautés incontournables&lt;/li&gt;
&lt;li&gt;Les nouveautés&lt;/li&gt;
&lt;li&gt;Les changements pouvant entraîner des régressions&lt;/li&gt;
&lt;li&gt;Les améliorations&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Les incontournables&lt;/h2&gt;
&lt;p&gt;Ces deux nouveautés sont celles qui ont justifié à elles seules le renommage de 8.5 en 9.0.&lt;/p&gt;
&lt;h3&gt;Hot Standby&lt;/h3&gt;
&lt;p&gt;Cette nouvelle fonctionnalité est une des deux raisons du renommage en 9.0. Il s'agit de proposer une base de 'Standby', c'est-à-dire une baseappliquant les journaux binaires générés par la base de production, tout&amp;nbsp;&amp;nbsp;en la rendant ouverte en lecture seule. Ceci est assez complexe car, pendant l'exécution de ces requêtes en lecture seule, la base en Standby doit aussi pouvoir appliquer les données binaires provenant de la base de production, être capable de décider si les modifications peuvent entrer en conflit avec les lectures et déterminer les actions à entreprendre en conséquence&amp;nbsp;: mettre en pause la restauration ou tuer des requêtes en lecture seule. Ce patch est volumineux et complexe, il rajoute des informations dans la journalisation à l'intention de la base de Standby et un mécanisme de résolution des conflits. C'est donc une des fonctionnalités majeures, et une des principales fonctionnalités à aider à tester.&lt;/p&gt;
&lt;p&gt;Pour mettre ceci en place, il suffit de paramétrer la base de production comme suit&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;&lt;code&gt;postgresql.conf&lt;/code&gt; Primaire:&lt;/p&gt;
&lt;pre&gt;wal_level = 'hot standby' # Génère les informations supplémentaires dans les journaux&lt;br /&gt;# vacuum_defer_cleanup_age # Optionnellement, vous pourriez vouloir paramétrer ceci, mais son réglage pourrait être complexe&lt;/pre&gt;
&lt;p&gt;Ensuite, créer une base de standby (la procédure est la même que précédemment pour un Warm Standby&amp;nbsp;: pg_start_backup sur la production, recopie des fichiers sur l'esclave, pg_end_backup sur la production).&lt;/p&gt;
&lt;p&gt;Puis il suffit de recopier les journaux sur le secondaire et de rajouter ceci dans son postgresql.conf&amp;nbsp;: &lt;/p&gt;
&lt;p&gt;&lt;code&gt;postgresql.conf&lt;/code&gt; Secondaire:&lt;/p&gt;
&lt;pre&gt;hot_standby=on&lt;br /&gt;max_standby_delay=30s # -1= toujours attendre, 0= ne jamais attendre, sinon attendre cette durée&lt;/pre&gt;
&lt;p&gt;et d'utiliser un programme comme pg_standby sur le secondaire pour intégrer les journaux (à paramétrer dans le &lt;code&gt;recovery.conf&lt;/code&gt;).&lt;/p&gt;
&lt;p&gt;max_standby_delay permet de déterminer le comportement de la base de standby en cas de conflit entre l'application des journaux de transactions et les requêtes en lecture seule. En cas de conflit, la base de standby acceptera d'attendre au plus max_standby_delay avant de tuer les requêtes en lecture qui bloquent l'application des journaux.&lt;/p&gt;
&lt;p&gt;Il est bien sûr vivement conseillé de lire la documentation avant de mettre en place cette fonctionnalité… Ne serait-ce que pour bien comprendre les conséquences du réglage de max_standby_delay et vacuum_defer_cleanup_age, qui ne sont pas simples à appréhender.&lt;/p&gt;
&lt;h3&gt;Streaming Replication&lt;/h3&gt;
&lt;p&gt;C'est la deuxième moitié de la raison du passage en 9.0. Il s'agit cette fois-ci de modifier le mécanisme d'archivage pour le rendre continu&amp;nbsp;: les bases de standby peuvent donc se connecter au maître et récupérer à tout moment ce qui leur manque des journaux, non plus en termes de fichiers entiers, mais bien en termes d'enregistrements dans ces journaux (des fragments de ces fichiers donc). Il s'agit donc bien d'une réplication binaire, pas de la rééxécution dans le même ordre de requêtes SQL comme sur certains autres moteurs de bases de données, avec tous les risques de cohérence que cela impliquerait.&lt;/p&gt;
&lt;p&gt;Les bases de production et de standby sont identiques au niveau binaire (enfin presque, on ne va pas rentrer dans les détails, mais ne vous en faites pas si les fichiers de données n'ont pas la même somme de contrôle).&lt;/p&gt;
&lt;p&gt;wal_level devra valoir «&amp;nbsp;archive&amp;nbsp;» (ou «&amp;nbsp;hot standby ») pour continuer à faire de l'archivage continu.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;postgresql.conf&lt;/code&gt; primaire :&lt;/p&gt;
&lt;pre&gt;max_wal_senders = x # Nombre maximum de « wal_senders », les processus chargés de répondre à des serveurs de standby&lt;br /&gt;wal_keep_segments # Nombre de fichiers de journaux de transactions à conserver en ligne quoi qu'il arrive (évite d'avoir à les recopier manuellement sur le(s) secondaires en cas de déconnection lente)&lt;/pre&gt;
&lt;p&gt;Sur le secondaire&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;&lt;code&gt;recovery.conf&lt;/code&gt; secondaire:&lt;/p&gt;
&lt;pre&gt;stanby_mode = on&lt;br /&gt;primary_conninfo = 'host=192.168.1.50 port=5432 user=foo password=foopass' # La chaîne de connexion pour une session sur le maître&lt;/pre&gt;
&lt;p&gt;&lt;code&gt;postgresql.conf&lt;/code&gt; secondaire:&lt;/p&gt;
&lt;pre&gt;wal_level # à la même valeur que sur le maître (pour le retour de bascule…)&lt;br /&gt;hot_standby=on/off # Suivant que vous voulez en même temps être en hot standby&lt;/pre&gt;
&lt;p&gt;fichier pg_hba.conf&amp;nbsp;:
On doit y créer une entrée pour les connexions de réplication. La base est «&amp;nbsp;replication », l'utilisateur utilisé doit avoir l'attribut de superutilisateur. Attention à ne pas donner des droits trop importants ici, donner accès aux journaux de transactions en lecture à n'importe qui donne accès à des informations privilégiées.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;pg_hba.conf&lt;/code&gt; primaire:&lt;/p&gt;
&lt;pre&gt;host    replication     foo             192.168.1.100/32        md5&lt;/pre&gt;
&lt;p&gt;Comme pour Hot Standby, cette fonctionnalité est suffisamment riche et complexe pour qu'il soit vivement conseillé de lire la doc. Et de faire des tests de bascule une fois l'ensemble mis en place.&lt;/p&gt;
&lt;p&gt;Ce qui est très important avec ces deux fonctionnalités, c'est que vous pouvez les utiliser ensemble. Vous pouvez donc avoir donc une base de stanby répliquée de façon quasi-synchrone avec la production, et exécuter des requêtes en lecture seule sur cette base.&lt;/p&gt;
&lt;h2&gt;Les nouveautés&lt;/h2&gt;
&lt;h3&gt;Contraintes d'exclusion&lt;/h3&gt;
&lt;p&gt;Il est maintenant possible de déclarer des contraintes d'unicité plus complexes que celles s'appuyant sur l'opérateur '=' (contrainte d'unicité, deux jeux de colonnes ne pouvant être identiques).&lt;/p&gt;
&lt;p&gt;Nous allons, pour l'illustrer, utiliser l'exemple de l'auteur, en utilisant le type 'temporal' qu'il a aussi développé. Ce type de données permet de définir des 'plages de temps', c'est à dire par exemple 'la plage de 12h15 à 13h15'.&lt;/p&gt;
&lt;p&gt;Il faut donc récupérer le module temporal à l'adresse suivante&amp;nbsp;: http://pgfoundry.org/projects/temporal/ , le compiler et l'installer comme un contrib (exécuter le script SQL fourni).&lt;/p&gt;
&lt;pre&gt;CREATE TABLE reservation&lt;br /&gt;(&lt;br /&gt;  salle      TEXT,&lt;br /&gt;  professeur TEXT,&lt;br /&gt;  durant    PERIOD);&lt;br /&gt;&lt;br /&gt;ALTER TABLE reservation ADD CONSTRAINT test_exclude EXCLUDE   USING gist (salle WITH =,durant WITH &amp;amp;&amp;amp;);&lt;/pre&gt;
&lt;p&gt;Par ceci, nous disons qu'un enregistrement doit être refusé (contrainte d'exclusion) s'il en existe déjà un vérifiant les deux conditions concerner la même salle, et être en intersection au niveau de l'intervalle de temps.&lt;/p&gt;
&lt;pre&gt;marc=# INSERT INTO reservation (professeur,salle,durant) VALUES ( 'marc', 'salle techno', period('2010-06-16 09:00:00', '2010-06-16 10:00:00'));&lt;br /&gt;INSERT 0 1&lt;br /&gt;marc=# INSERT INTO reservation (professeur,salle,durant) VALUES ( 'jean', 'salle chimie', period('2010-06-16 09:00:00', '2010-06-16 11:00:00'));&lt;br /&gt;INSERT 0 1&lt;br /&gt;marc=# INSERT INTO reservation (professor,room,during) VALUES ( 'marc', 'salle chimie', period('2010-06-16 10:00:00', '2010-06-16 11:00:00'));&lt;br /&gt;ERROR:  conflicting key value violates exclusion constraint &quot;test_exclude&quot;&lt;br /&gt;DETAIL:  Key (room, during)=(salle chimie, [2010-06-16 10:00:00+02, 2010-06-16 11:00:00+02)) conflicts with existing key (room, during)=(salle chimie, [2010-06-16 09:00:00+02, 2010-06-16 11:00:00+02)).&lt;/pre&gt;
&lt;p&gt;L'insertion est interdite, puisque la salle de chimie est déjà prise de 9h à 11h.&lt;/p&gt;
&lt;h3&gt;Triggers par colonne&lt;/h3&gt;
&lt;p&gt;Voici d'abord un trigger par colonne.&lt;/p&gt;
&lt;pre&gt;CREATE TRIGGER toto BEFORE UPDATE of a ON t1 FOR EACH ROW EXECUTE PROCEDURE mon_trigger();&lt;/pre&gt;
&lt;p&gt;Ce trigger ne se déclenche que si la colonne a de la table t1 a été modifiée.&lt;/p&gt;
&lt;h3&gt;Triggers WHEN&lt;/h3&gt;
&lt;p&gt;Voici maintenant des exemples tirés de la documentation officielle pour la clause WHEN des triggers:&lt;/p&gt;
&lt;pre&gt;CREATE TRIGGER check_update&lt;br /&gt;BEFORE UPDATE ON accounts&lt;br /&gt;FOR EACH ROW&lt;br /&gt;WHEN (OLD.balance IS DISTINCT FROM NEW.balance)&lt;br /&gt;EXECUTE PROCEDURE check_account_update();&lt;br /&gt;&lt;br /&gt;CREATE TRIGGER log_update&lt;br /&gt;AFTER UPDATE ON accounts&lt;br /&gt;FOR EACH ROW&lt;br /&gt;WHEN (OLD.* IS DISTINCT FROM NEW.*)&lt;br /&gt;EXECUTE PROCEDURE log_account_update();&lt;/pre&gt;&lt;h3&gt;DEFERRABLE UNIQUE CONSTRAINTS&lt;/h3&gt;
&lt;p&gt;Cette fonctionnalité aussi promet d'être pratique. Voici un exemple avec une clé primaire au lieu d'une simple clé unique, mais cela revient au même&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# CREATE TABLE test (a int primary key);&lt;br /&gt;marc=# INSERT INTO test values (1), (2);&lt;br /&gt;marc=# UPDATE test set a = a+1;&lt;br /&gt;ERROR:  duplicate key value violates unique constraint &quot;test_pkey&quot;&lt;br /&gt;DETAIL:  Key (a)=(2) already exists.&lt;/pre&gt;
&lt;p&gt;Normal, mais dommage&amp;nbsp;: à la fin de la transaction, mes données auraient été cohérentes. D'autant plus que si la table avait été triée physiquement par ordre descendant, ça passait&amp;nbsp;! En 8.4, il n'y avait pas d'échappatoire simple, il fallait trouver une astuce pour mettre à jour les enregistrements dans le bon ordre.&lt;/p&gt;
&lt;p&gt;Nous pouvons maintenant faire ceci&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# CREATE TABLE test (a int primary key deferrable);&lt;br /&gt;marc=# INSERT INTO test values (2),(1);&lt;br /&gt;marc=# UPDATE test set a = a+1;&lt;br /&gt;ERROR:  duplicate key value violates unique constraint &quot;test_pkey&quot;&lt;br /&gt;DETAIL:  Key (a)=(2) already exists.&lt;/pre&gt;
&lt;p&gt;Ah zut, ça ne marche pas. &lt;/p&gt;
&lt;p&gt;En fait, je l'ai fait exprès&amp;nbsp;: j'en profite pour faire un petit rappel sur les contraintes deferrable/deferred&amp;nbsp;: une contrainte 'deferrable' PEUT être vérifiée en fin de transaction (elle est 'retardable'). Il faut toutefois dire à PostgreSQL expressément qu'on veut vraiment faire ce contrôle en fin de transaction.&lt;/p&gt;
&lt;p&gt;On peut, pour la session en cours demander à passer toutes les contraintes en 'DEFERRED'&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# SET CONSTRAINTS ALL DEFERRED;&lt;br /&gt;SET CONSTRAINTS&lt;br /&gt;marc=# UPDATE test set a = a+1;&lt;br /&gt;UPDATE 2&lt;/pre&gt;
&lt;p&gt;Si on veut ne pas avoir à effectuer le SET CONSTRAINTS à chaque fois, il est aussi possible de déclarer la contrainte comme INITIALLY DEFERRED:&lt;/p&gt;
&lt;pre&gt;CREATE TABLE test (a int PRIMARY KEY DEFERRABLE INITIALLY DEFERRED);&lt;/pre&gt;
&lt;p&gt;Un autre rappel s'impose&amp;nbsp;: les contraintes DEFERRED sont plus lentes que les contraintes IMMEDIATE. Par ailleurs, il faut bien stocker la liste des enregistrements à vérifier en fin de transaction quelque part, et cela consomme de la mémoire. Attention à ne pas le faire sur des millions d'enregistrements d'un coup. C'est la raison pour laquelle les contraintes 'DEFERRABLE' ne sont pas 'INITIALLY DEFERRED' par défaut.&lt;/p&gt;
&lt;h3&gt;Fonctions anonymes&lt;/h3&gt;
&lt;p&gt;Cette nouvelle fonctionnalité permet de créer des fonctions à usage unique. Elles seront très pratiques dans des scripts de livraison de version applicative par exemple. Voici une version un peu différente du GRANT SELECT ON ALL TABLES qui sera présenté plus loin dans ce document, qui donne le droit de sélection à tout un jeu de tables, en fonction du propriétaire des tables, et en ignorant deux schémas&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;DO language plpgsql $$ &lt;br /&gt;DECLARE&lt;br /&gt;vr record;&lt;br /&gt;&lt;br /&gt;BEGIN&lt;br /&gt;&lt;br /&gt;FOR vr IN SELECT tablename FROM pg_tables WHERE tableowner = 'marc' AND schemaname NOT IN ('pg_catalog','information_schema')&lt;br /&gt;LOOP&lt;br /&gt;  EXECUTE 'GRANT SELECT ON ' || vr.tablename || ' TO toto';&lt;br /&gt;END LOOP;&lt;br /&gt;END&lt;br /&gt;$$&lt;br /&gt;;&lt;/pre&gt;
&lt;p&gt;En 8.4, il aurait fallu créer une fonction (via CREATE FUNCTION), l'exécuter puis la supprimer (avec DROP FUNCTION). Le tout demandant d'avoir les droits pour ça. La 9.0 facilite donc ce type d'exécution rapide.&lt;/p&gt;
&lt;h3&gt;Paramètres nommés&lt;/h3&gt;
&lt;p&gt;La syntaxe retenue pour nommer les paramètres est la suivante:&lt;/p&gt;
&lt;pre&gt;CREATE FUNCTION test (a int, b text) RETURNS text AS $$&lt;br /&gt;DECLARE&lt;br /&gt;valeur text;&lt;br /&gt;BEGIN&lt;br /&gt;valeur := 'a vaut ' || a::text || ' et b vaut ' || b;&lt;br /&gt;RETURN valeur;&lt;br /&gt;END;&lt;br /&gt;$$ LANGUAGE plpgsql;&lt;/pre&gt;
&lt;p&gt;Jusque là, on écrivait&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;SELECT test(1,'toto');&lt;br /&gt;test           &lt;br /&gt;-------------------------&lt;br /&gt;a vaut 1 et b vaut toto&lt;br /&gt;(1 row)&lt;/pre&gt;
&lt;p&gt;Maintenant, on peut utiliser cette syntaxe explicite:&lt;/p&gt;
&lt;pre&gt;SELECT test( b:='toto', a:=1);&lt;br /&gt;test           &lt;br /&gt;-------------------------&lt;br /&gt;a vaut 1 et b vaut toto&lt;br /&gt;(1 row)&lt;/pre&gt;
&lt;p&gt;De nombreux langages permettent ce type de syntaxe d'appel de fonction, qui améliore fortement la lisibilité du code.&lt;/p&gt;
&lt;h3&gt;GRANT/REVOKE IN SCHEMA&lt;/h3&gt;
&lt;p&gt;C'est un problème idiot, et un peu frustrant, qui est déjà arrivé à beaucoup d'administrateurs de base de données&amp;nbsp;: créer 400 tables, puis devoir attribuer des droits à un utilisateur sur ces 400 tables. Jusque là, on en était quitte pour créer un script. Plus maintenant&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;GRANT SELECT ON ALL TABLES IN SCHEMA public TO toto;&lt;/pre&gt;
&lt;p&gt;Et la marche arrière&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;REVOKE SELECT ON ALL TABLES IN SCHEMA public FROM toto;&lt;/pre&gt;
&lt;p&gt;Bien sûr, cette commande ne vaut que pour les tables en place au moment de la commande. Il faudra toujours faire de nouveaux GRANT pour les futures tables du schéma.&lt;/p&gt;
&lt;h3&gt;ALTER&amp;nbsp;DEFAULT PRIVILEGES&lt;/h3&gt;
&lt;p&gt;Encore une commande permettant de gagner du temps dans la gestion des droits.&lt;/p&gt;
&lt;pre&gt;ALTER DEFAULT PRIVILEGES FOR ROLE marc GRANT SELECT ON TABLES TO PUBLIC ;&lt;br /&gt;CREATE TABLE test_priv (a int);&lt;br /&gt;\z test_priv&lt;br /&gt;                             Access privileges&lt;br /&gt; Schema |    Name    | Type  | Access privileges | Column access privileges &lt;br /&gt;--------+------------+-------+-------------------+--------------------------&lt;br /&gt; public | test_priv  | table | =r/marc          +| &lt;br /&gt;        |            |       | marc=arwdDxt/marc | &lt;/pre&gt;
&lt;p&gt;Les informations sur les droits par défaut sont stockées dans pg_default_acl.&lt;/p&gt;
&lt;h2&gt;Les changements pouvant entraîner régression&lt;/h2&gt;
&lt;p&gt;Ces deux changements dans PL/pgSQL peuvent entraîner des régressions dans du code fonctionnant en 8.4. Si vous avez du code PL/pgSQL, vérifiez le avant de migrer en 9.0. Le moteur génère des erreurs à l'exécution, comme illustré ci-dessous.&lt;/p&gt;
&lt;h3&gt;PL/pgSQL&amp;nbsp;: meilleur contrôle du nom des variables&lt;/h3&gt;
&lt;pre&gt;marc=# DO LANGUAGE plpgsql&lt;br /&gt;$$&lt;br /&gt;DECLARE&lt;br /&gt;a int;&lt;br /&gt;BEGIN&lt;br /&gt;SELECT a FROM test;&lt;br /&gt;END&lt;br /&gt;$$&lt;br /&gt;ERROR:  column reference &quot;a&quot; is ambiguous&lt;br /&gt;LINE 1: select a from test&lt;br /&gt;DETAIL:  It could refer to either a PL/pgSQL variable or a table column.&lt;br /&gt;QUERY:  select a from test&lt;br /&gt;CONTEXT:  PL/pgSQL function &quot;inline_code_block&quot; line 4 at SQL statement&lt;/pre&gt;
&lt;p&gt;Si vous voulez modifier ce comportement, vous pouvez le faire globalement mais il est préférable de le faire par fonction, en exécutant une de ces commandes au début de votre fonction:&lt;/p&gt;
&lt;pre&gt;variable_conflict error        # mode par défaut&lt;br /&gt;variable_conflict use_variable # choisir le nom de variable&lt;br /&gt;variable_conflict use_column   # choisir le nom de colonne&lt;/pre&gt;
&lt;h3&gt;Protection des mots réservés en PL/pgSQL&lt;/h3&gt;
&lt;pre&gt;marc=# DO LANGUAGE plpgsql&lt;br /&gt;$$&lt;br /&gt;DECLARE&lt;br /&gt;table int;&lt;br /&gt;BEGIN&lt;br /&gt;table :=table+1;&lt;br /&gt;END&lt;br /&gt;$$&lt;br /&gt;;&lt;br /&gt;ERROR:  syntax error at or near &quot;table&quot;&lt;br /&gt;LINE 6: table :=table+1;&lt;br /&gt;^&lt;br /&gt;marc=# DO LANGUAGE plpgsql&lt;br /&gt;$$&lt;br /&gt;DECLARE&lt;br /&gt;&quot;table&quot; int;&lt;br /&gt;BEGIN&lt;br /&gt;&quot;table&quot; :=&quot;table&quot;+1;&lt;br /&gt;END&lt;br /&gt;$$&lt;br /&gt;;&lt;br /&gt;DO&lt;/pre&gt;
&lt;h2&gt;Les améliorations&lt;/h2&gt;
&lt;p&gt;Le planificateur de requête a reçu un grand nombre d'améliorations dans cette version. Nous allons donc commencer par lui:&lt;/p&gt;
&lt;h3&gt;Join Removal&lt;/h3&gt;
&lt;pre&gt;marc=# CREATE TABLE t1 (a int);&lt;br /&gt;CREATE TABLE&lt;br /&gt;marc=# CREATE TABLE t2 (b int);&lt;br /&gt;CREATE TABLE&lt;br /&gt;marc=# CREATE TABLE t3 (c int);&lt;br /&gt;CREATE TABLE&lt;/pre&gt;
On insère quelques données avec le generate_series…&lt;br /&gt;&lt;pre&gt;marc=# EXPLAIN SELECT t1.a,t2.b from t1 join t2 on (t1.a=t2.b) left join t3 on (t1.a=t3.c);&lt;br /&gt;                                  QUERY PLAN                                  &lt;br /&gt;------------------------------------------------------------------------------&lt;br /&gt; Merge Right Join  (cost=506.24..6146.24 rows=345600 width=8)&lt;br /&gt;   Merge Cond: (t3.c = t1.a)&lt;br /&gt;   -&amp;gt;  Sort  (cost=168.75..174.75 rows=2400 width=4)&lt;br /&gt;         Sort Key: t3.c&lt;br /&gt;         -&amp;gt;  Seq Scan on t3  (cost=0.00..34.00 rows=2400 width=4)&lt;br /&gt;   -&amp;gt;  Materialize  (cost=337.49..853.49 rows=28800 width=8)&lt;br /&gt;         -&amp;gt;  Merge Join  (cost=337.49..781.49 rows=28800 width=8)&lt;br /&gt;               Merge Cond: (t1.a = t2.b)&lt;br /&gt;               -&amp;gt;  Sort  (cost=168.75..174.75 rows=2400 width=4)&lt;br /&gt;                     Sort Key: t1.a&lt;br /&gt;                     -&amp;gt;  Seq Scan on t1  (cost=0.00..34.00 rows=2400 width=4)&lt;br /&gt;               -&amp;gt;  Sort  (cost=168.75..174.75 rows=2400 width=4)&lt;br /&gt;                     Sort Key: t2.b&lt;br /&gt;                     -&amp;gt;  Seq Scan on t2  (cost=0.00..34.00 rows=2400 width=4)&lt;/pre&gt;Pour l'instant, c'est normal, et on a le même comportement qu'en 8.4. Mais imaginons que sur la table t3, on ait une contrainte UNIQUE sur la colonne c. Dans ce cas, théoriquement, la jointure sur la table t3 ne sert à rien&amp;nbsp;: le nombre d'enregistrements du résultat ne sera pas modifié, pas plus, bien sûr, que leur contenu. C'est lié au fait que la colonne est UNIQUE, que la jointure est un LEFT JOIN, et qu'aucune colonne de t3 n'est récupérée. Si la colonne n'était pas UNIQUE, la jointure pourrait augmenter le nombre d'enregistrements du résultat. Si ce n'était pas un LEFT JOIN, la jointure pourrait diminuer le nombre d'enregistrements du résultat.&lt;p&gt;En 9.0&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# ALTER TABLE t3 ADD UNIQUE (c);&lt;br /&gt;NOTICE:  ALTER TABLE / ADD UNIQUE will create implicit index &quot;t3_c_key&quot; for table &quot;t3&quot;&lt;br /&gt;ALTER TABLE&lt;br /&gt;marc=# EXPLAIN SELECT t1.a,t2.b from t1 join t2 on (t1.a=t2.b) left join t3 on (t1.a=t3.c);&lt;br /&gt;                            QUERY PLAN                            &lt;br /&gt;------------------------------------------------------------------&lt;br /&gt; Merge Join  (cost=337.49..781.49 rows=28800 width=8)&lt;br /&gt;   Merge Cond: (t1.a = t2.b)&lt;br /&gt;   -&amp;gt;  Sort  (cost=168.75..174.75 rows=2400 width=4)&lt;br /&gt;         Sort Key: t1.a&lt;br /&gt;         -&amp;gt;  Seq Scan on t1  (cost=0.00..34.00 rows=2400 width=4)&lt;br /&gt;   -&amp;gt;  Sort  (cost=168.75..174.75 rows=2400 width=4)&lt;br /&gt;         Sort Key: t2.b&lt;br /&gt;         -&amp;gt;  Seq Scan on t2  (cost=0.00..34.00 rows=2400 width=4)&lt;br /&gt;(8 rows)&lt;/pre&gt;Cette optimisation devrait pouvoir être très rentable, entre autre quand les requêtes sont générées par un ORM (mapping objet-relationnel). Ces outils ont la fâcheuse tendance à exécuter des jointures inutiles. Ici on a réussi à diviser le coût estimé de la requête par 10.
&lt;p&gt;C'est aussi une optimisation qui pourra être très utile pour les applications utilisant beaucoup de jointures et de vues imbriquées.&lt;/p&gt;
&lt;p&gt;Cela constitue encore une raison supplémentaire de déclarer les contraintes dans la base&amp;nbsp;: sans ces contraintes, impossible pour le moteur d'être sûr que ces réécritures sont possibles.&lt;/p&gt;
&lt;h3&gt;IS NOT NULL peut utiliser les index&lt;/h3&gt;
&lt;p&gt;Pour cette démonstration, nous allons comparer la version 8.4 et la 9.0 (la table que j'ai créée contient majoritairement des valeurs NULL)&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;En 8.4&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN ANALYZE SELECT max(a) from test;&lt;br /&gt;QUERY PLAN                                                                   &lt;br /&gt;------------------------------------------------------------------------------------------------------------------------------------------------&lt;br /&gt;Result  (cost=0.03..0.04 rows=1 width=0) (actual time=281.320..281.321 rows=1 loops=1)&lt;br /&gt;InitPlan 1 (returns $0)&lt;br /&gt;  -&amp;gt;  Limit  (cost=0.00..0.03 rows=1 width=4) (actual time=281.311..281.313 rows=1 loops=1)&lt;br /&gt;  -&amp;gt;  Index Scan Backward using idxa on test  (cost=0.00..29447.36 rows=1001000 width=4) (actual time=281.307..281.307 rows=1 loops=1)&lt;br /&gt;Filter: (a IS NOT NULL)&lt;br /&gt;Total runtime: 281.360 ms&lt;br /&gt;(6 rows)&lt;/pre&gt;&lt;p&gt;En 9.0&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN ANALYZE SELECT max(a) from test;&lt;br /&gt;QUERY PLAN                                                                 &lt;br /&gt;--------------------------------------------------------------------------------------------------------------------------------------------&lt;br /&gt;Result  (cost=0.08..0.09 rows=1 width=0) (actual time=0.100..0.102 rows=1 loops=1)&lt;br /&gt;InitPlan 1 (returns $0)&lt;br /&gt;  -&amp;gt;  Limit  (cost=0.00..0.08 rows=1 width=4) (actual time=0.092..0.093 rows=1 loops=1)&lt;br /&gt;  -&amp;gt;  Index Scan Backward using idxa on test  (cost=0.00..84148.06 rows=1001164 width=4) (actual time=0.089..0.089 rows=1 loops=1)&lt;br /&gt;Index Cond: (a IS NOT NULL)&lt;br /&gt;Total runtime: 0.139 ms&lt;br /&gt;(6 rows)&lt;/pre&gt;&lt;p&gt;On constate que la 9.0 parcourt uniquement les clés non nulles de l'index (Index cond, au lieu d'un filtre à posteriori). Dans ce cas précis, le gain est très net.
&lt;/p&gt;
&lt;h3&gt;Utilisation d'index pour générer des statistiques à la volée&lt;/h3&gt;
&lt;p&gt;Avant de commencer à expliquer la nouveauté, un petit rappel sur les histogrammes: PostgreSQL, comme d'autres moteurs de bases de données, utilise un optimiseur statistique. Cela signifie qu'au moment de la planification d'une requête il a (ou devrait) avoir une idée correcte de ce que chaque étape de la requête va lui ramener, en termes de nombres d'enregistrements. Pour cela, il utilise des statistiques, comme le nombre d'enregistrements de la table approximatif, sa taille, la corrélation physique entre valeurs voisines dans la table, les valeurs les plus fréquentes, et les histogrammes, qui permettent d'évaluer assez précisément le nombre d'enregistrements ramenés par une clause WHERE sur une colonne, suivant la valeur ou la plage demandée sur la clause WHERE.&lt;/p&gt;
&lt;p&gt;Il arrive que les statistiques soient rapidement périmées, et donc
posent problème, pour certains ordres SQL. Par exemple, une table de
trace dans laquelle on insèrerait des enregistrements horodatés, et sur
laquelle on voudrait presque toujours sélectionner les enregistrements
des 5 dernières minutes.&lt;/p&gt;
&lt;p&gt;Dans ce cas, il était impossible avant la 9.0 d'avoir des statistiques à jour. Maintenant, quand PostgreSQL détecte qu'une requête demande un «range scan» sur une valeur supérieure à la dernière valeur de l'histogramme (ou inférieure à la première valeur), c'est à dire la plus grande valeur connue au dernier calcul de statistiques, et que la colonne est indexée, il récupère le max (ou le min si c'est la première valeur) de cette colonne en interrogeant l'index AVANT d'exécuter la requête, afin d'obtenir des statistiques plus réalistes. Comme il utilise un index pour cela, il faut qu'un index existe, bien sûr.&lt;/p&gt;
&lt;p&gt;Voici un exemple. La colonne &quot;a&quot; de la table test a déjà été remplie avec de nombreuses dates, antérieures. Elle a donc des statistiques à jour, avec des histogrammes lui donnant la répartition des valeurs de a.&lt;/p&gt;
&lt;p&gt;Il est 13:37, et je n'ai encore rien inséré dans la table de date supérieure à 13:37.&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN ANALYZE select * from test where a &amp;gt; '2010-06-03 13:37:00';&lt;br /&gt;QUERY PLAN                                                  &lt;br /&gt;--------------------------------------------------------------------------------------------------------------&lt;br /&gt;Index Scan using idxtsta on test  (cost=0.00..8.30 rows=1 width=8) (actual time=0.007..0.007 rows=0 loops=1)&lt;br /&gt;Index Cond: (a &amp;gt; '2010-06-03 13:37:00'::timestamp without time zone)&lt;br /&gt;Total runtime: 0.027 ms&lt;br /&gt;(3 rows)&lt;/pre&gt;Tout est donc normal. La borne supérieure de mon histogramme est 2010-06-03 13:36:16.830007 (l'information se trouve dans pg_stats). Il n'a aucun moyen d'évaluer le nombre d'enregistrements supérieurs à 13:37, et en 8.4, il aurait continué à estimer '1' tant qu'un analyze n'aura pas été passé.
&lt;pre&gt;marc=# DO LANGUAGE plpgsql&lt;br /&gt;$$&lt;br /&gt;DECLARE&lt;br /&gt;i int;&lt;br /&gt;BEGIN&lt;br /&gt;FOR i IN 1..10000 LOOP&lt;/pre&gt;
&lt;pre&gt;   INSERT INTO test VALUES (clock_timestamp());&lt;/pre&gt;
&lt;pre&gt;END LOOP;&lt;br /&gt;END&lt;br /&gt;$$&lt;br /&gt;;&lt;br /&gt;DO&lt;/pre&gt;
&lt;p&gt;(Décidément, j'aime bien les DO).&lt;/p&gt;
&lt;p&gt;Nous venons d'insérer 10000 dates supérieures à 13:37.&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN ANALYZE SELECT * FROM test WHERE a &amp;gt; '2010-06-03 13:37:00';&lt;br /&gt;QUERY PLAN                                                       &lt;br /&gt;-----------------------------------------------------------------------------------------------------------------------&lt;br /&gt;Index Scan using idxtsta on test  (cost=0.00..43.98 rows=1125 width=8) (actual time=0.012..13.590 rows=10000 loops=1)&lt;br /&gt;Index Cond: (a &amp;gt; '2010-06-03 13:37:00'::timestamp without time zone)&lt;br /&gt;Total runtime: 23.567 ms&lt;br /&gt;(3 rows)&lt;/pre&gt;&lt;p&gt;Le nombre d'enregistrements estimé n'est pas à 0 ou 1. Et pourtant les statistiques ne sont pas à jour&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# SELECT last_autoanalyze FROM pg_stat_user_tables WHERE relname = 'test';&lt;br /&gt;last_autoanalyze        &lt;br /&gt;-------------------------------&lt;br /&gt;2010-06-03 13:36:21.553477+02&lt;br /&gt;(1 row)&lt;/pre&gt;&lt;p&gt;Dans cet exemple, nous avons tout de même une erreur d'un facteur 10. Ce n'est pas si mal: sans cette optimisation, l'erreur aurait été d'un facteur 10&amp;nbsp;000. En tout cas, une erreur d'un facteur 10 nous donne de plus fortes chances de choisir un plan intelligent.&lt;/p&gt;
&lt;h3&gt;seq_page_cost/random_page_cost par tablespace&lt;/h3&gt;
&lt;pre&gt;marc=# ALTER TABLESPACE pg_default SET ( random_page_cost = 10, seq_page_cost=5);&lt;br /&gt;ALTER TABLESPACE&lt;/pre&gt;
&lt;p&gt;Nous venons de modifier random_page_cost et seq_page_cost pour tous les objets du tablespace pg_default. Quel peut être le cas d'utilisation&amp;nbsp;?&lt;/p&gt;
&lt;p&gt;C'est pour le cas où vous avez des tablespaces de performances différentes&amp;nbsp;: par exemple, vous avez quelques données essentielles sur un disque SSD, ou bien des données d'historique sur une vieille baie moins performante que la baie flambant neuf que vous avez décidé d'utiliser pour les données actives. Cela vous permet de signaler à PostgreSQL que tous vos tablespaces ne sont pas forcément équivalents en termes de performance. Cela ne s'applique, bien sûr, que sur de très grosses bases.&lt;/p&gt;
&lt;h3&gt;Permettre de forcer le nombre de valeurs distinctes d'une colonne&lt;/h3&gt;
&lt;p&gt;Ceci permet de forcer le nombre de valeurs différentes d'une colonne. Ce n'est pas à utiliser à la légère, mais uniquement quand l'ANALYZE sur la table n'arrive pas à obtenir une valeur raisonnable.&lt;/p&gt;
&lt;p&gt;Voici comment procéder&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# ALTER TABLE test ALTER COLUMN a SET (n_distinct = 2);&lt;br /&gt;ALTER TABLE&lt;/pre&gt;
&lt;p&gt;Il faut repasser un ANALYZE pour que la modification soit prise en compte&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# ANALYZE test;&lt;br /&gt;ANALYZE&lt;/pre&gt;
&lt;p&gt;Essayons maintenant&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN SELECT distinct * from test;&lt;br /&gt;QUERY PLAN                            &lt;br /&gt;------------------------------------------------------------------&lt;br /&gt;HashAggregate  (cost=6263.00..6263.02 rows=2 width=8)&lt;br /&gt;-&amp;gt;  Seq Scan on test  (cost=0.00..5338.00 rows=370000 width=8)&lt;br /&gt;(2 rows)&lt;/pre&gt;&lt;p&gt;C'est l'exemple même de ce qu'il ne faut pas faire&amp;nbsp;: j'ai bien 370 000 valeurs distinctes dans ma table. Maintenant mes plans d'exécution seront très mauvais.
&lt;/p&gt;
&lt;p&gt;Si la valeur n_distinct est positive, il s'agit du nombre de valeurs distinctes. Si la valeure est négative (entre 0 et -1), il s'agit du coefficient multiplicateur par rapport au nombre d'enregistrements estimés de la table&amp;nbsp;: par exemple -0.2 signifie qu'il y a 1 enregistrement distinct pour 5 enregistrements dans la table. 0 ramène le comportement à celui par défaut (c'est ANALYZE qui effectue la mesure).&lt;/p&gt;
&lt;p&gt;Ne touchez à ceci que si vous êtes absolument sûr d'avoir correctement diagnostiqué votre problème. Sinon, vous pouvez être sûr d'empirer les performances.&lt;/p&gt;
&lt;br /&gt;
&lt;p&gt;De nombreuses autres fonctionnalités de la base ont été améliorées. En voici quelques exemples parmi les plus significatifs&amp;nbsp;:&lt;/p&gt;
&lt;h3&gt;VACUUM FULL amélioré&lt;/h3&gt;
&lt;p&gt;La commande VACUUM FULL était jusque ici très lente. Cette commande permet de récupérer l'espace perdu dans une table, principalement quand la commande VACUUM&amp;nbsp;n'a pas été passée très régulièrement. Ceci était du à son mode de fonctionnement&amp;nbsp;: les enregistrements étaient lus et déplacés un par un d'un bloc de la table vers un bloc plus proche du début de la table. Une fois que la fin de la table était vide, l'enveloppe était réduite à sa taille minimale.&lt;/p&gt;
&lt;p&gt;Le problème était donc que ce mécanisme était très inefficace&amp;nbsp;: le déplacement des enregistrements un à un entraine beaucoup d'entrées/sorties aléatoires (non contigues). Par ailleurs, durant cette réorganisation, les index doivent être maintenus, ce qui rend l'opération encore plus couteuse, et fait qu'à la fin d'un vacuum full, les index sont fortement désorganisés. Il est d'ailleurs conseillé de réindexer une table juste après y avoir appliqué un VACUUM FULL.&lt;/p&gt;
&lt;p&gt;La commande VACUUM FULL, dans cette nouvelle version, crée une nouvelle table à partir de la table actuelle, en y recopiant tous les enregistrements de façon séquentielle. Une fois tous les enregistrements recopiés, les index sont recréés, et l'ancienne table détruite.&lt;/p&gt;
&lt;p&gt;Cette méthode présente l'avantage d'être très largement plus rapide. Toutefois, VACUUM&amp;nbsp;FULL&amp;nbsp;demande toujours un verrou complet sur la table durant le temps de son exécution. Le seul défaut de cette méthode par rapport à l'ancienne, c'est que pendant le temps de son exécution, le nouveau VACUUM FULL peut consommer jusqu'à 2&amp;nbsp;fois l'espace disque de la table, puisqu'il en crée une nouvelle version.&lt;/p&gt;
&lt;p&gt;Mesurons maintenant le temps d'exécution suivant les deux méthodes. Dans les deux cas, on prépare le jeu de test comme suit (en 8.4 et en 9.0:)&lt;/p&gt;
&lt;pre&gt;marc=# CREATE TABLE test (a int);&lt;br /&gt;CREATE TABLE&lt;br /&gt;marc=# CREATE INDEX idxtsta on test (a);&lt;br /&gt;CREATE INDEX&lt;br /&gt;marc=# INSERT INTO test SELECT generate_series(1,1000000);&lt;br /&gt;INSERT 0 1000000&lt;br /&gt;marc=# DELETE FROM test where a%3=0;&lt;br /&gt;DELETE 333333&lt;br /&gt;marc=# VACUUM test;&lt;br /&gt;VACUUM&lt;/pre&gt;
&lt;pre&gt;En 8.4&amp;nbsp;:&lt;br /&gt;marc=# \timing&lt;br /&gt;Timing is on.&lt;br /&gt;marc=# VACUUM FULL test;&lt;br /&gt;VACUUM&lt;br /&gt;Time: 6306,603 ms&lt;br /&gt;marc=# REINDEX TABLE test&amp;nbsp;;&lt;br /&gt;REINDEX&lt;br /&gt;Time: 1799,998 ms&lt;/pre&gt;
&lt;p&gt;Soit environ 8 secondes.&lt;/p&gt;
&lt;pre&gt;En 9.0&amp;nbsp;:&lt;br /&gt;marc=# \timing&lt;br /&gt;Timing is on.&lt;br /&gt;marc=# VACUUM FULL test;&lt;br /&gt;VACUUM&lt;br /&gt;Time: 2563,467 ms&lt;/pre&gt;
&lt;p&gt;Ça ne veut toujours pas dire que VACUUM FULL est une bonne idée en production. Si vous en avez besoin, c'est probablement que votre politique de VACUUM n'est pas appropriée.&lt;/p&gt;
&lt;h3&gt;64 bits sous windows.&lt;/h3&gt;
&lt;p&gt;Il y a maintenant une version 64 bits native pour Windows. Pour l'instant aucune mesure de performance n'a été effectuée (à ma connaissance) pour en connaître les gains&amp;nbsp;: peut on maintenant dépasser la limite de shared_buffers aux alentours de 500Mo sous Windows sans dégradations de performances&amp;nbsp;?&lt;/p&gt;
&lt;h3&gt;PL/pgSQL par défaut&lt;/h3&gt;
&lt;p&gt;Vous n'aurez plus à ajouter le langage plpgsql dans chaque base où vous en avez besoin car il est installé par défaut.&lt;/p&gt;
&lt;h3&gt;Beaucoup d'améliorations sur les langages PL.&lt;/h3&gt;
&lt;p&gt;Beaucoup de langages ont vu leur support grandement amélioré, PLPerl par exemple. Consultez les release notes si vous voulez davantage de détails, les modifications étant nombreuses.&lt;/p&gt;
&lt;h3&gt;Mot clé ALIAS&lt;/h3&gt;
&lt;p&gt;Nous pouvons maintenant utiliser le mot clé ALIAS. Comme son nom l'indique, il permet de créer des alias de variables.&lt;/p&gt;
&lt;p&gt;La syntaxe est «&amp;nbsp;nouveau_nom ALIAS FOR ancien_nom ». Cela se place dans la section DECLARE d'un code PL/pgSQL.&lt;/p&gt;
&lt;p&gt;C'est utilisable dans deux cas principalement&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;&lt;li&gt;
pour donner des noms aux variables d'une fonction PL:&lt;/li&gt;
&lt;/ul&gt;
&lt;pre&gt;   monparam ALIAS FOR $0&lt;/pre&gt;&lt;ul&gt;&lt;li&gt;pour renommer des variables qui pourraient être en conflit. Dans un trigger par exemple:&lt;/li&gt;
&lt;/ul&gt;
&lt;pre&gt;   nouvelle_valeur ALIAS FOR new&lt;/pre&gt;   (on aurait risqué le conflit avec la variable new dans la fonction trigger).
&lt;h3&gt;Passage de message dans NOTIFY/pg_notify&lt;/h3&gt;
&lt;p&gt;On peut donc passer des messages dans NOTIFY. Voici la méthode:&lt;/p&gt;
&lt;ul&gt;&lt;li&gt;On s'abonne dans la session 1 à la file d'attente «&amp;nbsp;messagerie_instantanee&amp;nbsp;»
&lt;br /&gt;Session 1&amp;nbsp;:
&lt;br /&gt;&lt;pre&gt;marc=# LISTEN messagerie_instantanee;&lt;br /&gt;LISTEN&lt;/pre&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;&lt;li&gt;On envoie une notification dans la file d'attente «&amp;nbsp;messagerie_instantanee&amp;nbsp;» d'une autre session
&lt;br /&gt;Session 2&amp;nbsp;:
&lt;br /&gt;&lt;pre&gt;marc=# NOTIFY messagerie_instantanee, 'Vous avez reçu un popup';&lt;br /&gt;NOTIFY&lt;/pre&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;&lt;li&gt;On vérifie le contenu de la file d'attente
&lt;br /&gt;Session 1&amp;nbsp;:&lt;br /&gt;&lt;pre&gt;LISTEN&lt;br /&gt;Asynchronous notification &quot;messagerie_instantanee&quot; with payload &quot;Vous avez reçu un popup&quot; received from server process with PID 5943.&lt;/pre&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;&lt;li&gt;On peut donc maintenant associer des messages (payloads) aux notifications, ce qui rend le mécanisme beaucoup plus puissant.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Signalons aussi la présence d'une nouvelle fonction pg_notify. &lt;/p&gt;
&lt;p&gt;Le code de la session 2 peut donc être: &lt;/p&gt;
&lt;pre&gt;SELECT pg_notify('messagerie_instantanee','Vous avez reçu un popup');&lt;/pre&gt;
&lt;p&gt;Cela peut simplifier l'écriture, dans le cas d'un programme devant piloter de nombreuses files de messages.&lt;/p&gt;
&lt;h3&gt;get_bit et set_bit pour les bit strings&lt;/h3&gt;
&lt;p&gt;En voici un exemple très synthétique. Cet outil permet de manipuler les bits indépendamment dans un bit().&lt;/p&gt;
&lt;pre&gt;&lt;br /&gt;marc=# SELECT set_bit('1111'::bit(4),2,0);&lt;br /&gt; set_bit &lt;br /&gt;---------&lt;br /&gt; 1101&lt;br /&gt;(1 row)&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;marc=# SELECT get_bit('1101'::bit(4),2);&lt;br /&gt; get_bit &lt;br /&gt;---------&lt;br /&gt;       0&lt;br /&gt;(1 row)&lt;/pre&gt;&lt;h3&gt;application_name pour pg_stat_activity&lt;/h3&gt;
&lt;p&gt;Dans la session de supervision&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;marc=# SELECT * from pg_stat_activity where procpid= 5991;&lt;/p&gt;
&lt;pre&gt;datid | datname | procpid | usesysid | usename | application_name | client_addr | client_port |         backend_start         | xact_start | query_start | waiting | current_query&lt;br /&gt;------+---------+---------+----------+---------+------------------+-------------+-------------+-------------------------------+------------+-------------+---------+----------------&lt;br /&gt;16384 | marc    |    5991 |       10 | marc    | psql             |             |          -1 | 2010-05-16 13:48:10.154113+02 |            |             | f       | &amp;lt;IDLE&amp;gt;&lt;/pre&gt;
&lt;p&gt;(1 row)&lt;/p&gt;
&lt;p&gt;Dans la session '5991'&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;marc=# SET application_name TO 'mon_appli';
SET&lt;/p&gt;
&lt;p&gt;Dans la session de supervision&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;marc=# SELECT * from pg_stat_activity where procpid= 5991;&lt;/p&gt;
&lt;pre&gt;datid | datname | procpid | usesysid | usename | application_name | client_addr | client_port |         backend_start         | xact_start |          query_start          | waiting | current_query&lt;br /&gt;------+---------+---------+----------+---------+------------------+-------------+-------------+-------------------------------+------------+-------------+---------+----------------&lt;br /&gt;16384 | marc    |    5991 |       10 | marc    | mon_appli        |             |          -1 | 2010-05-16 13:48:10.154113+02 |            | 2010-05-16 13:49:13.107413+02 | f       | &amp;lt;IDLE&amp;gt;&lt;/pre&gt;
&lt;p&gt;(1 row)&lt;/p&gt;
&lt;p&gt;À vous de le positionner correctement dans votre application, ou vos sessions. Votre DBA vous dira merci, sachant enfin qui lance quoi sur son serveur facilement.&lt;/p&gt;
&lt;h3&gt;Configuration par base de données+rôle&lt;/h3&gt;
&lt;pre&gt;marc=# ALTER ROLE marc IN database marc set log_statement to 'all';&lt;br /&gt;ALTER ROLE&lt;/pre&gt;
&lt;p&gt;Pour savoir qui a quelles modifications de variables dans quels rôles de quelles bases de données, il y a une nouvelle commande psql&amp;nbsp;: &lt;/p&gt;
&lt;pre&gt;marc=# \drds&lt;/pre&gt;
&lt;pre&gt;         List of settings&lt;br /&gt;role | database |     settings&lt;br /&gt;-----+----------+-----------------&lt;br /&gt;marc | marc     | log_statement=all&lt;/pre&gt;&lt;pre&gt;(1 row)&lt;/pre&gt;
&lt;p&gt;Il y a donc eu une modification du catalogue pour gérer cette nouvelle fonctionnalité&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;Table &quot;pg_catalog.pg_db_role_setting&quot;&lt;/p&gt;
&lt;pre&gt;  Column    |  Type  | Modifier&lt;br /&gt;------------+--------+----------&lt;br /&gt;setdatabase | oid    | not null&lt;br /&gt;setrole     | oid    | not null&lt;br /&gt;setconfig   | text   |&lt;/pre&gt;
&lt;h3&gt;Tracer les parametres modifiés lors d'un rechargement du postgresql.conf&lt;/h3&gt;
Voici un exemple, lors de la modification du paramètre log_line_prefix :&lt;br /&gt;&lt;pre&gt;LOG:&amp;nbsp; received SIGHUP, reloading configuration files&lt;br /&gt;&amp;lt;%&amp;gt; LOG:&amp;nbsp; parameter &quot;log_line_prefix&quot; changed to &quot;&amp;lt;%u%%%d&amp;gt; &quot;&lt;/pre&gt;
&lt;h3&gt;Nouvelles options de frame dans les fonctions de fenêtrage&lt;/h3&gt;
&lt;p&gt;Si vous ne vous connaissez pas les fonctions de fenêtrage, lisez la présentation de la 8.4 ici : &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2010/06/16/post.php?id=475&quot; title=&quot;http://blog.postgresql.fr/index.php?post/2009/04/28/Nouveaut%C3%A9s-PostgreSQL-8.4&quot;&gt;Nouveautés PostgreSQL 8.4&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Il y a donc des nouveautés dans le paramétrage du 'frame' des fonctions de fenêtrage. Soit la table suivante (faute de mieux…)&lt;/p&gt;
&lt;pre&gt;marc=# SELECT * FROM salaire ;&lt;br /&gt;entite | personne&amp;nbsp; | salaire | date_embauche &lt;br /&gt;-------+-----------+---------+---------------&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | marc&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 700.00 | 2010-02-15&lt;br /&gt;Compta | etienne&amp;nbsp;&amp;nbsp; |&amp;nbsp; 800.00 | 2010-05-01&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | maria&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 700.00 | 2009-01-01&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | kevin&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 500.00 | 2009-05-01&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | jean&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 1000.00 | 2008-07-01&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | tom&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 1100.00 | 2005-01-01&lt;br /&gt;Compta | stephanie |&amp;nbsp; 850.00 | 2006-01-01&lt;/pre&gt;
&lt;p&gt;Voici un exemple de fonctions de fenêtrage, sans préciser le frame.&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite, personne, salaire, date_embauche, avg(salaire) OVER (PARTITION BY entite ORDER BY date_embauche) FROM salaire;&lt;br /&gt;entite | personne&amp;nbsp; | salaire | date_embauche |&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; avg&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;br /&gt;-------+-----------+---------+---------------+-----------------------&lt;br /&gt;Compta | stephanie |&amp;nbsp; 850.00 | 2006-01-01&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 850.0000000000000000&lt;br /&gt;Compta | etienne&amp;nbsp;&amp;nbsp; |&amp;nbsp; 800.00 | 2010-05-01&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 825.0000000000000000&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | tom&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 1100.00 | 2005-01-01&amp;nbsp;&amp;nbsp;&amp;nbsp; | 1100.0000000000000000&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | jean&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 1000.00 | 2008-07-01&amp;nbsp;&amp;nbsp;&amp;nbsp; | 1050.0000000000000000&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | maria&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 700.00 | 2009-01-01&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 933.3333333333333333&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | kevin&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 500.00 | 2009-05-01&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 825.0000000000000000&lt;br /&gt;R&amp;amp;D&amp;nbsp;&amp;nbsp;&amp;nbsp; | marc&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 700.00 | 2010-02-15&amp;nbsp;&amp;nbsp;&amp;nbsp; |&amp;nbsp; 800.0000000000000000&lt;/pre&gt;&lt;br /&gt;
&lt;p&gt;Le frame est le groupe d'enregistrements sur lequel la fonctions de fenêtrage est appliquée. Évidemment, si on ne précise pas la frame, il met une valeur par défaut. Voici la même requête, écrite avec une frame explicite.&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite, personne, salaire, date_embauche, avg(salaire) OVER (PARTITION BY entite ORDER BY date_embauche RANGE BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW) FROM salaire;&lt;br /&gt;entite | personne  | salaire | date_embauche |          avg          &lt;br /&gt;-------+-----------+---------+---------------+-----------------------&lt;br /&gt;Compta | stephanie |  850.00 | 2006-01-01    |  850.0000000000000000&lt;br /&gt;Compta | etienne   |  800.00 | 2010-05-01    |  825.0000000000000000&lt;br /&gt;R&amp;amp;D    | tom       | 1100.00 | 2005-01-01    | 1100.0000000000000000&lt;br /&gt;R&amp;amp;D    | jean      | 1000.00 | 2008-07-01    | 1050.0000000000000000&lt;br /&gt;R&amp;amp;D    | maria     |  700.00 | 2009-01-01    |  933.3333333333333333&lt;br /&gt;R&amp;amp;D    | kevin     |  500.00 | 2009-05-01    |  825.0000000000000000&lt;br /&gt;R&amp;amp;D    | marc      |  700.00 | 2010-02-15    |  800.0000000000000000&lt;/pre&gt;
&lt;p&gt;La frame est donc par 'range', entre le début du range et l'enregistrement courant (pas vraiment l'enregistrement courant en fait, mais laissons de côté les subtilités, allez lire la doc si vous voulez en savoir plus). On constate que la fonction de moyenne (avg) est appliquée entre le premier des enregistrements du frame (les enregistrements de la même entité) et l'enregistrement courant.&lt;/p&gt;
&lt;p&gt;Première nouveauté&amp;nbsp;: en 9.0, la frame peut se calculer entre l'enregistrement courant et la fin du groupe (au lieu d'entre le début du groupe et l'enregistrement courant):&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite, personne, salaire, date_embauche, avg(salaire)  OVER (PARTITION BY entite ORDER BY date_embauche RANGE BETWEEN CURRENT ROW AND UNBOUNDED FOLLOWING) FROM salaire;&lt;br /&gt;entite | personne  | salaire | date_embauche |         avg          &lt;br /&gt;-------+-----------+---------+---------------+----------------------&lt;br /&gt;Compta | stephanie |  850.00 | 2006-01-01    | 825.0000000000000000&lt;br /&gt;Compta | etienne   |  800.00 | 2010-05-01    | 800.0000000000000000&lt;br /&gt;R&amp;amp;D    | tom       | 1100.00 | 2005-01-01    | 800.0000000000000000&lt;br /&gt;R&amp;amp;D    | jean      | 1000.00 | 2008-07-01    | 725.0000000000000000&lt;br /&gt;R&amp;amp;D    | maria     |  700.00 | 2009-01-01    | 633.3333333333333333&lt;br /&gt;R&amp;amp;D    | kevin     |  500.00 | 2009-05-01    | 600.0000000000000000&lt;br /&gt;R&amp;amp;D    | marc      |  700.00 | 2010-02-15    | 700.0000000000000000&lt;/pre&gt;
&lt;p&gt;Deuxième nouveauté, on peut calculer des frames sur les n enregistrements précédents et n enregistrements suivants. Aucun intérêt avec ce jeu de données, mais il faut bien que je vous donne un exemple&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite, personne, salaire, date_embauche, avg(salaire)  OVER (PARTITION BY entite ORDER BY date_embauche RANGE ROWS BETWEEN 1 PRECEDING AND 1 FOLLOWING) FROM salaire;&lt;br /&gt;entite | personne  | salaire | date_embauche |          avg          &lt;br /&gt;-------+-----------+---------+---------------+-----------------------&lt;br /&gt;Compta | stephanie |  850.00 | 2006-01-01    |  825.0000000000000000&lt;br /&gt;Compta | etienne   |  800.00 | 2010-05-01    |  825.0000000000000000&lt;br /&gt;R&amp;amp;D    | tom       | 1100.00 | 2005-01-01    | 1050.0000000000000000&lt;br /&gt;R&amp;amp;D    | jean      | 1000.00 | 2008-07-01    |  933.3333333333333333&lt;br /&gt;R&amp;amp;D    | maria     |  700.00 | 2009-01-01    |  733.3333333333333333&lt;br /&gt;R&amp;amp;D    | kevin     |  500.00 | 2009-05-01    |  633.3333333333333333&lt;br /&gt;R&amp;amp;D    | marc      |  700.00 | 2010-02-15    |  600.0000000000000000&lt;/pre&gt;
&lt;p&gt;On reste bien sûr sur le groupe (voir l'enregistrement de tom par exemple, l'enregistrement d'etienne ne rentre pas dans le calcul de sa moyenne).&lt;/p&gt;
&lt;p&gt;Si on voulait la même requête que précédemment, mais avec des moyennes sur 3 enregistrements glissants, sans réinitialiser à chaque entité (toujours aucun intérêt pratique dans l'exemple).&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite, personne, salaire, date_embauche, avg(salaire) OVER (ORDER BY entite, date_embauche ROWS BETWEEN 1 PRECEDING AND 1 FOLLOWING) FROM salaire;&lt;br /&gt;entite | personne  | salaire | date_embauche |         avg          &lt;br /&gt;--------+-----------+---------+---------------+----------------------&lt;br /&gt;Compta | stephanie |  850.00 | 2006-01-01    | 825.0000000000000000&lt;br /&gt;Compta | etienne   |  800.00 | 2010-05-01    | 916.6666666666666667&lt;br /&gt;R&amp;amp;D    | tom       | 1100.00 | 2005-01-01    | 966.6666666666666667&lt;br /&gt;R&amp;amp;D    | jean      | 1000.00 | 2008-07-01    | 933.3333333333333333&lt;br /&gt;R&amp;amp;D    | maria     |  700.00 | 2009-01-01    | 733.3333333333333333&lt;br /&gt;R&amp;amp;D    | kevin     |  500.00 | 2009-05-01    | 633.3333333333333333&lt;br /&gt;R&amp;amp;D    | marc      |  700.00 | 2010-02-15    | 600.0000000000000000&lt;/pre&gt;
&lt;p&gt;Bref, un outil à maîtriser d'urgence, si ce n'est pas déjà le cas (même si je n'ai pas été capable de vous donner un exemple décent).&lt;/p&gt;
&lt;h3&gt;Tris dans les aggrégations&lt;/h3&gt;
&lt;p&gt;Celle-ci est un peu subtile&amp;nbsp;: le résultat de certaines fonctions d'aggrégation dépend de l'ordre dans lequel on leur fournit les données.&lt;/p&gt;
&lt;p&gt;Il ne s'agit évidemment pas de count, avg, mais plutôt de array_agg, xml_agg, string_agg…&lt;/p&gt;
&lt;p&gt;Ce qui va me permettre de vous présenter deux nouvelles fonctionnalités d'un coup, string_agg étant une nouveauté de la 9.0.&lt;/p&gt;
&lt;p&gt;Reprenons la table salaire. Je voudrais la liste des employés, concaténés dans un seul champ, par entité. C'est pour stocker dans mon tableur.&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite,string_agg(personne,', ') FROM salaire GROUP BY entite;&lt;br /&gt;entite |          string_agg           &lt;br /&gt;-------+-------------------------------&lt;br /&gt;Compta | etienne, stephanie&lt;br /&gt;R&amp;amp;D    | marc, maria, kevin, jean, tom&lt;/pre&gt;&lt;p&gt;C'est déjà bien. Mais j'aimerais bien les avoir par ordre alphabétique, parce que je ne sais pas écrire de macro dans mon tableur pour retrier les données.&lt;/p&gt;
&lt;pre&gt;marc=# SELECT entite,string_agg(personne,', ' ORDER BY personne) FROM salaire GROUP BY entite;&lt;br /&gt;entite |          string_agg           &lt;br /&gt;--------+-------------------------------&lt;br /&gt;Compta | etienne, stephanie&lt;br /&gt;R&amp;amp;D    | jean, kevin, marc, maria, tom&lt;/pre&gt;
&lt;p&gt;Il suffit donc de rajouter une clause de tri à l'intérieur de la fonction d'agrégat, sans virgule à la fin.&lt;/p&gt;
&lt;h3&gt;Amélioration des erreurs sur contrainte&amp;nbsp;: message plus clair&lt;/h3&gt;
&lt;p&gt;En 8.4: &lt;/p&gt;
&lt;pre&gt;marc=# INSERT INTO test VALUES (1);&lt;br /&gt;ERROR:  duplicate key value violates unique constraint &quot;test_a_key&quot;&lt;/pre&gt;
&lt;p&gt;En 9.0:&lt;/p&gt;
&lt;pre&gt;marc=# INSERT INTO test VALUES (1);&lt;br /&gt;ERROR:  duplicate key value violates unique constraint &quot;test_a_key&quot;&lt;br /&gt;DETAIL:  Key (a)=(1) already exists.&lt;/pre&gt;
&lt;p&gt;Cela devrait aider à trouver les causes des violations de contrainte.&lt;/p&gt;
&lt;h3&gt;Explain buffers/statistiques sur les hash, xml, json, yaml, nouvelle syntaxe optionnelle explain&lt;/h3&gt;
&lt;p&gt;Voici un EXPLAIN ANALYZE classique&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN ANALYZE SELECT a, sum(c) FROM pere JOIN fils ON (pere.a = fils.b) WHERE b BETWEEN 1000 AND 300000 GROUP BY a;                                                           QUERY PLAN                                                            &lt;br /&gt;---------------------------------------------------------------------------------------------------------------------------------&lt;br /&gt; HashAggregate  (cost=905.48..905.86 rows=31 width=8) (actual time=0.444..0.453 rows=6 loops=1)&lt;br /&gt;   -&amp;gt;  Nested Loop  (cost=10.70..905.32 rows=31 width=8) (actual time=0.104..0.423 rows=6 loops=1)&lt;br /&gt;         -&amp;gt;  Bitmap Heap Scan on fils  (cost=10.70..295.78 rows=31 width=8) (actual time=0.040..0.154 rows=30 loops=1)&lt;br /&gt;               Recheck Cond: ((b &amp;gt;= 1000) AND (b &amp;lt;= 300000))&lt;br /&gt;               -&amp;gt;  Bitmap Index Scan on fils_pkey  (cost=0.00..10.69 rows=31 width=0) (actual time=0.023..0.023 rows=30 loops=1)&lt;br /&gt;                     Index Cond: ((b &amp;gt;= 1000) AND (b &amp;lt;= 300000))&lt;br /&gt;         -&amp;gt;  Index Scan using pere_pkey on pere  (cost=0.00..19.65 rows=1 width=4) (actual time=0.005..0.005 rows=0 loops=30)&lt;br /&gt;               Index Cond: (pere.a = fils.b)&lt;br /&gt; Total runtime: 0.560 ms&lt;br /&gt;(9 rows)&lt;/pre&gt;&lt;p&gt;Si vous voulez avoir accès aux nouvelles informations, il faut opter pour la nouvelle syntaxe&amp;nbsp;:
&lt;/p&gt;
&lt;pre&gt;EXPLAIN [ ( { ANALYZE boolean | VERBOSE boolean | COSTS boolean | BUFFERS boolean | FORMAT { TEXT | XML | JSON | YAML } } [, ...] ) ] instruction&lt;/pre&gt;&lt;p&gt;Par exemple&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# EXPLAIN (ANALYZE true, VERBOSE true, BUFFERS true) SELECT a, sum(c) FROM pere JOIN fils ON (pere.a = fils.b) WHERE b BETWEEN 1000 AND 300000 GROUP BY a;&lt;br /&gt;                                                             QUERY PLAN &lt;br /&gt;-------------------------------------------------------------------------------------------------------------------------------------&lt;br /&gt; HashAggregate  (cost=905.48..905.86 rows=31 width=8) (actual time=1.326..1.336 rows=6 loops=1)&lt;br /&gt;   Output: pere.a, sum(fils.c)&lt;br /&gt;   Buffers: shared hit=58 read=40&lt;br /&gt;   -&amp;gt;  Nested Loop  (cost=10.70..905.32 rows=31 width=8) (actual time=0.278..1.288 rows=6 loops=1)&lt;br /&gt;         Output: pere.a, fils.c&lt;br /&gt;         Buffers: shared hit=58 read=40&lt;br /&gt;         -&amp;gt;  Bitmap Heap Scan on public.fils  (cost=10.70..295.78 rows=31 width=8) (actual time=0.073..0.737 rows=30 loops=1)&lt;br /&gt;               Output: fils.b, fils.c&lt;br /&gt;               Recheck Cond: ((fils.b &amp;gt;= 1000) AND (fils.b &amp;lt;= 300000))&lt;br /&gt;               Buffers: shared hit=4 read=28&lt;br /&gt;               -&amp;gt;  Bitmap Index Scan on fils_pkey  (cost=0.00..10.69 rows=31 width=0) (actual time=0.030..0.030 rows=30 loops=1)&lt;br /&gt;                     Index Cond: ((fils.b &amp;gt;= 1000) AND (fils.b &amp;lt;= 300000))&lt;br /&gt;                     Buffers: shared hit=3&lt;br /&gt;         -&amp;gt;  Index Scan using pere_pkey on public.pere  (cost=0.00..19.65 rows=1 width=4) (actual time=0.013..0.014 rows=0 loops=30)&lt;br /&gt;               Output: pere.a&lt;br /&gt;               Index Cond: (pere.a = fils.b)&lt;br /&gt;               Buffers: shared hit=54 read=12&lt;br /&gt; Total runtime: 1.526 ms&lt;br /&gt;(18 rows)&lt;/pre&gt;VERBOSE apporte les lignes 'Output' (l'option existait déjà en 8.4).
&lt;p&gt;BUFFERS indique les opérations sur les buffers (les entrées sorties de la requête): hit correspond aux données lues en cache, read aux données demandées au système d'exploitation. Ici, peu de données étaient en cache.&lt;/p&gt;
&lt;p&gt;Vous pouvez aussi demander une sortie dans un autre format que texte. Pour un utilisateur, cela n'a aucune importance. Pour les développeurs d'interfaces graphiques présentant le résultat d'explain, cela permettra de faire l'économie d'un analyseur sur le texte du EXPLAIN, et des bugs qui vont avec.&lt;/p&gt;
&lt;p&gt;On peut aussi désactiver l'affichage des coûts avec COSTS false.&lt;/p&gt;
&lt;h3&gt;Dictionnaire de filtrage (unaccent)&lt;/h3&gt;
&lt;p&gt;Il est possible maintenant de paramétrer des dictionnaires de filtrage. On parle bien sûr des dictionnaires du Full Text Search.&lt;/p&gt;
&lt;p&gt;Le but de ces dictionnaires de filtrage est d'appliquer un premier filtrage sur les mots avant de les indexer. Le module présenté ci-dessous (unaccent) est l'illustration de ce mécanisme. Le filtrage peut consister en la suppression de mots ou en leur modification.&lt;/p&gt;
&lt;p&gt;Unaccent ne supprime pas les mots, il supprime les accents (tous les signes diacritiques en fait), en remplaçant les caractères accentués par leur version sans accent. Unaccent est un module contrib.&lt;/p&gt;
&lt;p&gt;Pour l'installer, comme pour toutes les contribs, psql mabase &amp;lt; chemin_contribs/unaccent.sql.&lt;/p&gt;
&lt;p&gt;Nous allons à peu près suivre la documentation d'unaccent, les auteurs ayant eu la gentillesse de donner leurs exemples en français.&lt;/p&gt;
&lt;p&gt;Nous créons un nouveau dictionnaire fr (pour ne pas polluer le dictionnaire french 'standard')&amp;nbsp;: &lt;/p&gt;
&lt;pre&gt;marc=# CREATE TEXT SEARCH CONFIGURATION fr ( COPY = french );&lt;br /&gt;CREATE TEXT SEARCH CONFIGURATION&lt;/pre&gt;
&lt;p&gt;Nous modifions le paramétrage de 'fr' pour les lexemes de type mot, en lui demandant de les faire passer par unaccent et french_stem (au lieu de seulement french_stem) &lt;/p&gt;
&lt;pre&gt;marc=# ALTER TEXT SEARCH CONFIGURATION fr&lt;br /&gt;ALTER MAPPING FOR hword, hword_part, word&lt;br /&gt;WITH unaccent, french_stem;&lt;br /&gt;ALTER TEXT SEARCH CONFIGURATION&lt;/pre&gt;&lt;pre&gt;SELECT to_tsvector('fr','Hôtels de la Mer');&lt;br /&gt;to_tsvector    &lt;br /&gt;-------------------&lt;br /&gt;'hotel':1 'mer':4&lt;br /&gt;(1 row)&lt;br /&gt;&lt;br /&gt;marc=# SELECT to_tsvector('fr','Hôtel de la Mer') @@ to_tsquery('fr','Hotels');&lt;br /&gt;?column? &lt;br /&gt;----------&lt;br /&gt;t&lt;br /&gt;(1 row)&lt;/pre&gt;Cela vous permet donc, sans changer une ligne de code, et en gardant les caractères accentués, de rechercher maintenant sans accent.
&lt;h3&gt;vacuumdb --analyze-only&lt;/h3&gt;
&lt;p&gt;Comme son nom l'indique, on peut maintenant utiliser vacuumdb pour passer des analyses uniquement. Cela peut être pratique dans une crontab.&lt;/p&gt;
&lt;h3&gt;Amélioration du module contrib hstore&lt;/h3&gt;
&lt;p&gt;Ce contrib, déjà très pratique, devient encore plus puissant&amp;nbsp;: &lt;/p&gt;
&lt;ul&gt;&lt;li&gt;La limite de taille sur les clés et valeurs a été supprimée.&lt;/li&gt;
&lt;li&gt;Il est maintenant possible d'utiliser GROUP BY et DISTINCT &lt;/li&gt;
&lt;li&gt;De nombreux opérateurs et fonctions ont été ajoutés&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Un exemple serait trop long, tellement ce module est riche. Lisez la documentation sans perdre de temps&amp;nbsp;!&lt;/p&gt;
&lt;h3&gt;Texte requête dans auto_explain&lt;/h3&gt;
&lt;p&gt;Le module contrib auto_explain affichera maintenant le code de la requête en même temps que son plan, ce qui devrait en augmenter la lisibilité.&lt;/p&gt;
&lt;h3&gt;Compteurs sur buffers dans pg_stat_statements&lt;/h3&gt;
&lt;p&gt;Ce module contrib, déjà très utile, vient de rajouter des compteurs. Pour rappel, son intérêt est de stocker des statistiques sur les requêtes exécutées par le moteur. Jusque là, il donnait la requête, le nombre d'exécutions, son temps cumulé et le nombre d'enregistrements cumulés. Maintenant, il collecte aussi des informations sur les entrées sorties (en cache, et réelles).&lt;/p&gt;
&lt;pre&gt;marc=# SELECT * from pg_stat_statements order by total_time desc limit 2;&lt;br /&gt;-[ RECORD 1 ]-------+---------------------&lt;br /&gt;userid              | 10&lt;br /&gt;dbid                | 16485&lt;br /&gt;query               | SELECT * from fils ;&lt;br /&gt;calls               | 2&lt;br /&gt;total_time          | 0.491229&lt;br /&gt;rows                | 420000&lt;br /&gt;shared_blks_hit     | 61&lt;br /&gt;shared_blks_read    | 2251&lt;br /&gt;shared_blks_written | 0&lt;br /&gt;local_blks_hit      | 0&lt;br /&gt;local_blks_read     | 0&lt;br /&gt;local_blks_written  | 0&lt;br /&gt;temp_blks_read      | 0&lt;br /&gt;temp_blks_written   | 0&lt;br /&gt;-[ RECORD 2 ]-------+---------------------&lt;br /&gt;userid              | 10&lt;br /&gt;dbid                | 16485&lt;br /&gt;query               | SELECT * from pere;&lt;br /&gt;calls               | 2&lt;br /&gt;total_time          | 0.141445&lt;br /&gt;rows                | 200000&lt;br /&gt;shared_blks_hit     | 443&lt;br /&gt;shared_blks_read    | 443&lt;br /&gt;shared_blks_written | 0&lt;br /&gt;local_blks_hit      | 0&lt;br /&gt;local_blks_read     | 0&lt;br /&gt;local_blks_written  | 0&lt;br /&gt;temp_blks_read      | 0&lt;br /&gt;temp_blks_written   | 0&lt;/pre&gt;
&lt;p&gt;On peut donc, une fois ce contrib installé, répondre aux questions suivantes&amp;nbsp;: &lt;/p&gt;
&lt;ul&gt;&lt;li&gt;Quelle est la requête la plus gourmande en temps d'exécution cumulé&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;Quelle est la requête qui génère le plus d'entrées sorties&amp;nbsp;? (attention, les données peuvent être tout de même dans le cache système)&lt;/li&gt;
&lt;li&gt;Quelles requêtes utilisent principalement le cache (et ne gagneront donc pas à le voir augmenté)&lt;/li&gt;
&lt;li&gt;Qui effectue beaucoup de mises à jour de bloc&amp;nbsp;?&lt;/li&gt;
&lt;li&gt;Qui génère des tris&amp;nbsp;?&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;'local' et 'temp' correspondent aux buffers et entrées des tables temporaires et autres opérations locales (tris, hachages) à un backend.&lt;/p&gt;
&lt;h3&gt;passwordcheck&lt;/h3&gt;
&lt;p&gt;Ce module contrib permet de vérifier les mots de passe, et d'empêcher les plus mauvais de rentrer. Après l'avoir installé comme décrit dans la documentation, voici le résultat&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;marc=# ALTER USER marc password 'marc12';&lt;br /&gt;&amp;lt;marc%marc&amp;gt; ERROR:  password is too short&lt;br /&gt;&amp;lt;marc%marc&amp;gt; STATEMENT:  ALTER USER marc password 'marc12';&lt;br /&gt;ERROR:  password is too short&lt;br /&gt;marc=# ALTER USER marc password 'marc123456';&lt;br /&gt;&amp;lt;marc%marc&amp;gt; ERROR:  password must not contain user name&lt;br /&gt;&amp;lt;marc%marc&amp;gt; STATEMENT:  ALTER USER marc password 'marc123456';&lt;br /&gt;ERROR:  password must not contain user name&lt;/pre&gt;
&lt;p&gt;Ce module souffre de limitations, principalement dues au fait que PostgreSQL permet l'envoi d'un mot de passe déjà encrypté à la base au moment de la déclaration, ce qui l'empêche de le vérifier correctement. Néanmoins, c'est une avancée dans la bonne direction.&lt;/p&gt;
&lt;p&gt;Par ailleurs, le code du module contrib est bien documenté, ce qui permet de l'adapter à vos besoins (entre autres, il est très facile d'y activer la cracklib, afin d'effectuer des contrôles plus complexes).&lt;/p&gt;
&lt;p&gt;marc.cousin@dalibo.com&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>ma fonctionnalité 8.4 préférée : pg_stat_statement</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2009/07/09/ma-fonctionnalit%C3%A9-8.4-pr%C3%A9f%C3%A9r%C3%A9e-%3A-pg_stat_statement" rel="alternate" type="text/html"
    title="ma fonctionnalité 8.4 préférée : pg_stat_statement" />
    <id>urn:md5:68f5bfb42fa1b8393cb4a2460b02ee5e</id>
    <published>2009-07-09T18:48:00+01:00</published>
    <updated>2009-07-09T20:40:58+01:00</updated>
    <author><name>mcousin</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    Dans ce billet,  je vais essayer de faire la publicité de ma fonctionnalité préférée de la version 8.4.&lt;br /&gt;&lt;br /&gt;Comme toujours, il y a une foule de nouveautés, toutes très intéressantes, et il est difficile d'en déclarer une comme étant la meilleure. Toutefois, j'ai un faible pour pg_stat_statement, et je vais essayer de vous expliquer pourquoi&lt;br /&gt;&lt;br /&gt;Pour superviser l'activité sur un serveur PostgreSQL, et trouver les requêtes SQL qui dégradent les performances, jusqu'à aujourd'hui, il n'y avait à ma connaissance qu'une seule solution : on active les traces des ordres SQL et de leur durée (log_statement à all, log_duration à on). Ensuite, on récupère la log de postgresql et on la fait avaler à &lt;a href=&quot;http://pgfouine.projects.postgresql.org/&quot;&gt;pgfouine&lt;/a&gt; ou &lt;a href=&quot;http://pgfoundry.org/projects/pqa/&quot;&gt;pqa&lt;/a&gt;, on obtient un rapport et on va voir les développeurs (ou on rajoute un index dans son coin ...) (les paramètres de log sont documentés ici : &lt;a href=&quot;http://docs.postgresql.fr/8.4/runtime-config-logging.html&quot;&gt;http://docs.postgresql.fr/8.4/runtime-config-logging.html)&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;Cette méthode fonctionne, mais a des gros défauts :&lt;br /&gt;&lt;ul&gt;&lt;li&gt;On trace TOUS les ordres SQL dans la log, ce qui fait qu'on a une log gigantesque assez rapidement (ça peut monter rapidement à plusieurs gigas sur une base très active)&lt;/li&gt;
&lt;li&gt;C'est gourmand en ressources, parce qu'il faut formater les traces, les écrire dans la log, découper le message en plusieurs morceaux si il est plus grand qu'une trame syslog et qu'on a décidé de tracer en syslog. Et le surcoût est le même pour une requête de 20 µs et une requête de 2h.&lt;/li&gt;
&lt;li&gt;On n'a que la durée des requêtes&lt;/li&gt;
&lt;/ul&gt;
&lt;br /&gt;&lt;br /&gt;On peut mitiger l'impact de la fonction de log de plusieurs façons :&lt;br /&gt;&lt;ul&gt;&lt;li&gt;On ne trace de que les ordres SQL un peu longs&lt;/li&gt;
&lt;li&gt;On ne trace que sur de courtes périodes d'activités&lt;/li&gt;
&lt;/ul&gt;
&lt;br /&gt;Dans le premier cas, le problème est qu'on risque de laisser échapper des requêtes unitaires très courtes exécutées des millions de fois. Je l'ai constaté assez souvent dans des développements objets avec de (trop?) nombreux niveaux d'abstraction. On peut facilement se retrouver avec des requêtes insignifiantes exécutées plusieurs milliers de fois à la minute (l'infâme SELECT * FROM DUAL sous Oracle par exemple d'un développeur qui veut vérifier que sa session marche bien avant de lancer un autre ordre, et qui l'a mis à chaque fois qu'il récupère une session d'un pool, au cas où ... ou bien les gens qui réintérrogent un référentiel en permanence). Bref, vaut-il mieux chasser les 10000 appels inutiles à la minute à une requête qui dure 10ms, ou améliorer la requête lancée une fois par minute qui dure 1 seconde? Ça dépend des cas, mais il est&amp;nbsp; préférable que l'audit de performance révèle les 2 (ce qui est très difficile si on ne trace pas tout...)&lt;br /&gt;&lt;br /&gt;Dans le second cas, c'est garanti, on va rater une période intéressante. Et on ne pourra pas faire d'analyse à posteriori.&lt;br /&gt;&lt;br /&gt;C'est ici qu'arrive ma fonctionnalité préférée : &quot;et si, au lieu de tout tracer dans une log pour ensuite devoir reparser et réanalyser tout, on avait une zone de mémoire partagée dans laquelle les processus pouvaient mettre à jour des stats cumulées sur chaque requête ?&quot;.&lt;br /&gt;&lt;br /&gt;Les avantages de cette méthode sont :&lt;br /&gt;&lt;ul&gt;&lt;li&gt;C'est très performant. Je n'ai pas réussi à en mesurer l'impact, et les benchs fait par le développeur montrent un impact négligeable&lt;/li&gt;
&lt;li&gt;On a un peu plus d'informations qu'avec la log (le nombre d'enregistrements cumulés ramenés par la requête)&lt;/li&gt;
&lt;/ul&gt;
C'est donc un mécanisme qu'on peut avoir activé en permanence, consultable par une simple requête.&lt;br /&gt;&lt;br /&gt;Je n'ai pas de base de production sous la main en ce moment, mais voici un exemple :&lt;br /&gt;&quot;Donne moi les 2 requêtes les plus gourmandes en temps d'exécution cumulé depuis le dernier reset des stats&quot; :&lt;br /&gt;&lt;pre&gt;test=# SELECT * from pg_stat_statements order by total_time desc limit 2;&lt;/pre&gt;&lt;pre&gt;-[ RECORD 1 ]------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------&lt;/pre&gt;&lt;pre&gt;userid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 10&lt;/pre&gt;&lt;pre&gt;dbid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 16384&lt;/pre&gt;&lt;pre&gt;query&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | INSERT INTO test SELECT * from test;&lt;/pre&gt;&lt;pre&gt;calls&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 12&lt;/pre&gt;&lt;pre&gt;total_time | 0.036099&lt;/pre&gt;&lt;pre&gt;rows&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 20475&lt;/pre&gt;&lt;pre&gt;-[ RECORD 2 ]------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------&lt;/pre&gt;&lt;pre&gt;userid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 10&lt;/pre&gt;&lt;pre&gt;dbid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 16384&lt;/pre&gt;&lt;pre&gt;query&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | SELECT pg_catalog.quote_ident(c.relname) FROM pg_catalog.pg_class c WHERE c.relkind IN ('r', 'S', 'v') AND substring(pg_catalog.quote_ident(c.relname),1,6)='pg_sta' AND pg_catalog.pg_table_is_visible(c.oid)&lt;/pre&gt;&lt;pre&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : UNION&lt;/pre&gt;&lt;pre&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : SELECT pg_catalog.quote_ident(n.nspname) || '.' FROM pg_catalog.pg_namespace n WHERE substring(pg_catalog.quote_ident(n.nspname) || '.',1,6)='pg_sta' AND (SELECT pg_catalog.count(*) FROM pg_catalog.pg_namespace WHERE substring(pg_catalog.quote_ident(nspname) || '.',1,6) = substring('pg_sta',1,pg_catalog.length(pg_catalog.quote_ident(nspname))+1)) &amp;gt; 1&lt;/pre&gt;&lt;pre&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : UNION&lt;/pre&gt;&lt;pre&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : SELECT pg_catalog.quote_ident(n.nspname) || '.' || pg_catalog.quote_ident(c.relname) FROM pg_catalog.pg_class c, pg_catalog.pg_namespace n WHERE c.relnamespace = n.oid AND c.relkind IN ('r', 'S', 'v') AND substring(pg_catalog.quote_ident(n.nspname) || '.' || pg_catalog.quote_ident(c.relname),1,6)='pg_sta' AND substring(pg_catalog.quote_ident(n.nspname) || '.',1,6) = substring('pg_sta',1,pg_catalog.length(pg_catalog.quote_ident(n.nspname))+1) AND (SELECT pg_catalog.count(*) FROM pg_catalog.pg_namespace WHERE substring(pg_catalog.quote_ident(nspname) || '.',1,6) = substring('pg_sta',1,pg_catalog.length(pg_catalog.quote_ident(nspname))+1)) = 1&lt;/pre&gt;&lt;pre&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : LIMIT 1000&lt;/pre&gt;&lt;pre&gt;calls&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 4&lt;/pre&gt;&lt;pre&gt;total_time | 0.006295&lt;/pre&gt;&lt;pre&gt;rows&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 87&lt;/pre&gt;&lt;br /&gt;Évidemment, sur une base de test, avec une table test, ce n'est pas très intéressant. Avec une vraie base de production c'est autre chose...&lt;br /&gt;&lt;br /&gt;On peut aussi utiliser cette vue pour faire des snapshots de l'activité toutes les quelques minutes par exemple :&lt;br /&gt;&lt;br /&gt;Pour le premier snapshot :&lt;br /&gt;&lt;pre&gt;&lt;code&gt;CREATE TABLE snapshot as select now(),* from pg_stat_statements;&lt;/code&gt;&lt;/pre&gt;Pour les suivants :&lt;br /&gt;&lt;pre&gt;&lt;code&gt;INSERT INTO snapshot select now(),* from pg_stat_statements;&lt;/code&gt;&lt;/pre&gt;&lt;br /&gt;&lt;br /&gt;On peut aussi imaginer remettre à zéro les compteurs (suivant ce qu'on veut faire des snapshots, cumulés ou indépendants) avec pg_stat_statements_reset.Avec cela il est possible de 'retrouver' le ou les ordres SQL qui ont fait 'ramer' l'application à une heure donnée (ou dédouaner la base de données...)&lt;br /&gt;&lt;br /&gt;Les seuls points qui me chagrinent encore sur pg_stat_statement sont qu'il s'agit d'une contrib (c'est normal, mais ça veut dire que cette fonctionnalité sera moins exposée qu'elle le mérite), et que quelques statistiques importantes supplémentaires pourraient servir : la quantité de données lues du cache, la quantité lue du disque, et la quantité écrite dans le cache. Pourquoi pas aussi être capable de séparer le temps de parsing du temps d'exécution (pour repérer les requêtes qui pourraient gagner à être préparées).&lt;br /&gt;&lt;br /&gt;Bref, une fonctionnalité à tester d'urgence si ce n'est pas déjà fait...&lt;br /&gt;&lt;br /&gt;La doc officielle : &lt;a href=&quot;http://docs.postgresql.fr/8.4/pgstatstatements.html&quot;&gt;http://docs.postgresql.fr/8.4/pgstatstatements.html&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;Un dernier point : l'autre raison pour laquelle c'est ma fonctionnalité préférée, c'est que c'est une des fonctionnalités qui manquait à PostgreSQL pour faciliter un audit ou un suivi des performances par rapport à Oracle (la vue V$SQLAREA). C'est une fonctionnalité à laquelle on s'habitue assez facilement, c'était assez frustrant de ne pas l'avoir sur son SGBD favori.&lt;br /&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Guide de démarrage rapide avec PostgreSQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2009/06/20/Guide-de-demarrage-rapide-avec-PostgreSQL" rel="alternate" type="text/html"
    title="Guide de démarrage rapide avec PostgreSQL" />
    <id>urn:md5:aae3c87a1bde25fce880cbbfa1391b5e</id>
    <published>2009-06-20T16:21:00+01:00</published>
    <updated>2010-09-26T06:46:44+01:00</updated>
    <author><name>florence</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;h3&gt;Pourquoi ce document?&lt;/h3&gt;
&lt;p&gt;J'ai commencé à développer sous PostgreSQL assez récemment après une
longue expérience sous Oracle. La documentation générale de PostgreSQL
est excellente, et très riche, mais j'avais besoin d'un document plus
léger expliquant la procédure d'installation sur différents systèmes et
comment démarrer (créer un cluster, configurer les connexions), ainsi
que des informations sur ce qu'on pouvait faire avec PostgreSQL. Je ne
l'ai pas trouvé.
Après quelques mois d'utilisation, je me suis rendu compte que les
problèmes des débutants étaient toujours les mêmes. Ainsi, j'ai compilé
mes notes des débuts et ce que j'ai appris depuis dans ce document.
Voici le résultat, en espérant qu'il vous aide à débuter et qu'il vous
encourage à continuer avec PostgreSQL.&lt;/p&gt;
&lt;h3&gt;À qui s'adresse ce document?&lt;/h3&gt;
&lt;p&gt;Ce document a pour but de vous aider à installer PostgreSQL sous Windows ou sous Linux, et à commencer à développer.&lt;/p&gt;
&lt;p&gt;Il est écrit pour vous faire gagner du temps dans vos premiers pas
avec PostgreSQL, tout en vous expliquant les points importants afin que
vous puissiez progresser par vous-même.
Il s'adresse donc principalement aux développeurs d'applications, afin
de leur permettre de découvrir ce puissant moteur sur une petite base
de test, ou aux personnes qui débutent complètement avec PostgreSQL.
Vous n'aurez pas besoin de connaissances système avancées pour suivre
ce document.&lt;/p&gt;
&lt;p&gt;Une fois que vous aurez terminé la lecture de ce document, vous
pourrez continuer par la lecture de la documentation officielle pour
apprendre à administrer PostgreSQL ou devenir un développeur aguerri.
La dernière section de ce document vous donne les liens et références
nécessaires pour continuer à progresser.
Parfois les informations ne sont volontairement pas complètes, et
lorsque la documentation de référence est plus claire et précise que ce
qui aurait pu être fait ici, les liens sont fournis vers la
documentation française.&lt;/p&gt;
&lt;p&gt;Ce document a été écrit initialement pour la version 8.3, mais les
principes sont les mêmes avec les versions 8.2 et 8.4 (voir le chapitre
sur les versions).&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Avertissement :&lt;/strong&gt; ce document n'est en aucun cas un
document sur le tuning de la base. Il n'est pas fait non plus pour vous
apprendre à administrer une base de production.&lt;/p&gt;    &lt;p&gt;Sachez que vous pouvez aussi télécharger ce document au format PDF : &lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;http://blog2.postgresql.fr/public/Doc%20postgresql.pdf&quot;&gt;Guide démarrage PostgreSQL&lt;/a&gt;&lt;/p&gt;
&lt;h2&gt;Présentation de PostgreSQL&lt;/h2&gt;
&lt;p&gt;PostgreSQL est un moteur de bases de données relationnelle.
C'est un moteur adapté à des bases métier, donc riche en fonctionnalités et puissant. Son installation est cependant plutôt simple.&lt;/p&gt;
&lt;p&gt;Si vous ne connaissez pas les principes relationnels ou le SQL, le mieux est de vous procurer un bon ouvrage sur le sujet. L'article de Wikipedia peut être une bonne introduction (&lt;a href=&quot;http://fr.wikipedia.org/wiki/SQL&quot; hreflang=&quot;en&quot;&gt;http://fr.wikipedia.org/wiki/SQL&lt;/a&gt;), et donne de nombreuses références. Le tutoriel de la documentation PostgreSQL peut également vous rendre service  si vous avez besoin de vous rafraîchir la mémoire&amp;nbsp;: &lt;a href=&quot;http://docs.postgresqlfr.org/8.3/tutorial-sql.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/8.3/tutorial-sql.html&lt;/a&gt;&lt;/p&gt;
&lt;h3&gt;Licence&lt;/h3&gt;
&lt;p&gt;La licence de PostgreSQL est une licence BSD, ce qui permet son utilisation sans restriction, dans un logiciel libre ou propriétaire. C'est un avantage certain, car cela permet par exemple d'utiliser PostgreSQL comme base de données pour un logiciel propriétaire.&lt;/p&gt;
&lt;p&gt;PostgreSQL est un projet indépendant. Il n'est détenu par aucune entreprise. La communauté PostgreSQL est très réactive (allez voir les mailings-lists si vous voulez vérifier). De nombreuses entreprises soutiennent et participent également au développement de PostgreSQL.&lt;/p&gt;
&lt;h3&gt;Caractéristiques et fonctionnalités&amp;nbsp;:&lt;/h3&gt;
&lt;p&gt;PostgreSQL comporte de nombreuses fonctionnalités intéressantes. Parmi celles-ci, on peut citer par exemple&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;moteur transactionnel&lt;/li&gt;
&lt;li&gt;respect des normes SQL&lt;/li&gt;
&lt;li&gt;MVCC (mécanisme permettant une concurrence efficace sans verrouiller les enregistrements pour assurer l'isolation des transactions)&lt;/li&gt;
&lt;li&gt;procédures stockées dans de nombreux langages&lt;/li&gt;
&lt;li&gt;triggers&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;PostgreSQL est conçu pour être robuste (aucune version ne sort sans avoir subi une suite extensive de tests) et peut supporter des volumes importants de données (ainsi par exemple Météo France gère une base de 3,5To).&lt;/p&gt;
&lt;p&gt;PostgreSQL est conçu pour pouvoir supporter des extensions. Des extensions et outils sont disponibles pour compléter le moteur, par exemple&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;PostGis&amp;nbsp;: moteur de données spatiales.&lt;/li&gt;
&lt;li&gt;Slony&amp;nbsp;: réplication maître-esclaves.&lt;/li&gt;
&lt;li&gt;Et de nombreux autres.&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Installation&lt;/h2&gt;
&lt;p&gt;Avant de passer aux procédures d'installation proprement dites, il est nécessaire de comprendre certaines notions fondamentales.&lt;/p&gt;
&lt;h3&gt;Vocabulaire&lt;/h3&gt;
&lt;h4&gt;Base&lt;/h4&gt;
&lt;p&gt;Une base est un ensemble structuré de données. On utilise généralement une base de donnée par application.
Pour pouvoir créer une base de données, vous devez disposer d'un cluster de bases de données.&lt;/p&gt;
&lt;h4&gt;Cluster (ou grappe de base de données)&lt;/h4&gt;
&lt;p&gt;Un cluster est un ensemble de bases de données qui partagent les mêmes ressources (processus, mémoire, disque...) .&lt;/p&gt;
&lt;h4&gt;Schéma&lt;/h4&gt;
&lt;p&gt;Un schéma est un espace de nommage au sein d'une base de données.&lt;/p&gt;
&lt;h3&gt;Principes de base&lt;/h3&gt;
&lt;h4&gt;Comptes système&lt;/h4&gt;
&lt;p&gt;Les processus de PostgreSQL utilisent un compte système. Généralement c'est le compte postgres qui est utilisé pour cela, sauf si vous avez installé PostgreSQL sur votre compte (voir la partie compilation).&lt;/p&gt;
&lt;h4&gt;Rôles&lt;/h4&gt;
&lt;p&gt;Les droits de la base de données sont gérés par des rôles. Avant de pouvoir vous connecter à la base de données, le rôle que vous utilisez doit avoir les autorisation nécessaires.
&lt;a href=&quot;http://docs.postgresql.fr/8.3/user-manag.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresql.fr/8.3/user-manag.html&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;A retenir :&lt;/ins&gt; les comptes systèmes et les rôles de base de données sont distincts! Même s'il y a des possibilités de mise en correspondance entre les deux (cf. paragraphe sur pg_hba.conf)&lt;/p&gt;
&lt;h4&gt;Versions (mineures/majeures)&lt;/h4&gt;
&lt;p&gt;Les versions majeures comprennent le chiffre avant le point et un chiffre après. Exemple&amp;nbsp;: 8.2 et 8.3 sont des versions majeures différentes.&lt;/p&gt;
&lt;p&gt;Les versions mineures incrémentent la 3ème partie&amp;nbsp;: exemple&amp;nbsp;: 8.3.7&lt;/p&gt;
&lt;p&gt;Pour changer de version mineure, il suffit de mettre à jour le moteur. Mais pour changer de version majeure, il est nécessaire de décharger puis recharger les données.&lt;/p&gt;
&lt;p&gt;Plus d'informations ici&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/support/versioning&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/support/versioning&lt;/a&gt;&lt;/p&gt;
&lt;h4&gt;Client/serveur&lt;/h4&gt;
&lt;p&gt;PostgreSQL est une application client/serveur. &lt;br /&gt;
Le serveur gère les fichiers de la base de données, accepte les connexions des clients, et effectue les opérations demandées par les clients.&lt;/p&gt;
&lt;p&gt;Le client peut prendre de nombreuses formes. Il existe par exemple un client en ligne de commande (psql), des clients graphiques (par exemple pgAdmin3)... Le client peut être sur la même machine que le serveur, ou bien communiquer avec lui par le réseau.&lt;/p&gt;
&lt;h4&gt;Processus serveur&lt;/h4&gt;
&lt;p&gt;Sous Windows, le serveur PostgreSQL tourne en tant que service.&lt;/p&gt;
&lt;p&gt;Sous Linux, ce sont des démons système qui effectuent ces tâches.&lt;/p&gt;
&lt;p&gt;Si vous êtes curieux, vous pouvez aller voir cet article&amp;nbsp;: &lt;a href=&quot;http://dalibo.org/glmf112_les_processus_de_postgresql&quot; hreflang=&quot;fr&quot;&gt;http://dalibo.org/glmf112_les_processus_de_postgresql&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Il est important de comprendre qu'on n'arrête pas les processus du serveur n'importe comment (utiliser les outils pour cela...).&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;NB :&lt;/ins&gt; par défaut, PostgreSQL est configuré pour écouter sur le port &lt;em&gt;5432&lt;/em&gt;. Les outils se connectent par défaut sur ce port&amp;nbsp;: pensez à cela si vous devez modifier ce paramètre.&lt;/p&gt;
&lt;h4&gt;Module de contribution&lt;/h4&gt;
&lt;p&gt;Ce sont des extensions intéressantes, maintenues par le projet, mais non intégrées au coeur du moteur. &lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Exemples :&lt;/ins&gt;&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;em&gt;adminpack&lt;/em&gt; (fonctions supplémentaires, utilisées par les outils d'administrations comme pgAdmin3)&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pg_buffercache&lt;/em&gt; (pour savoir ce qui est présent dans le cache)&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pg_freespacemap&lt;/em&gt;&amp;nbsp;: donne la liste des blocs vides et partiellement vides des tables et index (quantité d'espace libre dans chaque objet de la base)&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pgcrypto&lt;/em&gt;&amp;nbsp;: fonctions de cryptographie&lt;/li&gt;
&lt;/ul&gt;
&lt;h3&gt;Exemple&lt;/h3&gt;
&lt;p&gt;Pour l'installation et la suite, nous prendrons l'exemple de la création d'une base de données mabase, qui sera utilisée et gérée par un utilisateur tom.&lt;/p&gt;
&lt;h3&gt;Sous &lt;em&gt;Windows&lt;/em&gt;&lt;/h3&gt;
&lt;p&gt;À partir de la version 8.0, PostgreSQL fonctionne nativement sous &lt;em&gt;Windows&lt;/em&gt; (&lt;em&gt;Windows XP&lt;/em&gt;, &lt;em&gt;Windows 2000&lt;/em&gt;, &lt;em&gt;Windows 2003&lt;/em&gt;, &lt;em&gt;Vista&lt;/em&gt;, &lt;em&gt;Windows 2008&lt;/em&gt;). Malgré tout, seules les versions à partir de la 8.2 sont supportées sous Windows. Il s'installe en tant que service.
&lt;br /&gt;
&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: si vous regardez dans la liste des processus, plusieurs processus &lt;em&gt;postgres&lt;/em&gt; sont présents. Gardez à l'esprit que la mémoire est partagée entre ces processus&amp;nbsp;: la mémoire utilisée par PostgreSQL est donc inférieure à la somme de la mémoire utilisée par chaque processus qui est affichée dans le gestionnaire de tâches...&lt;/p&gt;
&lt;h4&gt;Où trouver PostgreSQL pour Windows?&lt;/h4&gt;
&lt;p&gt;Vous pouvez trouver deux types d'installeurs pour Windows&amp;nbsp;: l'installeur &quot;en un clic&quot;, ou l'installeur &quot;pgInstaller&quot;. Le premier est créé par EnterpriseDB, le seconde par la communauté. Vous les trouverez à partir d'ici&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/download/windows&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/download/windows&lt;/a&gt;.
La suite du document détaille le processus d'installation pour l'installeur &quot;pgInstaller&quot;&lt;/p&gt;
&lt;h4&gt;Installation&lt;/h4&gt;
&lt;p&gt;Dézippez le zip, ouvrez le répertoire, puis lancez &lt;em&gt;postgresql-8.3.msi&lt;/em&gt;
&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.2_langue_m.jpg&quot; alt=&quot;2_langue&quot; title=&quot;2_langue, juin 2009&quot; /&gt;
&lt;/p&gt;
&lt;p&gt;Choisissez la langue de l'installation (ici le français).
Il peut être utile de cocher la case «&amp;nbsp;Write detailed installation log&amp;nbsp;»&amp;nbsp;: cela vous permettra de diagnostiquer un échec éventuel de l'installation.
&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.3_Fermer_m.jpg&quot; alt=&quot;3_fermer&quot; title=&quot;3_fermer, juin 2009&quot; /&gt;
&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.4_choix_m.jpg&quot; alt=&quot;4_choix&quot; title=&quot;4_choix, juin 2009&quot; /&gt;
&lt;br /&gt;
Choisissez les options d'installation. Si vous ne savez pas quoi choisir, ajoutez juste le support de la langue si vous souhaitez les messages en français.
&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.5_notes_m.jpg&quot; alt=&quot;5_notes&quot; title=&quot;5_notes, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Lisez les notes d'installation...&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.6_compte_W_ed_m.jpg&quot; alt=&quot;6_compte_W&quot; title=&quot;6_compte_W, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Le serveur PostgreSQL peut s'exécuter en tant que service. La base de données sera alors active dès le démarrage de la machine. C'est le mode le plus pratique.
Entrez le nom du compte. Par défaut, c'est le nom «&amp;nbsp;postgres&amp;nbsp;» qui est proposé.&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Attention :&lt;/ins&gt; il s'agit du compte système sous lequel s'exécutera le service &lt;em&gt;postgres&lt;/em&gt;. Si le compte n'existe pas, l'installeur vous proposera de le créer.&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.7_cree_cpte_ed_m.jpg&quot; alt=&quot;7_cree_compte&quot; title=&quot;7_cree_compte, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Répondez oui...&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.8_initialisation_groupe_UTF8_m.jpg&quot; alt=&quot;8_initialisation_groupe_UTF8&quot; title=&quot;8_initialisation_groupe_UTF8, juin 2009&quot; /&gt;
&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Remarque&lt;/ins&gt;&amp;nbsp;: ici l'utilisateur «&amp;nbsp;postgres&amp;nbsp;» est le nom de l'utilisateur interne de base de données. Il est distinct de l'utilisateur système que vous avez entré précédemment (même si par défaut, ils portent le même nom, &lt;em&gt;postgres&lt;/em&gt;).&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Encodage :&lt;/ins&gt;&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Client&amp;nbsp;: choisir &lt;em&gt;WIN1252&lt;/em&gt; car la console Windows a besoin d'un encodage 1252.&lt;/li&gt;
&lt;li&gt;Serveur&amp;nbsp;: de préférence &lt;em&gt;UTF8&lt;/em&gt; (permet de stocker les caractères de toutes les langues)&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;ins&gt;Remarque&lt;/ins&gt;&amp;nbsp;: par défaut l'installeur propose comme encodage du client et du serveur celui du système (ici WIN1252 car on est sur un Windows français). Il faut savoir que l'encodage du serveur conditionne ce que vous pouvez faire sur les bases du groupe de bases de données&amp;nbsp;: en pratique les bases doivent généralement utiliser toutes le même encodage (jusqu'à la version 8.3) .
&lt;a href=&quot;http://docs.postgresqlfr.org/8.3/charset.html&quot; hreflang=&quot;en&quot;&gt;http://docs.postgresqlfr.org/8.3/charset.html&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;Vous pouvez changer le numéro de port d'écoute. Attention dans ce cas à configurer correctement vos clients (JDBC, etc...)
&lt;br /&gt;
&lt;ins&gt;Remarquez la case à cocher :&lt;/ins&gt; par défaut, &lt;em&gt;postgres&lt;/em&gt; n'acceptera pas les connexions à partir du réseau. C'est parfait sur un poste de développement autonome, mais pas pour un serveur. Cela pourra être modifié par configuration.&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Attention à ne pas mettre un mot de passe trivial&lt;/ins&gt; à l'utilisateur postgres (c'est encore plus important si vous autorisez les connexions à partir du réseau!). Évitez également de lui donner le même mot de passe que celui de l'utilisateur système &lt;em&gt;postgres&lt;/em&gt;. En effet, l'utilisateur &lt;em&gt;postgres&lt;/em&gt; dispose de tous les droits sur le cluster.&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.9_langages_m.jpg&quot; alt=&quot;9_langages.png&quot; title=&quot;9_langages.png, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Cet écran permet d'installer des langages pour les procédures stockées.
Seul &lt;em&gt;PL/pgsql&lt;/em&gt; est proposé dans notre cas, car l'outil d'installation n'a pas détecté sur notre système d'interpréteurs pour les autres langages. Les autres langages pourront être ajoutés ultérieurement.&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.10_contrib_m.jpg&quot; alt=&quot;10_contrib.png&quot; title=&quot;10_contrib.png, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Les modules de contribution apportent des fonctionnalités supplémentaires, qui ne sont pas (ou pas encore) intégrées dans le moteur.
&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.11_pret_m.jpg&quot; alt=&quot;11_pret.png&quot; title=&quot;11_pret.png, juin 2009&quot; /&gt;
&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.13_termine_m.jpg&quot; alt=&quot;13_terminé.png&quot; title=&quot;13_terminé.png, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Stackbuilder&amp;nbsp;: permet d'installer des modules supplémentaires. Vous pouvez le lancer pour voir ce qu'il vous propose, sachant que pour un fonctionnement standard, il n'est pas nécessaire.&lt;/p&gt;
&lt;p&gt;L'installation sous Windows est prête à être utilisée.
Dans le menu démarrer, vous pouvez retrouver tous les outils utiles pour gérer le serveur.
&lt;br /&gt;
&lt;img src=&quot;http://blog2.postgresql.fr/public/installation_windows/.20_apres_m.jpg&quot; alt=&quot;20_apres.png&quot; title=&quot;20_apres.png, juin 2009&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Si vous avez conservé les options par défaut, le cluster se trouve dans&amp;nbsp;:
&lt;em&gt;C:\Program Files\PostgreSQL\8.3&lt;/em&gt;
Vous pouvez passer à la section «&amp;nbsp;après l'installation&amp;nbsp;».&lt;/p&gt;
&lt;h3&gt;Sous &lt;em&gt;Linux&lt;/em&gt;&lt;/h3&gt;
&lt;p&gt;PostgreSQL est fourni avec plusieurs outils pour la gestion du serveur et des bases de données.
Les principales distributions fournissent des paquets PostgreSQL pour faciliter l'installation et l'utilisation.
Redhat et Debian ont leur propre version des outils, qui ont un nom différent de ceux que vous trouverez dans la documentation. Il vaut mieux utiliser les outils fournis par votre distribution.&lt;/p&gt;
&lt;h4&gt;Debian/Ubuntu&lt;/h4&gt;
&lt;p&gt;Pour installer PostgreSQL sur Debian, il faut récupérer les paquets suivants:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;postgresql-8.3  (serveur)&lt;/li&gt;
&lt;li&gt;postgresql-client-8.3  (client)&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Avec l'installation de PostgreSQL, un cluster de bases de données est créé automatiquement. Vous pouvez voir la liste des clusters installés via la commande &lt;em&gt;pg_lsclusters.&lt;/em&gt;&lt;/p&gt;
&lt;pre&gt;flo@flo:~$ pg_lsclusters&lt;br /&gt;Version Cluster   Port Status Owner    Data directory                     Log file &lt;br /&gt;8.3     main      5432 online postgres /var/lib/postgresql/8.3/main       custom&lt;br /&gt;flo@flo:~$&lt;/pre&gt;
&lt;p&gt;Vous pouvez voir que le cluster de base est installé dans le répertoire&amp;nbsp;:
&lt;em&gt;/var/lib/postgresql/8.3/main&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;La documentation des outils Debian pour PostgreSQL se trouve dans&amp;nbsp;:
&lt;em&gt;/usr/share/doc/postgresql-common&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;Quelques outils à connaître absolument&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;em&gt;pg_lsclusters&lt;/em&gt;&amp;nbsp;: liste des clusters&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pg_createcluster&lt;/em&gt;&amp;nbsp;: crée un cluster de bases&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pg_ctlcluster&lt;/em&gt;&amp;nbsp;: contrôle des cluster (arrêt/démarrage)&lt;/li&gt;
&lt;/ul&gt;
&lt;h5&gt;Modules de contribution&amp;nbsp;:&lt;/h5&gt;
&lt;p&gt;Pour utiliser les modules de contribution, il faut installer le paquet&amp;nbsp;:
&lt;em&gt;postgresql-contrib-8.3&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;Le paquet Debian copie des fichiers .sql. Voyons où ils se trouvent&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;flo:~# dpkg -L postgresql-contrib-8.3&lt;br /&gt;/usr/share/postgresql/8.3/contrib/fuzzystrmatch.sql&lt;br /&gt;/usr/share/postgresql/8.3/contrib/uninstall_int_aggregate.sql&lt;br /&gt;/usr/share/postgresql/8.3/contrib/uninstall_pg_trgm.sql&lt;/pre&gt;
&lt;p&gt;Les fichiers .sql installent les modules de contribution.&lt;/p&gt;
&lt;h4&gt;Redhat/Cent OS/Fedora&lt;/h4&gt;
&lt;p&gt;Les RPM pour PostgreSQL, ainsi qu'un guide pratique se trouvent à l'adresse suivante&amp;nbsp;:
&lt;a href=&quot;http://yum.pgsqlrpms.org/index.php&quot; hreflang=&quot;en&quot;&gt;http://yum.pgsqlrpms.org/index.php&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Une fois l'installation terminée, vous devrez créer un cluster&amp;nbsp;:
&lt;code&gt;service postgresql initdb&lt;/code&gt;
et démarrer le service&amp;nbsp;:
&lt;code&gt;service postgresql start	&lt;/code&gt;&lt;/p&gt;
&lt;h4&gt;Compilation des sources&lt;/h4&gt;
&lt;p&gt;Compiler les sources n'est pas si compliqué que ça peut en avoir l'air. Si vous n'avez pas le droit de vous connecter en tant que &lt;em&gt;root&lt;/em&gt; sur le serveur Linux où vous souhaitez installer PostgreSQL, c'est le moyen d'installer PostgreSQL tout de même. Le serveur s'exécutera alors dans votre compte utilisateur.
Pour compiler les sources, vous devez les récupérer ici&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/ftp/source/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/ftp/source/&lt;/a&gt; et suivre la procédure d'installation précisée dans la documentation.&lt;/p&gt;
&lt;h3&gt;Autres&lt;/h3&gt;
&lt;p&gt;Des binaires sont disponibles également pour&amp;nbsp;:
FreeBSD, Mac OS X, Solaris&lt;/p&gt;
&lt;h2&gt;Après l'installation&lt;/h2&gt;
&lt;p&gt;Dans toute la suite du document, nous supposons que l'utilisateur système sous lequel PostgreSQL a été installé est &lt;em&gt;postgres&lt;/em&gt;. Si ce n'est pas le cas, remplacez par l'utilisateur qui démarre le serveur.&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Conseil&lt;/ins&gt;&amp;nbsp;: avant toute modification de fichier de configuration, pensez à sauvegarder la version initiale du fichier! Une erreur est si vite arrivée...&lt;/p&gt;
&lt;h3&gt;Processus et emplacement des fichiers.&lt;/h3&gt;
&lt;p&gt;L'emplacement des fichiers de configuration et des fichiers du cluster dépend de votre distribution.&lt;/p&gt;
&lt;p&gt;Le répertoire contenant les fichiers du cluster est couramment appelé &lt;em&gt;PGDATA&lt;/em&gt; (du nom de la variable d'environnement correspondante).&lt;br /&gt;
Par exemple&amp;nbsp;: &lt;em&gt;/var/lib/pgsql/data&lt;/em&gt; (Linux) ou &lt;em&gt;C:\Program Files\PostgreSQL\8.3\data&lt;/em&gt; (Windows).&lt;/p&gt;
&lt;p&gt;Normalement, le  fichier &lt;em&gt;postgresql.conf&lt;/em&gt; est dans le répertoire du cluster. Cependant, cela peut être autrement (sur Debian, tous les fichiers de configuration doivent être dans /etc)&lt;/p&gt;
&lt;p&gt;Voici un moyen de retrouver leur emplacement si vous l'avez oublié.&lt;/p&gt;
&lt;p&gt;Liste des processus nommés &quot;postgres&quot; :&lt;/p&gt;
&lt;p&gt;(exemple sur une Debian Lenny):&lt;/p&gt;
&lt;pre&gt;flo:~# ps -ef | grep postgres | grep -v grep&lt;br /&gt;postgres  2797     1  0 06:14 ?        00:00:00 /usr/lib/postgresql/8.3/bin/postgres -D /var/lib/postgresql/8.3/main -c config_file=/etc/postgresql/8.3/main/postgresql.conf&lt;br /&gt;postgres  2798  2797  0 06:14 ?        00:00:00 postgres: logger process                                                                                        &lt;br /&gt;postgres  2800  2797  0 06:14 ?        00:00:00 postgres: writer process                                                                                        &lt;br /&gt;postgres  2801  2797  0 06:14 ?        00:00:00 postgres: wal writer process                                                                                    &lt;br /&gt;postgres  2802  2797  0 06:14 ?        00:00:00 postgres: autovacuum launcher process                                                                           &lt;br /&gt;postgres  2803  2797  0 06:14 ?        00:00:00 postgres: stats collector process                                                                               &lt;br /&gt;flo:~#&lt;/pre&gt;
&lt;p&gt;Voyez que le processus &lt;em&gt;2797&lt;/em&gt; est le père de tous les autres&amp;nbsp;: &lt;/p&gt;
&lt;p&gt;&lt;code&gt;postgres  2797     1  0 06:14&amp;nbsp;?        00:00:00 /usr/lib/postgresql/8.3/bin/postgres -D /var/lib/postgresql/8.3/main -c config_file=/etc/postgresql/8.3/main postgresql.conf&lt;/code&gt; &lt;/p&gt;
&lt;p&gt;le chemin derrière le &lt;em&gt;-D&lt;/em&gt; est l'emplacement du cluster.&lt;/p&gt;
&lt;p&gt;Celui derrière le &lt;em&gt;-c&lt;/em&gt; l'emplacement du fichier de configuration.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;config_file=/etc/postgresql/8.3/main/postgresql.conf&lt;/code&gt;
Normalement, les autres fichiers de configuration du cluster (&lt;em&gt;pg_hba.conf&lt;/em&gt;, &lt;em&gt;pg_ident.conf&lt;/em&gt;) sont dans le même répertoire.&lt;/p&gt;
&lt;p&gt;&lt;em&gt;/usr/lib/postgresql/8.3/bin/postgres&lt;/em&gt;
est l'emplacement des binaires.&lt;/p&gt;
&lt;p&gt;Arborescence du répertoire du cluster :&lt;/p&gt;
&lt;pre&gt;flo:/var/lib/postgresql/8.3/main# ls -l&lt;br /&gt;total 48&lt;br /&gt;drwx-- 11 postgres postgres 4096 mai 10 15:19 base&lt;br /&gt;drwx--  2 postgres postgres 4096 mai 10 18:29 global&lt;br /&gt;drwx--  2 postgres postgres 4096 avr  4 19:58 pg_clog&lt;br /&gt;drwxr-xr-x  2 postgres postgres 4096 mai 10 08:15 pg_log&lt;br /&gt;drwx--  4 postgres postgres 4096 avr  4 19:58 pg_multixact&lt;br /&gt;drwx--  2 postgres postgres 4096 avr  4 19:58 pg_subtrans&lt;br /&gt;drwx--  2 postgres postgres 4096 avr  4 19:58 pg_tblspc&lt;br /&gt;drwx--  2 postgres postgres 4096 avr  4 19:58 pg_twophase&lt;br /&gt;-rw---  1 postgres postgres    4 avr  4 19:58 PG_VERSION&lt;br /&gt;drwx--  3 postgres postgres 4096 avr  4 19:58 pg_xlog&lt;br /&gt;-rw---  1 postgres postgres  133 mai 10 08:15 postmaster.opts&lt;br /&gt;-rw---  1 postgres postgres   54 mai 10 08:15 postmaster.pid&lt;br /&gt;lrwxrwxrwx  1 root     root       31 avr  4 19:58 root.crt -&amp;gt; /etc/postgresql-common/root.crt&lt;/pre&gt;
&lt;h5&gt;Quelques sous-répertoires  et fichiers&amp;nbsp;:&lt;/h5&gt;
&lt;ul&gt;
&lt;li&gt;&lt;em&gt;base&lt;/em&gt;&amp;nbsp;: répertoire des fichiers de base de données&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pg_log&lt;/em&gt;&amp;nbsp;: log de la base de données (c'est le seul répertoire du cluster où vous pouvez supprimer des fichiers!)&lt;/li&gt;
&lt;li&gt;&lt;em&gt;pg_clog&lt;/em&gt; et &lt;em&gt;pg_xlog&lt;/em&gt;&amp;nbsp;: commit log (état des transactions) et répertoire des fichiers WAL (Write Ahead Log, utilisé pour la durabilité ).&lt;/li&gt;
&lt;li&gt;&lt;em&gt;postmaster.pid&lt;/em&gt;&amp;nbsp;: fichier verrou utilisé pour éviter que plusieurs instances ne soient actives sur le même répertoire de données.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: le contenu de &lt;em&gt;pg_clog&lt;/em&gt; et &lt;em&gt;pg_xlog&lt;/em&gt; &lt;ins&gt;ne doit pas être supprimé&lt;/ins&gt;!&lt;/p&gt;
&lt;h3&gt;Changer le mot de passe de l'utilisateur système &lt;em&gt;postgres&lt;/em&gt;&lt;/h3&gt;
&lt;p&gt;À moins que vous n'ayez compilé les sources pour utiliser PostgreSQL sur votre compte utilisateur, un utilisateur &lt;em&gt;postgres&lt;/em&gt; a été créé sur votre système.&lt;/p&gt;
&lt;p&gt;Afin de pouvoir l'utiliser, vous devez changer le mot de passe de cet utilisateur.&lt;/p&gt;
&lt;p&gt;Pour cela, sous Linux, connectez-vous en tant que &lt;em&gt;root&lt;/em&gt; et exécutez la commande '&lt;em&gt;passwd postgres'&lt;/em&gt;.
(ne pas utiliser un mot de passe trivial!)&lt;/p&gt;
&lt;h3&gt;Créer un cluster de base de données.&lt;/h3&gt;
&lt;p&gt;Avec certaines distributions (Redhat, Debian), un cluster est créé par défaut à l'installation des paquets.
&lt;/p&gt;
&lt;p&gt;Si vous êtes dans un autre cas de figure, il vous faudra donc en créer un.&lt;/p&gt;
&lt;p&gt;Pour cela, utilisez la commande &lt;em&gt;initdb&lt;/em&gt;.&lt;/p&gt;
&lt;h3&gt;Autoriser les connexions&lt;/h3&gt;
&lt;p&gt;L'installation de PostgreSQL positionne des valeurs par défaut dans les fichiers de configuration. &lt;/p&gt;
&lt;p&gt;Après l'installation, PostgreSQL est configuré de telle sorte que les connexions ne sont pas possibles à partir du réseau.&lt;/p&gt;
&lt;p&gt;Pour autoriser des clients distants à se connecter, il faut configurer deux fichiers&amp;nbsp;:
&lt;em&gt;postgresql.conf&lt;/em&gt; et &lt;em&gt;pg_hba.conf&lt;/em&gt;.&lt;/p&gt;
&lt;h4&gt;Connexions réseau (postgresql.conf)&lt;/h4&gt;
&lt;p&gt;À l'installation, PostgreSQL est configuré pour n'accepter que les connexions locales (c'est le paramètre &lt;em&gt;listen_addresses&lt;/em&gt;).  &lt;/p&gt;
&lt;p&gt;Si vous souhaitez pouvoir vous connecter à partir du réseau, il faut dé-commenter le paramètre &lt;em&gt;listen_addresses&lt;/em&gt; du fichier &lt;em&gt;postgresql.conf&lt;/em&gt;, et préciser sur quelle(s) adresse(s) postgres accepte les connexions.&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: ce sont bien les adresses IP &lt;ins&gt;d'écoute&lt;/ins&gt;, c'est-à-dire les adresses IP &lt;ins&gt;du serveur&lt;/ins&gt; sur lesquelles le serveur PostgreSQL va écouter. Si vous précisez une adresse '*', postgres va écouter les connexions sur toutes les interfaces réseau du serveur. Si vous précisez une adresse IP, cela signifie que postgres va écouter sur l'interface réseau du serveur qui a cette adresse IP.
Si vous souhaitez n'autoriser les connexions qu'à une liste de machines ou d'adresses IP, c'est dans pg_hba.conf que vous pouvez le faire (paragraphe suivant).&lt;/p&gt;
&lt;p&gt;Pour que les paramètres soient pris en compte, il faut redémarrer le serveur PostgreSQL.&lt;br /&gt;
&lt;ins&gt;Exemples :&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;(connexion locales)&lt;/p&gt;
&lt;pre&gt;#listen_addresses = 'localhost'         # what IP address(es) to listen on;&lt;br /&gt;&lt;br /&gt;                                       # comma-separated list of addresses;&lt;br /&gt;&lt;br /&gt;                                       # defaults to 'localhost', '*' = all&lt;br /&gt;&lt;br /&gt;                                       # (change requires restart)&lt;br /&gt;port = 5432                             # (change requires restart)&lt;/pre&gt;
&lt;p&gt;(connexion sur l'adresse 192.168.0.4 et local, port 5433)&lt;/p&gt;
&lt;pre&gt;listen_addresses = '192.168.0.4, localhost'         # what IP address(es) to listen on;&lt;br /&gt;                                       # comma-separated list of addresses;&lt;br /&gt;                                       # defaults to 'localhost', '*' = all&lt;br /&gt;                                       # (change requires restart)&lt;br /&gt;port = 5432                             # (change requires restart)&lt;/pre&gt;
&lt;h4&gt;Authentification des clients (&lt;em&gt;pg_hba.conf&lt;/em&gt;)&lt;/h4&gt;
&lt;p&gt;Le fichier&lt;em&gt; pg_hba.conf&lt;/em&gt; configure les autorisations pour les bases du cluster.&lt;/p&gt;
&lt;p&gt;Chaque ligne précise une règle aidant à décider si l'utilisateur est habilité à se connecter ou non.&lt;/p&gt;
&lt;p&gt;Le fichier est lu dans l'ordre par postgres, et, dès qu'une ligne est rencontrée qui correspond au cas testé, la lecture s'arrête. Cela signifie que l'ordre des lignes est important.&lt;/p&gt;
&lt;p&gt;Sur chaque ligne est précisé le type de connexion, un nom de base de données, un nom d'utilisateur, et la méthode d'authentification.&lt;/p&gt;
&lt;p&gt;Les méthodes d'authentification les plus classiques sont&amp;nbsp;: &lt;em&gt;md5&lt;/em&gt; (par mot de passe crypté), &lt;em&gt;ident&lt;/em&gt; (à partir du nom d'utilisateur du système d'exploitation, non utilisable sous Windows).&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Exemple :&lt;/ins&gt;&lt;/p&gt;
&lt;pre&gt;# connection par socket Unix pour l'administration du serveur&lt;br /&gt;# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD&lt;br /&gt;local   all         postgres                               ident sameuser&lt;br /&gt;&lt;br /&gt;# connection par socket Unix &lt;br /&gt;# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD&lt;br /&gt;local   mabase      tom                                    md5&lt;br /&gt;local   truc        all                                    ident sameuser&lt;br /&gt;&lt;br /&gt;# Connexions locales en Ipv4 :&lt;br /&gt;# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD&lt;br /&gt;host    mabase      tom         127.0.0.1/32          md5&lt;br /&gt;host    truc        all         127.0.0.1/32          md5&lt;br /&gt;&lt;br /&gt;# Connexion distante en Ipv4 :&lt;br /&gt;# TYPE  DATABASE    USER        CIDR-ADDRESS          METHOD&lt;br /&gt;host    mabase      tom         192.168.12.10/32      md5&lt;br /&gt;host    truc        all         192.168.12.10/32      md5&lt;/pre&gt;
&lt;p&gt;La première ligne :&lt;/p&gt;
&lt;pre class=&quot;console-western&quot;&gt;&lt;code&gt;local    all       postgres                       ident sameuser&lt;/code&gt;&lt;/pre&gt;
&lt;p&gt;signifie que, si &lt;em&gt;postgres&lt;/em&gt; reçoit une demande de connexion
sur n'importe quelle base (&lt;em&gt;all&lt;/em&gt;) par socket Unix (&lt;em&gt;local&lt;/em&gt;),
pour l'utilisateur &lt;em&gt;postgres&lt;/em&gt;, alors la méthode d'authentification
utilisée est : &lt;em&gt;ident&lt;/em&gt;. &lt;em&gt;sameuser&lt;/em&gt; signifie que postgres
vérifie que le nom de l'utilisateur Unix propriétaire de la socket
est le même que celui utilisé pour se connecter à la base.&lt;/p&gt;
&lt;p&gt;La ligne suivante :&lt;/p&gt;
&lt;pre class=&quot;console-western&quot;&gt;&lt;code&gt;local    mabase      tom          md5&lt;/code&gt;&lt;/pre&gt;
&lt;p&gt;signifie que, lorsque &lt;em&gt;tom&lt;/em&gt; essaie de se connecter par socket
Unix sur la base &lt;em&gt;mabase&lt;/em&gt;, c'est l'authentification md5 qui est
utilisée.&lt;/p&gt;
&lt;p&gt;La ligne :&lt;/p&gt;
&lt;p class=&quot;console-western&quot;&gt;&lt;code&gt;local&amp;nbsp;&amp;nbsp;
truc &amp;nbsp;&amp;nbsp;       all&amp;nbsp;&amp;nbsp;&amp;nbsp;                                    ident sameuser&lt;/code&gt;&lt;/p&gt;
&lt;p&gt;signifie que lorsque n'importe que n'importe quel utilisateur
essaie de se connecter à la base &lt;em&gt;truc&lt;/em&gt; par socket Unix, c'est
l'authentification &lt;em&gt;ident sameuser&lt;/em&gt; qui est utilisée.&lt;/p&gt;
&lt;p&gt;La ligne :&lt;/p&gt;
&lt;p class=&quot;console-western&quot;&gt;&lt;code&gt;host &amp;nbsp;
mabase&amp;nbsp;&amp;nbsp;       tom&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;         127.0.0.1/32          md5&lt;/code&gt;&lt;/p&gt;
&lt;p&gt;signifie qu'une demande de connexion à partir pour la base
&lt;em&gt;mabase&lt;/em&gt;, par un utilisateur &lt;em&gt;tom&lt;/em&gt;, en local par Ipv4 est
authentifiée par &lt;em&gt;md5&lt;/em&gt;.&lt;/p&gt;
&lt;p&gt;La ligne :&lt;/p&gt;
&lt;p class=&quot;console-western&quot;&gt;&lt;code&gt;host &amp;nbsp;    mabase &amp;nbsp;      tom&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;         192.168.12.10/32      md5&lt;/code&gt;&lt;/p&gt;
&lt;p&gt;signifie qu'une demande de connexion de l'utilisateur &lt;em&gt;tom&lt;/em&gt;
sur &lt;em&gt;mabase&lt;/em&gt;, à partir de l'adresse 192.168.12.10
est authentifiée par &lt;em&gt;md5&lt;/em&gt;.&amp;nbsp;&lt;/p&gt;
&lt;p&gt;On voit donc que &lt;em&gt;tom&lt;/em&gt;
est autorisé à se connecter sur la base &lt;em&gt;mabase&lt;/em&gt;,
soit par socket Unix, soit par Ipv4 en local, soit par Ipv4 à partir
de : 192.168.12.10.&lt;/p&gt;
&lt;p&gt;Les autres utilisateurs (à part l'utilisateur
postgres) ne peuvent se connecter que sur la base &lt;em&gt;truc&lt;/em&gt;.&lt;/p&gt;
&lt;p&gt;&lt;em&gt;Tom&lt;/em&gt; peut également se connecter sur la base &lt;em&gt;truc&lt;/em&gt;,
car &lt;em&gt;tom&lt;/em&gt; fait partie de
l'ensemble des utilisateurs (all).&lt;/p&gt;
&lt;br /&gt;&lt;br /&gt;&lt;p&gt;&lt;ins&gt;NB :&lt;/ins&gt; CIDR est une façon de noter les ensembles d'adresses IP, avec le chiffre derrière le '/' indiquant la taille du masque en bits  (ainsi un réseau de classe A est en /8, classe B, 16, classe C, 24, une IP unique /32, et tout le monde&amp;nbsp;: 0.0.0.0/0 ) (voir l'article Wikipedia&amp;nbsp;: &lt;a href=&quot;http://fr.wikipedia.org/wiki/Adresse_IPv4&quot; hreflang=&quot;en&quot;&gt;http://fr.wikipedia.org/wiki/Adresse_IPv4&lt;/a&gt;)&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Remarques :&lt;/ins&gt;
Le fichier configure le cluster, il est donc commun à toutes les bases du cluster&amp;nbsp;: attention à ne pas autoriser un utilisateur sur une base par erreur.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Attention&lt;/strong&gt;, ne surtout pas autoriser d'authentification &lt;em&gt;trust&lt;/em&gt; ni &lt;em&gt;ident&lt;/em&gt; par le réseau, parce que cela signifierait faire entièrement confiance au client...&lt;/p&gt;
&lt;p&gt;Si vous voulez en savoir plus sur l'authentification du client,
allez voir la documentation ici :&lt;/p&gt;
&lt;p&gt;&lt;a hreflang=&quot;fr&quot; href=&quot;http://docs.postgresql.fr/8.3/client-authentication.html&quot;&gt;http://docs.postgresql.fr/8.3/client-authentication.html&lt;/a&gt;&lt;/p&gt;
&lt;h4&gt;Prise en compte des paramètres de configuration&lt;/h4&gt;
&lt;p&gt;Pour que PostgreSQL prenne en compte les modifications de paramètres sans redémarrer le serveur, vous avez les solutions suivantes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;utiliser pg_ctl reload (remplacé par pg_ctlcluster sous Debian)&lt;/li&gt;
&lt;li&gt;envoyer un signal SIGHUP à postgres&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Sous Windows, il est possible d'utiliser un raccourci dans le menu Démarrer («&amp;nbsp;Rechargez la configuration&amp;nbsp;»).&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;&amp;nbsp;: certaines options ne sont prises en compte qu'au démarrage (voir la documentation, les commentaires de postgresql.conf, ou la colonne context de la vue pg_settings)&lt;/p&gt;
&lt;h4&gt;Créer une base&lt;/h4&gt;
&lt;p&gt;Nous allons créer une base mabase sur le cluster, puis faire de &lt;em&gt;tom&lt;/em&gt; le propriétaire de la base (afin qu'il puisse faire ce qu'il veut sur cette base)&lt;/p&gt;
&lt;pre&gt;postgres@flo:/etc/postgresql/8.3/main$ pg_lsclusters&lt;br /&gt;Version Cluster   Port Status Owner    Data directory                     Log file&lt;br /&gt;8.3 main      5432 online postgres /var/lib/postgresql/8.3/main       custom&lt;/pre&gt;
&lt;p&gt;Pour cela, lancez la commande &lt;em&gt;createdb&lt;/em&gt; :&lt;/p&gt;
&lt;p&gt;&lt;code&gt;postgres@flo$ createdb mabase&lt;/code&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: createdb lance en fait la commande CREATE DATABASE pour vous.&lt;/p&gt;
&lt;h4&gt;Créer un rôle et lui donner des droits sur une base&lt;/h4&gt;
&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: les utilisateurs et les groupes sont tous gérés par des rôles.&lt;/p&gt;
&lt;p&gt;En tant qu'utilisateur &lt;em&gt;postgres&lt;/em&gt;, lancez &lt;em&gt;psql&lt;/em&gt; :&lt;/p&gt;
&lt;pre&gt;postgres@flo:/usr/share/doc/postgresql-common$ psql&lt;br /&gt;Bienvenue dans psql 8.3.6, l'interface interactive de PostgreSQL.&lt;br /&gt;&lt;br /&gt;Saisissez:&lt;br /&gt;    \copyright pour les termes de distribution&lt;br /&gt;    \h pour l'aide-mémoire des commandes SQL&lt;br /&gt;    \? pour l'aide-mémoire des commandes psql&lt;br /&gt;    \g ou point-virgule en fin d'instruction pour exécuter la requête&lt;br /&gt;    \q pour quitter&lt;br /&gt;&lt;br /&gt;postgres=#&lt;/pre&gt;
&lt;p&gt;Créez un rôle &lt;em&gt;tom&lt;/em&gt;, avec les droits de login (pour qu'il ait le droit de se connecter au serveur), et le mot de passe&amp;nbsp;: &lt;em&gt;secret&lt;/em&gt;.&lt;/p&gt;
&lt;pre&gt;postgres=# CREATE ROLE tom LOGIN password 'secret';&lt;br /&gt;CREATE ROLE&lt;br /&gt;postgres=#&lt;/pre&gt;
&lt;p&gt;Pour que tom soit le propriétaire de mabase&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;postgres=# ALTER DATABASE mabase OWNER TO tom;&lt;br /&gt;ALTER DATABASE&lt;/pre&gt;
&lt;p&gt;Sortez de psql&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;postgres=# \q&lt;br /&gt;postgres@flo:/usr/share/doc/postgresql-common$&lt;/pre&gt;
&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: les commandes &lt;em&gt;CREATE DATABASE&lt;/em&gt; et &lt;em&gt;CREATE ROLE&lt;/em&gt; (création de base et d'utilisateur) sont globales au cluster. Il est donc possible de les exécuter de n'importe quelle base.&lt;/p&gt;
&lt;p&gt;Maintenant, l'utilisateur &lt;em&gt;tom&lt;/em&gt; peut se connecter sur &lt;em&gt;mabase&lt;/em&gt;&amp;nbsp;:&amp;nbsp;
&lt;/p&gt;
&lt;p&gt;Maintenant, l'utilisateur &lt;em&gt;tom&lt;/em&gt; peut se connecter sur &lt;em&gt;mabase&lt;/em&gt;
: lancez psql, en précisant que vous vous connectez en tant que &lt;em&gt;tom&lt;/em&gt;
:&lt;/p&gt;
&lt;pre&gt;flo@flo:~$ psql -U tom mabase&lt;br /&gt;Mot de passe pour l'utilisateur tom :&lt;br /&gt;&lt;br /&gt;Bienvenue dans psql 8.3.6, l'interface interactive de PostgreSQL.&lt;br /&gt; &lt;br /&gt;Saisissez:&lt;br /&gt;    \copyright pour les termes de distribution&lt;br /&gt;    \h pour l'aide-mémoire des commandes SQL&lt;br /&gt;    \? pour l'aide-mémoire des commandes psql&lt;br /&gt;    \g ou point-virgule en fin d'instruction pour exécuter la requête&lt;br /&gt;    \q pour quitter&lt;br /&gt;&lt;br /&gt;mabase=&amp;gt;&lt;/pre&gt;
&lt;p&gt;&lt;ins&gt;Remarque&lt;/ins&gt;&amp;nbsp;: il faut préciser la base! Sinon psql cherchera à se connecter à une base &quot;tom&quot;.&lt;/p&gt;
&lt;p&gt;Si vous souhaitez donner le droit à tom de créer des bases:&lt;/p&gt;
&lt;pre&gt;postgres=# ALTER ROLE tom CREATEDB;&lt;br /&gt;ALTER ROLE&lt;br /&gt;postgres=#&lt;/pre&gt;Pour les détails sur les droits, lisez le chapitre correspondant de la documentation :
&lt;p&gt;&lt;a href=&quot;http://docs.postgresqlfr.org/8.3/privileges.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/8.3/privileges.html&lt;/a&gt;&lt;/p&gt;
&lt;h3&gt;Super-utilisateur&lt;/h3&gt;
&lt;p&gt;Le super-utilisateur est un utilisateur qui dispose de droits spéciaux (certaines fonctions ne sont utilisables que par un super-utilisateur). Les super-utilisateurs passent au travers des vérifications de droits.&lt;/p&gt;
&lt;p&gt;Si vous avez installé PostgreSQL en tant que root, classiquement vous avez un super-utilisateur &lt;em&gt;postgres&lt;/em&gt;.&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Attention!&lt;/ins&gt; Le super-utilisateur disposant de tous les droits, éviter de l'utiliser si ce n'est pas nécessaire, afin de limiter le risque d'erreur.&lt;/p&gt;
&lt;h3&gt;Je ne peux pas me connecter à la base? Que faire?&lt;/h3&gt;
&lt;p&gt;Que vérifier?&lt;/p&gt;
&lt;p&gt;D'abord&amp;nbsp;: lisez le message d'erreur! (ça peut suffire à trouver la solution à partir d'un bon moteur de recherche, des archives des mailing-lists ou de forums...)&lt;/p&gt;
&lt;p&gt;Consultez la log (voir chapitre suivant)&lt;/p&gt;
&lt;p&gt;Cherchez quels sont les clusters présents&amp;nbsp;? (sous Debian&amp;nbsp;: pg_lsclusters...)&lt;/p&gt;
&lt;p&gt;Vérifiez le fichier postgresql.conf (le paramètre listen_addresses est-il correct? Le port est-il celui souhaité? Le client essaie-t-il de se connecter sur le bon  port?)&lt;/p&gt;
&lt;p&gt;Vérifiez le fichier pg_hba.conf&lt;/p&gt;
&lt;p&gt;Vérifiez le propriétaire de la base&lt;/p&gt;
&lt;p&gt;Le rôle que vous utilisez a-t-il le droit de se loguer (autorisation &lt;em&gt;LOGIN&lt;/em&gt;) ?&lt;/p&gt;
&lt;p&gt;Le rôle utilisé a-t-il le droit de se connecter à la base de données (sinon utilisez GRANT CONNECT on mabase ...)&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: vous obtenez la liste des bases d'un cluster avec la commande &lt;em&gt;\l&lt;/em&gt; dans &lt;em&gt;psql&lt;/em&gt;&lt;/p&gt;
&lt;h3&gt;Où se trouve la log&amp;nbsp;? Comment la configurer?&lt;/h3&gt;
&lt;p&gt;La configuration de la log est effectuée par le fichier &lt;em&gt;postgresql.conf&lt;/em&gt; (voir les paramètres &lt;em&gt;log_destination&lt;/em&gt; et &lt;em&gt;log_directory&lt;/em&gt;)&lt;/p&gt;
&lt;p&gt;Dans une installation standard de PostgreSQL, la log se trouve dans un répertoire &lt;em&gt;pg_log&lt;/em&gt; sous le répertoire &lt;em&gt;PGDATA&lt;/em&gt;  (répertoire du cluster).&lt;/p&gt;
&lt;p&gt;Par exemple, sous Windows&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;C:\Program Files\PostgreSQL\8.3\data\pg_log&lt;/pre&gt;
&lt;p&gt;En fonction de votre utilisation (production, test, développement), vous pourrez régler les paramètres de la log. Par exemple, loguer tous les ordres SQL peut être fort utile en développement (surtout lorsque vous utilisez un ORM).&lt;/p&gt;
&lt;p&gt;Pensez à recharger la configuration après modification. &lt;/p&gt;
&lt;h3&gt;Arrêter/démarrer le serveur PostgreSQL&lt;/h3&gt;
&lt;p&gt;Sous Windows&amp;nbsp;: vous pouvez utiliser &quot;stoppez le service&quot; et &quot;démarrez le service&quot; dans le menu démarrer, ou bien dans un terminal, utiliser &lt;em&gt;pg_ctl&lt;/em&gt;&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;C:\Program Files\PostgreSQL\8.3\bin&amp;gt;pg_ctl start -D &quot;C:\Program Files\PostgreSQL&lt;br /&gt;\8.3\data&quot;&lt;br /&gt;server starting&lt;/pre&gt;
&lt;p&gt;Sous Linux&amp;nbsp;: c'est la commande &lt;em&gt;pg_ctl&lt;/em&gt;  (sous Debian&amp;nbsp;: pg_ctlcluster ou sous Redhat&amp;nbsp;: service postresql start)&lt;/p&gt;
&lt;h2&gt;Outils&lt;/h2&gt;
&lt;h3&gt;Outil graphique&amp;nbsp;: pgAdmin3&lt;/h3&gt;
&lt;p&gt;&lt;em&gt;PgAdmin3&lt;/em&gt; est sans doute l'outil le plus populaire pour développer et administrer PostgreSQL.
&lt;a href=&quot;http://www.pgadmin.org/?lang=fr_FR&quot; hreflang=&quot;fr&quot;&gt;http://www.pgadmin.org/?lang=fr_FR&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Voici un apercu de ce à quoi il ressemble. Pour le reste, vous pourrez vous reporter à sa documentation.&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://www.pgadmin.org/images/screenshots/pgadmin3_linux.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;
&lt;h3&gt;psql (outil en ligne de commande)&lt;/h3&gt;
&lt;p&gt;Psql permet d'exécuter des ordres SQL sur les bases, et également des commandes de gestion et d'administration.
Pour lancer psql&amp;nbsp;:&lt;/p&gt;
&lt;h4&gt;Windows&amp;nbsp;:&lt;/h4&gt;
&lt;p&gt;A partir du menu démarrer (gère tout seul le changement d'utilisateur)&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Remarque&lt;/ins&gt;&amp;nbsp;: à la première connexion, il est probable que vous ayez ce message d'avertissement&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;Warning: Console code page (437) differs from Windows code page (1252)&lt;br /&gt;         8-bit characters might not work correctly. See psql reference&lt;br /&gt;         page &quot;Notes for Windows users&quot; for details.&lt;br /&gt;&lt;br /&gt;postgres=#&lt;/pre&gt;
&lt;p&gt;Vous devez effectuer 2 opérations  pour régler le problème&amp;nbsp;:
1. changez le code page de Windows&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Si vous lancez psql à partir d'une fenêtre cmd, utilisez la commande&amp;nbsp;: cmd.exe /c chcp 1252  (pour la France) avant de lancer psql.&lt;/li&gt;
&lt;li&gt;Si vous lancez psql à partir du menu de Windows, modifiez les propriétés de l'élément de menu et ajoutez l'encodage. Exemple de commande&amp;nbsp;: &quot;C:\Program Files\PostgreSQL\8.3\bin\psql.bat&quot;  -h localhost -p 5432 postgres &quot;postgres&quot; WIN1252&lt;/li&gt;
&lt;/ul&gt;
&lt;pre&gt;2.changez la police de la console pour &lt;em&gt;Lucida Console&lt;/em&gt;&lt;/pre&gt;
&lt;p&gt;&lt;ins&gt;NB&lt;/ins&gt;&amp;nbsp;: La documentation de PostgreSQL se trouve également à partir du menu démarrer, et la documentation de psql est incluse.&lt;/p&gt;
&lt;h4&gt;Sous Linux&amp;nbsp;:&lt;/h4&gt;
&lt;pre&gt;psql &lt;em&gt;mabase&lt;/em&gt;&lt;/pre&gt;
&lt;h4&gt;Remarques&amp;nbsp;:&lt;/h4&gt;
&lt;p&gt;Si vous ne précisez pas le nom de la base, psql essaie de se connecter à la base de même nom que l'utilisateur. Si vous ne précisez pas le nom d'utilisateur, c'est le nom de l'utilisateur du système qui est utilisé.&lt;/p&gt;
&lt;h4&gt;Commandes&lt;/h4&gt;
&lt;p&gt;Commandes psql à connaître absolument&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;\? pour l'aide des commandes psql (si vous deviez n'en retenir qu'une)&lt;/li&gt;
&lt;li&gt;\q quitter&lt;/li&gt;
&lt;li&gt;\h aide des commandes sql&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;autres commandes intéressantes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;\l liste des bases de données&lt;/li&gt;
&lt;li&gt;\c se connecter à une base&lt;/li&gt;
&lt;li&gt;\d &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2009/06/20/nom&quot; title=&quot;nom&quot;&gt;nom&lt;/a&gt; pour la description d'une table, d'un index, séquence, vue&lt;/li&gt;
&lt;li&gt;\d liste des relations (tables, vues et séquences)&lt;/li&gt;
&lt;li&gt;\i nom_fichier  exécuter un fichier de commandes SQL&lt;/li&gt;
&lt;/ul&gt;
&lt;h4&gt;phpPgAdmin&lt;/h4&gt;
&lt;p&gt;C'est un outil d'administration web pour PostgreSQL
&lt;a href=&quot;http://phppgadmin.sourceforge.net/&quot; hreflang=&quot;en&quot;&gt;http://phppgadmin.sourceforge.net/&lt;/a&gt;&lt;/p&gt;
&lt;h4&gt;Copy&lt;/h4&gt;
&lt;p&gt;&lt;em&gt;copy&lt;/em&gt; est un outil pour le chargement et déchargement de données en masse. Ce n'est pas une commande standard SQL.
&lt;a href=&quot;http://docs.postgresqlfr.org/8.3/sql-copy.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/8.3/sql-copy.html&lt;/a&gt;&lt;/p&gt;
&lt;h2&gt;Développement&lt;/h2&gt;
&lt;h3&gt;SQL&lt;/h3&gt;
&lt;p&gt;Plusieurs outils permettent d'exécuter du code SQL de façon  interactive&amp;nbsp;: psql, pgAdmin (voir les sections qui leur sont consacrées).
Vous pouvez également utiliser un outil tiers, si vous préférez...&lt;/p&gt;
&lt;h3&gt;Procédures stockées&lt;/h3&gt;
&lt;p&gt;L'intérêt des procédures stockées est de pouvoir exécuter des fonctions directement sur le serveur. Les procédures stockées sont efficaces et rapides, et permettent de traiter des données, soit pour consultation par un client, soit en mise à jour.
PostgreSQL vous donne le choix du langage de procédures stockées.
Vous pouvez utiliser&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;PL/pgsql (proche de SQL, facile à utiliser, utilisable pour les triggers)&lt;/li&gt;
&lt;li&gt;PL/Tcl&lt;/li&gt;
&lt;li&gt;PL/Perl (pratique lorsqu'il y a des traitements de chaînes de caractères à effectuer)&lt;/li&gt;
&lt;li&gt;PL/Python&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;D'autres langages ne sont pas inclus dans la distribution principale&amp;nbsp;:
PL/Java, PL/PHP, PL/R,  PL/Ruby, PL/Scheme, PL/sh
Vous pouvez aussi en définir un vous-même... mais c'est beaucoup de travail !&lt;/p&gt;
&lt;h3&gt;JDBC&lt;/h3&gt;
&lt;p&gt;Le pilote JDBC pour PostgreSQL est un pilote natif (il est entièrement écrit en Java)
Le pilote JDBC est disponible ici (ainsi que la documentation)
&lt;a href=&quot;http://jdbc.postgresql.org/index.html&quot; hreflang=&quot;en&quot;&gt;http://jdbc.postgresql.org/index.html&lt;/a&gt;
Ensuite vous avez juste à utiliser le .jar de manière classique (le mettre dans le CLASSPATH de votre application)
&lt;ins&gt;NB :&lt;/ins&gt; syntaxe de l'URL&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;String url=&quot;jdbc:postgresql:test_conn&quot;;&lt;/pre&gt;
&lt;p&gt;L'URL a une de ces formes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;jdbc:postgresql:database&lt;/li&gt;
&lt;li&gt;jdbc:postgresql://host/database&lt;/li&gt;
&lt;li&gt;jdbc:postgresql://host:port/database&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Allez voir la &lt;a href=&quot;http://jdbc.postgresql.org/documentation/83/connect.html&quot; hreflang=&quot;fr&quot;&gt;documentation&lt;/a&gt;  pour plus de détails.&lt;/p&gt;
&lt;h3&gt;Autres (PERL, Python, .Net, ODBC, Tcl...)&lt;/h3&gt;
&lt;p&gt;Voir ici&amp;nbsp;: &lt;a href=&quot;http://docs.postgresqlfr.org/8.3/external-projects.html&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresqlfr.org/8.3/external-projects.html&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;.&lt;/p&gt;
&lt;h3&gt;A savoir&amp;nbsp;!&lt;/h3&gt;
&lt;h4&gt;Majuscules/minuscules&lt;/h4&gt;
&lt;p&gt;Le nom des objets dans les ordres SQL est converti automatiquement en minuscules.&lt;/p&gt;
&lt;p&gt;Par exemple, si vous exécutez&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;SELECT Id, Valeur FROM Matable;&lt;/pre&gt;
&lt;p&gt;l'ordre réellement exécuté sera&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;SELECT id, valeur FROM matable;&lt;/pre&gt;
&lt;p&gt;&lt;br /&gt;
exemple&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;mabase=&amp;gt; SELECT Id, Valeur FROM Matable;&lt;br /&gt; id | valeur&lt;br /&gt; ---+-------&lt;br /&gt;  1 | azerty&lt;br /&gt;(1 ligne)&lt;br /&gt;&lt;br /&gt;mabase=&amp;gt;&lt;/pre&gt;
&lt;p&gt;Si vous souhaitez utiliser la casse dans les noms d'objets (ce qui n'est pas conseillé en général), utilisez les guillemets.&lt;/p&gt;
&lt;p&gt;Par exemple&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;SELECT &quot;Id&quot;, &quot;Valeur&quot; FROM &quot;Matable&quot;;&lt;/pre&gt;
&lt;p&gt;Remarquez que ce comportement est différent d'autres moteurs, qui soit passent tous les noms en majuscule, soit conservent la casse. (Le comportement standard pour un SGBD est d'ignorer la casse, ainsi il est déconseillé généralement d'utiliser des noms d'objet avec des casses différentes&amp;nbsp;: si vous utilisez toujours des minuscules, le comportement sera toujours le même, quel que soit le SGBD)&lt;/p&gt;
&lt;h4&gt;Erreurs et transactions&lt;/h4&gt;
&lt;p&gt;Avec PostgreSQL, lorsqu'une erreur se produit dans une transaction, il n'est pas possible de l'ignorer. L'erreur doit être gérée. Sinon tous les ordres suivants sont également en erreur.
De plus, à la fin de la transaction, il n'est pas possible de commiter. L'ordre &lt;em&gt;COMMIT&lt;/em&gt; provoque en réalité un &lt;em&gt;ROLLBACK&lt;/em&gt;. &lt;/p&gt;
&lt;p&gt;Exemple&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;mabase=&amp;gt; begin;&lt;br /&gt;BEGIN&lt;br /&gt;mabase=&amp;gt; insert into matable(valeur, nb) values ('c',2);&lt;br /&gt;INSERT 0 1&lt;br /&gt;mabase=&amp;gt; insert into matable(valeur, nb) values ('c',2);&lt;br /&gt;ERREUR:  la valeur d'une clé dupliquée rompt la contrainte unique « u_matable »&lt;br /&gt;mabase=&amp;gt; insert into matable(valeur, nb) values ('d',2);&lt;br /&gt;ERREUR:  la transaction est annulée, les commandes sont ignorées jusqu'à la fin du bloc&lt;br /&gt;de la transaction&lt;br /&gt;mabase=&amp;gt; commit;&lt;br /&gt;ROLLBACK&lt;br /&gt;mabase=&amp;gt; select valeur, nb from matable;&lt;br /&gt; valeur | nb&lt;br /&gt; -------+---&lt;br /&gt; a      |  2&lt;br /&gt; b      |  2&lt;br /&gt;(2 lignes)&lt;br /&gt;&lt;br /&gt;mabase=&amp;gt;&lt;/pre&gt;
&lt;h4&gt;Savepoints&lt;/h4&gt;
&lt;p&gt;Les savepoints ne sont pas spécifiques à PostgreSQL. Mais c'est une fonctionalité SQL trop peu connue, et pourtant extrêmement utile, dans le cas de traitements lourds.&lt;/p&gt;
&lt;p&gt;Un savepoint sert à marquer un point de reprise dans un traitement. Lorsque vous avez à effectuer un traitement long (par exemple lorqu'un programme doit mettre à jour tout un ensemble de données les unes après les autres), vous pouvez mettre des savepoints à intervalles réguliers. Lorsqu'une erreur se produit, vous faites en sorte que le programme effectue un ROLLBACK TO SAVEPOINT vers un point de sauvegarde où l'état de vos données est cohérent (généralement le dernier point de sauvegarde). Ensuite vous pouvez annuler le traitement (après par exemple pris la précaution de loguer les événements...)&lt;/p&gt;
&lt;p&gt;L'intérêt est que seul les traitements effectués après le point de sauvegarde sont perdus. Cela évite à votre programme de faire un ROLLBACK sur l'ensemble du traitement! Votre programme peut ainsi effectuer des traitements partiellement.&lt;/p&gt;
&lt;h4&gt;DDL dans les transactions!&lt;/h4&gt;
&lt;p&gt;Une des fonctionnalités les plus épatantes de PostgreSQL est la possibilité d'inclure des ordres DDL dans des transactions.&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Exemple :&lt;/ins&gt;
Dans une transaction, on crée une table &quot;test&quot;, puis une table &quot;matable&quot;. La création de &quot;matable&quot; échoue (la table existe déjà). On fait un rollback sur la transaction&amp;nbsp;: la table &quot;test&quot; n'existe pas.&lt;/p&gt;
&lt;pre&gt;mabase=&amp;gt; BEGIN;&lt;br /&gt;BEGIN&lt;br /&gt;mabase=&amp;gt; CREATE TABLE test (&lt;br /&gt;    id serial NOT NULL,&lt;br /&gt;    valeur character varying(20) NOT NULL);&lt;br /&gt;NOTICE:  CREATE TABLE créera des séquences implicites « test_id_seq » pour la colonne serial « test.id »&lt;br /&gt;CREATE TABLE&lt;br /&gt;mabase=&amp;gt; ALTER TABLE test ADD CONSTRAINT pk_test PRIMARY KEY (id);&lt;br /&gt;NOTICE:  ALTER TABLE / ADD PRIMARY KEY créera un index implicite « pk_test » pour la table « test »&lt;br /&gt;ALTER TABLE&lt;br /&gt;mabase=&amp;gt; CREATE TABLE matable (&lt;br /&gt;    id serial NOT NULL,&lt;br /&gt;    valeur character varying(20) NOT NULL);&lt;br /&gt;NOTICE:  CREATE TABLE créera des séquences implicites « matable_id_seq1 » pour la colonne serial « matable.id »&lt;br /&gt;ERREUR:  la relation « matable » existe déjà&lt;br /&gt;mabase=&amp;gt; ROLLBACK;&lt;br /&gt;ROLLBACK&lt;br /&gt;mabase=&amp;gt; \d&lt;br /&gt;                 Liste des relations&lt;br /&gt; Schéma |       Nom        |   Type   | Propriétaire&lt;br /&gt;+&lt;del&gt;+&lt;/del&gt;+--&lt;br /&gt; public | matable          | table    | tom&lt;br /&gt; public | matable_id_seq   | séquence | tom&lt;br /&gt; public | table_flo        | table    | flo&lt;br /&gt; public | table_flo_id_seq | séquence | flo&lt;br /&gt;(4 lignes)&lt;br /&gt;&lt;br /&gt;mabase=&amp;gt;&lt;/pre&gt;
&lt;p&gt;&lt;ins&gt;Intérêt :&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;On peut faire tout un ensemble de modification de façon atomique (par exemple la migration d'un schéma pour l'évolution d'une application). C'est un soulagement pour le DBA qui devra passer votre script de migration, de nuit, de savoir qu'il n'aura pas à restaurer la base en cas d'échec.&lt;/p&gt;
&lt;h4&gt;Count(*)&lt;/h4&gt;
&lt;p&gt;En raison de l'implémentation actuelle du MVCC, count(*) force le parcours complet de la table, ce qui est donc lent.&lt;/p&gt;
&lt;h2&gt;Et après?&lt;/h2&gt;
&lt;h3&gt;Lire la documentation&amp;nbsp;:&lt;/h3&gt;
&lt;p&gt;Lien vers la documentation en Français&amp;nbsp;:  &lt;a href=&quot;http://docs.postgresql.fr/&quot; hreflang=&quot;fr&quot;&gt;http://docs.postgresql.fr/&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;En anglais&amp;nbsp;: &lt;a href=&quot;http://www.postgresql.org/docs/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/docs/&lt;/a&gt;&lt;/p&gt;
&lt;h3&gt;Sites utiles&amp;nbsp;:&lt;/h3&gt;
&lt;p&gt;&lt;a href=&quot;http://www.postgresql.org/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/&lt;/a&gt;&amp;nbsp;: site officiel&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;http://www.postgresql.fr/&quot; hreflang=&quot;fr&quot;&gt;http://www.postgresql.fr/&lt;/a&gt;&amp;nbsp;: site de la communauté francophone.&lt;/p&gt;
&lt;h3&gt;Pour trouver de l'aide complémentaire&amp;nbsp;:&lt;/h3&gt;
&lt;h4&gt;Listes de diffusion&amp;nbsp;:&lt;/h4&gt;
&lt;p&gt;La liste francophone&amp;nbsp;:
&lt;a href=&quot;http://archives.postgresql.org/pgsql-fr-generale/&quot; hreflang=&quot;fr&quot;&gt;http://archives.postgresql.org/pgsql-fr-generale/&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Les autres&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/community/lists/&quot; hreflang=&quot;en&quot;&gt;http://www.postgresql.org/community/lists/&lt;/a&gt;
(attention les listes &quot;developer&quot; sont pour les développeurs DE PostgreSQL!)&lt;/p&gt;
&lt;h4&gt;Forum de la communauté francophone&amp;nbsp;:&lt;/h4&gt;
&lt;p&gt;&lt;a href=&quot;http://forums.postgresql.fr/&quot; hreflang=&quot;fr&quot;&gt;http://forums.postgresql.fr/&lt;/a&gt;&lt;/p&gt;
&lt;h4&gt;Remarque&amp;nbsp;: comment poser vos questions?&lt;/h4&gt;
&lt;p&gt;Si vous avez un problème, pensez à ceux qui vont tenter de vous aider. Evitez de leur faire perdre du temps (ça vous en fera gagner à vous aussi !)&amp;nbsp;: donnez le maximum d'informations utiles pour celui qui va vous aider. Soyez le plus clair possible. Pensez à préciser au minimum quelle est la version de PostgreSQL utilisée, quel est le système d'exploitation. Si vous n'arrivez pas à vous connecter, précisez si le client est sur la même machine que le serveur. Recopiez les messages d'erreurs, consultez la log...&lt;/p&gt;
&lt;p&gt;Consultez le très intéressant article de S. Raymon sur &quot;la bonne manière de poser les questions&quot;&amp;nbsp;:
&lt;a href=&quot;http://www.gnurou.org/writing/smartquestionsfr&quot; hreflang=&quot;fr&quot;&gt;http://www.gnurou.org/writing/smartquestionsfr&lt;/a&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Postgresql et l'authentification Apache</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2009/06/11/Postgresql-et-l-authentification-Apache" rel="alternate" type="text/html"
    title="Postgresql et l'authentification Apache" />
    <id>urn:md5:ff0006281eb770986bfb22dc415342c8</id>
    <published>2009-06-16T23:25:00+01:00</published>
    <updated>2010-07-20T21:51:31+01:00</updated>
    <author><name>pascal62fr</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;p&gt;&lt;strong&gt;Postgresql et l'authentification Apache&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Comment utiliser Postgresql pour l'authentification Apache&lt;/p&gt;
&lt;p&gt;Apache permet de protéger, à l'aide d'un login et d'un mot de passe, l'accès à un répertoire ou à un fichier, par utilisateur ou groupe d'utilisateurs. Apache permet d'utiliser plusieurs méthodes pour gérer les droits des utilisateurs. L'administrateur Web a à sa disposition un script Apache, «&amp;nbsp;htpasswd&amp;nbsp;», et des fichiers de configuration de type texte. Il peut utiliser un annuaire LDAP ou une base de données Postgresql.
L'utilisation de Postgresql permet de simplifier la programmation. La gestion des droits d'accès dans le site Web se fait en modifiant les tables, users et groups. Pour mettre en place cette technique il faut configurer Apache et Postgresql, cette documentation explique comment faire.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Préalable&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Considérons que vous avez un serveur Web Apache et une base de données Postgresql fonctionnels. Si vous souhaitez modifier dynamiquement les droits Apache, il faut que vous sachiez vous connecter à Postgresql de Apache/Web/PHP, par exemple. Les fichiers de configuration donnés en exemple, sont ceux utilisés sur une distribution Linux RedHat Enterprise.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Installation et configuration&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Vous avez donc installé et configuré un serveur web Apache et une base de données Postgresql.&lt;/p&gt;
&lt;p&gt;Il vous reste à:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Ajouter les tables «&amp;nbsp;users&amp;nbsp;» et «&amp;nbsp;groups&amp;nbsp;» dans une base de données Postgresql.&lt;/li&gt;
&lt;li&gt;Installer le module Apache mod_auth_pgsql.&lt;/li&gt;
&lt;li&gt;Configurer le fichier Apache /etc/httpd/conf.d/auth_pgsql.conf&lt;/li&gt;
&lt;li&gt;Ajouter des fichiers .htaccess dans les répertoires à protéger.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;La suite décrit chacune de ces tâches.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Descriptif des tables users et groups Postgresql&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Il faut ajouter à votre base de données Postgresql, les tables «&amp;nbsp;users&amp;nbsp;» et «&amp;nbsp;groups&amp;nbsp;», si vous conservez les noms standards des tables.
Les tables users et groups doivent être conformes au format attendu par Apache.
De plus les tables «&amp;nbsp;users&amp;nbsp;» et «&amp;nbsp;groups&amp;nbsp;» seront lu fréquemment par Apache, elles n'ont pas pour vocation de gérer des données des utilisateurs, hors le login, le mot de passe et l'appartenance à un ou plusieurs groupes d'utilisateurs. Il y a une clé étrangère dans la table «&amp;nbsp;users&amp;nbsp;» proposée. Elle permet des jointures avec une table qui gère les identités des utilisateurs.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Exemple de tables users et groups&lt;/strong&gt;&lt;/p&gt;
CREATE TABLE users&lt;br /&gt;
(&lt;br /&gt;
user_name character varying(64) NOT NULL,&lt;br /&gt;
user_passwd character varying(32) NOT NULL,&lt;br /&gt;
&quot;uIdIdentite&quot; integer NOT NULL,&lt;br /&gt;
CONSTRAINT users_pkey PRIMARY KEY (user_name),&lt;br /&gt;
CONSTRAINT &quot;idIdentite&quot; FOREIGN KEY (&quot;uIdIdentite&quot;)&lt;br /&gt;
REFERENCES &quot;TIdentite&quot; (&quot;IdIdentite&quot;) MATCH SIMPLE&lt;br /&gt;
ON UPDATE NO ACTION ON DELETE NO ACTION&lt;br /&gt;
)&lt;br /&gt;
WITH (OIDS=FALSE);&lt;br /&gt;
ALTER TABLE users OWNER TO basecnl;&lt;br /&gt;
&lt;br /&gt;
CREATE TABLE groups&lt;br /&gt;
(&lt;br /&gt;
user_name character varying(64) NOT NULL,&lt;br /&gt;
user_group character varying(20) NOT NULL,&lt;br /&gt;
CONSTRAINT groups_pkey PRIMARY KEY (user_name, user_group),&lt;br /&gt;
CONSTRAINT groups_user_name_fkey FOREIGN KEY (user_name)&lt;br /&gt;
REFERENCES users (user_name) MATCH FULL&lt;br /&gt;
ON UPDATE CASCADE ON DELETE CASCADE&lt;br /&gt;
)&lt;br /&gt;
WITH (OIDS=FALSE);&lt;br /&gt;
ALTER TABLE groups OWNER TO basecnl;&lt;br /&gt;
&lt;p&gt;La modification de users et groups, à l'aide de pgadmin3 par exemple, permet de gérer finement les droits d'accès au site Web. Vous pouvez aussi le faire dynamiquement par programmation.&lt;/p&gt;
&lt;p&gt;La base de données et les tables qu'Apache utilise pour l'authentification, sont à définir dans /etc/httpd/conf.d/auth_pgsql.conf.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Installer le module Apache mod_auth_pgsql&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;La façon de faire dépend de la distribution linux, il faut installer mod_auth_pgsql.so.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Configuration de Apache 2 pour Postgresql&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Nous utiliserons le module Apache2, mod_auth_pgsql, avec une authentification type: mod_auth_basic&quot;.&lt;/p&gt;
&lt;p&gt;/usr/lib64/httpd/modules/mod_auth_pgsql.so&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Exemple de fichier /etc/httpd/conf.d/auth_pgsql.conf&lt;/strong&gt; &lt;/p&gt;
&lt;p&gt;Dans le fichier /etc/httpd/conf.d/auth_pgsql.conf, vous reconnaîtrez le nom des tables et des champs que vous avez défini dans Postgresql.&lt;/p&gt;
LoadModule auth_pgsql_module modules/mod_auth_pgsql.so&lt;br /&gt;
&amp;lt;Directory /var/www&amp;gt; &lt;br /&gt;
&amp;nbsp;&amp;nbsp; AuthName &quot;PostgreSQL group authenticated zone&quot; &lt;br /&gt;
&amp;nbsp;&amp;nbsp; AuthType Basic &lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_database basecnl &lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_pwd_table users &lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_uid_field user_name &lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_pwd_field user_passwd&lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_grp_table groups &lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_grp_user_field user_name &lt;br /&gt;
&amp;nbsp;&amp;nbsp; Auth_PG_grp_group_field user_group&amp;nbsp;&lt;br /&gt;
&amp;lt;/Directory&amp;gt; &lt;br /&gt;
&lt;p&gt;&lt;strong&gt;Configuration de Apache – .htaccess des répertoires Web&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Les fichiers .htaccess sont des fichiers de configuration d'Apache, permettant de définir des règles dans un répertoire et dans tous ses sous-répertoires (qui n'ont pas de tel fichier à l'intérieur).&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Exemple de fichier .htaccess&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Ce fichier autorise l'accès au répertoire pour les utilisateurs du groupe «&amp;nbsp;correspondant&amp;nbsp;»&lt;/p&gt;
AuthName &quot;Acces restreint aux correspondants&amp;nbsp;&quot; &lt;br /&gt;
AuthType basic &lt;br /&gt;
#AuthBasicAuthoritative off &lt;br /&gt;
Auth_PG_authoritative on &lt;br /&gt;
Auth_PG_host localhost &lt;br /&gt;
Auth_PG_port xxxx &lt;br /&gt;
Auth_PG_user xxxx &lt;br /&gt;
Auth_PG_database xxxx &lt;br /&gt;
#Auth_PG_pwd xxxxxxxx &lt;br /&gt;
Auth_PG_pwd_table &quot;users&quot; &lt;br /&gt;
Auth_PG_uid_field user_name &lt;br /&gt;
Auth_PG_pwd_field user_passwd &lt;br /&gt;
Auth_PG_grp_table &quot;groups&quot; &lt;br /&gt;
Auth_PG_grp_user_field user_name &lt;br /&gt;
Auth_PG_grp_group_field user_group&lt;br /&gt;
Auth_PG_grp_whereclause &quot; and user_group = 'correspondant' &quot; &lt;br /&gt;
Auth_PG_encrypted off &lt;br /&gt;
&amp;lt;LIMIT GET POST&amp;gt; &lt;br /&gt;
require valid-group &lt;br /&gt;
&amp;lt;/LIMIT&amp;gt; &lt;br /&gt;
&lt;p&gt;«&amp;nbsp;AuthBasicAuthoritative off&amp;nbsp;» et  «&amp;nbsp;Auth_PG_pwd xxxxxxxx&amp;nbsp;» sont en commentaire. Dans certaines configurations, il faut enlever les commentaires.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Descriptif des champs&lt;/strong&gt;&lt;/p&gt;
Auth_PG_host&amp;nbsp;: Nom ou adresse IP du serveur Postgresql&lt;br /&gt;
Auth_PG_port&amp;nbsp;: Port utilisé, par default 5432&lt;br /&gt;
Auth_PG_user&amp;nbsp;: Nom de l'utilisateur Postgresql&lt;br /&gt;
Auth_PG_pwd&amp;nbsp;: Mot de passe de l'utilisateur&lt;br /&gt;
Auth_PG_database&amp;nbsp;: Nom de la base de données&lt;br /&gt;
Auth_PG_pwd_table&amp;nbsp;: Nom de la table ou sont stockés les utilisateurs&lt;br /&gt;
Auth_PG_uid_field&amp;nbsp;: Nom du champ qui contient le Login de l'utilisateur&lt;br /&gt;
Auth_PG_pwd_field&amp;nbsp;: Nom du champ qui contient les mots de passe&lt;br /&gt;
Auth_PG_encrypted&amp;nbsp;: Si off les mots de passe sont stockés en clair dans la table&lt;br /&gt;
Auth_PG_hash_type&amp;nbsp;: Soit MD5 ou CRYPT&lt;br /&gt;
&lt;p&gt;&lt;strong&gt;Conclusion&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Postgresql est particulièrement performant pour gérer l'authentification Apache. Choisir Postgresql pour réaliser des sites Web dynamique, c'est choisir la garanti d'avoir un produit à la fois professionnel et libre.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Références&lt;/strong&gt;&lt;/p&gt;
mod_auth_pgsql documentation officielle en anglais&amp;nbsp;: http://www.giuseppetanzilli.it/mod_auth_pgsql2/&lt;br /&gt;
Apache france: http://forums.apachefrance.com/&lt;br /&gt;
Wikipedia les fichiers .htaccess Apache&amp;nbsp;: http://fr.wikipedia.org/wiki/Htaccess&lt;br /&gt;
Postgresqlfr le site de la communauté francophone; http://www.postgresql.fr/&lt;br /&gt;
&lt;p&gt;&lt;strong&gt;Pascal Brognez &lt;/strong&gt;, le 16 juin 2009&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Nouveautés PostgreSQL 8.4</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2009/04/28/Nouveaut%C3%A9s-PostgreSQL-8.4" rel="alternate" type="text/html"
    title="Nouveautés PostgreSQL 8.4" />
    <id>urn:md5:e571a4687c55037fa26b71d1d6418363</id>
    <published>2009-04-28T12:57:00+01:00</published>
    <updated>2009-04-30T13:26:09+01:00</updated>
    <author><name>mcousin</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;Le but de cet article est de détailler les nouveautés apportées par la version 8.4 de PostgreSQL.
Il s'agit d'une partie de la &lt;a hreflang=&quot;fr&quot; href=&quot;http://docs.postgresql.fr/8.4/release.html&quot;&gt;liste réelle des changements&lt;/a&gt;, qui est bien plus vaste.&lt;/p&gt;    &lt;h1&gt;Introduction&lt;/h1&gt;
&lt;p&gt;Cette version est disponible en version beta depuis le 15 avril 2009 et est une version majeure. Des fonctionnalités extrêmement importantes ont été ajoutées, tant au niveau du langage SQL qu'au niveau de l'administration. Contrairement au passage de 8.2 vers 8.3 (suppression de nombreuses conversions implicites), il y a peu de risques de régression entre 8.3 et 8.4.&lt;/p&gt;
&lt;p&gt;Par ailleurs, si vous voulez un résumé des fonctionnalités ajoutées au fur et à mesure des versions, cette page (en anglais) fournit un excellent résumé&amp;nbsp;:
&lt;a href=&quot;http://www.postgresql.org/about/featurematrix&quot; title=&quot;http://www.postgresql.org/about/featurematrix&quot;&gt;http://www.postgresql.org/about/featurematrix&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Pour permettre à chaque audience de savoir ce qui la concerne, chaque fonctionnalité se voit affecter une couleur&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Jaune&lt;/span&gt; pour ce qui concerne les améliorations pour les développeurs.&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;background: Aqua none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Bleu&lt;/span&gt; pour ce qui concerne les améliorations pour les administrateurs.&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;background: Lime none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Vert&lt;/span&gt; pour ce qui concerne tout le monde.&lt;/p&gt;
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Window Functions (fonctions de fenêtrage)&lt;/span&gt;&lt;/h1&gt;
&lt;p&gt;Le but d'une fonction de fenêtrage est de fournir des fonctions de regroupement 'glissantes' et de ne pas regrouper les enregistrements dans la sortie de la requête : une fonction de regroupement classique (SUM par exemple) donne un seul résultat pour tout un groupe (la somme des salaires des employés d'une division par exemple). Les fonctions de fenêtrage permettront d'obtenir la somme des salaires des employés d'une division, tout en ne faisant pas le regroupement. Cela permettrait en une seule requête de comparer le salaire d'un employé avec la moyenne de son département.&lt;/p&gt;
&lt;p&gt;La doc officielle&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/tutorial-window.html&quot; title=&quot;http://docs.postgresql.fr/8.4/tutorial-window.html&quot;&gt;http://docs.postgresql.fr/8.4/tutorial-window.html&lt;/a&gt; et  &lt;a href=&quot;http://docs.postgresql.fr/8.4/sql-expressions.html#syntax-window-functions&quot; title=&quot;http://docs.postgresql.fr/8.4/sql-expressions.html#syntax-window-functions&quot;&gt;http://docs.postgresql.fr/8.4/sql-expressions.html#syntax-window-functions&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;On peut grâce à ces fonctions calculer le rang d'un enregistrement, éclater une liste suivant l'appartenance d'une valeur à un centile, etc ...&lt;/p&gt;
&lt;p&gt;Elles sont très pratiques en contexte d'infocentre.&lt;/p&gt;
&lt;p&gt;Voici un exemple simple (celui du paragraphe explicatif)&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;Soit une table employe&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;\d employe&lt;br /&gt;     Table &quot;public.employe&quot;&lt;br /&gt;  Column&amp;nbsp;&amp;nbsp;  |       Type&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;        | Modifiers&lt;br /&gt;---------+-------------------+----------&lt;br /&gt; nom&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | character varying |&lt;br /&gt; division | character varying |&lt;br /&gt; salaire&amp;nbsp;  | numeric&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;           |&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;SELECT * from employe ;&lt;br /&gt;  nom&amp;nbsp;&amp;nbsp;  | division | salaire&lt;br /&gt;------+----------+--------&lt;br /&gt; marc&amp;nbsp;  | dept a&amp;nbsp;&amp;nbsp;   |     100&lt;br /&gt; jean&amp;nbsp;  | dept a&amp;nbsp;&amp;nbsp;   |     110&lt;br /&gt; luc &amp;nbsp;   | dept a&amp;nbsp;&amp;nbsp;   |      90&lt;br /&gt; brian | dept b&amp;nbsp;&amp;nbsp;   |     100&lt;br /&gt; pete&amp;nbsp;  | dept b&amp;nbsp;&amp;nbsp;   |     150&lt;/code&gt;
&lt;p&gt;Pour obtenir le résultat demandé (donner, pour chaque utilisateur,le salaire moyen de sa division), on peut écrire cette requête&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;SELECT nom,division,salaire,salaire_moyen &lt;br /&gt;FROM employe &lt;br /&gt;JOIN (&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; SELECT AVG(salaire) AS salaire_moyen,division &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; FROM employe &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; GROUP BY division) &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; AS temp &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; USING (division);&lt;br /&gt;&lt;br /&gt;  nom&amp;nbsp;&amp;nbsp;  | division | salaire |    salaire_moyen&lt;br /&gt;------+----------+---------+---------------------&lt;br /&gt; marc&amp;nbsp;  | dept a &amp;nbsp;   |     100&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000&lt;br /&gt; jean&amp;nbsp;  | dept a&amp;nbsp;&amp;nbsp;   |     110 &amp;nbsp; &amp;nbsp; | 100.0000000000000000&lt;br /&gt; luc &amp;nbsp;   | dept a&amp;nbsp;&amp;nbsp;   |      90&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000&lt;br /&gt; brian | dept b&amp;nbsp;&amp;nbsp;   |     100&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 125.0000000000000000&lt;br /&gt; pete&amp;nbsp;  | dept b&amp;nbsp;&amp;nbsp;   |     150&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 125.0000000000000000&lt;/code&gt;
&lt;p&gt;Dans ce cas simple, c'est encore lisible. Évidemment, si on veut en plus le salaire maximum, le classement dans la division, la requête devient vite lourde, et demande en plus plusieurs passes sur la table.&lt;/p&gt;
&lt;p&gt;Avec les nouvelles fonctions de fenêtrage, on l'écrit comme suit&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;SELECT nom,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;       division,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; salaire,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; AVG(salaire) OVER (PARTITION BY division) AS salaire_moyen &lt;br /&gt;       FROM employe;&lt;br /&gt;&lt;br /&gt;  nom&amp;nbsp;  | division | salaire |    salaire_moyen&lt;br /&gt;-----+----------+---------+---------------&lt;br /&gt; marc  | dept a&amp;nbsp;&amp;nbsp;   |     100 &amp;nbsp; &amp;nbsp; | 100.0000000000000000&lt;br /&gt; jean  | dept a&amp;nbsp;&amp;nbsp;   |     110&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000&lt;br /&gt; luc&amp;nbsp;   | dept a &amp;nbsp;   |      90&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000&lt;br /&gt; brian| dept b&amp;nbsp;&amp;nbsp;   |     100 &amp;nbsp; &amp;nbsp; | 125.0000000000000000&lt;br /&gt; pete  | dept b&amp;nbsp;&amp;nbsp;   |     150&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 125.0000000000000000&lt;/code&gt;
&lt;p&gt;On indique à PostgreSQL sur quelle partition effectuer le fenêtrage avec le mot clé partition.&lt;/p&gt;
&lt;p&gt;Si on veut en plus le classement de chaque employé dans sa division&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;SELECT nom,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; division,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; salaire,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; AVG(salaire) OVER (PARTITION BY division) AS salaire_moyen,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; RANK() OVER (PARTITION BY division ORDER BY salaire DESC) AS rang_division&lt;br /&gt;       FROM employe;&lt;br /&gt;&lt;br /&gt;  nom&amp;nbsp;  | division | salaire |    salaire_moyen&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | rang_division&lt;br /&gt;&lt;del&gt;-----+----------+---------+----------------------+-----------&lt;/del&gt;&lt;br /&gt; jean  | dept a&amp;nbsp;&amp;nbsp;   |     110&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000 |             1&lt;br /&gt; marc  | dept a &amp;nbsp;   |     100&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000 |             2&lt;br /&gt; luc&amp;nbsp; | dept a&amp;nbsp;&amp;nbsp;   |      90 &amp;nbsp; &amp;nbsp;&amp;nbsp; | 100.0000000000000000 |             3&lt;br /&gt; pete  | dept b &amp;nbsp;   |     150&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 125.0000000000000000 |             1&lt;br /&gt; brian| dept b&amp;nbsp;&amp;nbsp;   |     100&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 125.0000000000000000 |             2&lt;/code&gt;
&lt;p&gt;On peut donc donner un ordre avec un order by dans la clause OVER. On remarque aussi que RANK ne prend pas de paramètre (ce qui est logique).&lt;/p&gt;
&lt;p&gt;On peut continuer à complexifier&amp;nbsp;: on veut le rang global du salaire dans la table (on ne partitionne plus sur une valeur, mais on continue le tri):&lt;/p&gt;
&lt;code&gt;SELECT nom,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; division,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; salaire,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; AVG(salaire) OVER (PARTITION BY division) AS salaire_moyen,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; RANK() OVER (PARTITION BY division ORDER BY salaire DESC) AS rang_division,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; RANK() OVER (ORDER BY salaire DESC) AS rang_global&lt;br /&gt;       FROM employe;&lt;br /&gt;&lt;br /&gt;  nom&amp;nbsp;  | division | salaire |    salaire_moyen&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | rang_division | rang_global&lt;br /&gt;-----+----------+---------+----------------------+---------------+------------&lt;br /&gt; pete  | dept b &amp;nbsp;   |     150 &amp;nbsp; &amp;nbsp; | 125.0000000000000000 |             1&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |           1&lt;br /&gt; jean  | dept a&amp;nbsp;&amp;nbsp;   |     110&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000 |             1&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |           2&lt;br /&gt; marc  | dept a&amp;nbsp;&amp;nbsp;   |     100&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000 |             2&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |           3&lt;br /&gt; brian| dept b&amp;nbsp;&amp;nbsp;   |     100&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 125.0000000000000000 |             2&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |           3&lt;br /&gt; luc&amp;nbsp;   | dept a&amp;nbsp;&amp;nbsp;   |      90&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 100.0000000000000000 |             3&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; |           5&lt;/code&gt;
&lt;p&gt;Ce genre de requête est très pénible à écrire sans les fonctions de fenêtrage ...&lt;/p&gt;
&lt;p&gt;Attention tout de même aux performances&amp;nbsp;: les fonctions de fenêtrage travaillent sur des données triées (les partitions), ce qui fait que les données de la requête subiront des tris (qui peuvent être nombreux si il y a de nombreuses méthodes de partitionnement différentes utilisées dans la même requête). Par comparaison, la requête initiale (avec la jointure) peut faire des aggregats par hash, qui dans certains contextes seront plus performants. Ces fonctions de fenêtrage ont donc tendance à restreindre les choix de l'optimiseur SQL. Il faut donc être prudent sur l'utilisation de ces fonctions sur un gros volume de données.&lt;/p&gt;
&lt;p&gt;Au niveau syntaxique, on peut déclarer une clause de partition de façon globale pour pouvoir ensuite l'utiliser plusieurs fois par son nom dans la requête&amp;nbsp;:&lt;/p&gt;
&lt;code&gt; SELECT nom,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; division,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; salaire,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; AVG(salaire) OVER (w) AS salaire_moyen,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; RANK() OVER (w) AS rang&lt;br /&gt;FROM employe&lt;br /&gt;WINDOW w AS (PARTITION BY division ORDER BY salaire DESC);&lt;/code&gt;
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;CTE, Common Table Expressions (Expressions de tables communes)&lt;/span&gt;&lt;/h1&gt;
&lt;p&gt;Le but des CTE est de fournir des déclarations communes de tables au début d'une requête, avant son corps proprement dit.&lt;/p&gt;
&lt;p&gt;&lt;em&gt;Nb&lt;/em&gt;: les exemples ci-dessous sont tirés de la documentation PostgreSQL.&lt;/p&gt;
&lt;p&gt;Ceci est utilisé dans 2 cas&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Pour définir de la 'récursion' (l'équivalent des &lt;em&gt;'CONNECT BY&lt;/em&gt;' d'Oracle) selon la nomenclature SQL. Il s'agit en fait d'un processus itératif (voir la documentation).&lt;/li&gt;
&lt;/ul&gt;
&lt;code&gt;WITH RECURSIVE parties_incluses(sous_partie, partie, quantite) AS (&lt;br /&gt;&amp;nbsp;&amp;nbsp; SELECT sous_partie, partie, quantite FROM parties WHERE partie = 'notre_produit'&lt;br /&gt;&amp;nbsp;UNION ALL&lt;br /&gt;&amp;nbsp;&amp;nbsp;    SELECT p.sous_partie, p.partie, p.quantite&lt;br /&gt;&amp;nbsp;&amp;nbsp; FROM parties_incluses pr, parties p&lt;br /&gt;&amp;nbsp;&amp;nbsp; WHERE p.partie = pr.sous_partie&lt;br /&gt;  )&lt;br /&gt;SELECT sous_partie, SUM(quantite) as quantite_totale&lt;br /&gt;FROM parties_incluses&lt;br /&gt;GROUP BY sous_partie&lt;/code&gt;
&lt;p&gt;Ceci est assez complexe à utiliser, et potentiellement dangereux&amp;nbsp;: il est très facile d'écrire une requête qui ne s'arrête pas. Il est donc important de bien étudier la documentation avant de se lancer dans des requêtes récursives&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/queries-with.html&quot; title=&quot;http://docs.postgresql.fr/8.4/queries-with.html&quot;&gt;http://docs.postgresql.fr/8.4/queries-with.html&lt;/a&gt;&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Pour déclarer une requête qui sera réutilisée plusieurs fois par la suite dans la requête principale, et limiter ainsi le nombre de ses exécutions (pour raison de performance et de lisibilité donc).&lt;/li&gt;
&lt;/ul&gt;
&lt;code&gt;WITH ventes_regionales AS (&lt;br /&gt;&amp;nbsp;&amp;nbsp; SELECT region, SUM(montant) AS ventes_totales&lt;br /&gt;&amp;nbsp;&amp;nbsp; FROM commandes&lt;br /&gt;&amp;nbsp;&amp;nbsp; GROUP BY region&lt;br /&gt;     ), &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; meilleures_regions AS (&lt;br /&gt;&amp;nbsp;&amp;nbsp; SELECT region&lt;br /&gt;&amp;nbsp;&amp;nbsp; FROM ventes_regionales&lt;br /&gt;&amp;nbsp;&amp;nbsp; WHERE ventes_totales &amp;gt; (SELECT SUM(ventes_totales)/10 FROM ventes_regionales)&lt;br /&gt;     )&lt;br /&gt;SELECT region,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; produit,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; SUM(quantite) AS unites_produit,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; SUM(montant) AS ventes_produit&lt;br /&gt;FROM commandes&lt;br /&gt;WHERE region IN (SELECT region FROM meilleures_regions)&lt;br /&gt;GROUP BY region, produit;&lt;/code&gt;
&lt;p&gt;Les CTE sont déclarées avec le mot clé WITH&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/queries-with.html&quot; title=&quot;http://docs.postgresql.fr/8.4/queries-with.html&quot;&gt;http://docs.postgresql.fr/8.4/queries-with.html&lt;/a&gt;&lt;/p&gt;
&lt;h1&gt;&lt;span style=&quot;background: Aqua none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Free Space Map automatique&lt;/span&gt;&lt;/h1&gt;
La Free Space Map est un mécanisme permettant à PostgreSQL de mémoriser la liste des zones réutilisables d'un fichier de données (équivalent des freelists d'Oracle). Jusque là, cette free space map était une zone mémoire partagée, donc de taille fixe, ce qui pouvait poser des problèmes de dimensionnement de celle ci&amp;nbsp;: dès que la free space map était pleine, il devenait impossible de stocker de nouveaux blocs dans celle ci, et des tables pouvaient grossir de façon incontrôlable.
&lt;p&gt;En 8.4, la Free Space Map n'est plus une zone mémoire mais une extension logique de chaque table (un « fork » dans la nomenclature PostgreSQL), chaque fork pouvant croître de façon autonome (il a son propre fichier géré comme les fichiers des tables et index). Les deux paramètres max_fsm_pages et max_fsm_relation disparaissent, supprimant avec eux une des principales sources complexité et d'erreur de l'administration de PostgreSQL.&lt;/p&gt;
&lt;p&gt;Les fichiers de FSM sont stockés avec les fichiers des tables, avec le même identifiant numérique, mais terminé par le suffixe FSM. Par exemple, la table de relfilenode 2610 aura un fichier FSM 2610_fsm.&lt;/p&gt;
&lt;h1&gt;&lt;span style=&quot;background: Aqua none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Visibility Map&lt;/span&gt;&lt;/h1&gt;
L'apparition du concept de fork (cf paragraphe précédent) dans PostgreSQL a permis de rajouter de nouveaux bitmaps d'attributs sur les tables. Le premier est la visibility map. Elle fournit la liste des pages dont TOUS les enregistrements sont visibles. Vacuum active le bit d'une page quand il a fini de la traiter et que tous les enregistrements qui sont dedans sont validés (cela sera de loin le cas le plus courant dans une table en production). Toute transaction qui invalide un enregistrement dans une page désactive le bit.
Ceci comporte plusieurs intérêts:
&lt;ul&gt;
&lt;li&gt;Le premier est de permettre un VACUUM partiel&amp;nbsp;: il n'est plus nécessaire de passer sur toute la table à chaque vacuum, puisqu'on a la liste des pages qui contiennent potentiellement des enregistrements à nettoyer (celles dont le bit n'est plus actif). Il n'est plus nécessaire de nettoyer les autres. Cela réduit la durée d'un VACUUM et la lie à la quantité réelle de travail à effectuer. On pourra donc par la même occasion faire des VACUUM plus rapprochés, et gérer beaucoup plus facilement les tables de grande taille (vacuum ne sera probablement plus une raison pour la partitionner). Attention,même en cas de vacuum partiel, il reste nécessaire d'inspecter en entier tous les index.&lt;/li&gt;
&lt;li&gt;Le second &lt;em&gt;n'est pas encore implémenté&lt;/em&gt; mais le sera probablement assez rapidement.&lt;br /&gt;Les entrées d'index ne contiennent pas d'information sur la visibilité des enregistrements qu'elles pointent. Ceci oblige PostgreSQL, lors de parcours d'index, à aller consulter la page de la table pour vérifier la visibilité de l'enregistrement qu'il vient de trouver. Ceci empêche quelques optimisations, que font Oracle et SQL Server par exemple qui peuvent se contenter de parcourir un index sans aller voir la table si seules les colonnes indexées sont utilisées (pour un count(*) sur une table entière par exemple).&lt;br /&gt;Avec ce bitmap de visibilité, il sera possible de confirmer la plupart du temps la visibilité d'un enregistrement d'index simplement par la consultation du bit associé à la page de l'enregistrement qu'il pointe&amp;nbsp;: si l'ensemble de la page est visible, l'enregistrement est visible, et il n'est donc pas la peine d'aller regarder le contenu de la page. Sachant que 99% des pages d'une table seront probablement totalement visibles à chaque instant (surtout que le vacuum partiel permettra d'augmenter la fréquence des vacuum), le gain sera probablement très net sur ces requêtes particulières, et permettra de se débarrasser d'un point faible de PostgreSQL.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Les fichiers de Visibility Map sont stockés avec les fichiers des tables, avec le même identifiant numérique, mais terminé par VM. Par exemple, la table de relfilenode 2610 aura un fork 2610_vm.&lt;/p&gt;
&lt;h1&gt;&lt;span style=&quot;background: Lime none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Locale par base&lt;/span&gt;&lt;/h1&gt;
&lt;p&gt;On peut maintenant créer des bases d'encodage et de collation/catégorisation (ordre de tri dans les index, le lc_collate, et classification/casse avec le lc_ctype) différentes.&lt;/p&gt;
&lt;code&gt;infocentre_dte=# CREATE DATABASE test1&lt;/code&gt; ENCODING='LATIN9' LC_COLLATE='fr_FR@euro' LC_CTYPE='fr_FR@euro' TEMPLATE=template0;&lt;strong&gt;&lt;br /&gt;&lt;/strong&gt;&lt;code&gt;CREATE DATABASE&lt;br /&gt;infocentre_dte=# CREATE DATABASE test2&lt;/code&gt; ENCODING='UTF8' LC_COLLATE='fr_FR.UTF8' LC_CTYPE='fr_FR.UTF8' TEMPLATE=template0;&lt;strong&gt;&lt;br /&gt;&lt;/strong&gt;&lt;code&gt;CREATE DATABASE&lt;/code&gt;
&lt;p&gt;&lt;em&gt;'Nb:&lt;/em&gt;' quand on crée une base qui n'a pas les mêmes collation/ctype que la base template1, il faut repartir du template0 (et donc recréer dans la nouvelle base tout ce qu'on a ajouté à la template1).
Sur un cluster, il est peu probable qu'on ait plus de 2 ou 3 encodages différents. Il est donc intéressant de créer des templates pour ces quelques combinaisons, et utiliser ensuite ces templates pour la création des bases réelles.&lt;/p&gt;
&lt;code&gt;                                 List of databases&lt;br /&gt;      Name&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | Owner | Encoding |  Collation&amp;nbsp;&amp;nbsp;  |    Ctype&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;    | Access privileges&lt;br /&gt;----------+-------+----------+-------------+-------------+------------------&lt;br /&gt; postgres&amp;nbsp;       | marc&amp;nbsp;  | UTF8 &amp;nbsp; &amp;nbsp;     | fr_FR.UTF-8 | fr_FR.UTF-8 |&lt;br /&gt; template0      | marc&amp;nbsp;  | UTF8&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | fr_FR.UTF-8 | fr_FR.UTF-8 | =c/marc&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : marc=CTc/marc&lt;br /&gt; template1      | marc&amp;nbsp;  | UTF8&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | fr_FR.UTF-8 | fr_FR.UTF-8 | =c/marc&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : marc=CTc/marc&lt;br /&gt; test1&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;          | marc&amp;nbsp;  | LATIN9 &amp;nbsp;   | fr_FR@euro&amp;nbsp; | fr_FR@euro&amp;nbsp;  |&lt;br /&gt; test2&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;          | marc&amp;nbsp;  | UTF8&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | fr_FR.UTF8&amp;nbsp;  | fr_FR.UTF8&amp;nbsp;  |&lt;/code&gt;
&lt;h1&gt;&lt;span style=&quot;background: Aqua none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Fonctions de monitoring&lt;/span&gt;&lt;/h1&gt;
&lt;ul&gt;
&lt;li&gt;Dans le cas d'un deadlock, PostgreSQL retourne les textes de toutes les requêtes en cours durant le blocage dans les traces.&lt;/li&gt;
&lt;/ul&gt;
&lt;code&gt;ERROR:  deadlock detected&lt;br /&gt;DETAIL:  Process 13686 waits for ShareLock on transaction 8710; blocked by process 13692.&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Process 13692 waits for ShareLock on transaction 8709; blocked by process 13686.&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Process 13686: DELETE FROM test1 where a=2;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Process 13692: DELETE FROM test1 where a=1;&lt;br /&gt;HINT:  See server log for query details.&lt;br /&gt;STATEMENT:  DELETE FROM test1 where a=2;&lt;/code&gt;
&lt;ul&gt;
&lt;li&gt;pg_conf_load_time() permet de connaître la dernière date de rechargement du fichier de configuration&lt;/li&gt;
&lt;li&gt;pg_terminate_backend() permet de tuer une session proprement (SIGTERM le permet aussi maintenant). Avant, aucune fonction supportée ne permettait de le faire, même si SIGTERM fonctionnait quasiment à chaque fois. Cette fonction est à distinguer de pg_cancel_backend() qui arrête la requête en cours d'une session.&lt;/li&gt;
&lt;li&gt;Traçage des nombres d'appels et temps moyens d'exécution des procédures stockées, via la vue pg_stat_user_functions. Pour cela, il faut aussi activer track_functions dans la configuration, qui peut valoir all, pl ou none. All correspond à tout tracer (C, PL, SQL), pl uniquement les langages procéduraux, none rien du tout. &lt;em&gt;Nb&lt;/em&gt;&amp;nbsp;: une fonction SQL suffisamment simple pour être inlinée dans la requête appelante ne sera pas comptabilisée.&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;On peut maintenant spécifier la taille maximum d'une requête affichée dans pg_stat_activity via track_activity_query_size. Ce paramêtre n'est positionnable qu'au démarrage du serveur, puisqu'il réserve de la mémoire. La valeur par défaut est 1024 caractères. C'est cette taille qui est aussi utilisée (voir plus bas) pour pg_stat_statements.&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Contrib&amp;nbsp;: autoexplain&lt;br /&gt;Suivre cette doc&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/auto-explain.html&quot; title=&quot;http://docs.postgresql.fr/8.4/auto-explain.html&quot;&gt;http://docs.postgresql.fr/8.4/auto-explain.html&lt;/a&gt;;Ce module permet de tracer tous les plans d'exécution d'une requête, au dessus d'une certaine durée d'exécution.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Voici un extrait des traces quand cette fonctionnalité est activée&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;LOG:  statement: BEGIN&lt;br /&gt;LOG:  statement: DECLARE _psql_cursor NO SCROLL CURSOR FOR&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; SELECT * from isilog.actions limit (select 100);&lt;br /&gt;LOG:  statement: FETCH FORWARD 100 FROM _psql_cursor&lt;br /&gt;LOG:  statement: FETCH FORWARD 100 FROM _psql_cursor&lt;br /&gt;LOG:  statement: CLOSE _psql_cursor&lt;br /&gt;LOG:  duration: 0.047 ms  plan:&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Limit  (cost=0.01..17013.93 rows=416152 width=347)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; InitPlan 1 (returns $0)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; -&amp;gt;  Result  (cost=0.00..0.01 rows=1 width=0)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; -&amp;gt;  Seq Scan on actions  (cost=0.00..170139.21 rows=4161521 width=347)&lt;br /&gt;STATEMENT:  CLOSE _psql_cursor&lt;br /&gt;LOG:  statement: COMMIT&lt;/code&gt;
&lt;p&gt;Evidemment, pour les besoins de l'exemple, la durée minimum d'une requête déclenchant les traces du plan a été abaissée à une valeur ridiculement faible&amp;nbsp;: on ne va pas tracer les plans de requêtes durant 50 microsecondes, le coût serait trop élevé...&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Contrib&amp;nbsp;: pg_stat_statements&lt;br /&gt;Suivre cette doc&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/pgstatstatements.html&quot; title=&quot;http://docs.postgresql.fr/8.4/pgstatstatements.html&quot;&gt;http://docs.postgresql.fr/8.4/pgstatstatements.html&lt;/a&gt;&lt;br /&gt;Ce module permet d'avoir des statistiques similaires à celles d'Oracle (dans V$SQLAREA, perfstat ou rapports AWR). Il consomme de la mémoire (pour stocker ses statistiques) et un peu de ressources processeur (l'impact n'est pas mesurable).&lt;/li&gt;
&lt;/ul&gt;
&lt;code&gt;SELECT * from pg_stat_statements order by total_time desc;&lt;br /&gt;-&lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2009/04/28/RECORD%201&quot; title=&quot;RECORD 1&quot;&gt;RECORD 1&lt;/a&gt;-&lt;br /&gt;userid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | 10&lt;br /&gt;dbid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;       | 16384&lt;br /&gt;query&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | DECLARE _psql_cursor NO SCROLL CURSOR FOR&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : SELECT * from isilog.actions limit 100000;&lt;br /&gt;calls&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | 2&lt;br /&gt;total_time | 0.106574&lt;br /&gt;rows&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;       | 0&lt;br /&gt;-&lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2009/04/28/RECORD%202&quot; title=&quot;RECORD 2&quot;&gt;RECORD 2&lt;/a&gt;-&lt;br /&gt;userid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | 10&lt;br /&gt;dbid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;       | 16384&lt;br /&gt;query&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | SELECT n.nspname as &quot;Schema&quot;,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :   c.relname as &quot;Name&quot;,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :   CASE c.relkind WHEN 'r' THEN 'table' WHEN 'v' THEN 'view' WHEN 'i' THEN 'index' WHEN 'S'&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :  THEN 'sequence' WHEN 's' THEN 'special' END as &quot;Type&quot;,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :   pg_catalog.pg_get_userbyid(c.relowner) as &quot;Owner&quot;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : FROM pg_catalog.pg_class c&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :      LEFT JOIN pg_catalog.pg_namespace n ON n.oid = c.relnamespace&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : WHERE c.relkind IN ('r','v','S','')&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :       AND n.nspname &amp;lt;&amp;gt; 'pg_catalog'&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :       AND n.nspname &amp;lt;&amp;gt; 'information_schema'&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :       AND n.nspname !~ '^pg_toast'&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :   AND pg_catalog.pg_table_is_visible(c.oid)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : ORDER BY 1,2;&lt;br /&gt;calls&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | 1&lt;br /&gt;total_time | 0.023864&lt;br /&gt;rows&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 8&lt;br /&gt;-&lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/2009/04/28/RECORD%203&quot; title=&quot;RECORD 3&quot;&gt;RECORD 3&lt;/a&gt;--&lt;br /&gt;userid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;     | 10&lt;br /&gt;dbid&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;       | 16384&lt;br /&gt;query&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | SELECT pg_catalog.quote_ident(c.relname) FROM pg_catalog.pg_class c WHERE c.relkind IN&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : ('r', 'S', 'v') AND substring(pg_catalog.quote_ident(c.relname),1,6)='pg_sta' AND&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : pg_catalog.pg_table_is_visible(c.oid)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : UNION&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : SELECT pg_catalog.quote_ident(n.nspname) || '.' FROM pg_catalog.pg_namespace n WHERE&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : substring(pg_catalog.quote_ident(n.nspname) || '.',1,6)='pg_sta' &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : AND (SELECT pg_catalog.count(*) FROM pg_catalog.pg_namespace WHERE&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : substring(pg_catalog.quote_ident(nspname) || '.',1,6) =&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : substring('pg_sta',1,pg_catalog.length(pg_catalog.quote_ident(nspname))+1)) &amp;gt; 1&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : UNION&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : SELECT pg_catalog.quote_ident(n.nspname) || '.' || pg_catalog.quote_ident(c.relname) FROM&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : pg_catalog.pg_class c, pg_catalog.pg_namespace n WHERE c.relnamespace = n.oid AND c.relkind&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : IN ('r', 'S', 'v') AND substring(pg_catalog.quote_ident(n.nspname) || '.' ||&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : pg_catalog.quote_ident(c.relname),1,6)='pg_sta' AND&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : substring(pg_catalog.quote_ident(n.nspname) || '.',1,6) =&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;            : substring('pg_sta',1,pg_catalog.length(pg_catalog.quote_ident(n.nspname))+1) AND (SELECT&lt;br /&gt;           &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : pg_catalog.count(*) FROM pg_catalog.pg_namespace WHERE&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;            : substring(pg_catalog.quote_ident(nspname) || '.',1,6) = &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;            : substring('pg_sta',1,pg_catalog.length(pg_catalog.quote_ident(nspname))+1)) = 1&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;            : LIMIT 1000&lt;br /&gt;calls&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;      | 1&lt;br /&gt;total_time | 0.019265&lt;br /&gt;rows&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; | 22&lt;/code&gt;
&lt;p&gt;Pour un article plus détaillé (en anglais) sur le sujet&amp;nbsp;: &lt;a href=&quot;http://www.depesz.com/index.php/2009/01/13/waiting-for-84-pg_stat_statements/&quot; title=&quot;http://www.depesz.com/index.php/2009/01/13/waiting-for-84-pg_stat_statements/&quot;&gt;http://www.depesz.com/index.php/2009/01/13/waiting-for-84-pg_stat_statements/&lt;/a&gt; &lt;/p&gt;
&lt;p&gt;&lt;ins&gt;Attention&lt;/ins&gt;, il vaut mieux augmenter track_activity_query_size, si on veut les requêtes en entier dans cette vue. Par ailleurs, comme pour Oracle, cette fonctionnalité ne sera vraiment utile que dans le cas où le nombre de requêtes différentes est faible (requêtes préparées).&lt;/p&gt;
&lt;h1&gt;&lt;span style=&quot;background: Aqua none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Archivage et sauvegardes&lt;/span&gt;&lt;/h1&gt;
&lt;ul&gt;
&lt;li&gt;Améliorations de la sauvegarde en ligne et du Warm Standby (réplication à chaud par fichiers xlog)
&lt;ul&gt;
&lt;li&gt;pg_stop_backup ne rend la main à l'appelant qu'une fois que les fichiers d'archive correspondant à la période du backup sont correctement archivés. Cela simplifie la sauvegarde en ligne et en garantit le bon fonctionnement.&lt;/li&gt;
&lt;li&gt;pg_start_backup dispose d'un paramètre optionnel booléen qui permet de déterminer si on veut que le checkpoint se fasse à vitesse normale (false), c'est-à-dire à la vitesse paramétrée par checkpoint_completion_target, ou à vitesse maximale (true). La valeur par défaut est false.&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;pg_dump --data-only réordonne les imports pour respecter les contraintes d'intégrité (intégrer les données de la clé étrangère avant les données de la table), dans la mesure du possible. S'il y a des dépendances circulaires, un message NOTICE est affiché.&lt;/li&gt;
&lt;li&gt;pg_restore dispose maintenant d'une option -j/--jobs (comme make par exemple), qui permet d'augmenter le parallélisme des restaurations (dans la limite du raisonnable).&lt;br /&gt;Il faut préciser un nombre après le j (-j8 par exemple pour 8 sessions de restauration en parallèle).&lt;br /&gt;Ceci parallélise la restauration des données de plusieurs tables, ainsi que les créations d'index/contraintes. Si la restauration est limitée par le processeur en temps normal (c'est souvent le cas), on peut paralléliser sur plus d'un processeur le processus de restauration grâce à cette option.&lt;/li&gt;
&lt;/ul&gt;
&lt;h1&gt;&lt;span style=&quot;background: Lime none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Diverses améliorations de performance&lt;/span&gt;&lt;/h1&gt;
&lt;p&gt;L'optimiseur SQL a été amélioré pour pouvoir&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Utiliser des hachages pour SELECT DISTINCT, UNION, INTERSECT, EXCEPT. Attention, cela entraîne que leur résultat ne sera plus forcément trié (utiliser un ORDER BY) comme c'était le cas auparavant (mais c'était un effet de bord de l'algorithme).&lt;/li&gt;
&lt;li&gt;Si c'est rentable, transformer les EXISTS/NOT EXISTS/IN/NOT IN dans la forme la plus efficace (c'est à dire convertir un EXIST en IN équivalent et vice versa suivant les statistiques)&lt;/li&gt;
&lt;li&gt;Supporter des statistiques plus fines&amp;nbsp;: la valeur par défaut de default_statistics_target est passée de 10 à 100, avec une valeur maxi passée de 1000 à 10000. Il ne sera par défaut plus nécessaire d'y toucher, la valeur 100 étant très raisonnable (contrairement à 10, qui générait des histogrammes trop imprécis).&lt;/li&gt;
&lt;li&gt;Faire les exclusion de contrainte (constraint_exclusion) par défaut pour les partitions.&lt;/li&gt;
&lt;li&gt;Faire de la lecture anticipée sur disque pour certains plans d'exécution&amp;nbsp;: les 'bitmap index scans' déclencheront une lecture de nombreux blocs à la fois sur le disque afin que le système d'exploitation optimise les accès disques&amp;nbsp;: paramètre effective_io_concurrency&lt;/li&gt;
&lt;li&gt;Substituer les fonctions SQL simples (Inline) dans les requêtes les utilisant par leur code, afin qu'elles ne soient plus des boîtes noires et que l'optimiseur puisse faire un travail plus précis.&lt;/li&gt;
&lt;li&gt;Prendre en compte un paramètre du type 'FIRST_ROWS' d'Oracle&amp;nbsp;: on peut indiquer quel pourcentage d'un curseur sera probablement récupéré, d'une façon globale, et par session, afin qu'il optimise le plan d'exécution. Il s'agit de cursor_tuple_fraction, paramétré par défaut à 0.1.&lt;/li&gt;
&lt;li&gt;Optimisation des performances d'insertion dans les index GIN (utilisés entre autres pour la recherche FULL TEXT) &lt;a href=&quot;http://docs.postgresql.fr/8.4/gin-implementation.html&quot; title=&quot;http://docs.postgresql.fr/8.4/gin-implementation.html&quot;&gt;http://docs.postgresql.fr/8.4/gin-implementation.html&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Module Optionnel&amp;nbsp;: champs texte insensible à la casse&lt;/span&gt;&lt;/h1&gt;
&lt;p&gt;Le module citext permet de disposer d'un type texte insensible à la casse (pour les recherches de chaînes de caractères).&lt;/p&gt;
&lt;p&gt;La doc officielle&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/citext.html&quot; title=&quot;http://docs.postgresql.fr/8.4/citext.html&quot;&gt;http://docs.postgresql.fr/8.4/citext.html&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;Une fois le module citext activé dans la base cible, on l'utilise comme suit&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;infocentre_dte=# CREATE TABLE test2 (a citext);&lt;br /&gt;CREATE TABLE&lt;br /&gt;infocentre_dte=# ALTER TABLE test2 ADD primary key (a);&lt;br /&gt;NOTICE:  ALTER TABLE / ADD PRIMARY KEY will create implicit index &quot;test2_pkey&quot; for table &quot;test2&quot;&lt;br /&gt;ALTER TABLE&lt;br /&gt;infocentre_dte=# INSERT INTO test2 values ('a');&lt;br /&gt;INSERT 0 1&lt;br /&gt;infocentre_dte=# INSERT INTO test2 values ('A');&lt;br /&gt;ERROR:  duplicate key value violates unique constraint &quot;test2_pkey&quot;&lt;br /&gt;infocentre_dte=# SELECT  * from test2 where a='A';&lt;br /&gt; a&lt;br /&gt;---&lt;br /&gt; a&lt;br /&gt;(1 row)&lt;/code&gt;
&lt;p&gt;On a donc un nouveau type citext (Case Insensitive Text), insensible à la casse pour les comparaisons (mais qui conserve la casse saisie).&lt;/p&gt;
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Le mot clé AS devient optionnel&lt;/span&gt;&lt;/h1&gt;
Le mot clé AS devient optionnel pour les alias de colonnes, sauf si le nom de l'alias est un mot clé réservé. Au passage, il faut signaler la fonction pg_get_keywords(), qui permet d'avoir la liste de ces mots réservés (il y en a environ 400), qui sont aussi listés ici&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/sql-keywords-appendix.html&quot; title=&quot;http://docs.postgresql.fr/8.4/sql-keywords-appendix.html&quot;&gt;http://docs.postgresql.fr/8.4/sql-keywords-appendix.html&lt;/a&gt;.
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Amélioration des langages PL&lt;/span&gt;&lt;/h1&gt;
&lt;ul&gt;
&lt;li&gt;Fonctions SETOF et requêtes&lt;br /&gt;Le résultat de procédures PL stockées retournant plusieurs enregistrements (des setof via RETURN NEXT) pourra être utilisé dans des jointures. Jusque là, ce n'était possible qu'avec les fonctions purement SQL.&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
&lt;li&gt;Amélioration de la gestion des erreurs en PL&lt;br /&gt;Voir cette doc&amp;nbsp;: &lt;a href=&quot;http://docs.postgresql.fr/8.4/plpgsql-errors-and-messages.html&quot; title=&quot;http://docs.postgresql.fr/8.4/plpgsql-errors-and-messages.html&quot;&gt;http://docs.postgresql.fr/8.4/plpgsql-errors-and-messages.html&lt;/a&gt;&lt;br /&gt;&lt;ins&gt;A retenir:&lt;/ins&gt;&lt;br /&gt;On peut maintenant dans un RAISE définir des codes d'erreur personnalisés ou mettre en place les codes retours standard (SQLSTATE,ERRCODE), et des indices pour la résolution des problèmes (HINT). On peut avec ces options remonter proprement et précisément les erreurs d'une fonction à la fonction ou la requête appelante.&lt;/li&gt;
&lt;/ul&gt;
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Trigger sur l'évènement TRUNCATE&lt;/span&gt;&lt;/h1&gt;
&lt;ul&gt;&lt;li&gt;
On peut maintenant écrire des triggers sur évènement TRUNCATE. Il s'agit bien sûr de triggers 'FOR EACH STATEMENT'.
&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;&lt;li&gt;On peut aussi fournir un argument RESTART/CONTINUE IDENTITY à la commande TRUNCATE, afin de réinitialiser les séquences qu'utilise la table, et une nouvelle permission TRUNCATE spécifique est maintenant disponible (pour la séparer de DELETE).&lt;/li&gt;
&lt;/ul&gt;
&lt;h1&gt;&lt;span style=&quot;background: Lime none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Améliorations de EXPLAIN&lt;/span&gt;&lt;/h1&gt;
Explain verbose affiche maintenant les colonnes de sorties de chaque noeud du plan. Explain quant à lui affiche les sous-plans et plans initiaux avec des labels individuels pour améliorer la lisibilité de l'ensemble.
&lt;p&gt;Un exemple d'explain verbose&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;explain VERBOSE SELECT id_service,octets,date,id_sonde from liste_releves natural join detail_releve;&lt;br /&gt;                                              QUERY PLAN&lt;br /&gt;----------------------------------------------------------------------------------------&lt;br /&gt; Hash Join  (cost=1824.09..800688.50 rows=16606047 width=24)&lt;br /&gt;&amp;nbsp; Output: detail_releve.id_service, detail_releve.octets, liste_releves.date, liste_releves.id_sonde&lt;br /&gt;&amp;nbsp; Hash Cond: (detail_releve.id_releve = liste_releves.id_releve)&lt;br /&gt;&amp;nbsp; -&amp;gt;  Seq Scan on detail_releve  (cost=0.00..271831.47 rows=16606047 width=20)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Output: detail_releve.id_service, detail_releve.octets, detail_releve.id_releve&lt;br /&gt;&amp;nbsp; -&amp;gt;  Hash  (cost=859.93..859.93 rows=52493 width=20)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Output: liste_releves.date, liste_releves.id_sonde, liste_releves.id_releve&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; -&amp;gt;  Seq Scan on liste_releves  (cost=0.00..859.93 rows=52493 width=20)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Output: liste_releves.date, liste_releves.id_sonde, liste_releves.id_releve&lt;/code&gt;
&lt;h1&gt;&lt;span style=&quot;background: Lime none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Droits par colonnes&lt;/span&gt;&lt;/h1&gt;
&lt;p&gt;On peut maintenant donner des droits d'accès aux tables et vues par colonne&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;CREATE USER user_test;&lt;br /&gt;&lt;br /&gt;CREATE TABLE test3 (a int, b varchar);&lt;br /&gt;&lt;br /&gt;GRANT SELECT (a) ON test3  to user_test;&lt;/code&gt;
&lt;p&gt;Puis on se connecte en tant que user_test&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;SELECT * from test3;&lt;br /&gt;ERROR:  permission denied for relation test3&lt;br /&gt;infocentre_dte=&amp;gt; SELECT a from test3;&lt;br /&gt; a&lt;br /&gt;---&lt;br /&gt; 1&lt;br /&gt; 2&lt;br /&gt;(2 rows)&lt;/code&gt;
&lt;h1&gt;&lt;span style=&quot;background: Aqua none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;pg_hba.conf&lt;/span&gt;&lt;/h1&gt;
Améliorations du traitement du fichier pg_hba.conf&amp;nbsp;:
&lt;ul&gt;
&lt;li&gt;Si le fichier est erroné, il n'est pas chargé et la version précédente est gardée (un message d'erreur est évidemment affiché dans les traces)&lt;/li&gt;
&lt;li&gt;Toutes les erreurs d'analyse du fichier sont affichées, et pas seulement la première, ce qui permet de gagner du temps dans la correction de celles-ci.&lt;/li&gt;
&lt;/ul&gt;
&lt;h1&gt;&lt;span style=&quot;background: Yellow none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;CREATE OR REPLACE VIEW et les colonnes&lt;/span&gt;&lt;/h1&gt;
On peut maintenant rajouter des colonnes à une vue par la commande CREATE OR REPLACE VIEW. Elles sont rajoutées à la fin de la vue. Jusqu'alors, il fallait détruire puis recréer la vue, ce qui était très problématique dans le cas de vues empilées (il fallait détruire toutes les vues dépendant de la vue à modifier, puis les recréer).
&lt;h1&gt;&lt;span style=&quot;background: Lime none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;&quot;&gt;Rétrocompatibilité psql&lt;/span&gt;&lt;/h1&gt;
Jusqu'alors, il fallait utiliser la version du client psql compatible avec la base à laquelle on se connectait, sous peine d'avoir des problèmes avec les commandes internes.
&lt;p&gt;A partir de la version 8.4, le client psql identifie la version de la base et exécute les interrogations de dictionnaire \d appropriées à la base. psql est donc compatible avec les bases de versions 7.4 à 8.4.&lt;/p&gt;
&lt;p&gt;PS : Merci&amp;nbsp; à Sigma Informatique (mon employeur) pour m'avoir autorisé à travailler sur ce document et à le publier...&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sun fait un point sur l'acquisition de MySQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/2009/01/22/Sun-fait-un-point-sur-l-acquisition-de-MySQL" rel="alternate" type="text/html"
    title="Sun fait un point sur l'acquisition de MySQL" />
    <id>urn:md5:9fe4581b2bc3cd48b0ae0c62a0058138</id>
    <published>2009-01-22T07:37:00+00:00</published>
    <updated>2009-01-22T08:37:53+00:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;« Nous avons des équipes qui travaillent sur d'autres bases de données Open Source, comme PostgreSQL, mais nous sommes vraiment en termes de stratégie et d'organisation en train de nous focaliser à fond sur MySQL pour en faire la base de données principale de Sun. »&lt;/p&gt;    &lt;p&gt;Un entretien avec Simon Phipps (Sun Microsystems) paru sur le Journal du Net (&lt;a href=&quot;http://www.journaldunet.com/solutions/intranet-extranet/interview/open-office-fait-desormais-partie-de-notre-division-cloud-computing.shtml&quot; hreflang=&quot;fr&quot;&gt;http://www.journaldunet.com/solutions/intranet-extranet/interview/open-office-fait-desormais-partie-de-notre-division-cloud-computing.shtml&lt;/a&gt;) lui donne l'occasion de revenir sur l'acquisition de MySQL et leur position vis-à-vis de PostgreSQL.&lt;/p&gt;


&lt;p&gt;Cet article est également l'occasion pour lui de revenir sur le support d'OpenOffice.&lt;/p&gt;


&lt;p&gt;Bonne lecture.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Écrire et utiliser des fonctions retournant une valeur de type composite (ROWTYPE)</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/303" rel="alternate" type="text/html"
    title="Écrire et utiliser des fonctions retournant une valeur de type composite (ROWTYPE)" />
    <id>urn:md5:01817a00d1bf2d350db460f2f5ff5eea</id>
    <published>2008-08-27T19:42:00+00:00</published>
    <updated>2008-10-13T21:00:25+00:00</updated>
    <author><name>RockyRoad</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;&lt;/p&gt;    &lt;!-- Note de style:
En ajoutant feuille de style CSS contenant:
ou équivalent, on pourrait supprimer les attributs style=&quot;...&quot;
dans cette page.
--&gt;
&lt;p&gt; Bien que nouvelle utilisatrice de PG, j'ai choisi de présenter un mini-article sur l'utilisation des ROWTYPE dans PL/pgSQL, car je crois qu'il pourrait être utile à beaucoup.
&lt;/p&gt;
&lt;p&gt; Je n'ai hélas pas beaucoup de temps à y consacrer, mais je compte sur votre participation pour m'aider à le clarifier.
&lt;/p&gt;
&lt;p&gt; En effet je n'ai rien trouvé de tel sur le web et j'ai dû passer du temps, pour &quot;trouver le pot aux roses&quot;, c'est-à-dire une syntaxe correcte utilisable pour mon application (GPL) que je vous dévoilerai plus tard.
&lt;/p&gt;
&lt;p&gt; Merci à Guillaume Lelarge pour son aide. Au-delà de partager son expérience, il s'est joint activement à mes réflexions et suggéré les solutions qui m'ont mise sur la bonne voie.
&lt;!--break--&gt;
&lt;/p&gt;
&lt;p&gt;Lorsqu'on crée une table, PG crée automatiquement un type (structure) décrivant la composition d'une ligne, c'est-à-dire la liste des champs.  Si on veut manipuler des lignes indépendamment d'une table, on peut déclarer un type, par exemple:
&lt;/p&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;DROP TYPE IF EXISTS names CASCADE;&lt;br /&gt;CREATE TYPE names AS (&lt;br /&gt;       first_name varchar,&lt;br /&gt;       last_name varchar,&lt;br /&gt;       age integer&lt;br /&gt;);&lt;/pre&gt;
L'interpréteur psql nous répond:
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;CREATE TYPE&lt;/pre&gt;
La fonction suivante construit une ligne du type 'names' :
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;CREATE OR REPLACE FUNCTION BuildName(_first varchar, _last varchar) RETURNS names AS $$&lt;br /&gt;DECLARE&lt;br /&gt;        result names;&lt;br /&gt;BEGIN&lt;br /&gt;        RAISE NOTICE 'BuildName(''%'', ''%'')', _first, _last;&lt;br /&gt;        result.first_name = _first;&lt;br /&gt;        result.last_name = _last;&lt;br /&gt;        return result;&lt;br /&gt;END;&lt;br /&gt;$$ LANGUAGE plpgsql;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;CREATE FUNCTION&lt;/pre&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT BuildName('Pierre', 'Dupond');&lt;/pre&gt;
On reçoit le message, puis le résultat en une seule colonne
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  BuildName('Pierre', 'Dupond')&lt;br /&gt;    buildname     &lt;br /&gt;------------------&lt;br /&gt; (Pierre,Dupond,)&lt;br /&gt;(1 row)&lt;/pre&gt;
Si on veut distinguer les colonnes, conformément à la définition du type, il faut utiliser la syntaxe &lt;code&gt;().*&lt;/code&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT (BuildName('Pierre', 'Dupond')).*;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  BuildName('Pierre', 'Dupond')&lt;br /&gt;NOTICE:  BuildName('Pierre', 'Dupond')&lt;br /&gt;NOTICE:  BuildName('Pierre', 'Dupond')&lt;br /&gt; first_name | last_name | age &lt;br /&gt;------------+-----------+-----&lt;br /&gt; Pierre     | Dupond    |    &lt;br /&gt;(1 row)&lt;br /&gt;&lt;/pre&gt;
On obtient bien le résultat en 3 colonnes. Mais on reçoit 3 FOIS le message  (il y a 3 champs).
&lt;p&gt;&lt;em&gt;Que se passe-t-il ?&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;
Le comportement est identique avec une table:
&lt;/p&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;DROP TABLE IF EXISTS person CASCADE;&lt;br /&gt;CREATE TABLE person (&lt;br /&gt;    id integer PRIMARY KEY,&lt;br /&gt;    name varchar,&lt;br /&gt;    data integer&lt;br /&gt;);&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  table &quot;person&quot; does not exist, skipping&lt;br /&gt;DROP TABLE&lt;br /&gt;NOTICE:  CREATE TABLE / PRIMARY KEY will create implicit index &quot;person_pkey&quot; for table &quot;person&quot;&lt;br /&gt;CREATE TABLE&lt;/pre&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;CREATE OR REPLACE FUNCTION BuildPerson(_num integer, _name varchar) RETURNS person AS $$&lt;br /&gt;DECLARE&lt;br /&gt;        result person;&lt;br /&gt;BEGIN&lt;br /&gt;        RAISE NOTICE 'BuildPerson(%, ''%'')', _num, _name;&lt;br /&gt;        result.id = _num;&lt;br /&gt;        result.name = _name;&lt;br /&gt;        return result;&lt;br /&gt;END;&lt;br /&gt;$$ LANGUAGE plpgsql;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;CREATE FUNCTION&lt;/pre&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT BuildPerson(1, 'Dupond');&lt;/pre&gt;
On reçoit le message, puis le résultat en une seule colonne
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  BuildPerson(1, 'Dupond')&lt;br /&gt; buildperson &lt;br /&gt;-------------&lt;br /&gt; (1,Dupond,)&lt;br /&gt;(1 row)&lt;br /&gt;&lt;/pre&gt;
Si on veut insérer les résultats dans la table, il faut adapter la syntaxe pour obtenir des champs distincts
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT (BuildPerson(2, 'Dupond')).*;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt; id |  name  | data &lt;br /&gt;----+--------+------&lt;br /&gt;  2 | Dupond |     &lt;br /&gt;(1 row)&lt;br /&gt;&lt;/pre&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;INSERT INTO person (SELECT (BuildPerson(2, 'Dupond')).*);&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;INSERT 0 1&lt;/pre&gt;
On reçoit aussi 3 FOIS le message , mais la rangée n'est insérée qu'une fois
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT * FROM person;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt; id |  name  | data &lt;br /&gt;----+--------+------&lt;br /&gt;  2 | Dupond |     &lt;br /&gt;(1 row)&lt;br /&gt;&lt;/pre&gt;
Tout va bien ? On avance ... mais:
&lt;p&gt;
Si la fonction comporte elle-même une instruction INSERT, on peut avoir un problème:
&lt;/p&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;CREATE OR REPLACE FUNCTION AddPerson(_num integer, _name varchar) RETURNS person AS $$&lt;br /&gt;DECLARE&lt;br /&gt;        result person;&lt;br /&gt;BEGIN&lt;br /&gt;        RAISE NOTICE 'AddPerson(%, ''%'')', _num, _name;&lt;br /&gt;        result.id = _num;&lt;br /&gt;        result.name = _name;&lt;br /&gt;        INSERT INTO person SELECT result.*;&lt;br /&gt;        return result;&lt;br /&gt;END;&lt;br /&gt;$$ LANGUAGE plpgsql;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;CREATE FUNCTION&lt;/pre&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT (AddPerson(3, 'Durand')).*;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  AddPerson(3, 'Durand')&lt;br /&gt;NOTICE:  AddPerson(3, 'Durand')&lt;br /&gt;ERROR:  duplicate key value violates unique constraint &quot;person_pkey&quot;&lt;/pre&gt;
Eh oui ! Comme les messages répétés pouvaient nous le laisser prévoir, la fonction est appelée plusieurs fois, avec les mêmes arguments, ce que notre clé primaire interdit.
&lt;p&gt;Remarquez que, la transaction ayant échoué, aucune ligne n'est finalement ajoutée.
&lt;/p&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT * FROM person;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt; id |  name  | data &lt;br /&gt;----+--------+------&lt;br /&gt;  2 | Dupond |     &lt;br /&gt;(1 row)&lt;br /&gt;&lt;/pre&gt;
Pas de souci cependant si on évite la syntaxe ().* lors de l'invocation:
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;DELETE FROM person WHERE id=3;&lt;br /&gt;SELECT AddPerson(3, 'Durand');&lt;br /&gt;SELECT * FROM person;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;DELETE 0&lt;br /&gt;NOTICE:  AddPerson(3, 'Durand')&lt;br /&gt;  addperson  &lt;br /&gt;-------------&lt;br /&gt; (3,Durand,)&lt;br /&gt;(1 row)&lt;br /&gt;&amp;nbsp;&lt;br /&gt; id |  name  | data&lt;br /&gt;----+--------+------&lt;br /&gt;  2 | Dupond |     &lt;br /&gt;  3 | Durand |     &lt;br /&gt;(2 rows)&lt;br /&gt;&lt;/pre&gt;
&lt;p&gt;Attention si on récupère le résultat dans une variable (par exemple dans une fonction récursive)
&lt;/p&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;CREATE OR REPLACE FUNCTION DoAddPerson(_num integer, _name varchar) RETURNS person AS $$&lt;br /&gt;DECLARE&lt;br /&gt;        result person;&lt;br /&gt;BEGIN&lt;br /&gt;        RAISE NOTICE 'DoAddPerson(%, ''%'')', _num, _name;&lt;br /&gt;        SELECT * INTO result FROM AddPerson(_num, _name);&lt;br /&gt;        -- result := AddPerson(_num, _name); -- syntaxe équivalente à la ligne précédente&lt;br /&gt;        return result;&lt;br /&gt;END;&lt;br /&gt;$$ LANGUAGE plpgsql;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;CREATE FUNCTION&lt;/pre&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;SELECT DoAddPerson(4, 'Dubois');&lt;br /&gt;SELECT * FROM person;&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  DoAddPerson(4, 'Dubois')&lt;br /&gt;NOTICE:  AddPerson(4, 'Dubois')&lt;br /&gt; doaddperson &lt;br /&gt;-------------&lt;br /&gt; (4,Dubois,)&lt;br /&gt;(1 row)&lt;br /&gt;&amp;nbsp;&lt;br /&gt; id |  name  | data&lt;br /&gt;----+--------+------&lt;br /&gt;  2 | Dupond |     &lt;br /&gt;  3 | Durand |     &lt;br /&gt;  4 | Dubois |     &lt;br /&gt;(3 rows)&lt;br /&gt;&lt;br /&gt;&lt;/pre&gt;
&lt;h4&gt;Conclusion&lt;/h4&gt;
L'opérateur &lt;code&gt;.*&lt;/code&gt; équivaut à invoquer la source autant de fois que celle-ci a de champs. Si la source est une fonction, cette fonction est donc appelée plusieurs fois (s'il y a plusieurs champs ;)
&lt;p&gt;
C'est-à-dire que lorsqu'on écrit:
&lt;/p&gt;
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;INSERT INTO person (SELECT  (BuildPerson(2, 'Dupond')).*); &lt;/pre&gt;
tout se passe comme si on avait écrit:
&lt;pre class=&quot;sql&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: rgb(0, 34, 170); background-color: rgb(255, 255, 170);&quot;&gt;test=&amp;gt; &lt;br /&gt;INSERT INTO person (SELECT  (BuildPerson(2, 'Dupond')).id, &lt;br /&gt;                            (BuildPerson(2, 'Dupond')).name, &lt;br /&gt;                            (BuildPerson(2, 'Dupond')).data);&lt;/pre&gt;
&lt;pre class=&quot;result&quot; style=&quot;margin: 2em 4em; padding: 0.7ex; line-height: 1.4ex; color: yellow; background-color: rgb(34, 34, 136);&quot;&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;NOTICE:  BuildPerson(2, 'Dupond')&lt;br /&gt;INSERT 0 1&lt;/pre&gt;
&lt;p&gt;N'hésitez pas à me faire part de vos remarques, suggestions, et bien sûr expérimentations autour de cet article :)
&lt;/p&gt;
&lt;p align=&quot;right&quot;&gt;&lt;em&gt;— Michelle Baert —&lt;/em&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Script OCF (heartbeat-2) pour pgbouncer</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/292" rel="alternate" type="text/html"
    title="Script OCF (heartbeat-2) pour pgbouncer" />
    <id>urn:md5:5875a6b0621ec2881df69315f1a89aa8</id>
    <published>2008-05-23T14:59:00+00:00</published>
    <updated>2008-10-14T16:35:40+00:00</updated>
    <author><name>tigrou3tac</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;Voici en pièces jointes 2 fichiers permettant de configurer pgbouncer
sur un pool de serveurs afin de créer un cluster HA pour pgbouncer.&lt;/p&gt;    &lt;p&gt;Le fichier ocf-pgbouncer.txt est un script adapté du script ocf Evmsd fourni par heartbeat-2.
Il y a une ou deux gruikeries (return 7 au lieu du code retour OCF) mais il est fonctionnel
(la bascule s'effectue bien en cas de standby, défaillance serveur, coupure heartbeat, crash pgbouncer ...).&lt;/p&gt;
&lt;p&gt;L'avant dernière ligne (ocf_log debug ...) peut être commenté, à la charge du sysadmin de décider.&lt;/p&gt;
&lt;p&gt;Le fichier cib.xml permet la configuration de heartbeat2 afin de créer le cluster HA pour pgbouncer.
Il gère l'attribution de l'alias IP (sur lequel écoutera pgbouncer) et le démarrage de pgbouncer.&lt;/p&gt;
&lt;p&gt;Version des logiciels utilisés :&lt;/p&gt;
&lt;ul&gt;&lt;li&gt;linux debian ecth &lt;/li&gt;
&lt;li&gt;kernel 2.6.24-3-grsec &lt;/li&gt;
&lt;li&gt;heartbeat-2 2.1.3-5~bpo40+1 &lt;/li&gt;
&lt;li&gt;pgbouncer 1.1.2-0rc1
&lt;/li&gt;
&lt;/ul&gt;</content>
    
          <link rel="enclosure" href="http://blog2.postgresql.fr/public/cib.xml"
      length="3230" type="application/xml" />
          <link rel="enclosure" href="http://blog2.postgresql.fr/public/ocf-pgbouncer.sh"
      length="3272" type="text/plain" />
    

    
      </entry>
    
  <entry>
    <title>Script OCF (heartbeat-2) pour pgbouncer</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/222" rel="alternate" type="text/html"
    title="Script OCF (heartbeat-2) pour pgbouncer" />
    <id>urn:md5:d8a69d230d53dc37162c621dc2f6f99d</id>
    <published>2008-02-04T12:11:00+00:00</published>
    <updated>2008-10-13T21:34:03+00:00</updated>
    <author><name>tigrou3tac</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">Ce script est une adaptation du script ocf Evmsd fourni par
heartbeat-2,
il y a une ou deux gruikerie (return 7 au lieu du code retour OCF)
mais il est fonctionnel (la bascule s'effectue bien en cas de standby,
défaillance serveur, coupure heartbeat, crash pgbouncer ...)    version des softs :&lt;br /&gt;- linux         debian etch
&lt;br /&gt;- kernel        2.6.19-7-grsec
&lt;br /&gt;- heartbeat-2   2.1.2-1~bpo40+2
&lt;br /&gt;- pgbouncer     1.1.2-0rc1
&lt;br /&gt;</content>
    
          <link rel="enclosure" href="http://blog2.postgresql.fr/public/ocf-pgbouncer.txt"
      length="3272" type="text/plain" />
    

    
      </entry>
    
  <entry>
    <title>Un article de 01net</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/268" rel="alternate" type="text/html"
    title="Un article de 01net" />
    <id>urn:md5:68d46ce2cc03b1a0c41be6cc94463391</id>
    <published>2008-01-31T17:04:00+00:00</published>
    <updated>2008-10-13T21:22:14+00:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;p&gt;
À l'occasion de SolutionsLinux, 01net rappelle la robustesse de PostgreSQL et souligne le dynamisme de la communauté.
&lt;/p&gt;
&lt;p&gt;
L'article est en ligne &lt;a href=&quot;http://www.01net.com/editorial/370746/postgresql-et-ingres-soulignent-leurs-differences-avec-mysql/&quot;&gt;sur le site de 01net&lt;/a&gt;.
&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>PostgreSQL et Ruby</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/264" rel="alternate" type="text/html"
    title="PostgreSQL et Ruby" />
    <id>urn:md5:3d10ab9c0bab85294182ccfbcd55682a</id>
    <published>2007-12-10T09:42:00+00:00</published>
    <updated>2008-10-13T21:25:02+00:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;h2&gt;Extracteur de tables&lt;/h2&gt;
&lt;p&gt;Trouvé sur le site &lt;a href=&quot;http://www.geekz.fr&quot;&gt; We are Geeks&lt;/a&gt;, un extracteur de tables pour PostgreSQL.&lt;/p&gt;
&lt;p&gt;Il s'agit d'extraire d'une base de données les informations nécessaires à sa recréation.&lt;/p&gt;
&lt;p&gt;Tout est là&amp;nbsp;: &lt;a href=&quot;http://www.geekz.fr/Extracteur-de-tables-postgresql&quot;&gt;Extracteur PG en ruby&lt;/a&gt;.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Pourquoi préférer PostgreSQL à MySQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/216" rel="alternate" type="text/html"
    title="Pourquoi préférer PostgreSQL à MySQL" />
    <id>urn:md5:2cb14e546dcd5f78f9d9d6072a666d42</id>
    <published>2007-10-24T13:58:00+00:00</published>
    <updated>2008-10-14T06:06:17+00:00</updated>
    <author><name>kryskool</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;&lt;/p&gt;    &lt;h1&gt;Pourquoi préférer PostgreSQL à MySQL&amp;nbsp;: comparatif de fiabilité et de rapidité en 2007&lt;/h1&gt;
&lt;h2&gt;Introduction&lt;/h2&gt;
&lt;p&gt;
Pendant des années, le marché considérait MySQL comme plus rapide et plus facile à utiliser que PostgreSQL.
PostgreSQL avait la réputation d'être plus puissant, focalisé sur l'intégrité des données, et plus respectueux des normes SQL, mais également plus lent et plus compliqué à utiliser.
&lt;/p&gt;
&lt;p&gt;
Ces perceptions appartiennent au passé, et avec les versions actuelles, les choses ne sont plus aussi tranchées qu'auparavant. Les deux systèmes ont évolué avec des versions notables qui rendent leur comparaison beaucoup plus compliquée.&lt;!--break--&gt;
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;MySQL 5.0 (Octobre 2005) a finalement ajouté un « strict mode » pour réduire l'écart en terme d'intégrité des données et de conformité aux spécifications. Le support des procédures stockées, des vues, des déclencheurs et des curseurs, fonctionnalités essentielles dans de nombreux cas de déploiement de base de données, a aussi été ajouté.&lt;/li&gt;
&lt;li&gt;PostgreSQL 8.1 (Novembre 2005) améliore considérablement les performances, particulièrement en terme d'évolutivité. Une attention particulière a été portée sur l'amélioration des performances pour toutes les versions 8.X, dont l'actuelle 8.2.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
Alors que l'innovation sur ces deux SGBD a progressé, chacune des communautés de développement a travaillé activement à réduire la liste de ses désavantages perçus. Le résultat est qu'il est devenu plus difficile de déterminer objectivement la base de données la plus adaptée à une application donnée.
&lt;/p&gt;
&lt;p&gt;
Ce document vise à présenter les situations dans lesquelles PostgreSQL est plus approprié que MySQL, en essayant de comparer équitablement les versions de production actuelles et d'en discuter les forces et faiblesses. Les domaines principalement étudiés ici concernent les questions fondamentales de l'intégrité des données et la rapidité du noyau logiciel de la base de données. Puisqu'il est souvent question de faire un choix entre performance et fiabilité, ces deux sujets doivent être considérés conjointement afin d'avoir une vision précise de l'ensemble.
&lt;/p&gt;
&lt;p&gt;
En résumé, ce document apporte les éléments permettant d'affirmer que la génération actuelle de PostgreSQL répond aussi bien, voire mieux, que MySQL lorsque les deux SGBD sont envisagés dans une application exigeant un haut degré d'intégrité des données au sein d'une base de données transactionnelle, en particulier si l'on considère un nombre important d'utilisateurs et des requêtes complexes. PostgreSQL conserve, de plus, son avance dans la conformité aux standards SQL et dans la richesse de ses fonctionnalités.
Ce document tente également de mettre en avant l'approche fondamentale qui prévaut depuis les origines de PostgreSQL, la priorité est d'obtenir un comprotement fiable et prévisible. À l'inverse, le développement de MySQL résulte plus de rapiècements visant à ajouter des fonctionnalités (support des transactions et « strict mode », par exemple) qui n'étaient même pas envisagées au début.
&lt;/p&gt;
&lt;!-- SAS... --&gt;
&lt;h2&gt;Comparaison des versions, ensemble de fonctionnalités et détails&lt;/h2&gt;
&lt;p&gt;
Les versions actuelles recommandées en production en ce mois d'Août 2007 sont &lt;strong&gt;PostgreSQL 8.2&lt;/strong&gt; et &lt;strong&gt;MySQL 5.0&lt;/strong&gt;, et feront donc ici l'objet de notre comparaison. PostgreSQL 8.1 et 8.2 sont aujourd'hui les deux versions supportées avec de bonnes performances, certains des commentaires suivant pourront y faire références indistinctement. 8.2 est sensiblement plus rapide (peut-être pas moins de 30% sur certaines tâches), mais déployer 8.1 reste une option tout à fait viable pour le moment, particulièrement dû au fait que les vendeurs de système d'exploitation la distribuent et la prennent en charge plus souvent que la 8.2 encore relativement récente.
&lt;/p&gt;
&lt;p&gt;
Les deux systèmes ont en ce moment des versions en phase de tests (PostgreSQL 8.3 et MySQL 5.1) qui offrent de nouvelles améliorations dans plusieurs domaines traités ici, mais aucune des deux n'apporte de différences fondamentales si importantes qu'elles laisseraient penser que les principales orientations de ce document en seraient infirmées. La sortie officielle du moteur Falcon de MySQL est probablement l'un des futur points perturbateur à l'horizon. La fonctionnalité de &lt;a href=&quot;http://docs.postgresqlfr.org/8.3/wal-async-commit.html&quot;&gt;Validation Asynchrone&lt;/a&gt; (Asynchronous Commit) dans PostgreSQL 8.3 est un autre évènement prochain qui étendra significativement les différentes options disponibles pour affiner la configuration entre fiabilité et performance.
&lt;/p&gt;
&lt;p&gt;
Ce qui ne sera pas spécifiquement abordé ici, seront les fonctionnalités des deux produits dans des domaines extérieurs à ces fondamentaux. À cause de l'importance des changements dans PostgreSQL 8.1 and MySQL 5.0, beaucoup des documents concernant ce sujet sont trop vieux pour être recommandés. Incluant certaines pages qui auraient pû être utiles :
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://www.devx.com/dbzone/Article/29480&quot; target=&quot;_blank&quot;&gt;Matrice de comparaison des fonctionnalités des bases de données Open Source&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://monstera.man.poznan.pl/wiki/index.php/Mysql_vs_postgres&quot; target=&quot;_blank&quot;&gt;MySQL contre PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://dev.mysql.com/doc/refman/5.1/en/roadmap.html&quot; target=&quot;_blank&quot;&gt;Prévision de développement de MySQL&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://developer.postgresql.org/index.php/Feature_Matrix&quot; target=&quot;_blank&quot;&gt;Matrice des fonctionnalités de PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
Alors que les listes des fonctionnalités sont utiles, certains comportements internes nécessitent une compréhension profonde des systèmes respectifs pour bien les saisir. Par exemple, les mécanismes internes concernant la façon dont PostgreSQL compresse les données TOAST sont invisibles aux utilisateurs, mais peuvent mener à une amélioration drastique des performances système sur certains types de donnée.
&lt;/p&gt;
&lt;p&gt;
Un autre sujet qui sort du cadre de ce document est qu'un nombre plus important d'applications choisissent MySQL comme base de données plutôt que PostgreSQL, et ceci est certainement un facteur d'influence important sur le choix de la base la plus adaptée à une situation particulière. Le travail pour ajouter un support PostgreSQL à plusieurs &lt;a href=&quot;http://developer.postgresql.org/index.php/Category:Software_Ports&quot;&gt;applications populaires&lt;/a&gt; peut-être mené en adaptant les logiciels. Une chose que vous devez considérer lorsque vous étudiez comment les applications utilisent MySQL est que si elles sont initialement destinées aux versions antérieures à 5.0, elles pourraient alors ne plus être compatibles avec les nouvelles fonctionnalités comme le mode strict ajouté dans cette version. Si cela est le cas, de telles applications pourraient être limitées aux capacités des plus vieilles versions pour lesquelles elles ont été écrites et pourraient demander un effort d'adaptation pour profiter des fonctionnalités modernes de MySQL.
&lt;/p&gt;
&lt;h2&gt;Fiabilité&lt;/h2&gt;
&lt;h3&gt;Intégrité des données&lt;/h3&gt;
&lt;p&gt;
Avant la version 5.0, MySQL méritait clairement sa réputation à propos de l'incohérence des données insérées dans la base. &lt;a href=&quot;http://dev.mysql.com/tech-resources/articles/mysql-data-integrity.html&quot; target=&quot;_blank&quot;&gt;Guaranteeing Data Integrity with MySQL 5.0&lt;/a&gt; explique les problèmes avec ces plus vieilles versions de MySQL, et comment ils pourraient être évités en utilisant le &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/en/server-sql-mode.html&quot; target=&quot;_blank&quot;&gt;Mode SQL&lt;/a&gt; strict disponible dans la version actuelle. Bien entendu, tout client MySQL a la possibilité de changer son mode SQL et contourner ainsi ce comportement, avec comme conséquences que ces validations de contraintes ne soient plus forcément assurées coté serveur.
&lt;/p&gt;
&lt;p&gt;
PostgreSQL a toujours été strict sur la validation des données avant de les insérer dans la base de données, et il n'existe aucune alternative au client pour contourner ces vérifications.
&lt;/p&gt;
&lt;h3&gt;Transactions et moteur interne de la base de donnée&lt;/h3&gt;
&lt;p&gt;
&lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/myisam-storage-engine.html&quot; target=&quot;_blank&quot;&gt;MyISAM&lt;/a&gt; est le composant interne de MySQL à l'origine de sa réputation de rapidité. Ce moteur a d'excellentes performances en lecture et son analyseur est vraiment très efficace pour les requêtes simples, ce qui le rend très rapide pour les applications en lecture intensive comme les applications web qui emploient de simples SELECT. Cependant, il est communément connu que MyISAM est plus vulnérable aux &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/corrupted-myisam-tables.html&quot; target=&quot;_blank&quot;&gt;corruptions de données&lt;/a&gt; que la plupart des bases de données sérieuses ne sauraient tolérer, et en cas d'incident, il peut s'écouler un temps non négligeable durant lequel il reconstruit ses index avant que le serveur ne puisse redémarrer. En outre, il ne supporte pas les clés étrangères ou les transactions qui auraient permis à la base d'avoir des propriétés &lt;a href=&quot;http://fr.wikipedia.org/wiki/Propri%C3%A9t%C3%A9s_ACID&quot; target=&quot;_blank&quot;&gt;ACID&lt;/a&gt;. MyISAM a aussi un problème avec les accès concurrents en lecture et mise à jour car ne supporte que les verrous de niveau table.
&lt;/p&gt;
&lt;p&gt;
L'intégration du &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/innodb.html&quot; target=&quot;_blank&quot;&gt;moteur de stockage InnoDB&lt;/a&gt; à MySQL a grandement surpassé MyISAM en terme d'intégrité des données, ajoutant un mécanisme de ré-exécution des journaux plus robuste pour la restauration après incident et supportant des transactions ACID. Cependant, cette nouvelle approche apporte aussi beaucoup plus de charge, et les tables InnoDB ne sont pas aussi rapides que les MyISAM pour les accès en lecture pure. De plus, les tables des métadonnées internes à MySQL sont toujours stockées en MyISAM, ce qui signifie qu'elles restent vulnérables aux traditionnels problèmes de corruption associés à ce moteur de stockage. Ce problème peut-être contourné en utilisant plusieurs &lt;a href=&quot;http://forge.mysql.com/wiki/MySQL_Internals_Data_and_meta-data_locking&quot; target=&quot;_blank&quot;&gt;méthodes de verrous&lt;/a&gt; compliqués qui peuvent potentiellement bloquer l'édition d'une table pendant un certain temps.
&lt;/p&gt;
&lt;p&gt;
Vous devez aussi savoir que dans certaines conditions il est possible de créer ce que vous pensez être une table InnoDB transactionnel sûre, mais que vous obteniez en réalité du MyISAM non-ACID. Comme trop souvent avec MySQL, cela ne provoquera pas d'erreur, et il fera discrètement à la place ce qu'il ne faut pas. Consultez «&amp;nbsp;&lt;a href=&quot;http://sql-info.de/en/mysql/database-definition.html#2_4&quot; target=&quot;_blank&quot;&gt;Whoops, no InnoDB table support&lt;/a&gt;&amp;nbsp;» pour savoir comment vérifier que vous avez ce que vous vouliez lors de la création de vos tables sur un système qui utiliserait une vieille version de MySQL.
&lt;/p&gt;
&lt;p&gt;
PostgreSQL a toujours porté attention à l'intégrité des données au niveau transactionnel, se gardant ainsi des problèmes de verrou au minimum, et empêchant une erreur matériel ou une configuration extrêmement mauvaise de corrompre la base de données.
&lt;/p&gt;
&lt;p&gt;
Il est intéressant de souligner que PostgreSQL intègre entièrement son moteur de base de donnée, alors que InnoDB est un produit sous licence double actuellement détenu par la société Oracle. L'histoire ne dit pas comment Oracle modifiera InnoDB dans le futur sachant qu'ils sont eux-même en concurrence avec MySQL AB, alors que PostgreSQL n'a aucun conflit d'intérêts de la sorte. MySQL AB développe un nouveau moteur de base de données interne appelé &lt;a href=&quot;http://dev.mysql.com/doc/falcon/en/index.html&quot; target=&quot;_blank&quot;&gt;Falcon&lt;/a&gt; afin de se libérer de cette situation, mais historiquement, développer un de moteur de base rapide et fiable nécessite de nombreuses d'années de travail et de tests avant d'obtenir un produit mûr convenant à la production. Les &lt;a href=&quot;http://www.mysqlperformanceblog.com/2007/01/08/innodb-vs-myisam-vs-falcon-benchmarks-part-1/&quot; target=&quot;_blank&quot;&gt;premières évaluations&lt;/a&gt; suggèrent que Falcon a énormément de points d'approximations qui ont besoins d'être corrigés.
&lt;/p&gt;
&lt;h3&gt;Clés étrangères&lt;/h3&gt;
&lt;p&gt;
L'implémentation correcte des techniques de conception comme les &lt;a href=&quot;http://fr.wikipedia.org/wiki/Forme_normale_%28bases_de_donn%C3%A9es_relationnelles%29&quot; target=&quot;_blank&quot;&gt;formes normales&lt;/a&gt; repose sur la capacité de la base de données à utiliser les &lt;a href=&quot;http://en.wikipedia.org/wiki/Foreign_key&quot;&gt;clés étrangères&lt;/a&gt; pour représenter les relations entre les tables. Avec MySQL, seul &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/ansi-diff-foreign-keys.html&quot; target=&quot;_blank&quot;&gt;InnoDB supporte les clés étrangères&lt;/a&gt;. Un problème avec leur implémentation est qu'elle est limitée et ignorera silencieusement plusieurs syntaxes standard. Par exemple, lors de la création d'une table, même avec la prochaine version 5.1 de MySQL &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.1/fr/create-table.html&quot; target=&quot;_blank&quot;&gt;la clause CHECK est analysée mais ignorée par tous les moteurs de stockage&lt;/a&gt;. La philosophie de conception à la base de PostgreSQL est de produire des erreurs ou des avertissements dans les situations similaires où une opération est ambigüe ou non supportée.
&lt;/p&gt;
&lt;h3&gt;DDL transactionnel&lt;/h3&gt;
&lt;p&gt;
Avec PostgreSQL, lorsque vous êtes à l'intérieur d'une transaction presque toute opération peut être annulée. Il existe quelque opérations irréversibles (comme créer ou détruire une base ou un tablespace), mais les modifications classiques de table peuvent être défaites en exécutant un &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/sql-rollback.html&quot; target=&quot;_blank&quot;&gt;ROLLBACK&lt;/a&gt; grâce aux mécanismes de &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/wal.html&quot; target=&quot;_blank&quot;&gt;Write-Ahead Log&lt;/a&gt;. Cela s'applique aussi aux importantes modifications &lt;a href=&quot;http://fr.wikipedia.org/wiki/Langage_de_d%C3%A9finition_de_donn%C3%A9es&quot; target=&quot;_blank&quot;&gt;DDL&lt;/a&gt; comme la création de tables.
&lt;/p&gt;
&lt;p&gt;
MySQL ne supporte aucun type d'annulation en utilisant MyISAM. Avec InnoDB, le serveur déclenche une &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/implicit-commit.html&quot; target=&quot;_blank&quot;&gt;validation implicite&lt;/a&gt; même si le comportement normal d'auto-commit est désactivé. Celà signifie qu'une unique modification de table ou changement similaire est immédiatement validé.
&lt;/p&gt;
&lt;p&gt;
Les DBA PostgreSQL expérimenté savent tirer parti de ces fonctionnalités pour s'assurer lors de travaux compliqués comme la mise à jour d'un schéma. Si vous placez tous ces changements dans une transaction, vous pouvez être certain qu'elles seront toutes appliquées de façon atomique ou pas du tout. Cela abaisse drastiquement la possibilité de corruption de la base de données par une erreur de frappe ou tout autre erreur de ce genre dans les modifications du schéma, ce qui est particulièrement important lorsque vous modifiez plusieurs tables en relations où une erreur peut détruire la clé relationnelle. Il n'existe aucune méthode similaire pour ajuster sûrement plusieurs sections d'un schéma avec MySQL.
&lt;/p&gt;
&lt;p&gt;Voir &lt;a href=&quot;http://www.postgresql.org/docs/techdocs.84&quot; target=&quot;_blank&quot;&gt;Transactional DDL in PostgreSQL: A Competitive Analysis&lt;/a&gt; pour des exemples détaillés démontrant ces différences.&lt;/p&gt;
&lt;h2&gt;Rapidité&lt;/h2&gt;
&lt;h3&gt;Configuration par défaut&lt;/h3&gt;
&lt;p&gt;
Historiquement, la configuration initiale de PostgreSQL était dimensionnée pour supporter les plus vieilles variantes d'UNIX où l'allocation de grande quantité de mémoire n'était pas nécessairement possible. Le résultat fût que son utilisation de la mémoire cache pour les résultats était, par défaut, très pessimiste. Sur les systèmes modernes qui possèdent beaucoup de mémoire libre, cela handicap fortement les performances d'un PostgreSQL non configuré.
&lt;/p&gt;
&lt;p&gt;
Les valeurs par défaut sont beaucoup moins pessimistes dans les versions récentes. Désormais la configuration système est examinée au moment de l'initialisation de la base de la données et plus de mémoire sera allouée s'il est possible de le faire. Le résultat, c'est qu'une configuration par défaut non modifiée d'une version récente de PostgreSQL s'exécutera significativement mieux qu'une version plus ancienne. De plus, des changements dans la gestion du cache dans les versions 8.1 et 8.2 permettent même une utilisation plus efficace du cache en quantité modeste.
&lt;/p&gt;
&lt;p&gt;
Le premier des réglages sur les deux systèmes fonctionne de façon similaire, en allouant un bloc de mémoire partagée dédiée à la base de données. MySQL règle cela avec &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/server-parameters.html&quot; target=&quot;_blank&quot;&gt;key_buffer_size&lt;/a&gt; en utilisant MyISAM, et &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/en/innodb-parameters.html&quot; target=&quot;_blank&quot;&gt;innodb_buffer_pool_size&lt;/a&gt; avec InnoDB (notez que vous aurez toujours besoin d'un espace MyISAM pour les tables systèmes même lorsque InnoDB est le moteur de stockage principal de vos tables normales). PostgreSQL taille son espace mémoire principal avec &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/runtime-config-resource.html&quot; target=&quot;_blank&quot;&gt;shared_buffers&lt;/a&gt;.
&lt;/p&gt;
&lt;p&gt;
Dans MySQL, key_buffer_size utilise par défaut 8&amp;nbsp;Mo de mémoire. Les premières configurations de PostgreSQL alloueraient aussi 8&amp;nbsp;Mo de mémoire pour le cache shared_buffers si possible. Sur un serveur de type linux de génération actuelle, il est admis qu'une version récente de PostgreSQL assigne au moins 24&amp;nbsp;Mo par défaut à shared_buffers lors de la création du cluster.
&lt;/p&gt;
&lt;p&gt;
Il est toujours possible de parcourir les fichiers de configuration afin de les adapter à la mémoire libre du serveur de la base de données, comme toutes ces valeurs par défaut sont dramatiquement sous-dimensionnées comparé à la quantité de RAM sur les systèmes actuels. Pour un serveur moderne dédié, le principe de base pour PostgreSQL et MySQL est de dimensionner la mémoire dédiée à au moins 1/4 de la mémoire totale de la machine, pouvant grimper à 1/2 de la RAM pour des quantités supérieures à la normale. Il n'est cependant pas hors de question de pousser ce pourcentage encore plus haut sur des systèmes avec une quantité vraiment grande de RAM; Le guide de MySQL InnoDB suggère même que 80% n'est pas déraisonnable. Les directives initiales dans ce domaine peuvent être trouvées dans &lt;a href=&quot;http://www.westnet.com/%7Egsmith/content/postgresql/pg-5minute.htm&quot; target=&quot;_blank&quot;&gt;5-Minute Introduction to PostgreSQL Performance&lt;/a&gt;, &lt;a href=&quot;http://www.databasejournal.com/features/mysql/article.php/3367871&quot; target=&quot;_blank&quot;&gt;Optimizing the mysqld variables&lt;/a&gt; et &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/optimizing-the-server.html&quot; target=&quot;_blank&quot;&gt;Optimizing the MySQL Server&lt;/a&gt;.
&lt;/p&gt;
&lt;h2&gt;Tests de performances&lt;/h2&gt;
&lt;p&gt;
Les tests de performances sont vraiment compliqués à réaliser correctement&amp;nbsp;; créer des tests vraiment comparables est un art complexe. Beaucoup des tests de performances qui ont présenté MySQL comme plus rapide que PostgreSQL ont souffert de nombreuses zones de problèmes&amp;nbsp;:
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Configuration : il n'est pas impossible de voir un MySQL configuré comparé à une instance de PostgreSQL qui ne l'est pas. Comme indiqué plus haut, un PostgreSQL non configuré a une utilisation particulièrement péssimiste des ressources qu'il a à sa disposition. Une comparaison réellement juste utiliserait la même quantité de mémoire sur les deux systèmes.&lt;/li&gt;
&lt;li&gt;Support des transactions : les tests de MyISAM impliquent des «&amp;nbsp;transactions&amp;nbsp;» qui ne fournissent aucune des garanties ACID que PostgreSQL offre. Cela revient généralement à comparer des pommes à des oranges.&lt;/li&gt;
&lt;li&gt;Groupement de transactions : relatif au point précédent, PostgreSQL serait parfois affecté par des tests simplets qui ne groupent pas correctement les transactions comme les applications le feraient. Cela n'ajoute pas seulement le coût d'une transaction, mais peut-être celui de centaines de milliers, au coût total de la réalisation des modifications.&lt;/li&gt;
&lt;li&gt;Comportements en série ou en parallèle : un certain nombre de comportement de MyISAM sont ajustés pour n'avoir qu'un seul utilisateur accèdant à la base. Par exemple, son utilisation des verrous de table lors d'accès à celles-ci implique qu'avec de nombreux accès utilisateurs, MyISAM ralentira dramatiquement. Les performances de PostgreSQL se dégradent plus harmonieusement avec de grande quantité de connexions simultanées. Méfiez-vous des tests qui n'impliquent qu'un simple flot de requêtes sur la base à travers une unique connexion.&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Résultats des tests de performances de Sun Microsystems 2007 jAppServer2004&lt;/h2&gt;
&lt;p&gt;
Sun Microsystems, un constructeur neutre vendant du matériel qui supporte beaucoup de bases de données différentes, a récemment publié les résultats de ses tests sur le très règlementé &lt;a href=&quot;http://www.spec.org/jAppServer2004/&quot; target=&quot;_blank&quot;&gt;SPECjAppServer2004&lt;/a&gt; en utilisant &lt;a href=&quot;http://www.spec.org/jAppServer2004/results/res2007q3/jAppServer2004-20070606-00065.html&quot; target=&quot;_blank&quot;&gt;PostgreSQL&lt;/a&gt; et &lt;a href=&quot;http://www.spec.org/jAppServer2004/results/res2007q2/jAppServer2004-20070411-00063.html&quot; target=&quot;_blank&quot;&gt;MySQL&lt;/a&gt;. Le peu de &lt;a href=&quot;http://www.mysqlperformanceblog.com/2007/07/25/mysql-and-postgresql-specjappserver-benchmark-results/&quot; target=&quot;_blank&quot;&gt;différences matériels&lt;/a&gt; entre les deux systèmes suffit pour ne pas comparer les deux résultats directement. Mais le fait que les deux résultats soient assez proches avec une configuration similaire suggère que, malgré des performances différentes entre les deux bases, l'importance de cette différence n'est pas particulièrement grande avec ce type d'application.
&lt;/p&gt;
&lt;p&gt;
Par comparaison, un &lt;a href=&quot;http://www.spec.org/jAppServer2004/results/res2007q2/jAppServer2004-20070410-00060.html&quot; target=&quot;_blank&quot;&gt;Oracle sur HP&lt;/a&gt; offre des résultats comparable en performance sur du matériel moins impressionnant, suggérant ainsi que les deux bases de données open-source ont toujours du retard sur le meilleur des produits commerciaux en terme d'efficacité des performances. Certains prétendent que la &lt;a href=&quot;http://kevinclosson.wordpress.com/2007/07/18/application-server-benchmark-proves-postgresql-is-the-best-enterprise-database-server-new-specjappserver2004-cost-metric-introduced-too/&quot; target=&quot;_blank&quot;&gt;supériorité d'Oracle&lt;/a&gt; est encore plus grande en choisissant des exemples qui le mettent plus en valeur, mais assurez-vous de bien lire le &lt;a href=&quot;http://blogs.ittoolbox.com/database/soup/archives/benchmark-brouhaha-17939&quot; target=&quot;_blank&quot;&gt;Brou-Ha-Ha du test&lt;/a&gt; à la recherche de commentaires à propos du tarif en cours (et de relever quelques commentaires sur des &lt;a href=&quot;http://www.spec.org/jAppServer2004/results/res2007q3/jAppServer2004-20070703-00073.html&quot; target=&quot;_blank&quot;&gt;résultats secondaires&lt;/a&gt; utilisant un serveur plus petit avec PostgreSQL). Notez que Josh Berkus est un employé de Sun et qu'il est aussi un des membres de &lt;a href=&quot;http://www.postgresql.org/developer/bios&quot; target=&quot;_blank&quot;&gt;l'équipe principal de PostgreSQL&lt;/a&gt;, et son commentaire devrait être évalué en conséquence.
&lt;/p&gt;
&lt;p&gt;
Si vous faites une comparaison équitable en incluant le coût des licences, la performance par dollar paraît semblable pour PostgreSQL et MySQL et très bon relativement à la moyenne dans l'industrie de base de données. Il serait cependant faux de dire que ces solutions open-source sont toujours un meilleur choix que les offres commerciales comme Oracle en se basant seulement là dessus&amp;nbsp;; les fonctionnalités et performances absolues de chacune des solutions doivent certainement être prises en compte aussi.
&lt;/p&gt;
&lt;h2&gt;Verrou de transaction et extensibilité&lt;/h2&gt;
&lt;p&gt;
PostgreSQL utilise un modèle de verrous robuste appelé &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/mvcc.html#mvcc-intro&quot; target=&quot;_blank&quot;&gt;MVCC&lt;/a&gt; qui limite les situations où les clients interfèrent les uns avec les autres. Un court résumé du principal bénéfice du MVCC serait «&amp;nbsp;les lecteurs ne sont jamais bloqués par les écritures&amp;nbsp;». MVCC est utilisé pour implémenter une &lt;a href=&quot;http://www.postgresql.org/docs/current/static/transaction-iso.html&quot; target=&quot;_blank&quot;&gt;vision pessimiste&lt;/a&gt; des quatre niveaux d'isolation standards de SQL : « lorsque vous sélectionnez le niveau &quot;Read Uncommited&quot; (Lecture de données non validées), vous avez en réalité &quot;Read Committed&quot; (Lecture de données validées), et quand vous sélectionnez &quot;Repeatable Read&quot; (Lecture répétée) vous aurez en réalité &quot;Serializable&quot; (Sérialisable), donc le niveau d'isolation actuel pourrait être plus strict que ce que vous sélectionnez ». Le niveau d'isolation des transactions par défaut est &quot;read commited&quot;.
&lt;/p&gt;
&lt;p&gt;
InnoDB de MySQL &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/innodb-multi-versioning.html&quot; target=&quot;_blank&quot;&gt;implémente MVCC&lt;/a&gt; en utilisant un espace d'annulation (rollback segment), inspiré par la conception d'Oracle ; leur nouveau moteur Falcon fonctionne de la même manière. Les bases de données InnoDB supportent les quatre standards &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/en/innodb-transaction-isolation.html&quot; target=&quot;_blank&quot;&gt;d'isolation de transaction SQL&lt;/a&gt;, celui par défaut étant «&amp;nbsp;Repeatable Read&amp;nbsp;».
&lt;/p&gt;
&lt;p&gt;
Lorsque l'on compare les deux modèles, PostgreSQL assure une séparation des clients tel que les données traitées soient toujours cohérentes dans toutes les circonstances ; comme la documentation MVCC l'établit, «&amp;nbsp;la raison pour laquelle PostgreSQL fournit seulement deux niveaux d'isolation est qu'il s'agit de la seule façon raisonnable de faire correspondre les niveaux d'isolation standards avec l'architecture de contrôle des accès simultanés multiversion&amp;nbsp;». MySQL autorise des configurations où le code d'un client qui ne valide pas correctement ses transactions peut aboutir à une vue des données qui serait considérée comme incohérente par les standards stricts de PostgreSQL. Cependant, dans les situations où il est acceptable d'avoir des lectures avec de petites incohérences, avoir la possibilité d'utiliser des verrous moins stricts peut être un avantage en terme de performances dans MySQL.
&lt;/p&gt;
&lt;p&gt;
Même lorsque les deux systèmes sont configurés avec l'un des niveaux stricts des verrous de transaction, les différences entre les deux implémentations sont suffisamment subtiles qu'il est difficile de définir clairement quelle sera la plus appropriée pour une application particulière. Une lecture recommandée pour comprendre ce sujet compliqué est &lt;a href=&quot;http://www.amazon.com/Transactional-Information-Systems-Algorithms-Concurrency/dp/1558605088/&quot; target=&quot;_blank&quot;&gt;Transactional Information Systems: Theory, Algorithms, and the Practice of Concurrency Control&lt;/a&gt; de Weikum &amp;amp; Vossen. En utilisant les termes qui y sont employés, PostgreSQL utilise un tri daté multiversion (multi-version timestamp ordering - MVTO) tandis que InnoDB et Oracle utilisent la cohérence des lectures multiversions (multi-version read consistency - MVRC). La principale différence est que PostgreSQL est avec-REFAIT/sans-ANNULE (with-REDO/no-UNDO) car il enregistre chaque version des lignes dans la table principale, alors que Oracle/InnoDB implémente avec-REFAIT/avec-ANNULE (with-REDO/with-UNDO) où ils reconstruisent un bloc et/ou l'image d'une ligne depuis les journaux afin de proposer une lecture consistante. Si vous êtes prêt à aborder une troisième architecture, celle de DB2 d'IBM, d'autres bonnes références sur le propos pour comparaisons sont &lt;a href=&quot;http://www.ibphoenix.com/main.nfs?page=ibp_mvcc_roman&quot; target=&quot;_blank&quot;&gt;A not-so-very technical discussion of Multi Version Concurrency Control&lt;/a&gt; et &lt;a href=&quot;http://www-128.ibm.com/developerworks/db2/library/techarticle/dm-0603wasserman2/index.html&quot; target=&quot;_blank&quot;&gt;Leverage your PostgreSQL V8.1 skills to learn DB2&lt;/a&gt;. IBM n'est clairement pas fan de l'approche MVCC.
&lt;/p&gt;
&lt;p&gt;
En parti à cause de l'implémentation très mature des verrous dans PostgreSQL (elle est toujours active et les performances du code associé est par conséquent critique), même dans les situations où MySQL paraît initialement plus rapide PostgreSQL peut aller plus loin et arriver à un débit plus élevé lorsque le nombre d'utilisateurs simultanés devient important. Un bon exemple de ce type de situation est démontré dans le test de base de données de &lt;a href=&quot;http://tweakers.net/reviews/649/7&quot; target=&quot;_blank&quot;&gt;tweakers.net&lt;/a&gt;.
&lt;/p&gt;
&lt;h2&gt;Compter les lignes d'une table&lt;/h2&gt;
&lt;p&gt;
Une opération sur laquelle PostgreSQL est connu pour être lent est de compter la totalité des lignes d'une table, typiquement en utilisant cette requête :
&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;SELECT COUNT(*) FROM table&lt;/p&gt;
&lt;p&gt;
La raison de cette lenteur vient de l'implémentation MVCC de PostgreSQL. Le fait que plusieurs transactions puissent voir différents états de données implique qu'il ne peut y avoir de méthode simple pour &quot;COUNT(*)&quot; pour résumer les données sur l'ensemble de la table ; dans un sens, PostgreSQL doit parcourir toutes les lignes. Cela aboutit normalement sur un parcours séquentiel lisant les informations de chaque ligne de la table.
&lt;/p&gt;
&lt;p&gt;
Certains SGBD fournissent aux requêtes «&amp;nbsp;COUNT(*)&amp;nbsp;» la capacité de fonctionner en consultant un index. Malheureusement, dans PostgreSQL, cette stratégie ne fonctionne pas car l'information de visibilité MVCC n'est pas présente au niveau de l'index. Il est nécessaire d'examiner les lignes elles-même pour déterminer si elles sont visibles pour la transaction.
&lt;/p&gt;
&lt;p&gt;
Dans MySQL, les tables MyISAM conservent en cache l'information sur le nombre de ligne, faisant de ce type de dénombrement des opérations presque instantanées. C'est la raison pour laquelle tant de code MySQL utilisent cette construction présumant que c'est une opération triviale. Mais si vous utilisez InnoDB, ce ne sera plus le cas. Voir &lt;a href=&quot;http://www.mysqlperformanceblog.com/2006/12/01/count-for-innodb-tables/&quot;&gt;COUNT(*) for Innodb Tables&lt;/a&gt; et &lt;a href=&quot;http://www.mysqlperformanceblog.com/2007/04/10/count-vs-countcol/&quot;&gt;COUNT(*) vs COUNT(col)&lt;/a&gt; pour les notes sur les limitations de MySQL dans ce domaine. MySQL admet que déployé sur InnoDB, il ne peut assurer qu'un dénombrement de toutes les lignes soit rapide, et qu'ils sont donc prisonnier des mêmes limitations que celles présentes dans PostgreSQL.
&lt;/p&gt;
&lt;p&gt;
Il est utile de préciser que seule cette forme précise d'aggrégat doit être si pessimiste ; si elle est complétée avec une clause «&amp;nbsp;WHERE&amp;nbsp;» comme :
&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;SELECT COUNT(*) FROM table WHERE status = 'quelque chose'&lt;/p&gt;
&lt;p&gt;
PostgreSQL, MySQL et beaucoup d'autres implémentations de base de données tireront profit de la disponibilités des index pour le champ restreint afin de limiter le nombre d'enregistrements devant être comptés, ce qui accélère grandement de telles requêtes.
&lt;/p&gt;
&lt;p&gt;
Une approche appréciée pour les applications qui ont besoin de compter les lignes et qui peuvent tolérer de ne pas inclure les transactions en cours de réalisation, est d'utiliser un mécanisme à base de trigger pour compter les lignes de la table. Dans PostgreSQL, une autre alternative est d'utiliser le champs reltuples de la table &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/catalog-pg-class.html&quot;&gt;pg_class&lt;/a&gt; du catalogue lorsque seule une valeur approximative est nécessaire.
&lt;/p&gt;
&lt;h2&gt;Jointure complexe&lt;/h2&gt;
&lt;p&gt;
PostgreSQL utilise une méthode économique d'optimisation des requêtes afin d'obtenir de bonne performances pour les différents types de jointures. Le coût des requêtes est évalué à partir des &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/planner-stats.html&quot;&gt;statistiques du planificateur&lt;/a&gt; recueillies lors de l'analyse des tables et combiné avec l'ajustements des &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/runtime-config-query.html&quot;&gt;coûts du planificateur&lt;/a&gt;, et des fonctionnalités avancées tel que le &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/geqo.html&quot;&gt;Genetic Query Optimizer&lt;/a&gt; permettent l'optimisation efficace de jointures très compliquées.
&lt;/p&gt;
&lt;p&gt;
Le planificateur de MySQL n'a pas ce niveau de sophistication, et les options de réglage pour le &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/fr/controlling-optimizer.html&quot;&gt;Controlling Query Optimizer Performance&lt;/a&gt; sont grossières. Les développeurs contournent cela en fournissant par exemple des &lt;a href=&quot;http://dev.mysql.com/doc/refman/5.0/en/index-hints.html&quot;&gt;astuces sur les index&lt;/a&gt; afin de s'assurer que les jointures se fassent correctement. Pour faciliter cette tâche, MySQL fournit un &lt;a href=&quot;http://blog2.postgresql.fr/index.php?post/drupal/&quot; http:=&quot;&quot; dev.mysql.com=&quot;&quot; tech-resources=&quot;&quot; articles=&quot;&quot; using-new-query-profiler.html=&quot;&quot;&gt;Query Profiler&lt;/a&gt; qui typiquement facilite le travail sur ces données EXPLAIN. En dehors de ces astuces, l'optimisation des sous-selections est une faiblesse connue de MySQL. &lt;!--Il existe aussi un bug plutôt sérieux à propos des sous-requêtes nulles dans MySQL 5.0 (qui semble toujours être présent dans MySQL 5.1 pour le moment).--&gt;&lt;!-- ndt : vérifier que le bug &quot;subquery null handling bug&quot; soit toujours d'actualité. les liens donnés ne sont plus correcte. Problème signalé à gsmith, qui propose de retirer la phrase et reviendra vers nous si complément d'info. voir : http://dev.mysql.com/doc/refman/5.0/en/open-bugs.html http://dev.mysql.com/doc/refman/5.1/en/open-bugs.html ? --&gt;
&lt;/p&gt;
&lt;p&gt;
&lt;a href=&quot;http://pooteeweet.org/files/webtuesday0407/finding_order_in_execution.pdf&quot;&gt;Finding order in execution&lt;/a&gt; (définir l'ordre d'exécution) fournit plusieurs points de comparaisons sur les différences de traîtement des requêtes par les deux bases de données. Comme son optimisation automatique est plus robuste, PostgreSQL réalise généralement un meilleur travail avec les jointures compliquées que MySQL -- Mais seulement si le planificateur est configuré correctement (définir une valeur trop petite pour &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/runtime-config-query.html&quot;&gt;effective_cache_size&lt;/a&gt; est une erreur commune) et que les statistiques sur les tables sont maintenues à jour (typiquement via &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/maintenance.html&quot;&gt;autovacuum&lt;/a&gt;). Le fait que vous deviez donner à l'optimiseur de PostgreSQL des informations correctes sur lesquelles travailler, est quelque chose de controversé dans le choix de conception. Les développeurs principaux de PostgreSQL estiment qu'il est plus important de se concentrer sur l'amélioration de l'optimiseur pour qu'il fonctionne correctement dans tous les cas plutôt que d'autoriser les requêtes à introduire des modifications dans le plan comme contournement aux problèmes.
&lt;/p&gt;
&lt;p&gt;
Il y a quelques outils complémentaires pour explorer le planificateur de PostgreSQL. &lt;a href=&quot;http://www.pgadmin.org/&quot;&gt;pgAdmin&lt;/a&gt; inclut une visionneuse de plan d'exécution (&lt;a href=&quot;http://www.pgadmin.org/images/screenshots/pgadmin3_macosx.png&quot;&gt;exemple&lt;/a&gt;). Une autre option est &quot;Visual Explain&quot;, à l'origine un composant de &lt;a href=&quot;http://sources.redhat.com/rhdb/visualexplain.html&quot;&gt;RedHat&lt;/a&gt; qui est maintenant maintenu par &lt;a href=&quot;http://www.enterprisedb.com/&quot;&gt;Enterprise DB&lt;/a&gt;. Il est inclus dans l'offre EnterpriseDB Advanced Server et peut être compilé avec une installation de PostgreSQL en utilisant le code source du paquet &lt;a href=&quot;http://www.enterprisedb.com/products/download.do&quot;&gt;Developer Studio&lt;/a&gt;.
&lt;/p&gt;
&lt;h2&gt;Remerciements et Remarques&lt;/h2&gt;
&lt;p&gt;
Ce document a été écrit par &lt;a href=&quot;http://www.westnet.com/%7Egsmith/&quot;&gt;Greg Smith&lt;/a&gt; incluant de pertinentes contributions de &lt;a href=&quot;http://linuxdatabases.info/&quot;&gt;Christopher Browne&lt;/a&gt;, &lt;a href=&quot;http://pooteeweet.org/&quot;&gt;Lukas Kahwe Smith&lt;/a&gt;, et de beaucoup d'autres membres de la &lt;a href=&quot;http://www.postgresql.org/community/lists/&quot;&gt;liste de diffusion&lt;/a&gt; Advocacy. Quelques unes des références citées dans ce document proviennent d'articles écrits par ces mêmes auteurs.
&lt;/p&gt;
&lt;p&gt;
Corrections, suggestions, coup de gueule, et autres remarques peuvent être adressés à &lt;a href=&quot;mailto:gsmith@gregsmith.com&quot;&gt;Greg&lt;/a&gt;, un consultant indépendant dont le seul lien avec l'équipe de développement mondial consiste à soumettre des patchs pour améliorer la future version 8.3.
&lt;/p&gt;
&lt;p&gt;
Cet &lt;a href=&quot;http://www.postgresql.org/docs/techdocs.83&quot;&gt;article&lt;/a&gt; a été traduit en français par &lt;strong&gt;Guillaume '&lt;em&gt;ioguix&lt;/em&gt;' de Rorthais&lt;/strong&gt; et &lt;strong&gt;Christophe '&lt;em&gt;KrysKool&lt;/em&gt;' Chauvet&lt;/strong&gt;. Merci également aux relecteurs.
&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Index inversé, en C</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/393" rel="alternate" type="text/html"
    title="Index inversé, en C" />
    <id>urn:md5:43cf3901e2be6c02676d84d01ad93a2e</id>
    <published>2007-09-05T18:33:00+00:00</published>
    <updated>2010-05-20T10:04:39+00:00</updated>
    <author><name>gleu</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">    &lt;p&gt;Depuis la version 8i, Oracle implémente les index inversés. Voici une proposition d’implémentation équivalente pour PostgreSQL. Les index inversés permettent d’accélérer les recherches sur les motifs tels que « colonne LIKE '%chaîne' ». Dans un tel cas, PostgreSQL effectue un parcours séquentiel (ou « sequential scan ») de la table interrogée. Toutefois, il est possible d’émuler un index inverse au moyen d’une fonction de renversement de chaîne couplée à un index sur fonction.&lt;/p&gt;
&lt;p&gt;L'&lt;a href=&quot;http://www.postgresqlfr.org/?q=node/1329&quot; hreflang=&quot;fr&quot;&gt;article précédent&lt;/a&gt; proposait l'implémentation d'un prototype en langage procédural PL/pgSQL, qui fait office ici de prototype. Cette implémentation a pour principal défaut d'être lente, pénalisant ainsi gravement les performances en écriture (INSERT et UPDATE). Ainsi, à chaque mise à jour, il est nécessaire de faire appel à la fonction &lt;code&gt;reverse&lt;/code&gt; pour mettre à jour l'index fonctionnel ; cela s'observe notamment à la création de l'index. En revanche, il est possible de tirer partie des capacités de traitement des caractères multi-octets, que l'on rencontre notamment dans le cas d'une base de données encodée en UTF-8.&lt;/p&gt;
&lt;p&gt;Ainsi, l'implémentation en langage C se doit d'être à la fois plus rapide et surtout se doit de supporter les jeux de caractères multi-octets. C'est à partir de ce minuscule cahier des charges que nous allons construire notre fonction &lt;code&gt;reverse&lt;/code&gt;.&lt;/p&gt;
&lt;!--break--&gt;
&lt;h1&gt;Pourquoi écrire une procédure stockée en C&lt;/h1&gt;
&lt;p&gt;Pourquoi s'embêter à prendre le temps d'écrire une procédure stockée en langage C alors qu'il est possible de faire la même chose en langage PL/pgSQL&amp;nbsp;?
Il y a plusieurs réponses à cette question&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Une fonction C permet de &lt;strong&gt;protéger le code&lt;/strong&gt;. En effet, rien n'interdit à un utilisateur possédant les droits nécessaires de modifier la procédure stockée que l'on a écrite et validé par une autre procédure de son crue, rendant le système inopérant.&lt;/li&gt;
&lt;li&gt;Si le besoin de créer son propre type de données se fait sentir, le passage par la case &lt;q&gt;fonction C&lt;/q&gt; est obligatoire.&lt;/li&gt;
&lt;li&gt;La satisfaction de connaître un peu mieux le fonctionnement interne de PostgreSQL, mais c'est surtout une satisfaction de geek :)&lt;/li&gt;
&lt;li&gt;La problématique de la &lt;strong&gt;vitesse&lt;/strong&gt; est toutefois le facteur déterminant de la réécriture d'une fonction d'un langage procédural interprété en langage compilé.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Le gain significatif de vitesse ne sera pas évident pour les requêtes de sélection. En revanche, les écritures (surtout INSERT et UPDATE) peuvent être fortement pénalisées par le coût de la mise à jour d'un index fonctionnel. Bien que cela ne soit pas évident pour une opération unitaire, il sera parfaitement visible dans le cas d'une opération d'écriture en masse (chargement massif de données), ou tout simplement pour la création de l'index fonctionnel. Dans un tel cas, l'option d'une réécriture en langage C est à envisager très sérieusement.&lt;/p&gt;
&lt;h1&gt;Implémentation et discussion technique&lt;/h1&gt;
&lt;p&gt;Les possibilités d'extension de PostgreSQL s’appuient sur les mécanismes de chargement dynamique de bibliothèque du système d’exploitation. L’interface de programmation est relativement simple, à condition d’en connaître certaines clés.&lt;/p&gt;
&lt;h2&gt;Structure du projet&lt;/h2&gt;
&lt;p&gt;Le projet est articulé autour de différents fichiers, qui seront tous placés dans un répertoire dédié :&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;un fichier &lt;code&gt;Makefile&lt;/code&gt; simplifié, utilisant PGXS, l'infrastructure de construction d'extension PostgreSQL ;&lt;/li&gt;
&lt;li&gt;un modèle de script SQL d'installation &lt;code&gt;reverse.sql.in&lt;/code&gt; ;&lt;/li&gt;
&lt;li&gt;un fichier &lt;code&gt;uninstall_reverse.sql&lt;/code&gt; ;&lt;/li&gt;
&lt;li&gt;le fichier source en langage C, &lt;code&gt;reverse.c&lt;/code&gt;.&lt;/li&gt;
&lt;/ol&gt;
&lt;h2&gt;Fichiers annexes&lt;/h2&gt;
&lt;p&gt;Avant toute chose, il faut disposer d’un fichier « Makefile » de construction du module externe&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
MODULES = reverse
#PG_CPPFLAGS = -ggdb
DATA_built = reverse.sql
DATA = uninstall_reverse.sql
PGXS := $(shell pg_config --pgxs)
include $(PGXS)
&lt;/p&gt;
&lt;p&gt;Le Makefile utilise ici l’outil PGXS qui propose un fichier Makefile prédéfini, à l’instar des fichiers Makefile fournis par Oracle.&lt;/p&gt;
&lt;p&gt;Le fichier « reverse.sql.in » qui sert de modèle à la création du fichier d'installation de l'extension « &lt;code&gt;reverse.sql&lt;/code&gt; ». Ce dernier fichier sera généré à partir du modèle en remplaçant « &lt;code&gt;MODULE_PATHNAME&lt;/code&gt; » par le chemin complet du fichier objet généré.&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
-- Déclaration de la fonction reverse en tant que module C
SET search_path = public;
CREATE OR REPLACE FUNCTION reverse(varchar) RETURNS varchar
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;AS 'MODULE_PATHNAME', 'reverse'
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;LANGUAGE 'C' IMMUTABLE STRICT;
&lt;/p&gt;
&lt;p&gt;Le script « reverse.sql » sera exécuté par un utilisateur PostgreSQL ayant le rôle d’administrateur, les fonctions C étant considérées comme non-sûres et donc de la responsabilité de l’administrateur.&lt;/p&gt;
&lt;p&gt;Un script de désinstallation « uninstall_reverse.sql » est également prévu, ça fait toujours plaisir&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
SET search_path = public;
DROP FUNCTION reverse(varchar);
&lt;/p&gt;
&lt;h2&gt;Un peu de technique&lt;/h2&gt;
&lt;p&gt;La lecture de la page « Fonctions en langage C » permet d’obtenir les informations nécessaires au développement d’une fonction C, voir la documentation « &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/xfunc-c.html&quot; hreflang=&quot;fr&quot;&gt;Fonctions en langage C&lt;/a&gt; ». Cependant la lecture des fichiers d’en-têtes permet d’apporter un éclairage supplémentaire sur certaines structures de données.&lt;/p&gt;
&lt;h3&gt;Traitement des chaînes de caractères avec PostgreSQL&lt;/h3&gt;
&lt;p&gt;Sous PostgreSQL, les chaînes de caractères ne sont pas délimitées par un caractère nul « &lt;code&gt;\0&lt;/code&gt; » terminal, mais, à l’instar du langage Pascal, en stockant dans une structure d’abord sa longueur puis son contenu. Une telle chaîne est décrite dans une structure de type « &lt;code&gt;varlena&lt;/code&gt; ». Ce type de données offre en fait un moyen uniforme de stocker tout type de données à longueur variable, comme les chaînes de caractères, les tableaux ou encore les types utilisateurs.&lt;/p&gt;
&lt;p&gt;Voici sa définition, obtenu dans le fichier d'en-tête &lt;a href=&quot;http://doxygen.postgresql.org/c_8h-source.html#l00395&quot; hreflang=&quot;en&quot;&gt;c.h&lt;/a&gt;, à la ligne 409 :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
struct varlena
{
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;int32       vl_len_;      /* Do not touch this field directly! */
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;char        vl_dat[1];
};
&lt;/p&gt;
&lt;p&gt;Ainsi, l'entier &lt;code&gt;vl_len&lt;/code&gt; contient la longueur, en octets, de la chaîne d'octets &lt;code&gt;vl_dat&lt;/code&gt;.&lt;/p&gt;
&lt;p&gt;Quelques macros permettent de manipuler facilement cette structure.&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;code&gt;VARDATA(&lt;em&gt;varlena&lt;/em&gt;)&lt;/code&gt; obtient un pointeur sur la donnée ;&lt;/li&gt;
&lt;li&gt;&lt;code&gt;VARSIZE(&lt;em&gt;varlena&lt;/em&gt;)&lt;/code&gt; obtient la taille en octets de la structure varlena (&lt;code&gt;vl_len + vl_dat&lt;/code&gt;) ;&lt;/li&gt;
&lt;li&gt;la constante &lt;code&gt;VARHDRSZ&lt;/code&gt; représente la taille en octet de &lt;code&gt;vl_len&lt;/code&gt; ;&lt;/li&gt;
&lt;li&gt;Enfin, &lt;code&gt;VARATT_SIZEP&lt;/code&gt;, remplacée par &lt;code&gt;SET_VARSIZE&lt;/code&gt; à partir de la 8.3, permet de définir la longueur en octets de la donnée.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Ainsi, pour obtenir la longueur en octets de la données, on utilisera &lt;code&gt;(VARSIZE - VARHDRSZ)&lt;/code&gt;.&lt;/p&gt;
&lt;h3&gt;Support des jeux de caractères multi-octets&lt;/h3&gt;
&lt;p&gt;L'implémentation proposée supporte les jeux de caractères multi-octets, comme l'UTF8 (ou Unicode) et les jeux de caractères asiatiques, qui représente certains caractères sous la forme d'une séquence de deux octets ou plus (voir référence). PostgreSQL met à disposition des fonctions utiles pour manipuler les chaînes de caractères, peu importe l'encodage, notamment &lt;code&gt;pg_verifymbstr&lt;/code&gt; qui valide une chaîne de caractère selon l'encodage de la base de données, ou encore &lt;code&gt;pg_mblen&lt;/code&gt; qui donne la longueur en octets d'un caractère. Pour le prototype des fonctions citées et d'autres fonctions, se référer au fichier d'en-tête « &lt;code&gt;mb/pg_wchar.h&lt;/code&gt; ».&lt;/p&gt;
&lt;h3&gt;Les conventions d'appel&lt;/h3&gt;
&lt;p&gt;Il existe deux conventions d'appel de fonctions externes&amp;nbsp;:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;La convention d'appel version 0, représentant l'ancien style, simple à utiliser ;&lt;/li&gt;
&lt;li&gt;La convention d'appel version 1, qui est la norme dorénavant et qui ne présente pas de difficultés particulières.&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;La convention d'appel version 1 sera utilisée dans le but de donner d'entrée de jeu de bonnes habitudes. La complexité de cette convention est masquée par une batterie de macros qui rendent son utilisation tout aussi simple, voire encore plus simple que la version 0, notamment pour le passage d'arguments.&lt;/p&gt;
&lt;h2&gt;Implémentation en langage C&lt;/h2&gt;
&lt;p&gt;Le source C est structuré en quatre parties&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;L’inclusion des fichiers d’en-têtes nécessaires ;&lt;/li&gt;
&lt;li&gt;La définition d’un « magic » signant un module externe PostgreSQL ;&lt;/li&gt;
&lt;li&gt;La définition d’un « magic » déclarant la fonction reverse à PostgreSQL ;&lt;/li&gt;
&lt;li&gt;Le corps de fonction reverse, cette fois en langage C.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Voici ci-après, le code source en langage C de la fonction reverse.&lt;/p&gt;
&lt;code&gt;/*&lt;br /&gt;&amp;nbsp;* reverse procedural function *&lt;br /&gt;&amp;nbsp;* Thomas Reiss, 12/07/2007 – 24/07/2007 - 02/08/2007&lt;br /&gt;&amp;nbsp;* Alain Delorme, 24/07/2007&lt;br /&gt;&amp;nbsp;* Merci à depesz pour ses tests sur la version 8.3devel&lt;br /&gt;&amp;nbsp;*&lt;br /&gt;&amp;nbsp;*/&lt;br /&gt;&lt;br /&gt;#include &quot;pg_config.h&quot;&lt;br /&gt;#include &quot;postgres.h&quot;&lt;br /&gt;#include &quot;fmgr.h&quot;&lt;br /&gt;#include &quot;mb/pg_wchar.h&quot;&lt;br /&gt;#include &quot;utils/elog.h&quot;&lt;br /&gt;&lt;br /&gt;#ifdef PG_MODULE_MAGIC&lt;br /&gt;PG_MODULE_MAGIC;&lt;br /&gt;#endif&lt;br /&gt;&lt;br /&gt;Datum reverse(PG_FUNCTION_ARGS);&lt;br /&gt;&lt;br /&gt;// SET_VARSIZE correspond à la nouvelle API, nous définissons cette&lt;br /&gt;// macro pour les versions ne la possédant pas.&lt;br /&gt;#ifndef SET_VARSIZE&lt;br /&gt;#define SET_VARSIZE(n,s) VARATT_SIZEP(n) = s;&lt;br /&gt;#endif&lt;br /&gt;&lt;br /&gt;/* fonction reverse */&lt;br /&gt;PG_FUNCTION_INFO_V1(reverse);&lt;br /&gt;Datum reverse(PG_FUNCTION_ARGS)&lt;br /&gt;{&lt;br /&gt;&amp;nbsp; int len, pos = 0;&lt;br /&gt;&amp;nbsp; VarChar *str_out, *str_in;&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* Obtient l'adresse de l'argument */&lt;br /&gt;&amp;nbsp; str_in = PG_GETARG_VARCHAR_P_COPY(0);&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* Calcul de la taille en octet de la chaîne */&lt;br /&gt;&amp;nbsp; len = (int) (VARSIZE(str_in) - VARHDRSZ);&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* Créer une chaîne vide de taille identique */&lt;br /&gt;&amp;nbsp; str_out = (VarChar *)palloc(VARSIZE(str_in));&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* La structure résultante aura une longueur identique */&lt;br /&gt;&amp;nbsp; SET_VARSIZE(str_out, VARSIZE(str_in));&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* Vérifie que l'encodage de la chaîne en argument&lt;br /&gt;&amp;nbsp;&amp;nbsp; * concorde avec l'encodage de la BDD&lt;br /&gt;&amp;nbsp;&amp;nbsp; */&lt;br /&gt;&amp;nbsp; pg_verifymbstr(VARDATA(str_in), len, false);&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* Copie à l'envers de la chaîne */&lt;br /&gt;&amp;nbsp; while (pos &amp;lt; len)&lt;br /&gt;&amp;nbsp; {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; int charlen = pg_mblen(VARDATA(str_in) + pos);&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; int i = charlen;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; // Copie un caractère.&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; // !! Un caractère != un octet&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; while (i--)&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; *(VARDATA(str_out) + len - charlen + i - pos) = *(VARDATA(str_in) + i + pos);&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; pos = pos + charlen;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; // incrémente le compteur&lt;br /&gt;&amp;nbsp; }&lt;br /&gt;&amp;nbsp; PG_FREE_IF_COPY(str_in, 0);&lt;br /&gt;&lt;br /&gt;&amp;nbsp; /* Retourne la copie */&lt;br /&gt;&amp;nbsp; PG_RETURN_VARCHAR_P(str_out);&lt;br /&gt;}&lt;/code&gt;&lt;br /&gt;&lt;h2&gt;Construction&lt;/h2&gt;
&lt;p&gt;La construction de l'extension PostgreSQL est réalisée en invoquant &lt;code&gt;make&lt;/code&gt;&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
tom@clementina:~/src/reverse$ make
cc -g -Wall -O2 -fPIC -Wall -Wmissing-prototypes -Wpointer-arith -Winline -Wdeclaration-after-statement -Wendif-labels -fno-strict-aliasing -g -fpic -I. -I/usr/include/postgresql/8.2/server -I/usr/include/postgresql/internal -D_GNU_SOURCE  -I/usr/include/tcl8.4  -c -o reverse.o reverse.c
cc -shared -o reverse.so reverse.o
rm reverse.o
&lt;/p&gt;
&lt;p&gt;Si tout s'est bien passé, l'installation sera finalisée en exécutant la commande &lt;code&gt;make install&lt;/code&gt;, éventuellement précédé de &lt;code&gt;sudo&lt;/code&gt; en fonction de sa distribution et de son installation de PostgreSQL.&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
tom@clementina:~/src/reverse$ sudo make install
Password: xxxx
/bin/sh /usr/lib/postgresql/8.2/lib/pgxs/src/makefiles/../../config/install-sh -c -m 644 ./reverse.sql '/usr/share/postgresql/8.2/contrib'
/bin/sh /usr/lib/postgresql/8.2/lib/pgxs/src/makefiles/../../config/install-sh -c -m 755  reverse.so '/usr/lib/postgresql/8.2/lib'
&lt;/p&gt;
&lt;p&gt;Les fichiers produits seront ainsi installés dans le répertoire d'installation de PostgreSQL. Il est toutefois possible de les positionner ailleurs, à condition d'adapter le fichier « &lt;code&gt;reverse.sql&lt;/code&gt; » de façon à indiquer à PostgreSQL
où se trouve la bibliothèque partagée (fichier « &lt;code&gt;reverse.so&lt;/code&gt; » sous Linux).&lt;/p&gt;
&lt;h1&gt;Utilisation et performances&lt;/h1&gt;
&lt;h2&gt;Vérification de bon fonctionnement&lt;/h2&gt;
&lt;p&gt;Dans un premier temps, on crée la fonction via l'outil &lt;code&gt;psql&lt;/code&gt;&amp;nbsp;:&lt;/p&gt;
&lt;code&gt;&lt;p class=&quot;code&quot;&gt;test=# \i reverse.sql
CREATE FUNCTION
&lt;/p&gt;
&lt;p&gt;On vérifie que la fonction répond correctement :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
test=# SHOW client_encoding;&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;&amp;nbsp;client_encoding&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
-----------------&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;&amp;nbsp;UTF8&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(1 ligne)&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test=# SELECT reverse('Chaîne à renverser');&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; reverse&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;--------------------&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;&amp;nbsp;resrevner à enîahC&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(1 ligne)
&lt;/p&gt;
&lt;/code&gt;
&lt;p&gt;Ok, ça marche, y compris avec les chaînes encodées en UTF-8&amp;nbsp;!&lt;/p&gt;
&lt;h2&gt;Petit test de performance&lt;/h2&gt;
&lt;p&gt;Ce test a été réalisé par &lt;a href=&quot;http://www.depesz.com/&quot; hreflang=&quot;en&quot;&gt;depesz&lt;/a&gt;, qui m'a aimablement autorisé a le réutiliser dans le cadre de cet article.&lt;/p&gt;
&lt;p&gt;Petit aperçu du jeu de test :&lt;/p&gt;
&lt;code&gt;&lt;p class=&quot;code&quot;&gt;test=# SELECT count(*),&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-#        min(length(filepath)),&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-#        max(length(filepath)),&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-#        sum(length(filepath))&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-#  FROM test;&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;&amp;nbsp;count  | min | max |   sum&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
-------+-----+-----+----------&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;320136 |   7 | 174 | 18563865&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(1 row)
&lt;/p&gt;
&lt;/code&gt;
&lt;p&gt;Maintenant, voici une petite comparaison des trois implémentations, à savoir le prototype en PL/pgSQL, la version PL/perl de depesz et la version C. On oppose à ces trois tests un parcours de la table via la fonction d'agrégat &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/functions-aggregate.html&quot; hreflang=&quot;fr&quot;&gt;count()&lt;/a&gt;, permettant ainsi de mesurer l&lt;em&gt;'overhead&lt;/em&gt; due à chaque implémentation de la fonction &lt;code&gt;reverse&lt;/code&gt;. À chaque fois, 3 exécutions permettent de vérifier les résultats.&lt;/p&gt;
&lt;h3&gt;Simple comptage (count)&lt;/h3&gt;
&lt;p&gt;Voici l'ordre SQL utilisé pour réaliser ce test :&lt;/p&gt;
&lt;code&gt;&lt;p class=&quot;code&quot;&gt;test=# EXPLAIN ANALYZE&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# SELECT count(filepath)&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
test-# FROM test;
&lt;/p&gt;
&lt;/code&gt;&lt;p&gt;Et voici les temps de réponse obtenus&amp;nbsp;:&lt;br /&gt;
Exécution #1 : 1269.535 ms&lt;br /&gt;
Exécution #2 : 1268.421 ms&lt;br /&gt;
Exécution #3 : 1257.926 ms&lt;br /&gt;
&lt;strong&gt;Moyenne : 1265,29 ms&lt;/strong&gt;&lt;/p&gt;
&lt;h3&gt;Prototype PL/pgSQL&lt;/h3&gt;
&lt;code&gt;&lt;p class=&quot;code&quot;&gt;
test=# EXPLAIN ANALYZE&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# SELECT count(reverse_plpgsql(filepath))&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# FROM test;
&lt;/p&gt;
&lt;/code&gt;
&lt;p&gt;Exécution #1 : 55269.941 ms&lt;br /&gt;
Exécution #2 : 56047.004 ms&lt;br /&gt;
Exécution #3 : 56149.888 ms&lt;br /&gt;
&lt;strong&gt;Moyenne : 55822,28 ms&lt;/strong&gt;&lt;/p&gt;
&lt;h3&gt;Version PL/perl&lt;/h3&gt;
&lt;code&gt;&lt;p class=&quot;code&quot;&gt;test=# EXPLAIN ANALYZE&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# SELECT count(text_reverse(filepath))&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# FROM test;
&lt;/p&gt;
&lt;/code&gt;
&lt;p&gt;Exécution #1 : 4088.625 ms&lt;br /&gt;
Exécution #2 : 4089.729 ms&lt;br /&gt;
Exécution #3 : 4020.500 ms&lt;br /&gt;
&lt;strong&gt;Moyenne : 4066,28 ms&lt;/strong&gt;&lt;/p&gt;
&lt;h3&gt;Version C&lt;/h3&gt;
&lt;code&gt;&lt;p class=&quot;code&quot;&gt;test=# EXPLAIN ANALYZE&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# SELECT count(reverse(filepath))&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;test-# FROM test;
&lt;/p&gt;
&lt;/code&gt;
&lt;p&gt;Exécution #1 : 1596.176 ms&lt;br /&gt;
Exécution #2 : 1647.046 ms&lt;br /&gt;
Exécution #3 : 1657.531 ms&lt;br /&gt;
&lt;strong&gt;Moyenne : 1633,58 ms&lt;/strong&gt;&lt;/p&gt;
&lt;h3&gt;Synthèse du test de performance&lt;/h3&gt;
&lt;p&gt;Voici un graphe faisant la synthèse des moyennes des temps de réponse&amp;nbsp;:&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/files/comparaison_plpgsql_plperl_c_count.png&quot; alt=&quot;Comparaison des temps de réponse&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Le graphe suivant permet de mieux se rendre compte de l'overhead induie par l'implémentation PL/perl et l'implémentation C.&lt;/p&gt;
&lt;p&gt;&lt;img src=&quot;http://blog2.postgresql.fr/files/ccomparaison_plperl_c_count.png&quot; alt=&quot;Comparaison des temps de réponse&quot; /&gt;&lt;/p&gt;
&lt;p&gt;Chose très intéressante&amp;nbsp;: l'overhead pour renverser ~320000 enregistrements est de seulement 300ms, ce qui est bien entendu excellent et laisse présager de très bonnes performances quant au coût de la mise à jour d'un index fonctionnel.&lt;/p&gt;
&lt;p&gt;Ainsi, comme cela pouvait être aisément imaginé, la version C est la plus rapide, suivie par la version PL/Perl. La version PL/pgSQL se traîne lamentablement derrière, ce qui justifie complètement la réécriture de la procédure stockée en C.&lt;/p&gt;
&lt;h1&gt;Notes&lt;/h1&gt;
&lt;p&gt;Cette fonction a été testé sur une base en PostgreSQL 8.0, 8.2 et 8.3devel (merci à depesz).&lt;/p&gt;
&lt;p&gt;Je regrette de ne pas avoir pu aller un peu plus loin pour le &lt;a href=&quot;http://blog2.postgresql.fr/post/2007/08/20/Fonction-reverse-avec-PostgreSQL-PL/pgSQL&quot; hreflang=&quot;fr&quot;&gt;précédent article&lt;/a&gt;, des impératifs de place m'ayant obligé à aller à l'essentiel sans montrer les différents plans d'exécution. Heureusement, l'&lt;a href=&quot;http://www.depesz.com/index.php/2007/07/30/indexable-field-like-something/&quot; hreflang=&quot;en&quot;&gt;article de hubert depesz lubaczewski&lt;/a&gt; montre tous les aspects que j'ai négligé, malheureusement c'est en anglais.&lt;/p&gt;
&lt;h1&gt;Références&lt;/h1&gt;
&lt;p&gt;De plus amples précisions sont également disponibles en langue anglaise sur les sites Internet suivant :&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;http://stephane.bpf.st/si/bdd/pg/fnctidx&quot; hreflang=&quot;fr&quot;&gt;Les index fonctionnels&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://docs.postgresqlfr.org/8.2/multibyte.html&quot; hreflang=&quot;fr&quot;&gt;Support des jeux de caractères&lt;/a&gt; dans PostgreSQL&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://docs.postgresqlfr.org/8.2/xfunc-c.html&quot; hreflang=&quot;fr&quot;&gt;Fonctions en langage C&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://linuxgazette.net/139/peterson.html&quot; hreflang=&quot;en&quot;&gt;Writing PostgreSQL Functions in C&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.varlena.com/GeneralBits/68.php&quot; hreflang=&quot;en&quot;&gt;What's a Varlena ?&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://french.joelonsoftware.com/Articles/Unicode.html&quot; hreflang=&quot;fr&quot;&gt;Le minimum syndical à connaître sur les jeux de caractères multi-octets&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://www.rfc-ref.org/RFC-TEXTS/3629/index.html&quot; hreflang=&quot;en&quot;&gt;RFC 3629, UTF-8, a transformation format of ISO 10646&lt;/a&gt; ou &lt;a href=&quot;ftp://ftp.isi.edu/in-notes/rfc3629.txt&quot; hreflang=&quot;en&quot;&gt;RFC 3629&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;http://doxygen.postgresql.org/main.html&quot; hreflang=&quot;en&quot;&gt;Documentation Doxygen du code de PostgreSQL&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h1&gt;Remerciements&lt;/h1&gt;
&lt;p&gt;Je remercie vivement les personnes suivantes&amp;nbsp;:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Alain Delorme pour sa contribution,&lt;/li&gt;
&lt;li&gt;hubert depesz lubaczewski pour ses retours et tests préliminaires,&lt;/li&gt;
&lt;li&gt;Guillaume Lelarge pour ses relectures et ses conseils avisés.&lt;/li&gt;
&lt;/ul&gt;
&lt;em&gt;Article écrit par Thomas Reiss, publié sur postgresqlfr.org avec sa permission. Vous pouvez le retrouver sur son &lt;a href=&quot;http://blog.frosties.org/&quot;&gt;blog où il parle encore de PostgreSQL (et d'autres choses :-)&lt;/a&gt; ). Merci beaucoup.&lt;/em&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Sécuriser votre base PostgreSQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/397" rel="alternate" type="text/html"
    title="Sécuriser votre base PostgreSQL" />
    <id>urn:md5:4cc2e979aacf8f2b24eb9610895d31da</id>
    <published>2007-09-05T17:04:00+00:00</published>
    <updated>2008-10-13T22:03:09+00:00</updated>
    <author><name>gleu</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;em&gt;Article écrit par &lt;a href=&quot;mailto:depesz@depesz.com&quot;&gt;Hubert Lubaczewski&lt;/a&gt; et traduit par &lt;a href=&quot;mailto:damien@dalibo.com&quot;&gt;Damien Clochard&lt;/a&gt;, le 18 août 2007. La &lt;a href=&quot;http://www.depesz.com/index.php/2007/08/18/securing-your-postgresql-database/&quot;&gt;version originale&lt;/a&gt; est disponible sur le &lt;a href=&quot;http://www.depesz.com/&quot;&gt;blog de l'auteur&lt;/a&gt; où se trouvent beaucoup d'autres articles intéressants.&lt;/em&gt;    &lt;p&gt;Il y a quelques temps j'ai décrit &lt;a href=&quot;http://www.depesz.com/index.php/2007/08/12/hacking-with-postgresql/&quot;&gt;comment « &lt;code&gt;pirater&lt;code&gt; » un système en utilisant PostgreSQL&lt;/code&gt;&lt;/code&gt;&lt;/a&gt;. Aujourd'hui, je vais décrire comment sécuriser au maximum une installation PostgreSQL1.&lt;/p&gt;
&lt;p&gt;Je passerai par différentes étapes, en décrivant ce qui est possible, ce qui est simple et ce qui n'est pas si simple :)&lt;/p&gt;
&lt;p&gt;Commençons donc le tutoriel...&lt;/p&gt;
&lt;!-- break --&gt;
&lt;p&gt;Tout d'abord, je suppose que vous voulez protéger la base des mauvais agissements d'un utilisateur PostgreSQL. Je n'évoquerai pas la protection contre les utilisateurs système ou les administreurs.&lt;/p&gt;
&lt;p&gt;La première chose à faire consiste à interdire les connexions distantes pour les super-utilisateurs. C'est une modification basique qui se fait simplement.&lt;/p&gt;
&lt;p&gt;Cherchons tout d'abord le fichier &lt;cite&gt;pg_hba.conf&lt;/cite&gt;. Sur mon système, il se trouve dans &lt;cite&gt;/home/pgdba/data/pg_hba.conf&lt;/cite&gt;. Sur le vôtre, il est certainement ailleurs. Vous pouvez vérifier son emplacement en exécutant cette requête&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
# show hba_file ;
hba_file
------------------------------
/home/pgdba/data/pg_hba.conf
(1 row)
&lt;/p&gt;
&lt;p&gt;Bien. Maintenant, voici le contenu de ce fichier sur ma machine&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
local all all trust
host all all 127.0.0.1/32 trust
host all all ::1/128 trust
host all all 0.0.0.0/0 md5
&lt;/p&gt;
&lt;p&gt;Si vous ne comprenez pas ce que cela signifie, consultez le &lt;a class=&quot;reference&quot; href=&quot;http://docs.postgresqlfr.org/8.2/client-authentication.html#auth-pg-hba-conf&quot;&gt;manuel&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;Maintenant, pour certaines raisons, j'ai trois comptes super-utilisateurs
sur la machine&amp;nbsp;: &lt;cite&gt;pgdba&lt;/cite&gt;, &lt;cite&gt;postgres&lt;/cite&gt; et &lt;cite&gt;depesz&lt;/cite&gt;. Nous allons effectuer les modifications afin que ces comptes ne puissent être utilisés que par connexion locale (socket unix) et en fournissant un mot de passe. Toute autre tentative de connexion à ces comptes sera interdite.&lt;/p&gt;
&lt;p&gt;Voici le nouveau fichier &lt;cite&gt;pg_hba.conf&lt;/cite&gt;&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
local all @admins md5
local all all trust
host all @admins 0.0.0.0/0 reject
host all all 127.0.0.1/32 trust
host all all ::1/128 trust
host all all 0.0.0.0/0 md5
&lt;/p&gt;
&lt;p&gt;Je viens également de créer un nouveau fichier, /home/pgdba/data/admins&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
depesz
pgdba
postgres
&lt;/p&gt;
&lt;p&gt;Remarque&amp;nbsp;: N'oubliez pas qu'après chaque modification de votre fichier &lt;cite&gt;pg_hba.conf&lt;/cite&gt;, vous devez redémarrer le serveur.&lt;/p&gt;
&lt;p&gt;Comme nous le voyons clairement, le fichier &lt;cite&gt;admins&lt;/cite&gt; contient les noms des trois utilisateurs auxquels je souhaite limiter l'accès.&lt;/p&gt;
&lt;p&gt;Lorsque PostgreSQL vérifie le fichier &lt;cite&gt;pg_hab.conf&lt;/cite&gt;, il s'arrête à la première ligne pertinente. Ainsi il est nécessaire de placer la ligne &lt;cite&gt;local all all trust&lt;/cite&gt; &lt;em&gt;après&lt;/em&gt; la ligne concernant le groupe d'administrateur ( &lt;cite&gt;local all @admins md5&lt;/cite&gt; ). Cependant, si l'on changeait l'ordre de la manière suivante :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
local all all trust
local all @admins md5
host all @admins 0.0.0.0/0 reject
...
&lt;/p&gt;
&lt;p&gt;alors tous les utilisateurs seraient autorisés à se connecter sur n'importe quel compte PostgreSQL. Ceci serait regrettable donc soyez prudent en configurant le fichier &lt;cite&gt;pg_hba.conf&lt;/cite&gt;&lt;/p&gt;
&lt;p&gt;Certaines personnes (notamment celles qui utilisent debian) sont fans de l'authentification &lt;cite&gt;ident sameuser&lt;/cite&gt;. Les mots me manquent pour dire à quel point je déteste cela. Je ne vais pas rentrer dans les détails mais ce que je peux vous dire, c'est que j'utilise &lt;cite&gt;trust&lt;/cite&gt; sur ma machine de développement (ordinateur portable) et uniquement &lt;cite&gt;md5&lt;/cite&gt; sur les serveurs de production. Je pense que l'authentification &lt;cite&gt;ident&lt;/cite&gt; peut être utile dans certains cas, mais je n'ai pas trouvé lesquels. Pour le moment.&lt;/p&gt;
&lt;p&gt;Bref, la première étape était relatiment simple : nous avons protéger la base contre des utilisateurs inopportuns qui voudraient se connecter en tant que super-utilisateurs (à distance, tout du moins).&lt;/p&gt;
&lt;p&gt;Avant de poursuivre, évoquons les outils nommés &lt;cite&gt;dblink&lt;/cite&gt; et &lt;cite&gt;dbilink&lt;/cite&gt;. Souvenez-vous qu'utiliser ces modules abaissent la sécurité de votre système car ils modifient l'adresse IP depuis laquelle vous vous connectez. Je ne dis pas que ces modules sont mauvais : ils sont parfaitement sains, mais leur utilisation impose de réfléchir en préalable aux implications en terme de sécurité.&lt;/p&gt;
&lt;p&gt;Revenons maintenant à notre tutoriel.&lt;/p&gt;
&lt;p&gt;Nous avons notre base super top-secrète qui contient les orientations sexuelles de tout le monde. Nous ne voulons pas que n'importe quel utilisateur Postgres se connecte à la base à l'exception des utilisateurs dédiés (via une application web).&lt;/p&gt;
&lt;p&gt;Comment faire ?&lt;/p&gt;
&lt;p&gt;Revenons simplement au fichier pg_hba.conf et modifions-le :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
local all @admins md5
local secret webapp md5
local secret all reject
local all all trust
host all @admins 0.0.0.0/0 reject
host all all 127.0.0.1/32 trust
host all all ::1/128 trust
host all all 0.0.0.0/0 md5
&lt;/p&gt;
&lt;p&gt;Avec les lignes 2 et 3 (avec le mot 'secret'), j'autorise l'utisateur &lt;cite&gt;webapp&lt;/cite&gt; à se connecter à la base &lt;cite&gt;secret&lt;/cite&gt; en mode &lt;cite&gt;md5&lt;/cite&gt; et je rejette toutes les autres connections.&lt;/p&gt;
&lt;p&gt;Il est important de laisser &lt;cite&gt;local all @admins md5&lt;/cite&gt; en première ligne. En effet, si je plaçais cette ligne après la ligne &lt;cite&gt;local secret all reject&lt;/cite&gt;, cela interdirait les connexions super-utilisateurs.&lt;/p&gt;
&lt;p&gt;Théoriquement, cette configuration semble correcte, mais vous devez procéder à deux configurations :&lt;/p&gt;
&lt;blockquote&gt;
&lt;ol class=&quot;arabic simple&quot;&gt;
&lt;li&gt;Un compte super-utilisateur est équivalent à un accès shell, donc quelqu'un avec ce niveau d'accès pourrait modifier le fichier pg_hba.conf et recharger la configuration du serveur. Donc il n'y a pas de protection contre les super-utilisateurs.&lt;/li&gt;
&lt;li&gt;Désactiver les accès super-utilisateurs implique que chaque fois que vous exécuterez des opérations de haut niveau (ajout d'un nouveau langage, ajout de fonctions C), vous devrez modifier le fichier pg_hba.conf, ce qui augmente le risque d'erreur.&lt;/li&gt;
&lt;/ol&gt;
&lt;/blockquote&gt;
&lt;p&gt;Pour ma part, je pense que laisser un accès aux super-utilisateurs est une bonne chose.&lt;/p&gt;
&lt;p&gt;Maintenant, lorsque je tente de me connecter avec un autre utilisateur (disons l'utilisateur &lt;cite&gt;test&lt;/cite&gt;), la connexion est rejetée :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
=&amp;gt; psql -U test -d secret
psql: FATAL: no pg_hba.conf entry for host &quot;[local]&quot;, user &quot;test&quot;,
database &quot;secret&quot;, SSL off
&lt;/p&gt;
&lt;p&gt;Parfait. Personne ne peut se connecter à la base, à l'exception d'un utilisateur précis (&lt;cite&gt;webapp&lt;/cite&gt;). Mais voici un problème : si quelqu'un obtenait l'accès à ce compte &lt;cite&gt;webapp&lt;/cite&gt;, il/elle pourrait faire ce qu'il/elle veut. Supprimer des tables ? Pas de problème. Vider des tables ? Pas de problème. Mettre à jour ? insérer des données ? tout cela fonctionnera.&lt;/p&gt;
&lt;p&gt;Nous ne pouvons retirer ses droits au proprétaires des tables. Donc nous allons avoir besoin d'un utilisateur supplémentaire. Créons un utilisateur &lt;cite&gt;admin&lt;/cite&gt; (qui ne serait pas super-utilisateur mais simplement administrateur de la base). L'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; sera dédié à l'application web et aura des droits restreints.&lt;/p&gt;
&lt;p&gt;Nous devons alors :&lt;/p&gt;
&lt;blockquote&gt;
&lt;ul class=&quot;simple&quot;&gt;
&lt;li&gt;créer l'utilisateur &lt;cite&gt;admin&lt;/cite&gt;&lt;/li&gt;
&lt;li&gt;déclarer &lt;cite&gt;admin&lt;/cite&gt; propriétaire de tous les objets de la base&lt;/li&gt;
&lt;li&gt;donner à &lt;cite&gt;admin&lt;/cite&gt; la possibilité de se connecter&lt;/li&gt;
&lt;li&gt;accorder et révoquer certains droits à &lt;cite&gt;webapp&lt;/cite&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/blockquote&gt;
&lt;p&gt;Cela semble simple. La commande &lt;cite&gt;create user&lt;/cite&gt; est triviale. Le changement de propriétaire est fastidieux mais simple. Attribuer les droits d'administration requiert simplement d'ajouter la ligne suivant dans le fichier &lt;cite&gt;pg_hba.conf&lt;/cite&gt; :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
local secret admin md5
&lt;/p&gt;
&lt;p&gt;avant la ligne :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
local secret all reject
&lt;/p&gt;
&lt;p&gt;(et bien sûr redémarrer le serveur).&lt;/p&gt;
&lt;p&gt;Maintenant, passons à la partie revoke/grant :)&lt;/p&gt;
&lt;p&gt;Notre base a une table (et une sequence) :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
&amp;gt; \d
List of relations
Schema  | Name         | Type     | Owner
--------+--------------+----------+-------
public  | users        | table    | admin
public  | users_id_seq | sequence | admin
(2 rows)
&amp;nbsp;
&amp;gt;\d users
Table &quot;public.users&quot;
Column         | Type    | Modifiers
---------------+---------+----------------------------------------------------
id             | integer | not null default nextval('users_id_seq'::regclass)
username       | text    | not null
sex_preference | text    |
Indexes:
&quot;users_pkey&quot; PRIMARY KEY, btree (id)
&quot;users_username_key&quot; UNIQUE, btree (username)
&amp;nbsp;
&amp;gt; select * from users;
id  | username | sex_preference
----+----------+----------------
&amp;nbsp;&amp;nbsp;1 | aa       | qqq
&amp;nbsp;&amp;nbsp;2 | bb       | www
&amp;nbsp;&amp;nbsp;3 | cc       | eee
(3 rows)
&lt;/p&gt;
&lt;p&gt;Rien de bien passionant, juste quelques données de test.&lt;/p&gt;
&lt;p&gt;Bien sûr, maintenant, &lt;cite&gt;webapp&lt;/cite&gt; ne peut plus rien lire dans la table &lt;cite&gt;users&lt;/cite&gt; :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(webapp@[local]:5830) 22:56:51 [secret]
&amp;gt; select * from users;
ERROR: permission denied for relation users
&lt;/p&gt;
&lt;p&gt;Maintenant, le problème est qu'un utilisateur malveillant peut (par exemple) créer une table et la remplir aléatoirement, juste pour planter PostgreSQL.&lt;/p&gt;
&lt;p&gt;La solution est simple :&lt;/p&gt;
&lt;blockquote&gt;
&lt;ul class=&quot;simple&quot;&gt;
&lt;li&gt;se connecter à la base &lt;cite&gt;secret&lt;/cite&gt; en tant que super-utilisateur&lt;/li&gt;
&lt;li&gt;révoquer les droits de création au groupe &lt;cite&gt;public&lt;/cite&gt; (le groupe qui contient tout les utilisateurs.&lt;/li&gt;
&lt;li&gt;accorder les droits de création à l'utilisateur &lt;cite&gt;admin&lt;/cite&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/blockquote&gt;
&lt;p&gt;Ce qui nous donne :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(admin@[local]:5830) 23:12:06 [secret]
&amp;nbsp;
&amp;gt; \c - depesz
Password for user &quot;depesz&quot;:
You are now connected to database &quot;secret&quot; as user &quot;depesz&quot;.
(depesz@[local]:5830) 23:12:10 [secret]
&amp;nbsp;
# revoke create on schema public from public;
REVOKE
(depesz@[local]:5830) 23:12:15 [secret]
&amp;nbsp;
# grant create on schema public to admin;
GRANT
(depesz@[local]:5830) 23:12:24 [secret]
&amp;nbsp;
# \c - admin
Password for user &quot;admin&quot;:
You are now connected to database &quot;secret&quot; as user &quot;admin&quot;.
&lt;/p&gt;
&lt;p&gt;Il est nécessaire de se connecter à un compte super-utilisateur car le schéma &lt;cite&gt;public&lt;/cite&gt; appartient aux super-utilisateurs et non pas au propriétaire de la base.&lt;/p&gt;
&lt;p&gt;OK. Résumons la situation :&lt;/p&gt;
&lt;blockquote&gt;
&lt;ol class=&quot;arabic simple&quot;&gt;
&lt;li&gt;Les super-utilisateurs peuvent se connecter uniquement via sockets unix, c'est-à-dire uniquement en local.&lt;/li&gt;
&lt;li&gt;Seuls deux utilisateurs peuvent se connecter à la base &lt;cite&gt;secret&lt;/cite&gt; : &lt;cite&gt;admin&lt;/cite&gt; et &lt;cite&gt;webapp&lt;/cite&gt;.&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;admin&lt;/cite&gt; peut faire ce qu'il veut&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; peut se connecter et c'est à peu près tout. Il peut voir les noms des tables mais ne peut ni créer des tables, ni sélectionner/insérer/modifier/supprimer des données dans les tables existantes.&lt;/li&gt;
&lt;/ol&gt;
&lt;/blockquote&gt;
&lt;p&gt;Nous souhaitons maintenant que l'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; puisse lire les donnée. Nous pourrions faire quelque chose comme :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
grant select on table users to webapp;
&lt;/p&gt;
&lt;p&gt;Mais ce n'est pas très cool. Les données de la table &lt;cite&gt;users&lt;/cite&gt; sont très sensibles et nous ne voulons pas que l'utilisateur puisse éxecuter la commande : &lt;cite&gt;select * from users;&lt;/cite&gt; et ainsi obtenir des informations sur la sexualité de millions de personnes. Nous voulons que l'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; soit capable de lire les donnée pour un utilisateur précis (les opérations INSERT, UPDATE et DELETE ne seront pas évoquées car la méthode est très similaire)&lt;/p&gt;
&lt;p&gt;Comment pouvons-nous réaliser cela ? Avec les procédures stockées bien sûr. Connectez-vous sur le compte &lt;cite&gt;admin&lt;/cite&gt; et créez une fonction :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
CREATE OR REPLACE FUNCTION get_user_record(in_user TEXT) RETURNS setof
users as $BODY$
DECLARE
temprec users;
BEGIN
for temprec in SELECT * FROM users WHERE username = in_user LOOP
RETURN next temprec;
END loop;
RETURN;
END;
$BODY$ language plpgsql SECURITY DEFINER;
&lt;/p&gt;
&lt;p&gt;Cependant, puisque la fonction est écrite en &lt;cite&gt;plpgsql&lt;/cite&gt;, elle est disponible par défaut pour tout le monde. Améliorons la sécurité  :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(admin@[local]:5830) 23:24:21 [secret]
&amp;gt; revoke execute on function get_user_record (text) from public;
REVOKE
&amp;nbsp;
(admin@[local]:5830) 23:26:00 [secret]
&amp;gt; grant execute on function get_user_record(text) to webapp;
GRANT
&lt;/p&gt;
&lt;p&gt;Désormais notre utilisateur &lt;cite&gt;webapp&lt;/cite&gt; peut appeler la fonction en donnant le nom exact qu'il recherche :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(webapp@[local]:5830) 23:26:10 [secret]
&amp;gt; select * from get_user_record('aa');
id | username | sex_preference
---+----------+----------------
1  | aa       | qqq
(1 row)
&lt;/p&gt;
&lt;p&gt;mais il ne pourra pas obtenir tous les enregistrement de la table.&lt;/p&gt;
&lt;p&gt;Ce qui est plus important : pour que la fonction soit fonctionnelle, nous n'avons pas besoin de d'autoriser la selection (&lt;cite&gt;grant select&lt;/cite&gt;) sur la table &lt;cite&gt;users&lt;/cite&gt; pour l'utilisateur &lt;cite&gt;webapp&lt;/cite&gt;. Ce tour de magie est opéré par la déclaration du gestionnaire de sécurité ( &lt;cite&gt;SECURITY DEFINER&lt;/cite&gt; ) dans la définition de la fonction.&lt;/p&gt;
&lt;p&gt;Si vous n'êtes pas familier avec cette fonctionnalité, sachez qu'elle fonctionne plus ou moins comme &lt;cite&gt;suid&lt;/cite&gt; sur les systèmes UNIX. Tous les utilisateurs appelant la fonction seront vus par PostgreSQL comme l'utilisateur qui a créé la fonction.&lt;/p&gt;
&lt;p&gt;Ce qui nous amène aux recommandation suivantes :&lt;/p&gt;
&lt;blockquote&gt;
&lt;ul class=&quot;simple&quot;&gt;
&lt;li&gt;Vous devez être très prudent en écrivant des functions &quot;&lt;cite&gt;security definer&lt;/cite&gt;&quot;. Cela a été longtemps discuté et la conclusion est que dans une base ouverte (où les simples utilisateurs peuvent créer des objets), les fonctions &quot;&lt;cite&gt;security definer&lt;/cite&gt;&quot; peuvent être utilisées pour contourner les limitations.&lt;/li&gt;
&lt;li&gt;Si vous utilisez &lt;cite&gt;current_user&lt;/cite&gt; pour quoi que ce soit, cela ne fonctionnera pas. Vous obtiendrez invariablement le nom du créateur de la fonction.&lt;/li&gt;
&lt;/ul&gt;
&lt;/blockquote&gt;
&lt;p&gt;Dans notre situation, tout est bon : &lt;cite&gt;webapp&lt;/cite&gt; ne pourra pas créer ses propres objets, ainsi il ne sera pas capable d'utiliser la fonction pour pirater la base, de plus  &lt;cite&gt;current_user&lt;/cite&gt; n'est pas réellement utile dans une base qui ne possède que deux utilisateurs :)&lt;/p&gt;
&lt;p&gt;Les fonctions &quot;&lt;cite&gt;security definer&lt;/cite&gt;&quot; peuvent aussi définir des opérations INSERT/UPDATE/DELETE, qui feront les vérifications de paramètres nécessaires et exécuteront les actions requises, éventuellement acommpagnées par des traitements connexes, tel que le changement de login, la sauvegarde, la dénormalisation et ainsi de suite.&lt;/p&gt;
&lt;p&gt;Une dernière point à aborder : l'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; peut voir les noms des tables. Personnellement, cela ne me dérange pas, mais certaines personne peuvent souhaiter cacher les noms d'objets. Je n'ai pas vraiment creuser ce point, mais cela parait simple à faire. Cette fois, nous allons modifier les droits du schema &lt;cite&gt;pg_catalog&lt;/cite&gt; :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(admin@[local]:5830) 23:36:17 [secret]
&amp;gt; \c - depesz
Password for user &quot;depesz&quot;:
You are now connected to database &quot;secret&quot; as user &quot;depesz&quot;.
&amp;nbsp;
(depesz@[local]:5830) 23:36:21 [secret]
# revoke usage on schema pg_catalog from public;
REVOKE
&amp;nbsp;
(depesz@[local]:5830) 23:36:27 [secret]
# grant usage on schema pg_catalog to admin;
GRANT
&amp;nbsp;
(depesz@[local]:5830) 23:36:38 [secret]
# \c - admin
Password for user &quot;admin&quot;:
You are now connected to database &quot;secret&quot; as user &quot;admin&quot;.
&lt;/p&gt;
&lt;p&gt;(notez bien qu'il existe aussi un schéma d'informations, qui devra être modifié de la même façon, sinon il suffira d'interroger les tables et des vues du schéma &lt;cite&gt;information_schema&lt;/cite&gt; pour obtenir les noms des objets !).&lt;/p&gt;
&lt;p&gt;Après ceci, l'utilisateur &lt;cite&gt;admin&lt;/cite&gt; peut toujours travailler commme avant tandis que l'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; est contraint à certaines limitations :&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;
(webapp@[local]:5830) 23:34:49 [secret]
&amp;gt; \d
ERROR: permission denied for schema pg_catalog
&amp;nbsp;
(webapp@[local]:5830) 23:37:41 [secret]
&amp;gt; select * from get_user_record('aa');
id  | username | sex_preference
----+----------+----------------
&amp;nbsp;&amp;nbsp;1 | aa | qqq
(1 row)
&amp;nbsp;
(webapp@[local]:5830) 23:37:46 [secret]
&amp;gt; \df+ get_user_record
ERROR: permission denied for schema pg_catalog
(webapp@[local]:5830) 23:37:52 [secret]
&amp;gt; \df get_user_record
ERROR: permission denied for schema pg_catalog
&lt;/p&gt;
&lt;p&gt;Comme vous pouvez le voir, l'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; ne peut pas voir la liste des tables, mais il est capable d'appeler la fonction &lt;cite&gt;get_user_record()&lt;/cite&gt;. Par ailleurs, ce qui est important, c'est qu'il
n'est pas capable de voir le code source de la fonction, ni même les informations comme le nombre d'arguments.&lt;/p&gt;
&lt;p&gt;Il est possible dans certains cas que révoquer les droits du schéma &lt;cite&gt;pg_catalog&lt;/cite&gt; provoque de mauvais résultats, mais (comme vous le constatez dans l'exemple ci-dessus) cela fonctionne et c'est assez simple à mettre en place.&lt;/p&gt;
&lt;p&gt;Récapitulons à nouveau ce que nous avons accompli :&lt;/p&gt;
&lt;blockquote&gt;
&lt;ol class=&quot;arabic simple&quot;&gt;
&lt;li&gt;Les super-utilisateurs peuvent se connecter uniquement via sockets unix, c'est-à-dire uniquement en local.&lt;/li&gt;
&lt;li&gt;Seuls deux utilisateurs peuvent se connecter à la base &lt;cite&gt;secret&lt;/cite&gt; : &lt;cite&gt;admin&lt;/cite&gt; et &lt;cite&gt;webapp&lt;/cite&gt;.&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;admin&lt;/cite&gt; peut faire ce qu'il veut&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; peut se connecter à la base&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; ne peut pas voir les noms des objets (tables, vues, fonctions) ni leurs définitions.&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; ne peut pas interroger les tables directement.&lt;/li&gt;
&lt;li&gt;L'utilisateur &lt;cite&gt;webapp&lt;/cite&gt; a accès aux données via des fonctions qui impliquent des vérifications de données.&lt;/li&gt;
&lt;/ol&gt;
&lt;/blockquote&gt;
&lt;p&gt;Pour finir, voici quelques remarques :&lt;/p&gt;
&lt;p&gt;1. En dehors des fonctions, les vues permettent également de limiter les droits d'accès : l'utilisateur n'a pas accès à la table mais a une vue batie sur celle-ci, ce qui permet de proposer une vue qui ne montre qu'une seule colonne de la table. Je n'en ai pas discuté ici car les vues n'ont pas la même flexibilité que les fonctions. De plus, dans les nouvelles versions de PostgreSQL, les fonctions sont presque aussi rapides que les vues.&lt;/p&gt;
&lt;p&gt;2. Si vous avez déjà tout construit avec des fonctions, vous êtes prêt à utiliser l'outil &lt;cite&gt;pl/proxy&lt;/cite&gt; pour effectuer de la répartition de charge (load-balancing).&lt;/p&gt;
&lt;p&gt;3. Théoriquement on peut supposer qu'un utilisateur malveillant pourrait appeler la fonction get_user_record avec tous les noms possibles. C'est vrai, mais puisque nous pouvons écrire ce que nous voulons dans la fonction, il est assez simple de programmer la fonction afin qu'elle se bloque après le 3ème appel infructueux ou avertir l'administrateur par e-mail ou exécuter la commande &lt;cite&gt;pg_ctl stop&lt;/cite&gt; pour empêcher immédiatement tout perte de données :)&lt;/p&gt;
&lt;p&gt;4. Quand une base est protégée et en sécurité, souvenez-vous des sauvegardes. Je ne parle pas de sauvegarder la base. je parle de sauvegarder la base en toute sécurrité. Ne faites pas un simple dump de la base dans un fichier que vous entreposerez ailleurs. Chiffrer le fichier dump : au moins en utilisant &quot;zip -e&quot; au mieux avec gpg/pgp.&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Utiliser un index pour les recherches sur des motifs tels que « colonne LIKE '%chaîne' »</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/396" rel="alternate" type="text/html"
    title="Utiliser un index pour les recherches sur des motifs tels que « colonne LIKE '%chaîne' »" />
    <id>urn:md5:6e0e086292de7780b3eacfc87c71a4d0</id>
    <published>2007-07-15T13:44:00+00:00</published>
    <updated>2008-10-14T06:12:11+00:00</updated>
    <author><name>gleu</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;&lt;/p&gt;    &lt;p&gt;Depuis la version 8i, Oracle implémente les index inversés. Les index inversés permettent d’accélérer les recherches sur les motifs tels que « colonne LIKE '%chaîne' ». Dans ce type de cas de figure, PostgreSQL effectue un parcours séquentiel (ou «&amp;nbsp;sequential scan&amp;nbsp;») de la table interrogée. Toutefois, il est possible d’émuler un index inverse au moyen d’une fonction de renversement de chaîne couplée à un index sur fonction. Voici une proposition d’implémentation équivalente pour PostgreSQL.&lt;/p&gt;
&lt;!--break--&gt;
&lt;p&gt;Tout d’abord, il est nécessaire d’activer le support du &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/plpgsql.html&quot;&gt;langage procédural PL/pgSQL&lt;/a&gt; au sein de la base de données cible à l’aide de la commande Unix «&amp;nbsp;&lt;code&gt;&lt;a href=&quot;http://docs.postgresqlfr.org/8.2/app-createlang.html&quot;&gt;createlang&lt;/a&gt; plpgsql BASECIBLE&lt;/code&gt;&amp;nbsp;».&lt;/p&gt;
&lt;p&gt;La fonction appelée «&amp;nbsp;reverse&amp;nbsp;» prendra comme seul et unique argument une chaîne de type varchar et retournera une chaîne de type varchar.&lt;/p&gt;
&lt;pre&gt;CREATE OR REPLACE FUNCTION reverse(varchar) RETURNS varchar AS $PROC$&lt;br /&gt;&amp;nbsp;&lt;br /&gt;DECLARE&lt;br /&gt;&amp;nbsp;&amp;nbsp;str_in ALIAS FOR $1;&lt;br /&gt;&amp;nbsp;&amp;nbsp;str_out varchar;&lt;br /&gt;&amp;nbsp;&amp;nbsp;str_temp varchar;&lt;br /&gt;&amp;nbsp;&amp;nbsp;position integer;&lt;br /&gt;BEGIN&lt;br /&gt;&amp;nbsp;&amp;nbsp;-- Initialisation de str_out, sinon sa valeur reste à NULL&lt;br /&gt;&amp;nbsp;&amp;nbsp;str_out := '';&lt;br /&gt;&amp;nbsp;&amp;nbsp;-- Suppression des espaces en début et fin de chaîne&lt;br /&gt;&amp;nbsp;&amp;nbsp;str_temp := trim(both ' ' from str_in);&lt;br /&gt;&amp;nbsp;&amp;nbsp;-- position initialisée a la longueur de la chaîne&lt;br /&gt;&amp;nbsp;&amp;nbsp;-- la chaîne est traitée a l’envers&lt;br /&gt;&amp;nbsp;&amp;nbsp;position := char_length(str_temp);&lt;br /&gt;&amp;nbsp;&amp;nbsp;-- Boucle: Inverse l'ordre des caractères d'une chaîne de caractères&lt;br /&gt;&amp;nbsp;&amp;nbsp;WHILE position &amp;gt; 0 LOOP&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;-- la chaîne donnée en argument est parcourue&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;-- à l’envers,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;-- et les caractères sont extraits individuellement au&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;-- moyen de la fonction interne substring&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;str_out := str_out || substring(str_temp, position, 1);&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;position := position - 1;&lt;br /&gt;&amp;nbsp;&amp;nbsp;END LOOP;&lt;br /&gt;&amp;nbsp;&amp;nbsp;RETURN str_out;&lt;br /&gt;END;&lt;br /&gt;$PROC$ &lt;br /&gt;LANGUAGE plpgsql IMMUTABLE;&lt;/pre&gt;
&lt;p&gt;La fonction reverse est structurée en trois partie&amp;nbsp;:
&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;La déclaration elle-même via l’ordre &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/sql-createfunction.html&quot;&gt;CREATE OR REPLACE FUNCTION&lt;/a&gt;&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;La déclaration des variables utilisées, sous le bloc DECLARE&amp;nbsp;;&lt;/li&gt;
&lt;li&gt;Le corps de la fonction, entre BEGIN et END.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;On notera que la fonction reverse est catégorisée en tant que «&amp;nbsp;IMMUTABLE&amp;nbsp;», ceci indiquant au SGBD que la fonction ne modifie pas les données et garantit que la fonction retournera toujours le même résultat quand elle est appelée avec les mêmes arguments, condition indispensable à la création d’un index sur fonction. Voir la documentation PostgreSQL « &lt;a href=&quot;http://docs.postgresqlfr.org/8.2/xfunc-volatility.html&quot;&gt;Catégories de volatilité des fonctions&lt;/a&gt; » dans la partie « Étendre le SQL ».&lt;/p&gt;
&lt;p&gt;Un essai de la procédure permet de s’assurer de son bon fonctionnement&amp;nbsp;:&lt;/p&gt;
&lt;pre&gt;DPAR=# SELECT reverse('Chaîne à renverser');&lt;br /&gt;      reverse&lt;br /&gt;--------------------&lt;br /&gt; resrevner à enîahC&lt;br /&gt;(1 ligne)&lt;/pre&gt;
&lt;p&gt;Pour optimiser les recherches par suffixes, il est nécessaire de créer un index sur fonction, sans oublier une collecte des statistiques pour l’optimiseur&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;CREATE INDEX reverse_index_prenom
ON personnes (REVERSE(prenom) varchar_pattern_ops);
ANALYZE TABLE personnes;&lt;/p&gt;
&lt;p&gt;Ensuite, au lieu d’écrire un prédicat du type « WHERE prenom LIKE ’%mas’», on écrira&amp;nbsp;:&lt;/p&gt;
&lt;p class=&quot;code&quot;&gt;SELECT * FROM personnes WHERE reverse(prenom) LIKE reverse(’%mas’);&lt;/p&gt;
&lt;p&gt;PostgreSQL utilisera alors l’index créé précédemment et répondra instantanément. Sur une base de test contenant 4 millions d’enregistrement, les temps de réponse sont passés de 10s à 33ms pour la requête.&lt;/p&gt;
&lt;p&gt;La fonction « reverse » pourrait être améliorée, mais l’implémentation décrite a l’avantage de montrer une réalisation simple et donne un exemple d’écriture de fonction pour PostgreSQL. On notera que la fonction renvoie une chaîne vide lorsque la valeur NULL est donnée en entrée. Un autre axe d’amélioration de la vitesse d’exécution serait la réécriture de cette fonction sous forme de fonction native en C couplée au choix d’un algorithme de renversement efficace.&lt;/p&gt;
&lt;p&gt;&lt;em&gt;Article écrit par Thomas Reiss, publié sur postgresqlfr.org avec sa permission. Merci beaucoup.&lt;/em&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Debian Sarge, PostgreSQL 8.1, XID Wraparound et Single User Mode</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/199" rel="alternate" type="text/html"
    title="Debian Sarge, PostgreSQL 8.1, XID Wraparound et Single User Mode" />
    <id>urn:md5:00a8bf7b1b41945cbb41fb6c3d904788</id>
    <published>2006-09-29T15:55:00+00:00</published>
    <updated>2008-10-14T17:07:04+00:00</updated>
    <author><name>jca</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;&lt;/p&gt;    &lt;p&gt;
J'utilise une distribution GNU/Linux Debian Sarge avec un backport officiel de PostgreSQL 8.1 sur un serveur de test. Tout fonctionnait à merveille jusqu'au jour où la connexion &lt;tt&gt;psql&lt;/tt&gt; m'a été refusée. La justification de l'impossibilité de connexion était relative à un XID Wraparound, comprendre un rebouclage des identifiants de transactions, par suite de manque de vacuum full sur deux bases. Ayant déjà été confronté au &lt;a href=&quot;http://www.postgresqlfr.org/?q=node/49&quot; target=&quot;_blank&quot;&gt;problème par le passé&lt;/a&gt;, je me suis donc rué sur la procédure que j'avais tantôt décrite...
&lt;/p&gt;
&lt;p&gt;Quelle ne fut pas ma surprise lorsque je vis que mon &lt;tt&gt;PGDATA=/etc/postgresql/8.1/main postgres -O -P ma_base&lt;/tt&gt; ne fonctionnait pas.... Après plusieurs tentatives, recherches et essais, il fallait modifier certains paramètres dans le fichier  &lt;tt&gt;/etc/postgresql/8.1/main/postgresql.conf&lt;/tt&gt;. Voici donc la liste de varibales de configuration à modifier :
&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Forcer le répertoire de données &lt;tt&gt;data_directory = '/var/lib/postgresql/8.1/main/'&lt;/tt&gt;&lt;/li&gt;
&lt;li&gt;Forcer le répertoire de dépot du fichier pid : &lt;tt&gt;external_pid_file = '/var/run/postgresql/postmaster.pid'&lt;/tt&gt;
&lt;/li&gt;
&lt;/ol&gt;
Une fois ces variables modifiées, la commande &lt;tt&gt;PGDATA=/etc/postgresql/8.1/main postgres -O -P ma_base&lt;/tt&gt; a fonctionné, j'ai pu exécuter mes VACUUM FULL ANALYZE sur mes deux bases et reprendre le travail.
&lt;p&gt;&lt;em&gt;Notez que ces modifications n'altèrent en rien le fonctionnement serveur de PostgreSQL 8.1 (backport) en Debian Sarge et que le service peut être relancé directement après l'opération « single user »&lt;/em&gt;&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Problèmes de récupération après crash</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/174" rel="alternate" type="text/html"
    title="Problèmes de récupération après crash" />
    <id>urn:md5:f3abc9046f77efc7e9e19ddfeb4356c7</id>
    <published>2006-04-07T10:02:00+00:00</published>
    <updated>2008-10-14T16:08:46+00:00</updated>
    <author><name>SAS</name></author>
        <dc:subject>Articles</dc:subject>
            
    <content type="html">&lt;p&gt;&lt;/p&gt;    &lt;p&gt;
Lu sur la liste de diffusion &lt;strong&gt;ANNOUNCE&lt;/strong&gt;, un message de Tom Lane&amp;nbsp;:
&lt;/p&gt;
&lt;p&gt;
Des analyses récentes ont montré que le positionnement à &lt;em&gt;off&lt;/em&gt; du paramètre &lt;em&gt;full_page_writes&lt;/em&gt; est dangereux dans &lt;strong&gt;tous&lt;/strong&gt; les cas, même avec des architectures telles que des caches disques protégés par des batteries qui interdiraient les écritures partielles de pages.
&lt;/p&gt;
&lt;p&gt;
Il a été récemment rapporté deux cas de paramétrage &lt;em&gt;full_page_writes = off&lt;/em&gt; ayant empêché le redémarrage de la base après un crash, alors même qu'aucun problème OS ou système n'a pu être mis en cause.
&lt;/p&gt;
&lt;p&gt;
Le plan de développement prévoit de dévalider cette variable dans les versions 8.1.4 et les versions 8.1.* à venir. Le système agira alors comme si le paramètre était toujours positionné à &lt;em&gt;ON&lt;/em&gt;. Le paramètre ne sera pas supprimé pour éviter les incompatibilités de fichiers &lt;em&gt;postgresql.conf&lt;/em&gt;.
&lt;/p&gt;
&lt;p&gt;
Par la suite, des études permettront de déterminer si le paramètre doit être revalidé dans la version 8.2, A l'heure actuelle, il apparaît délicat, voire imprudent de patcher les fichiers.
&lt;/p&gt;
&lt;p&gt;
Quoiqu'il en soit, si vous utilisez les versions 8.1.0 - 8.1.3, il est impératif de vérifier que le paramètre &lt;em&gt;full_page_writes&lt;/em&gt; est bien positionné à &lt;em&gt;ON&lt;/em&gt;.
&lt;/p&gt;
&lt;p&gt;
Pour les détails techinques, on pourra se référer au fil de discussion sur la liste technique&amp;nbsp;:
&lt;a href=&quot;http://archives.postgresql.org/pgsql-hackers/2006-03/msg01168.php&quot;&gt;http://archives.postgresql.org/pgsql-hackers/2006-03/msg01168.php&lt;/a&gt;
&lt;/p&gt;</content>
    
    

    
      </entry>
    
  <entry>
    <title>Beginning Databases With PostgreSQL</title>
    <link href="http://blog2.postgresql.fr/index.php?post/drupal/390" rel="alternate" type="text/html"
    title="Beginning Databases With PostgreSQL" />
    <id>urn:md5:3bd40aa30249aeeb6a8ee3bac3e54b2c</id>
    <published>2006-03-28T00:35:00+00:00</published>
    <updated>2008-10-14T16:07:39+00:00</updated>
    <author><name>gleu</name></author>
        <dc:subject>Articles</dc:subject>
        <dc:subject>livre</dc:subject><dc:subject>php</dc:subject>    
    <content type="html">&lt;p&gt;&lt;/p&gt;    J'ai commandé ce &lt;a href=&quot;http://www.amazon.com/gp/product/1590594789/&quot;&gt;livre&lt;/a&gt; car amazon.com proposait une vente groupée avec « &lt;a href=&quot;http://www.amazon.com/gp/product/1590595475/&quot;&gt;Beginning PHP and PostgreSQL 8&lt;/a&gt; ». J'avoue que j'ai été heureusement surpris. C'est plus qu'une simple copie du &lt;a href=&quot;http://docs.postgresqlfr.org/pgsql-8.1.3-fr/&quot; target=&quot;_blank&quot;&gt;manuel PostgreSQL&lt;/a&gt;. Les explications sont simples, la difficulté augmente raisonnablement. Il existe même un chapitre assez important sur la conception d'une base de donnée, partie plutôt théorique et moins axée sur PG.
Une autre agréable surprise est la place importante réservée à l'utilisation de langages de programmation permettant d'accéder à la base de données&amp;nbsp;: un bon tiers&amp;nbsp;! Le manuel de PostgreSQL est imposant pour la partie libpq (normal, ce sont les développeurs de PG qui la fournissent) et ridicule pour les autres langages. Ce livre apporte un grand nombre d'infos sur l'interaction avec PHP, Perl, Java, C#.
Nous nous plaignions de ne pas avoir de livre à jour avec les dernières fonctionnalités&amp;nbsp;: ce livre corrige en partie ce problème. J'ai eu la chance d'avoir la seconde édition qui comprend quelques morceaux des fonctionnalités de la version 8.0, notamment tablespace et «&amp;nbsp;$$ quoting&amp;nbsp;». Par contre, rien en ce qui concerne la 8.1 (pas d'infos sur le CREATE ROLE par exemple).
Bref, un excellent livre pour débuter, un très bon livre pour les autres.</content>
    
    

    
      </entry>
  
</feed>