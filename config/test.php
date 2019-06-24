<?php

/**
 * Web application configuration shared by all test types
 */

$params = require __DIR__ . '/widget.php';

$params = $params ?? [];

$config = [
    'id' => $params['widget.id'],
    'aliases' => [
        '@bower' => $params['widget.alias.path.bower'],
        '@npm'   => $params['widget.alias.path.npm'],
        '@public' => $params['widget.alias.path.public'],
        '@runtime' => $params['widget.alias.path.runtime'],
        '@terabytesoft/widgets/tests' => $params['widget.alias.path.terabytesoft.test'],
    ],
    'basePath' => $params['widget.base.path'],
    'bootstrap' => $params['widget.bootstrap'],
    'vendorPath' => $params['widget.vendor.path'],
    'components' => [
        'assetManager' => [
            'basePath' => $params['widget.assetmanager.base.path'],
        ],
        'log' => [
            'traceLevel' => 'YII_DEBUG' ? 3 : 0,
            'targets' => [
                [
                    'class' => yii\log\FileTarget::class,
                    'levels' => $params['widget.log.levels'],
                    'logFile' => $params['widget.log.logFile'],
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => $params['widget.request.cookievalidationkey'],
            'enableCsrfValidation' => $params['widget.request.enablecsrfvalidation'],
        ],
        'urlManager' => [
            'enablePrettyUrl' => $params['widget.urlmanager.enableprettyurl'],
            'showScriptName' => $params['widget.urlmanager.showscriptname'],
        ],
    ],
    'params' => $params,
];

return $config;
