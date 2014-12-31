<?php
require_once ('vendor/autoload.php');
require_once ('vendor/yiisoft/yii2/Yii.php');

$applicationConfig = include __DIR__ . '/application/config/main.php';

new exchangecore\filemanager\Bootstrap($applicationConfig);
