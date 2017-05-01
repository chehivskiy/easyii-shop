<?php

$params = [

];

$local = __DIR__ . '/params-local.php';
if (file_exists($local)) {
    $params = array_replace_recursive($params, require($local));
}

return $params;