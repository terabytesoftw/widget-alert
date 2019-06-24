<?php

namespace Terabytesoft\Widgets;

use yii\base\Theme;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\View;
use yii\web\JqueryAsset;
use yii\web\YiiAsset;

class AlertTest extends \Codeception\Test\Unit
{
    private $app;
    private $bundle;
    private $view;

    /**
     * @var \Terabytesoft\Widgets\UnitTester
     */
    protected $tester;

    protected function _before(): void
    {
        $this->view = new View();
    }

    /**
     * testAlertSetFlashDanger
     */
    public function testAlertSetFlashDanger(): void
    {
        \Yii::$app->session->setFlash('danger', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w0-danger" class="alert-danger alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashDark
     */
    public function testAlertSetFlashDark(): void
    {
        \Yii::$app->session->setFlash('dark', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w1-dark" class="alert-dark alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashInfo
     */
    public function testAlertSetFlashInfo(): void
    {
        \Yii::$app->session->setFlash('info', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w2-info" class="alert-info alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashLight
     */
    public function testAlertSetFlashLight(): void
    {
        \Yii::$app->session->setFlash('light', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w3-light" class="alert-light alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashPrimary
     */
    public function testAlertSetFlashPrimary(): void
    {
        \Yii::$app->session->setFlash('primary', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w4-primary" class="alert-primary alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashSecondary
     */
    public function testAlertSetFlashSecondary(): void
    {
        \Yii::$app->session->setFlash('secondary', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w5-secondary" class="alert-secondary alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashSucess
     */
    public function testAlertSetFlashSuccess(): void
    {
        \Yii::$app->session->setFlash('success', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w6-success" class="alert-success alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }

    /**
     * testAlertSetFlashWarning
     */
    public function testAlertSetFlashWarning(): void
    {
        \Yii::$app->session->setFlash('warning', 'This is the message');

        $html = $this->view->renderFile('@terabytesoft/widgets/tests/_data/main.php');

        $expectedHtml = <<<HTML
<div id="w7-warning" class="alert-warning alert alert-dismissible" role="alert">

This is the message
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>

</div>
HTML;

        \PHPUnit_Framework_Assert::assertEquals($expectedHtml, $html);
    }
}
