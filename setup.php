<?php

require_once('config.php');
require_once('lib/db.php');

function get_required_extensions() {
    return [
        'sqlite3',
        'pdo_sqlite',
    ];
}

function check_php_extensions() {

    printf("Vérification des extensions PHP... ");

    $exts = get_loaded_extensions();

    foreach(get_required_extensions() as $ext) {
        if(!in_array($ext, $exts)) {
            printf("[ KO ]\n\n");
            echo "!! ERREUR !! Une extension requise est manquante : '$ext'";
            exit(1);
        }
    }

    printf("[ OK ]\n");
}

function setup_database() {
    printf("Initialisation de la base de données... ");

    try {
        $query = file_get_contents('setup.sql');
        db()->exec($query);
    } catch(PDOException $e) {
        printf("[ KO ]\n\n");
        echo "!! ERREUR !! " . $e->getMessage();
        exit(1);
    }

    printf("[ OK ]\n");
}

(function() {
    check_php_extensions();
    setup_database();
})();
