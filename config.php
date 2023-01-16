<?php

$config = null;

function get_project_dir() {
    $project_dir = dirname(__FILE__);
    return $project_dir;
}

function get_config_variables() {
    return [
        '%project_dir%' => get_project_dir(),
    ];
}

function get_config_var($var = null) {
    $vars = get_config_variables();
    return $var ? $vars[$var] : null;
}

function get_config($section = null) {
    global $config;

    $filepath = dirname(__FILE__).'/.config.ini';

    if(!$config) {
        $config = parse_ini_file($filepath, true, INI_SCANNER_TYPED);
    }

    $_vars = get_config_variables();

    $cfg = $section ? $config[$section] : $config;
    $search = array_keys($_vars);
    $replace = array_values($_vars);

    foreach($cfg as $key => $value) {
        $cfg[$key] = str_replace($search, $replace, $cfg[$key]);
    }

    return $cfg;
}
