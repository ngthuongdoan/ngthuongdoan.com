<?php
define('SYSPATH', 'sys/');
require(SYSPATH . 'site.php');

// require(SYSPATH . 'data.php');

$action = get_input('action');
$path = 'site/action/' . $action . '/index.php';

if (file_exists($path)) {
    require($path);
} elseif ($action == false) {
    require('site/action/home/index.php');
} else {
    require('site/action/404.php');
}
