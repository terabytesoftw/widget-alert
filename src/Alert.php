<?php

namespace terabytesoft\widgets;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */

class Alert extends \yii\bootstrap4\Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - $key is the name of the session flash variable
     * - $value is the bootstrap alert type (i.e. danger, success, info, warning)
     **/
    public $alertTypes = [
        'danger' => 'alert-danger',
        'dark' => 'alert-dark',
        'info' => 'alert-info',
        'light' => 'alert-light',
        'primary' => 'alert-primary',
        'secondary' => 'alert-secondary',
        'success' => 'alert-success',
        'warning' => 'alert-warning',
    ];

    /**
     * @var array the options for rendering the close button tag.
     **/
    public $closeButton = [];

    public function run()
    {
        $session = \Yii::$app->getSession();
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $data) {
            if (isset($this->alertTypes[$type])) {
                $data = (array) $data;
                foreach ($data as $message) {
                    /* initialize css class for each alert box */
                    $this->options['class'] = $this->alertTypes[$type];
                    /* assign unique id to each alert box */
                    $this->options['id'] = $this->getId() . '-' . $type;
                    echo \yii\bootstrap4\Alert::widget([
                        'body' => $message,
                        'closeButton' => $this->closeButton,
                        'options' => $this->options,
                    ]);
                }
                $session->removeFlash($type);
            }
        }
    }
}
