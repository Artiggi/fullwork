<?php

/* @var $this \yii\web\View */
/* @var $content string */

//use app\assets\AppAsset;
use backend\assets\AppAsset;

AppAsset::register($this);
$viewPath = '@vendor/cornernote/yii2-ace/src/views/layouts';

$regex = '|(\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\.php)$|';
preg_match($regex, __FILE__, $matches);
require(Yii::getAlias('@vendor/cornernote/yii2-ace/src/views' . $matches[1]));

?>

