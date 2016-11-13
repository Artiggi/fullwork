<?php

use yii\helpers\Url;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;

?>
<a class="btn btn-success btn-lg btn-block" href="<?= Url::to(['site/signupuser']) ?>" role="button">Фрилансер</a>
<a class="btn btn-warning btn-lg btn-block" href="<?= Url::to(['site/signupemp']) ?>" role="button">Работодатель</a>

