
# Exercice 5 - public/index.php - filtrage et tri de l'affichage

## 5.1. Filtrage par statut

### 5.1.1. Modification de la fonction get_tasks() (lib/task.php)

La liste des tâches doit pouvoir être filtrée par statut. Ceci suppose donc
une intervention sur la fonction get_tasks() déjà développée dans lib/task.php.

Pour réaliser le filtrage, vous pouvez ajouter un tableau associatif ```$where```
en paramètre à la fonction get_tasks() :

```php
$all_tasks = get_tasks() // $all_tasks contient toutes les tâches
$available_tasks = get_tasks([ 'status' => 'available' ]) // $available_tasks ne contient que les tâches dont le 'status' est 'available'
```

Ainsi, cette approche permet de construire une requête SQL au sein de la fonction
get_tasks(), avec le module PDO.

Modifiez la fonction get_tasks() afin d'implémenter cette nouvelle fonctionnalité. **Faites attention à la structure de la base de données et aux jointures !!**

### 5.1.2. Modification du script public/index.php

#### 5.1.2.1 - Paramétrage du script via la query-string

La fonction get_tasks() étant modifiée, la fonctionnalité de filtrage peut
désormais être mise en oeuvre.

Pour ce faire, le script public/index.php doit pouvoir prendre en compte les
paramètres de filtrage qui lui sont imposés.

On suppose donc que public/index.php puisse être appelé avec les paramètres en
query-string, de la manière suivante : /index.php?status=[status]

Tout comme à [l'étape précédente](./4-Edit.md), il faut donc vérifier la présence
ou l'absence de ces paramètres de filtrage depuis la query-string et réaliser
l'appel à get_tasks() le cas échéant.

#### 5.1.2.2 - Intégration d'un formulaire de filtrage

Réalisez l'intégration à la structure HTML de la page d'un formulaire permettant
de spécifier les modalités de filtrage (par statut).

#### En résumé

/index.php affiche la liste des tâches non filtrées
/index.php?status=available affiche la liste des tâches disponibles
/index.php?status=done affiche la liste des tâches achevées
/index.php?status=progress affiche la liste des tâches en cours


## 5.2. Tri des tâches

### 5.2.1 Modification de la fonction get_tasks() (lib/tasks.php)

Le tri des tâches nécessite d'améliorer la fonction get_tasks() pour ajouter
les directives SQL ```ORDER``` aux requêtes.

Pour ce faire, on peut modifier la structure du paramètre $where à la fonction
get_tasks, en le renommant en $query.

Voici un exemple de structuration et d'utilisation d'un tel paramètre :

```php
$query = [
    'where' => [ 'status' => 'available' ],
    'order_by' => [
        'columns' => [ 'deadline' ],
        'order' => 'desc'
    ]
];
$tasks = get_tasks($query);
```

Dans ce cas, $query est un tableau associatif multi-dimensionnel avec :
- une clé 'where' reprenant les éléments déjà posés en 5.1.1.
- une clé 'order' permettant de spécifiant l'ordre de tri.

On remarquera que dans cette proposition, 'order_by est structuré de façon à
respecter la logique du langage SQL.

Ainsi, le tableau associatif $query tel que posé en exemple doit être transformé
en la requête suivante :

```sql
SELECT * FROM tasks WHERE status='available' ORDER BY deadline DESC
```

La clef 'columns' est un tableau (une liste) de colonnes, étant donné qu'une
directive ORDER BY peut prendre plusieurs colonnes de référence pour le tri.

### 5.2.2. Modification du script public/index.php

#### 5.2.2.1. Paramétrage du script via la query-string

Selon les principes exposés en 5.1.2.1., ajoutez le paramètre 'order-by'
permettant de former le tableau $query tel qu'exposé en 5.2.1. et modifiez
le script public/index.php en conséquence.

##### Quelle est la structure pour le paramètre 'order-by' ?

N'oubliez pas que vous ne pouvez pas passer de tableau dans la query-string,
uniquement des chaînes de caractères. Il faut donc imaginer la structure
du texte passé en query-string de façon à ce qu'il soit facilement transformable
en tableau associatif. Une idée serait de se baser sur la fonction
[explode](https://www.php.net/manual/en/function.explode.php) permettant de
créer un tableau à partir d'une chaîne de caractères.

## Prochaine (et dernière) étape

Pour la suite, vous imaginerez les évolutions de l'application. C'est par
[ici](./6-Error.md) !
