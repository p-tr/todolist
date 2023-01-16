<?php

$db = null;

function db() {
    global $db;

    if(!$db) {
        $config = get_config('database');
        $url = $config['url'];
        try {
            $db = new PDO($url);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $e) {
            $message = sprintf("Impossible d'accéder à la base de données SQLite : %s", $e->getMessage());
            echo $message;
            die();
        }
    }

    return $db;
}
