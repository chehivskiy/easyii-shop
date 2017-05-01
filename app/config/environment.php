<?php

$local = __DIR__ . '/environment-local.php';
if (file_exists($local)) {
    require $local;
}

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');