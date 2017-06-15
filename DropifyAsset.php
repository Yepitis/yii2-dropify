<?php
namespace AprSoft\Dropify;

use yii\web\AssetBundle;

/**
 * @todo Class Dropify Asset
 * @package AprSoft\Dropify
 */
class DropifyAsset extends AssetBundle
{
    public $sourcePath;
    public $js = [
        'js/dropify.min.js',
    ];
    public $css = [
        'css/dropify.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        parent::init();
    }
}
