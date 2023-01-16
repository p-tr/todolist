
# Exercice 4 - Édition des tâches

## 4.1. Préparation

L'édition des tâches demande de travailler sur les fichiers suivants :

- public/task/edit.php pour afficher le formulaire d'édition, URL /task/edit.php
- public/task/update.php pour le traitement des mises à jour, URL /task/update.php

En vous inspirant de la structure du fichier public/task/create.php, préparez
le squelette des scripts public/task/edit.php et public/task/update.php, en
tenant compte des méthodes HTTP autorisées :

- pour public/task/edit.php, seule la méthode GET est autorisée
- pour public/task/update.php, les méthodes POST et GET sont autorisées

## 4.2. [GET] public/task/edit.php - formulaire d'édition de tâche

Cette requête GET utilise un paramètre "id" passé dans l'URL (query-string) :
/task/edit.php?id=[task-id]

À noter : les paramètres de requête (query-string) sont accessibles dans le
tableau super-global $\_GET. Par exemple :
```php
$id = $_GET['id']
```

Implémentez la fonction do_get() permettant l'affichage du formulaire d'édition,
en éditant aussi le fichier templates/task/edit.php.

## 4.3. public/task/update.php - traitement des mises à jour de tâches

### 4.3.1. [GET] public/task/update.php

Cette requête GET utilise les paramètre "id" et "status" dans la query-string
(au sein de l'URL).

Ainsi, pour mettre à jour le statut d'une tâche [task-id] à une valeur [status]
donnée, on passe l'URL suivante : /task/update.php?id=[task-id]&status=[status].

Lorsque la méthode utilisée pour appeler le script public/task/update.php est
GET, il faut donc :

1. extraire les paramètre de la query-string avec le tableau associatif super-global $\_GET
2. réaliser les opérations sur la base de données en appelant la fonction update_task [déjà
développée dans l'exercice 2](./2-PDO.md)
3. rediriger l'utilisateur vers la page '/index.php' en cas de succès, et afficher
un message d'erreur en cas d'erreur.

### 4.3.2. [POST] public/task/update.php

Le traitement des requêtes POST sur ce script permet de mettre à jour le
titre de la tâche, sa description et sa date limite. Les paramètres sont, tout
comme pour l'opération 'create', lus à partir du tableau associatif super-global
$\_POST.

Il faudra donc :

1. extraire les champs saisis par le formulaire avec le tableau associatif super-global $\_POST
2. réaliser les opérations sur la base de données en appelant la fonction update_task.
3. rediriger l'utilisateur vers la page '/index.php' en cas de succès, et vers
'/task/edit.php' en cas d'erreur, en utilisant le conteneur de session pour
transmettre le message d'erreur.

## Prochaine étape

Pour la suite, vous mettrez en oeuvre le filtrage et la mise en ordre des tâches.
C'est par [ici](./5-Filter.md) !
