<?php

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=DB_NAME',
    'username' => 'DB_USER',
    'password' => 'DB_PASSWORD',
    'charset' => 'utf8',
    'tablePrefix' => '',
    'enableSchemaCache' => true,
];

$local = __DIR__ . '/db-local.php';
if (file_exists($local)) {
    $db = array_replace_recursive($db, require($local));
}

return $db;