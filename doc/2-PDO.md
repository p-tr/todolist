# Exercice 2 - lib/task.php - Interaction avec la base de données

## 2.1. Analyse

Le fichier lib/db.php implémente la fonction db() permettant d'accéder à l'objet
PDO utilisé pour interagir avec la base de données.

Le fichier config.php implémente un chargeur de configuration léger basé sur le
fichier .config.ini et la détection de variables de configuration.

Analysez l'implémentation des fonctions get_config() et db() et expliquez leur
fonctionnement.

## 2.2. Opérations CRUD

Dans lib/task.php, implémentez les fonctions suivantes :

- get_tasks : récupère la liste des tâches, avec ou sans critères de filtrage et de tri, sous la forme d'un tableau
- get_task_by_id : récupère une seule tâche depuis la base de données étant donné son ID
- create_task : ajoute une tâche à partir de champs saisis par l'utilisateur (cf. setup.sql pour la liste des champs)
- update_task : met à jour une tâche
- delete_task : si vous avez prévu la fonction de suppression de tâche, cette fonction supprime une tâche étant donné son ID

Ces opérations doivent utiliser le module PDO et les requêtes préparées.

Le module PDO est documenté [ici](https://www.php.net/manual/en/book.pdo.php)

## Prochaine étape

La prochaine étape consiste à implémenter le formulaire de création de création de tâche.
C'est par [ici](./3-Create.md) !
