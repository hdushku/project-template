<?php
$_SERVER['SCRIPT_FILENAME'] = BACKEND_ENTRY_FILE;
$_SERVER['SCRIPT_NAME'] = BACKEND_ENTRY_URL;

/**
 * Application configuration for backend functional tests
 */
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../../config/backend-test.php'),
    require(dirname(__DIR__) . '/config.php'),
    //require(dirname(__DIR__) . '/config-local.php'),
    require(dirname(__DIR__) . '/functional.php'),
    require(__DIR__ . '/config.php'),
    [
    ]
);
