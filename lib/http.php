<?php

function get_http_status_data($http_status = 404) {
    return [
        404 => [ 'Not Found', 'The requested resource does not exists' ],
        405 => [ 'Method not Allowed', 'HTTP Method is not allowed for this resource'],
    ][$http_status];
}

function http_error($http_status = 404) {
    [ $title, $text ] = get_http_status_data($http_status);
    http_response_code($http_status);
    include(get_project_dir() . "/templates/error.template.php");
}

function get_request_method() {
    return $_SERVER['REQUEST_METHOD'];
}
