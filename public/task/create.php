<?php

require_once('../../config.php');
require_once('../../lib/http.php');
require_once('../../lib/task.php');

function do_get() {
    require_once('../templates/task/create.php');
}

function do_post() {
    // TODO
}

(function() {
    switch(get_request_method()) {
        case 'GET' : do_get(); break;
        case 'POST' : do_post(); break;
        default: http_error(405); break;
    }
})();
