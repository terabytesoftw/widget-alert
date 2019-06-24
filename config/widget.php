<?php

require_once './vendor/yiisoft/yii2/Yii.php';

/**
 * Web application params configuration tests
 */

return [
    // widget web applications options
    'widget.alias.path.bower' => '@root/node_modules',
    'widget.alias.path.npm' => '@root/node_modules',
    'widget.alias.path.public' => '@root/tests/public',
    'widget.alias.path.runtime' => '@root/tests/public/@runtime',
    'widget.alias.path.terabytesoft.test' => '@root/tests',
    'widget.base.path' => '@root/src',
    'widget.bootstrap' => ['log'],
    'widget.id' => 'widget-alert',
    'widget.vendor.path' => '@root/vendor',

    // component assetmanager
    'widget.assetmanager.base.path' => '@public/assets',

    // component log
    'widget.log.levels' => ['error', 'warning', 'info'],
    'widget.log.logFile' => '@runtime/logs/app.log',

    // component request
    'widget.request.cookievalidationkey' => 'testme-codeception',
    'widget.request.enablecsrfvalidation' => true,

    // component urlmanager
    'widget.urlmanager.enableprettyurl' => true,
    'widget.urlmanager.showscriptname' => true,
];
