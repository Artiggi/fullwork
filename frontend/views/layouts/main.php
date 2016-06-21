<?php

/* @var $this \yii\web\View */
/* @var $content string */

//use app\assets\AppAsset;
use frontend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\helpers\Html;


!empty($viewPath) || $viewPath = '@frontend/views/layouts';
!empty($viewHeader) || $viewHeader = $viewPath . '/_header';
!empty($viewNavbar) || $viewNavbar = $viewPath . '/_navbar';
!empty($viewContent) || $viewContent = $viewPath . '/_content';
!empty($viewSidebar) || $viewSidebar = $viewPath . '/_sidebar';
!empty($viewFooter) || $viewFooter = $viewPath . '/_footer';



AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title . ' :: ' . Yii::$app->name) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body>

<div class="wrapper">

<?= $this->render($viewHeader) ?>
<?= $this->render($viewNavbar) ?>
<div class="inner-content">
    <div class="container">
        <div class="row">
            <?= $this->render($viewContent, ['content' => $content]) ?>
            <?//= $this->render($viewSidebar) ?>
        </div>
    </div>
</div>
<?= $this->render($viewFooter) ?>

</div>
    </body>
    <?php $this->endBody() ?>
    </html>

<?php $this->endPage() ?>


    


