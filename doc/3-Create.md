# Exercice 3 - public/task/create.php

## 3.1. Détection de la méthode HTTP

Deux modes sont prévus pour le script public/task/create.php :

1. Sur une méthode GET, il s'agit d'afficher le formulaire
2. Sur une méthode POST, il s'agit de traiter les données saisies dans le formulaire.

Le fichier public/task/create.php est donc conçu pour gérer ces deux aspects

## 3.2. [GET] Afficher le formulaire

Complétez la fonction do_get() du script public/task/create.php et le fichier
templates/task/create.form.php pour afficher le formulaire de création de tâche,
devant reprendre les champs prédéfinis dans le schéma de base de données (setup.sql).

Prenez note que la date limite est exprimée en timestamp UNIX. À vous donc d'opérer
la conversion entre format de date classique et timestamp UNIX en vous basant sur
les fonctions de conversion et de manipulation du temps disponibles via la classe
[DateTime](https://www.php.net/manual/en/class.datetime.php).

## 3.3. [POST] Traiter le formulaire

Utilisez la fonction create_task développée dans lib/task.php afin d'insérer les
données saisies par l'utilisateur.

En cas d'erreur, utilisez le conteneur de session (comme déjà vu en cours) pour
transmettre un message à afficher avec le formulaire pour correction de la saisie.

Le traitement du formulaire implique donc d'utiliser une redirection après traitement :

- vers la page d'index en cas de succès, pour affichage de la liste des tâches
- vers la page de création (task/create.php) avec message d'erreur, en cas d'échec

La transmission du message d'erreur vers le formulaire suppose la mise à jour
de la fonction do_get() et du fichier templates/task/create.php.

## 3.4. Mise à jour du script public/index.php

Modifiez les scripts public/index.php et templates/index.php pour utiliser la
fonction get_tasks et ainsi lister les tâches réellement présentes en base de
données. Cette étape permet ainsi de vérifier le bon fonctionnement de l'insertion
de données et du listing implémenté à l'étape précédente.

## Prochaine étape

Pour la suite, vous mettrez en oeuvre l'édition, la mise à jour et la suppression
d'une tâche donnée.
