<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VacancySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список вакансий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'vacancy' => $vacancy,
    ]) ?>



<?php Pjax::begin(['id' => 'vacancy','enablePushState' => false]); ?>    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'text:ntext',
            'date',
            'minprice',
            'maxprice',
            'employer_id',
            'scope_id',
            'skill_id',
            'jobtime_id:datetime',
            'city_id',
            'mtop',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>

</div>
