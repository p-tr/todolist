# Exercice 1 - public/index.php - Maquettage PHP

## Cahier des charges

### Script index.php

Le script index.php doit renvoyer au navigateur une page HTML affichant la liste
des tâches à réaliser au sein de la Todo-List. Chaque tâche doit apparaître comme
la ligne d'un tableau en reprenant les champs stockés en base de données, selon
l'exemple suivant :

| Titre | Description           | Date Limite  | Statut   | Actions |
|-------|-----------------------|--------------|----------|---------|
| Task  | Some things to do ... | 31 Jan. 2023 | EN COURS |         |

La case d'actions doit prévoir des boutons pour réaliser diverses actions sur
chaque tâche :

- mise à jour du statut (obligatoire)
- édition de la tâche (modification de la description, du titre et/ou de la date limite)
- suppression (optionnel)

Vous devez aussi prévoir un bouton pour la création d'une nouvelle tâche.

### Statut des tâches

Les statuts sont disponibles dans le script setup.sql.

Nous en proposons trois :

* available - la tâche est disponible et non encore démarrée
* progress - la tâche est en cours de réalisation
* done - la tâche est réalisée

## Énoncé

Mettez en oeuvre le script index.php de telle façon qu'il affiche une liste
de tâches reprenant la structure détaillée dans le cahier des charges. N'implémentez
pas les requêtes SQL correpondantes : contentez-vous de réaliser la structure
HTML de la page web. Pour la case "actions", déterminez ce qui est pertinent
d'y ajouter et proposez une mise en forme correspondant à votre idée.

## Prochaine étape

La prochaine étape consiste à utiliser le module PDO pour interagir avec la base
de données. C'est par [ici](./2-PDO.md) !
