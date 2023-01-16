# Setup

## Initialisation

Afin d'initialiser le projet et commencer le travail, réalisez les opérations
suivantes :

1. Assurez-vous de l'installation et de l'activation des extensions PHP requises :
sqlite3 et pdo_sqlite

2. Assurez-vous d'avoir installé les utilitaires en ligne de commande de SQLite3
correspondant à votre système d'exploitation :
  - [Windows](https://www.sqlite.org/2022/sqlite-tools-win32-x86-3400100.zip)
  - [Mac](https://www.sqlite.org/2022/sqlite-tools-osx-x86-3400100.zip)
  - [Linux](https://www.sqlite.org/2022/sqlite-tools-linux-x86-3400100.zip)


   Pour Linux, vous pouvez aussi utiliser les paquets logiciels fournis avec votre
   distribution.

3. En ligne de commande, exécutez depuis la racine du projet le script setup.php
situé à la racine de ce projet et depuis la racine  : ```php setup.php```

## Structure du projet

Le dossier public/ contient le code source PHP destiné à être exécuté par le
serveur sur requête de la part d'un client (navigateur ou autre). Ce dossier
constitue donc la racine du serveur HTTP.

Le dossier lib/ contient le code commun aux divers scripts et modules.

Le dossier doc/ contient la documentation ainsi que ces pages.

Le dossier templates/ contient les vues de l'application. Ces scripts sont
destinés à contenir le rendu HTML (avec les inclusions de variables PHP nécessaires)
pour le rendu des pages.

À la racine, on trouve la configuration générale du projet ainsi que les fichiers
non versionnés (notamment la base de données SQLite3).

## Démarrage du serveur HTTP de développement

Depuis le dossier public, lancez la commande ```php -S 127.0.0.1:8080``` pour
lancer le serveur Web en mode développement. Vous pouvez ensuite accéder aux
pages et scripts développées dans public/ et ses sous-dossiers à partir de l'URL
[http://127.0.0.1:8080](http://127.0.0.1:8080)

Vous pouvez ensuite passer à la suite : [Maquette](./1-HTML.md)
