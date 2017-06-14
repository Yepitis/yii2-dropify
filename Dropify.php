<?php

namespace AprSoft\Dropify;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 */
class Dropify extends InputWidget
{
    protected $_options;

    public $clientOptions = [];

    public function init()
    {
        $this->_options = [
            "class" => "dropify",
        ];
        $this->clientOptions = ArrayHelper::merge($this->_options, $this->clientOptions);
        parent::init();
    }

    public function run()
    {
        $this->registerAsset();
        if ($this->hasModel()) {
            echo Html::activeFileInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::fileInput($this->name, $this->value, $this->options);
        }
    }

    public function registerAsset()
    {
        DropifyAsset::register($this->view);
        $clientOptions = Json::encode($this->clientOptions);
        $script = "$('" . $this->options['id'] . "').dropify(" . $clientOptions . ");";
        $this->view->registerJs($script, View::POS_READY);
    }
}
