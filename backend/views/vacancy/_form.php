<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $vacancy app\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
    $this->registerJs(
        '$("document").ready(function(){
            $("#new_vacancy").on("pjax:end", function() {
            $.pjax.reload({container:"#vacancy"});  //Reload GridView
        });
    });'
        );
?>

<div class="vacancy-form">
<?php Pjax::begin(['id' => 'new_vacancy']) ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($vacancy, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($vacancy, 'text')->textarea(['rows' => 6]) ?>
    <?= $form->field($vacancy, 'date')->textInput() ?>
    <?= $form->field($vacancy, 'minprice')->textInput() ?>
    <?= $form->field($vacancy, 'maxprice')->textInput() ?>
    <?= $form->field($vacancy, 'employer_id')->textInput() ?>
    <?= $form->field($vacancy, 'scope_id')->textInput() ?>
    <?= $form->field($vacancy, 'skill_id')->textInput() ?>
    <?= $form->field($vacancy, 'jobtime_id')->textInput() ?>
    <?= $form->field($vacancy, 'city_id')->textInput() ?>
    <?= $form->field($vacancy, 'mtop')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($vacancy->isNewRecord ? 'Create' : 'Update', ['class' => $vacancy->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>

</div>
