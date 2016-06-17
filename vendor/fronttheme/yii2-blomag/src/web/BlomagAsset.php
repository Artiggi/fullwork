<?php

namespace fronttheme\blomag\web;
use yii\web\AssetBundle;


class BlomagAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fronttheme/yii2-blomag/src/assets';
    public $css = [
        'css/font-awesome/css/font-awesome.css',
        'css/style.css',
    ];
    public $js = [
        'js/vendors/jquery.sticky.js',
        'js/bs-header.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
