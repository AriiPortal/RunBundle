Installation
============

Ari'i contrôle les jobs de rundeck à travers la base de données optionnelles, ce point d'accès évite de consommer des ressources par une interrogation directe du moteur.

Configuration MySQL
-------------------

* Utiliser l'outil en ligne de commande
 mysql -u root -p

* Rentrer le mot de passe et créer la base de données
 mysql> create database rundeck;
 Query OK, 1 row affected (0.00 sec)

* Ajouter les accès
 mysql> grant ALL on rundeck.* to 'rundeckuser'@'localhost' identified by 'rundeckpassword';
 Query OK, 1 row affected (0.00 sec)

Configuration Rundeck
---------------------

* Editer le fichier rundeck-config.properties
 dataSource.url = jdbc:mysql://myserver/rundeck?autoReconnect=true
 dataSource.username=rundeckuser
 dataSource.password=rundeckpassword

[http://dev.mysql.com/downloads/connector/j/]

