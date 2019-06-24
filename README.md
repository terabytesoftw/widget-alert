<p align="center">
    <a href="https://github.com/terabytesoft/app-basic" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Widget Alert with Bootstrap 4</h1>
</p>

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Build Status](https://scrutinizer-ci.com/g/terabytesoft/alert/badges/build.png?b=master)](https://scrutinizer-ci.com/g/terabytesoft/alert/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/terabytesoft/alert/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/terabytesoft/alert/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/terabytesoft/alert/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Maintainability](https://api.codeclimate.com/v1/badges/b2806ebe6fe5b117ea20/maintainability)](https://codeclimate.com/github/terabytesoft/alert/maintainability)
[![Total Downloads](https://poser.pugx.org/cjtterabytesoft/alert/downloads)](https://packagist.org/packages/terabytesoft/alert)

### **DIRECTORY STRUCTURE:**

```
config/             contains widget configurations
src/                contains widgets custom application
tests/              contains test widgets
```

### **REQUIREMENTS:**

The minimum requirement by this extension that your Web server supports PHP 7.2.

### **INSTALATION:**

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

##### Linux:

```
php composer.phar require --prefer-dist terabytesoftw/alert "^1.0.x-dev"
```

##### Windows:

```
composer require --prefer-dist terabytesoftw/alert "^1.0.x-dev"
```

### **USAGE:**

Alert widget renders a message from session flash. All flash messages are displayed
 in the sequence they were assigned using setFlash. You can set message as following:.

Flash Messages:

 ```php
Controllers:

$this->module->session->setFlash('danger', 'This is the message');
$this->module->session->setFlash('success', 'This is the message');
$this->module->session->setFlash('info', 'This is the message');

Views:

$this->context->module->session->setFlash('danger', 'This is the message');
$this->context->module->session->setFlash('success', 'This is the message');
$this->context->module->session->setFlash('info', 'This is the message');

```

Multiple messages could be set as follows:

```php
Controllers:

$this->module->session->setFlash('error', ['Error 1', 'Error 2']);

Views:

$this->context->module->session->setFlash('error', ['Error 1', 'Error 2']);
```

Usages Layouts\View:

```php
use terabytesoft\widgets\Alert;

<?= Alert::widget() ?>
```

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENSE:**

[![License](https://poser.pugx.org/terabytesoft/alert/license)](https://packagist.org/packages/terabytesoft/alert)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoftw/app-basic/downloads)](https://packagist.org/packages/terabytesoft/app-basic)
[![Total Downloads](https://github.styleci.io/repos/165419144/shield?branch=master)](https://github.styleci.io/repos/165419144)
