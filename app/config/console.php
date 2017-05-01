<?php

use yii\helpers\BaseInflector;

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');
$transliteration = require(__DIR__ . '/transliteration.php');

$basePath =  dirname(__DIR__);
$webroot = dirname($basePath);

BaseInflector::$transliteration = array_merge(BaseInflector::$transliteration, $transliteration);

Yii::setAlias('@webroot', $webroot);

$config = [
    'id' => 'app-console',
    'basePath' => $basePath,
    'runtimePath' => $webroot . '/runtime',
    'vendorPath' => $webroot . '/vendor',
    'bootstrap' => ['log', 'gii'],
    'controllerNamespace' => 'app\commands',
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
];

return array_merge_recursive($config, require($webroot . '/vendor/chehivskiy/easyii-plus/config/console.php'));