<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require_once ('vendor/autoload.php');
require_once ('vendor/yiisoft/yii2/Yii.php');

if (file_exists(__DIR__ . '/application/config/main.php')) {
    $applicationConfig = include __DIR__ . '/application/config/main.php';
} else {
    $applicationConfig = array();
}

new exchangecore\filemanager\Bootstrap($applicationConfig);