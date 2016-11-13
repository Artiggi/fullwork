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

<?php Pjax::begin(['id' => 'vacancy','enablePushState' => false]); ?>    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'title',
            'text:ntext',
            'date',
            'minprice',
            'maxprice',
            'employer_id',
            'scopeValue',
            'skill_id',
            'jobtimeValue',
            'cityValue',
            'mtop',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>

</div>
